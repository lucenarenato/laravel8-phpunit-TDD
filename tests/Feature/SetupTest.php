<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Eloquent\Factories\Factory;

class SetupTest extends TestCase
{
    /** @test */                                    
    public function user_can_register_account()     
    {                                               
        // create 1 user
        $user = User::factory()->create();

    }
}
