<?php

use Illuminate\Support\Facades\Route;

$namespace = 'Modules\\Doctor\\Controllers\\';

Route::prefix('/api')->middleware('auth:web')->attribute('namespace', $namespace.'Api')->group( function () {
    Route::get('/doctors', 'DoctorController@index')->name('api.doctors.index');
});


Route::prefix('/admin')->middleware('auth:web')->attribute('namespace', $namespace.'Admin')->as('admin.')->group( function () {
    Route::resource('doctors', 'DoctorController')->only('index', 'edit', 'update', 'create', 'store');
    Route::get('/doctors/{doctor}/disable', 'DoctorController@disable')->name('doctors.disable');
    Route::get('/doctors/{doctor}/enable', 'DoctorController@enable')->name('doctors.enable');
});
