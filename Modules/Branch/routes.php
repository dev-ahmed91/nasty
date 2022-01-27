<?php

use Illuminate\Support\Facades\Route;

$namespace = 'Modules\\Branch\\Controllers\\';

Route::prefix('/admin')->middleware('auth:web')->attribute('namespace', $namespace.'Admin')->as('admin.')->group( function () {
    Route::resource('branches', 'BranchController')->only('index', 'edit', 'update', 'create', 'store');
});


Route::prefix('/api')->middleware('auth:web')->attribute('namespace', $namespace.'Api')->group( function () {
    Route::get('/branches', 'BranchController@index')->name('api.branches.index');
});
