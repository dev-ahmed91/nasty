<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => ['auth:web']], function () {

});

Route::prefix('/admin')->middleware('auth:web')->attribute('namespace', 'Admin')->as('admin.')->group( function () {
    Route::get('/', function () { return view('admin.dashboard.index'); })->name('dashboard.index');
    Route::get('/pending/users', function () { return view('admin.dashboard.index'); })->name('pending.users');
    Route::get('/pending/tickets', function () { return view('admin.dashboard.index'); })->name('pending.tickets');
    Route::get('/transactions', function () { return view('admin.dashboard.index'); })->name('transactions.index');
    Route::get('/orders', function () { return view('admin.dashboard.index'); })->name('orders.index');
    Route::get('/notifications', function () { return view('admin.dashboard.index'); })->name('notifications.index');
    Route::get('/reviews', function () { return view('admin.dashboard.index'); })->name('reviews.index');
    Route::get('/pages', function () { return view('admin.dashboard.index'); })->name('pages.index');
    Route::resource('users', 'UserController')->only('index', 'edit', 'update');
});

Route::prefix('/api')->middleware('auth:web')->attribute('namespace', 'Api')->group( function () {
    Route::get('/users', 'UserController@index')->name('api.users.index');
});

Auth::routes();

Route::get('logout', 'Auth\LoginController@logout')->name('logout')->middleware('auth:web');



Route::get('login', 'Auth\LoginController@showLoginform')->name('login');



