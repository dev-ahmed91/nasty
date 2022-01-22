<?php

use Illuminate\Support\Facades\Route;

$namespace = 'Modules\\Page\\Controllers\\';

Route::prefix('/')->attribute('namespace', $namespace.'Web')->group( function () {
});

