<?php

use App\Http\Controllers\Apis\BrandController;
use App\Http\Controllers\Apis\CategoryController;
use App\Http\Controllers\Apis\EventsController;
use App\Http\Controllers\Apis\ProductController;
use App\Http\Controllers\Apis\SizegiayController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('cate')->group(function () {
    Route::get('getAll', [CategoryController::class, 'getAll'])->name('cate.getAll'); 
    Route::post('store', [CategoryController::class, 'create'])->name('cate.create'); 
    Route::put('update/{id}', [CategoryController::class, 'update'])->name('cate.update');
    Route::delete('delete/{id}', [CategoryController::class, 'delete'])->name('cate.delete'); 
    Route::get('findID', [CategoryController::class, 'findID'])->name('cate.findID');
    Route::get('search', [CategoryController::class, 'search'])->name('cate.search');
});


Route::prefix('brand')->group(function () {
    Route::get('index', [BrandController::class, 'index'])->name('brand.index'); 
    Route::post('create', [BrandController::class, 'create'])->name('brand.create'); 
    Route::put('update/{id}', [BrandController::class, 'update'])->name('brand.update');
    Route::delete('delete/{id}', [BrandController::class, 'delete'])->name('brand.delete');
    Route::get('search', [BrandController::class, 'search'])->name('brand.search');
    Route::get('takePounds/{id}', [BrandController::class, 'takePounds'])->name('brand.takePounds');
});

Route::prefix('event')->group(function () {
    Route::get('index', [EventsController::class, 'index'])->name('event.index'); 
    Route::post('create', [EventsController::class, 'create'])->name('event.create'); 
    Route::get('search', [EventsController::class, 'search'])->name('event.search'); 
    Route::put('update/{id}', [EventsController::class, 'update'])->name('event.update'); 
    Route::delete('delete/{id}', [EventsController::class, 'delete'])->name('event.delete'); 
});

Route::prefix('products')->group(function () {
    Route::get('index', [ProductController::class, 'index'])->name('products.index'); 
    Route::post('create', [ProductController::class, 'create'])->name('products.create'); 
    Route::get('show/{id}', [ProductController::class, 'show'])->name('products.show'); 
    Route::put('update/{id}', [ProductController::class, 'update'])->name('products.update'); 
    Route::delete('delete/{id}', [ProductController::class, 'delete'])->name('products.delete');
    Route::get('takePounds/{id}', [ProductController::class, 'takePounds'])->name('products.takePounds');
});

Route::prefix('size')->group(function () {
    Route::get('/', [SizegiayController::class, 'index'])->name('size.index');
    Route::get('/show-all', [SizegiayController::class, 'show_all'])->name('size.show_all');
    Route::get('/show-number', [SizegiayController::class, 'show_number'])->name('size.show_number');
    Route::get('/show-letter', [SizegiayController::class, 'show_letter'])->name('size.show_letter');
    Route::get('/show-ml', [SizegiayController::class, 'show_ml'])->name('size.show_ml');
    Route::get('/show-one/{id}', [SizegiayController::class, 'show_one'])->name('size.show_one');
});

Route::prefix('search')->group(function () {
    Route::get('/', [ProductController::class, 'search'])->name('search.getSearch');
});