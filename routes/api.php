<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CateController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('brand', BrandController::class);
Route::resource('catesss', CateController::class);
Route::resource('events', EventsController::class);
Route::resource('products', ProductController::class);

Route::get('/cate-show/{id}', [CateController::class, 'show']);

Route::get("/cate/show1", [CateController::class, "show1"]);
