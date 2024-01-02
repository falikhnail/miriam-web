<?php

use App\Http\Controllers\Api\DokterController;
use App\Http\Controllers\Api\ScheduleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/', function (Request $request) {
    return response()->json([
        'message' => 'RSIA API'
    ]);
});

Route::group(
    [
        'namespace' => 'App\Http\Controllers\Api',
        // 'middleware' => ['auth:sanctum']
    ],
    function () {

        Route::group([
            'prefix' => 'dokter',
            'as' => 'dokter.'
        ], function () {
            Route::get('/{tanggal}', [DokterController::class, 'getAvailDokterByTanggal'])
                ->name('by_tanggal');
        });

        Route::group([
            'prefix' => 'schedule',
            'as' => 'schedule.'
        ], function () {
            Route::get('/{id}', [ScheduleController::class, 'getById'])
                ->name('by_id');
        });
    }
);
