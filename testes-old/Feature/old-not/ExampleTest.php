<?php

//namespace Tests\Unit;
namespace Tests\Feature;

use Illuminate\Database\Eloquent\Factories\Factory;
//use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    // public function test_basic_test()
    // {
    //     $this->assertTrue(true);
    // }

    // public function testDatabase()
    // {
    //     //$user = factory(App\User::class)->make();

    //     // Use model in tests...
    // }

    // /**
    //  * A basic functional test example.
    //  *
    //  * @return void
    //  */
    // public function test_making_an_api_request()
    // {
    //     $response = $this->postJson('/api/user', ['name' => 'teste3']);

    //     //$this->assertTrue($response['created']);


    //     //dd($response);
    //     $response
    //         ->assertStatus(201)
    //         ->assertJson([
    //             'created' => true,
    //         ]);
    // }

    // public function test_avatars_can_be_uploaded()
    // {
    //     Storage::fake('avatars');

    //     $file = UploadedFile::fake()->image('avatar.jpg');

    //     $response = $this->post('/avatar', [
    //         'avatar' => $file,
    //     ]);

    //     Storage::disk('avatars')->assertExists($file->hashName());
    // }
}