<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function login(Request $request) {
        $http = new \GuzzleHttp\Client;
        dd('teste');
        try {
            $response = $http->post(config('services.passport.login_endpoint'), [
                'form_params' => [
                    'grant_type' => 'password',
                    'client_id' =>  '2', //config('services.passport.client_id')
                    'client_secret' => DB::table('oauth_clients')->where('id', 2)->pluck('secret')[0], //config('services.passport.client_secret'),
                    'username' => $request->username,
                    'password' => $request->password
                ]
            ]);

            return $response->getBody();

        } catch (\GuzzleHttp\Exception\BadResponseException $e) {



            if ($e->getCode() == 400 || $e->getCode() == 401) {
                return response()
                ->json([
                    'status' => $e->getCode(),
                    'message' => 'Your email and/or password are incorrect',
                    'expanded' => $e->getMessage()
                ]);
            }

            return response()
                ->json([
                    'status' => $e->getCode(),
                    'message' => $e->getMessage()
                ]);
        }

    }

    public function loginPost(Request $request) {
        $request->request->add([
            'username' => $request->username,
            'password' => $request->password,
            'grant_type' => 'password',
            'client_id' => $this->client->id,
            'client_secret' => $this->client->secret,
            'scope' => '*'
        ]);

        $response = Route::dispatch(Request::create(
            'oauth/token',
            'POST'
        ));


    }

    public function setUp() :void {
        parent::setUp();
        \Artisan::call('migrate',['-vvv' => true]);
        \Artisan::call('passport:install',['-vvv' => true]);
        \Artisan::call('db:seed',['-vvv' => true]);
    }

}
