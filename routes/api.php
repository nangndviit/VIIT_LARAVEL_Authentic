<?php

use App\Http\Controllers\Apis\BrandController;
use App\Http\Controllers\Apis\CategoryController;
use App\Http\Controllers\Apis\EventsController;
use App\Http\Controllers\Apis\ProductController;
use App\Http\Controllers\Apis\SizegiayController;
use App\Http\Controllers\HomeController;
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
    Route::put('update/{id}', [CategoryController::class, 'update'])->name('cate.update'); //sửa cate
    Route::delete('delete/{id}', [CategoryController::class, 'delete'])->name('cate.delete');   //xóa cate
    Route::get('findID', [CategoryController::class, 'findID'])->name('cate.findID'); //lấy sản phẩm theo id dã có trong dữ liệu
    Route::get('search', [CategoryController::class, 'search'])->name('cate.search');
});


Route::prefix('brand')->group(function () {
    Route::get('index', [BrandController::class, 'index'])->name('brand.index'); //lấy tất cả các brand có trong dữ liệu
    Route::post('create', [BrandController::class, 'create'])->name('brand.create'); //thêm brand mới
    Route::put('update/{id}', [BrandController::class, 'update'])->name('brand.update'); //sửa brand
    Route::delete('delete/{id}', [BrandController::class, 'delete'])->name('brand.delete');   //xóa brand
    Route::get('search', [BrandController::class, 'search'])->name('brand.search');
    Route::get('takePounds/{id}', [BrandController::class, 'takePounds'])->name('brand.takePounds');
});

Route::prefix('event')->group(function () {
    Route::get('index', [EventsController::class, 'index'])->name('event.index'); //lấy tất cả các event có trong dữ liệu
    Route::post('create', [EventsController::class, 'create'])->name('event.create'); //thêm event mới
    Route::get('search', [EventsController::class, 'search'])->name('event.search'); //thêm event mới
    Route::put('update/{id}', [EventsController::class, 'update'])->name('event.update'); //sửa event
    Route::delete('delete/{id}', [EventsController::class, 'delete'])->name('event.delete');   //xóa event
});

Route::prefix('products')->group(function () {
    Route::get('index', [ProductController::class, 'index'])->name('products.index'); //lấy tất cả các products có trong dữ liệu
    Route::post('create', [ProductController::class, 'create'])->name('products.create'); //thêm products mới
    Route::get('show/{id}', [ProductController::class, 'show'])->name('products.show'); //show products
    Route::put('update/{id}', [ProductController::class, 'update'])->name('products.update'); //sửa products
    Route::delete('delete/{id}', [ProductController::class, 'delete'])->name('products.delete');   //xóa products
    Route::get('takePounds/{id}', [ProductController::class, 'takePounds'])->name('products.takePounds');
});

Route::prefix('size')->group(function () {
    Route::get('/', [SizegiayController::class, 'index'])->name('size.index');
});

Route::prefix('search')->group(function () {
    Route::get('/', [ProductController::class, 'search'])->name('search.getSearch');
});