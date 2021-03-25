<?php

namespace Tests\Feature;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;
use App\Models\User;

class OldUploadTest extends TestCase
{
    /** @test */
    public function test_upload_works()
    {
        $stub = __DIR__ . '/stubs/test.png';
        $name = str_random(8) . '.png';
        $path = sys_get_temp_dir() . '/' . $name;

        copy($stub, $path);

        $file = new UploadedFile($path, $name, filesize($path), 'image/png', null, true);
        $response = $this->call('POST', '/upload', [], [], ['photo' => $file], ['Accept' => 'application/json']);

        $this->assertResponseOk();
        $content = json_decode($response->getContent());
        $this->assertObjectHasAttribute('name', $content);

        $uploaded = 'uploads' . DIRECTORY_SEPARATOR . $content->name;
        $this->assertFileExists(public_path($uploaded));

        @unlink($uploaded);
    }

    // This authenticates a user, useful for authenticated routes
    /** @test */
    public function setUp(): void
    {
        parent::setUp();
        $user = User::first();
        $this->actingAs($user);
    }    
    
    /** @test */
    public function testUploadFile()
    {
        $name = 'file.xlsx';
        $path = 'absolute_directory_of_file/' . $name;
        $file = new UploadedFile($path, $name, 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', null, true);
        $route = 'route_for_upload';
        // Params contains any post parameters
        $params = [];
        $response = $this->call('POST', $route, $params, [], ['upload' => $file]);
        $response->assertStatus(200);
    }  

    /**
     * @test
     */
    public function it_should_allow_to_upload_an_image_attachment()
    {
        $this->post(
            action('AttachmentController@store'),
            ['file' => UploadedFile::fake()->image('file.png', 600, 600)]
        );

        /** @var \App\Attachment $attachment */
        $this->assertNotNull($attachment = Attachment::query()->first());
        $this->assertFileExists($attachment->path());
        @unlink($attachment->path());
    }

    public static function tearDownAfterClass(): void
    {
        $file = new Filesystem;
        $file->cleanDirectory("storage/app/public/images");
    }
}
