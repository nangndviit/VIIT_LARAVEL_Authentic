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

Route::prefix('cate')->group(function () {
    Route::get('getAll', [CategoryController::class, 'getAll'])->name('cate.getAll'); //lấy tất cả các cate có trong dữ liệu
    Route::post('store', [CategoryController::class, 'create'])->name('cate.create'); //thêm cate mới
    Route::put('updateBtid/{id}', [CategoryController::class, 'updateBtid'])->name('cate.updateBtid'); //sửa cate
    Route::delete('deleteBtid/{id}', [CategoryController::class, 'deleteBtid'])->name('cate.deleteBtid');   //xóa cate
    Route::get('findID', [CategoryController::class, 'findID'])->name('cate.findID'); //lấy sản phẩm theo id dã có trong dữ liệu
});


Route::prefix('brand')->group(function () {
    Route::get('index', [BrandController::class, 'index'])->name('brand.index'); //lấy tất cả các brand có trong dữ liệu
    Route::post('create', [BrandController::class, 'create'])->name('brand.create'); //thêm brand mới
    Route::put('updateBtid/{id}', [BrandController::class, 'updateBtid'])->name('brand.updateBtid'); //sửa brand
    Route::delete('deleteBtid/{id}', [BrandController::class, 'deleteBtid'])->name('brand.deleteBtid');   //xóa brand
});

Route::prefix('event')->group(function () {
    Route::get('index', [EventsController::class, 'index'])->name('event.index'); //lấy tất cả các event có trong dữ liệu
    Route::post('create', [EventsController::class, 'create'])->name('event.create'); //thêm event mới
    Route::put('updateBtid/{id}', [EventsController::class, 'updateBtid'])->name('event.updateBtid'); //sửa event
    Route::delete('deleteBtid/{id}', [EventsController::class, 'deleteBtid'])->name('event.deleteBtid');   //xóa event
});

Route::prefix('products')->group(function () {
    Route::get('index', [ProductController::class, 'index'])->name('products.index'); //lấy tất cả các products có trong dữ liệu
    Route::post('create', [ProductController::class, 'create'])->name('products.create'); //thêm products mới
    Route::put('updateBtid/{id}', [ProductController::class, 'updateBtid'])->name('products.updateBtid'); //sửa products
    Route::delete('deleteBtid/{id}', [ProductController::class, 'deleteBtid'])->name('products.deleteBtid');   //xóa products
});
