<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers\Auth', 'as' => 'auth.'], function () {
    Route::resource('/admin/login', LoginController::class)
        ->only([
            'index',
            'store'
        ])
        ->names([
            'index' => 'admin_login.view',
            'store' => 'admin_login.action'
        ]);
});
