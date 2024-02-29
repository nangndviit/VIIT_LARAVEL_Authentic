<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// trang của laravel
Route::get('/', function () {
    return view('welcome');
});


// Route::get('/index', function () {
//     return view('home');
// });

// trang của authentic
Route::get('/index', [HomeController::class, 'index']);
// Route::get('/index', [BrandController::class, 'index']);
// Route::get('/index', [EventsController::class, 'index']);
