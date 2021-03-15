<?php

namespace Tests\Unit;

use App\Models\User;
use PHPUnit\Framework\TestCase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Testing\RefreshDatabase;


class ExampleUnitTest extends TestCase
{
    //use RegistersUsers;
    

    /*public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    /** @test */
    // public function test_user_creation()
    // {
    //     /*$user = new User([
    //         'name' => "Test User",
    //         'email' => "test@mail.com",
    //         'password' => Hash::make('testpassword') //bcrypt("testpassword")
    //     ]);   

    //     $this->assertEquals('Test User', $user->name);*/
    // }
}
