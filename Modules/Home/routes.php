<?php

use Illuminate\Support\Facades\Route;

$namespace = 'Modules\\Home\\Controllers\\';

Route::prefix('/')->attribute('namespace', $namespace.'Web')->group( function () {
    Route::get('/', 'HomeController@index')->name('web.home.index');
    Route::get('/categories/{category?}', 'HomeController@categories')->name('web.categories.index');
    Route::post('/cart', 'HomeController@cart')->name('web.cart.add');
    Route::post('/cart/remove', 'HomeController@removeCart')->name('web.cart.remove');
    Route::get('/cart', 'HomeController@getCart')->name('web.cart.index');
    Route::get('/cart/checkout', 'HomeController@checkout')->name('web.cart.checkout');
    Route::post('/cart/checkout', 'HomeController@postCheckout')->name('web.cart.checkout.submit');
});
