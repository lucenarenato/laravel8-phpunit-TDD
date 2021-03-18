<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

//controller
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\CheckoutBookController;
use App\Http\Controllers\CheckinBookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::post('/books', [BooksController::class],'store');
Route::patch('/books/{book}', [BooksController::class],'update');
Route::delete('/books/{book}', [BooksController::class],'destroy');

Route::get('/authors/create', [AuthorsController::class],'create');
Route::post('/authors', [AuthorsController::class],'store');

Route::post('/checkout/{book}', [CheckoutBookController::class],'store');
Route::post('/checkin/{book}', [CheckinBookController::class], 'store');


/*Auth::routes();

Route::get('/home', [HomeController::class],'index')->name('home');*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

// Laravel Test
Auth::routes();
Route::get('/customers', [CustomerController::class])->middleware('auth');

Route::get('/myresponse', function () {
    return "Here is my response";
});