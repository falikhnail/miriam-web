<?php


use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers\Backend', 'as' => 'backend.'], function () {
    Route::get('/admin/dashboard', 'DashboardController@index')->name('dashboard');
});
