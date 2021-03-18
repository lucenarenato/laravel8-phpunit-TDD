<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;

use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    /** @test */                                    
    public function test_login()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('api/login', [
        //$response = $this->json('POST','api/login', [
            "email" => "cpdrenato@gmail.com",
            "password" => "teste123"
        ]);
        
        $response->assertStatus(200);
        //$this->assertTrue(count(User::all()) > 1);
    }
}