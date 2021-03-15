<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Auth\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [AuthController::class, 'login']);


// rotas antigas
//Route::post('/register', 'API\Auth\AuthController@register');
//Route::post('/login', 'API\Auth\AuthController@login');
//Route::post('/login', 'AuthController@login');

//Route::apiResource('/ceo', 'API\CEOController')->middleware('auth:api');

//Route::post('createuser', 'UserController@createUser');

// Route::post('login', 'AuthController@login');

// Route::resource('users', 'UserController', ['except'=>['create','update','edit']]);
// Route::resource('login', 'UserLoginController',['only'=>['store']]);