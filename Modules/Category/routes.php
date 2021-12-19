<?php

use Illuminate\Support\Facades\Route;

$namespace = 'Modules\\Category\\Controllers\\';

Route::prefix('/api')->middleware('auth:web')->attribute('namespace', $namespace.'Api')->group( function () {
    Route::get('/categories', 'CategoryController@index')->name('api.categories.index');
});


Route::prefix('/admin')->middleware('auth:web')->attribute('namespace', $namespace.'Admin')->as('admin.')->group( function () {
    Route::resource('categories', 'CategoryController')->only('index', 'edit', 'update', 'create', 'store');
});
