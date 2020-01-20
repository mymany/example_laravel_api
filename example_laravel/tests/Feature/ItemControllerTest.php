<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ItemControllerTest extends TestCase
{
    use RefreshDatabase;
    public function testGet()
    {
        $this->item = factory(\App\Item::class)->create();
        $response = $this->get(route('items.index'));
        $response->assertStatus(200)
                ->assertJsonFragment([
                    'id' => $this->item->id,
                    'name' => $this->item->name,
                    'point' => $this->item->point,
                    'user_id' => $this->item->user_id,
                ]);
    }

    public function testCreate()
    {
        $this->user = factory(\App\User::class)->create();
        $faker = \Faker\Factory::create();
    
        $data = [
            'user_id' => $this->user->id,
            'name' => $faker->name,
            'point' => 100,
        ];
        $response = $this->post(route('items.store'), $data);

        $response->assertStatus(200)
                ->assertJson([
                    'name' => $data['name'],
                    'point' => $data['point'],
                    'user_id' => $data['user_id'],
                ]);
        // $response->assertJsonCount($count, $key = null);
    }
}
