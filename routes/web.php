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
    Route::get('/pending/users', function () { return view('admin.dashboard.index'); })->name('admin.pending.users');
    Route::get('/pending/tickets', function () { return view('admin.dashboard.index'); })->name('admin.pending.tickets');
    Route::get('/transactions', function () { return view('admin.dashboard.index'); })->name('admin.transactions.index');
    Route::get('/tickets', function () { return view('admin.tickets.index'); })->name('admin.tickets.index');
    Route::get('/notifications', function () { return view('admin.dashboard.index'); })->name('admin.notifications.index');
    Route::get('/reviews', function () { return view('admin.dashboard.index'); })->name('admin.reviews.index');
    Route::get('/pages', function () { return view('admin.dashboard.index'); })->name('admin.pages.index');
});

Route::prefix('/admin')->middleware('auth:web')->attribute('namespace', 'Admin')->as('admin.')->group( function () {
    Route::get('/', function () { return view('admin.dashboard.index'); })->name('dashboard.index');
    Route::resource('users', 'UserController')->only('index', 'edit', 'update');
});

Route::prefix('/api')->middleware('auth:web')->attribute('namespace', 'Api')->group( function () {
    Route::get('/users', 'UserController@index')->name('api.users.index');
});

Auth::routes();

Route::get('logout', 'Auth\LoginController@logout')->name('logout')->middleware('auth:web');



Route::get('login', 'Auth\LoginController@showLoginform')->name('login');



