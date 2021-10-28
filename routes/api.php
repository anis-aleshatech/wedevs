<?php

use Illuminate\Support\Facades\Route;



Route::prefix('v1')->group(function () {
    Route::post('login', 'AuthController@login');
    Route::middleware('auth:sanctum')->name('admin.')->prefix('admin')->group(function () {
        
    });
});
