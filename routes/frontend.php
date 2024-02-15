<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers\Frontend', 'as' => 'frontend.'], function () {
    Route::get('/', 'FrontendController@index')->name('index');
    Route::get('/visi-misi', 'FrontendController@visiMisi')->name('visi_misi');
    Route::get('/pelayanan', 'FrontendController@pelayanan')->name('pelayanan');
    Route::get('/jadwal-dokter', 'FrontendController@jadwalDokter')->name('jadwal_dokter');
    Route::get('/ketersediaantempattidur', 'FrontendController@ketersediaantempattidur')->name('ketersediaantempattidur');
    Route::get('/igd', 'FrontendController@igd')->name('igd');
    Route::get('/usg', 'FrontendController@usg')->name('usg');
    Route::get('/rotgen', 'FrontendController@rotgen')->name('rotgen');
    Route::get('/lab', 'FrontendController@lab')->name('lab');
    Route::get('/gizi', 'FrontendController@gizi')->name('gizi');
    Route::get('/pijat_bayi', 'FrontendController@pijat_bayi')->name('pijat_bayi');
    Route::get('/cukur-bayi', 'FrontendController@cukur-bayi')->name('cukur-bayi');



    Route::get('/register-pasien', 'PasienController@index')->name('register_pasien');

    Route::post('/register-vaksin', 'PasienController@storeFormVaksin')->name('form_vaksin');
    Route::post('/register-bkia', 'PasienController@storeFormBkia')->name('form_bkia');
    Route::post('/register-pasien', 'PasienController@storeFormPasien')->name('form_pasien');

    Route::get('/register-success', 'PasienController@success')->name('form_success');
});
