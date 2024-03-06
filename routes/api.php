<?php

use App\Http\Controllers\Apis\BrandController;
use App\Http\Controllers\Apis\CategoryController;
use App\Http\Controllers\Apis\EventsController;
use App\Http\Controllers\Apis\ProductController;
use App\Http\Controllers\CateController;
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

// Route::prefix('cate')->group(function () {
//     Route::resource('cates', CateController::class)->except('show');
//     Route::get('show', [CateController::class, 'show'])->name('cate.show');
//     Route::get('show1', [CateController::class, 'show1'])->name('cate.show1');
//     Route::get('{id?}', [CateController::class, 'findID'])->name('cate.findID');
// });

Route::prefix('cate')->group(function () {
    Route::get('getAll', [CategoryController::class, 'getAll'])->name('cate.getAll');
    Route::post('store', [CategoryController::class, 'create'])->name('cate.create');
    Route::put('updatebtid/{id}', [CategoryController::class, 'updatebtid'])->name('cate.updatebtid');
    Route::delete('deletebtid/{id}', [CategoryController::class, 'deletebtid'])->name('cate.deletebtid');
    Route::get('findID', [CategoryController::class, 'findID'])->name('cate.findID');
});

Route::apiResource('brand', BrandController::class);
Route::resource('events', EventsController::class);
Route::resource('products', ProductController::class);
