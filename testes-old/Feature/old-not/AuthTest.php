<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Database\Eloquent\Factories\Factory;

use Tests\TestCase;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    // public function a_user_receives_an_access_token()
    // {

    //     \Artisan::call('passport:install');

    //     //$user = factory
    //     $user = User::factory('App\Models\User')->create();

    //     $response = $this->json('POST', '/api/login', [
    //         'username' => $user->email,
    //         'password' => 'password',
    //     ]);

    //     // $response
    //     // ->assertStatus(201)
    //     // ->assertJson([
    //     //     'created' => true,
    //     // ]);

    //     $response
    //         ->assertJson([
    //             'access_token' => true,
    //         ]);

    // }

/*    public function testOauthLogin() {
        $oauth_client_id = 2;
        $oauth_client = OAuthClient::findOrFail($oauth_client_id);

        $user = factory('App\User')->create();

        $body = [
            'username' => $user->email,
            'password' => 'password',
            'client_id' => $oauth_client_id,
            'client_secret' => $oauth_client->secret,
            'grant_type' => 'password',
            'scope' => '*'
        ];
        $this->json('POST','/oauth/token',$body,['Accept' => 'application/json'])
            ->assertStatus(200)
            ->assertJsonStructure(['token_type','expires_in','access_token','refresh_token']);
    }*/
    
}
