<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Eloquent\Factories\Factory;

class SetupTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /** @test */                                    
    public function user_can_register_account()     
    {                                               
        // create 1 user
        $user = User::factory()->create();

    }

    public function user_can_create_faker()
    {
        $this->withoutExceptionHandling();
        $attributes = [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ];
        $this->post('/users', $attributes);
        $this->assertDatabaseHas('users', $attributes);
    }
}
