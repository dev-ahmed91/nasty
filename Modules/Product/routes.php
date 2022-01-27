<?php

use Illuminate\Support\Facades\Route;

$namespace = 'Modules\\Product\\Controllers\\';

Route::prefix('/api')->middleware('auth:web')->attribute('namespace', $namespace.'Api')->group( function () {
    Route::get('/products', 'ProductController@index')->name('api.products.index');
    Route::get('/products/{product}', 'ProductController@show')->name('api.products.show');
    Route::get('/orders', 'OrderController@index')->name('api.orders.index');
});


Route::prefix('/admin')->middleware('auth:web')->attribute('namespace', $namespace.'Admin')->as('admin.')->group( function () {
    Route::resource('products', 'ProductController')->only('index', 'edit', 'update', 'create', 'store', 'show');
    Route::resource('orders', 'OrderController')->only('index', 'create', 'store');
    Route::get('/products/{product}/disable', 'ProductController@disable')->name('products.disable');
    Route::get('/products/{product}/enable', 'ProductController@enable')->name('products.enable');
    Route::get('/products/{product}/stock', 'ProductController@createStock')->name('products.stock.create');
    Route::post('/products/{product}/stock', 'ProductController@storeStock')->name('products.stock.store');
});
