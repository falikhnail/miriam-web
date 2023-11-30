<?php

use App\Http\Controllers\Backend\DokterController;
use App\Http\Controllers\Backend\RegistBkiaController;
use App\Http\Controllers\Backend\RegistPasienController;
use App\Http\Controllers\Backend\RegistVaksinController;
use App\Http\Controllers\Backend\ScheduleController;
use Illuminate\Support\Facades\Route;

Route::group([
    'namespace' => 'App\Http\Controllers\Backend',
    'prefix' => 'admin',
    'as' => 'backend.',
    'middleware' => ['auth', 'admin_sidebar']
], function () {
    Route::get('/', fn () => redirect('/admin/dashboard'));

    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    Route::group([
        'prefix' => 'pasien',
        'as' => 'pasien.'
    ], function () {
        Route::group([
            'prefix' => 'vaksin',
            'as' => 'vaksin.'
        ], function () {
            Route::get('list', [RegistVaksinController::class, 'indexDT'])->name('list');
        });

        Route::group([
            'prefix' => 'p',
            'as' => 'p.'
        ], function () {
            Route::get('list', [RegistPasienController::class, 'indexDT'])->name('list');
        });

        Route::group([
            'prefix' => 'bkia',
            'as' => 'bkia.'
        ], function () {
            Route::get('list', [RegistBkiaController::class, 'indexDT'])->name('list');
        });

        Route::resource('vaksin', RegistVaksinController::class);

        Route::resource('p', RegistPasienController::class); // pasien

        Route::resource('bkia', RegistBkiaController::class);
    });

    Route::resource('schedule', ScheduleController::class);

    Route::group([
        'prefix' => 'dokter',
        'as' => 'dokter.'
    ], function () {
        Route::get('list', [DokterController::class, 'indexDT'])->name('list');
    });

    Route::resource('dokter', DokterController::class)->only([
        'index',
        'store',
        'update',
        'destroy'
    ]);
});
