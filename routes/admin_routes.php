<?php

use Illuminate\Support\Facades\Route;


Route::prefix('dashboard')->namespace('App\Http\Controllers\dashboard')->group(function () {
    Route::get('/', 'DashboardController@index');
});

