<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testGet()
    {
        $this->user = factory(\App\User::class)->create();
        $response = $this->get(route('users.index'));
        $response->assertStatus(200)
                ->assertJsonFragment([
                    'id' => $this->user->id,
                    'email' => $this->user->email,
                    'name' => $this->user->name,
                    'point' => $this->user->point
                ]);
    }

    public function testCreate()
    {
        $data = [
            'email' => 'user'.time().'@example.com',
            'name' => 'Tanaka Taro'.time(),
            'password' => '123456',
        ];

        $response = $this->post(route('users.store'), $data);
        $response->assertStatus(200)
                ->assertJson([
                    'email' => $data['email'],
                    'name' => $data['name'],
                    'point' => 10000
                    ]);
    }
}
