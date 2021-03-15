<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;

use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testAPI()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
    /** @test */                                    
    public function test_login()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('api/login', [
        //$response = $this->json('POST','api/login', [
            "email" => "r.lucena@xsensors.ai",
            "password" => "teste123"
        ]);
        
        $response->assertStatus(200);
        $this->assertTrue(count(User::all()) > 1);
    }
}