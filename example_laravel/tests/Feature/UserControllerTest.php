<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    // use DatabaseTransactions;
    // public function testIndex()
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }
    // public function setUp(): void
    // {
    //     parent::setUp();
    // }

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
