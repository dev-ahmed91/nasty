<?php

use Illuminate\Support\Facades\Route;

$namespace = 'Modules\\Lead\\Controllers\\';

Route::prefix('/api')->middleware('auth:web')->attribute('namespace', $namespace.'Api')->group( function () {
    Route::get('/leads', 'LeadController@index')->name('api.leads.index');
});


Route::prefix('/admin')->middleware('auth:web')->attribute('namespace', $namespace.'Admin')->as('admin.')->group( function () {
    Route::resource('leads', 'LeadController')->only('index', 'edit', 'update');
});

Route::prefix('/api')->attribute('namespace', $namespace.'Api')->group( function () {
    Route::post('/leads', 'LeadController@store')->name('api.leads.store');
});
