<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers\Frontend', 'as' => 'frontend.'], function () {
    Route::get('/', 'FrontendController@index')->name('index');
    Route::get('/visi-misi', 'FrontendController@visiMisi')->name('visi_misi');
    Route::get('/sejarah', 'FrontendController@sejarah')->name('sejarah');
    Route::get('/pelayanan', 'FrontendController@pelayanan')->name('pelayanan');
    Route::get('/struktur_organisasi', 'FrontendController@struktur_organisasi')->name('struktur_organisasi');
    Route::get('/ketersediaantempattidur', 'FrontendController@ketersediaantempattidur')->name('ketersediaantempattidur');
    Route::get('/igd', 'FrontendController@igd')->name('igd');
    Route::get('/usg', 'FrontendController@usg')->name('usg');
    Route::get('/rotgen', 'FrontendController@rotgen')->name('rotgen');
    Route::get('/lab', 'FrontendController@lab')->name('lab');
    Route::get('/gizi', 'FrontendController@gizi')->name('gizi');
    Route::get('/pijat_bayi', 'FrontendController@pijat_bayi')->name('pijat_bayi');
    Route::get('/cukur_bayi', 'FrontendController@cukur_bayi')->name('cukur_bayi');
    Route::get('/tindik_bayi', 'FrontendController@tindik_bayi')->name('tindik_bayi');
    Route::get('/imun_dasar', 'FrontendController@imun_dasar')->name('imun_dasar');
    Route::get('/imun_tambahan', 'FrontendController@imun_tambahan')->name('imun_tambahan');
    Route::get('/imun_tambahan1', 'FrontendController@imun_tambahan1')->name('imun_tambahan1');
    Route::get('/vaksin_dewasa', 'FrontendController@vaksin_dewasa')->name('vaksin_dewasa');
    Route::get('/hak_kewajiban', 'FrontendController@hak_kewajiban')->name('hak_kewajiban');
// route from karir
// route from jadwal dokter
    Route::get('/dr_yudi', 'FrontendController@dr_yudi')->name('dr_yudi');
    Route::get('/dr_ferry', 'FrontendController@dr_ferry')->name('dr_ferry');
    Route::get('/dr_tezza', 'FrontendController@dr_tezza')->name('dr_tezza');
    Route::get('/dr_umi', 'FrontendController@dr_umi')->name('dr_umi');
    Route::get('/dr_michel', 'FrontendController@dr_michel')->name('dr_michel');
    Route::get('/drg_vera', 'FrontendController@drg_vera')->name('drg_vera');
    Route::get('/drg_cindy', 'FrontendController@drg_cindy')->name('drg_cindy');
// route HUT
    
    Route::get('/mitra', 'FrontendController@mitra')->name('mitra');
    Route::get('/indikatormutu', 'FrontendController@indikatormutu')->name('indikatormutu');

// route Alur Pelayanan
    Route::get('/alur_ugd', 'FrontendController@alur_ugd')->name('alur_ugd');
    Route::get('/alur_ranap', 'FrontendController@alur_ranap')->name('alur_ranap');
    Route::get('/alur_lab', 'FrontendController@alur_lab')->name('alur_lab');
    Route::get('/alur_perinatologi', 'FrontendController@alur_perinatologi')->name('alur_perinatologi');
    Route::get('/alur_ponek', 'FrontendController@alur_ponek')->name('alur_ponek');
    Route::get('/alur_kambay', 'FrontendController@alur_kambay')->name('alur_kambay');
    Route::get('/alur_vk', 'FrontendController@alur_vk')->name('alur_vk');
    Route::get('/alur_rajal', 'FrontendController@alur_rajal')->name('alur_rajal');

    Route::get('/register-pasien', 'PasienController@index')->name('register_pasien');

    Route::post('/register-vaksin', 'PasienController@storeFormVaksin')->name('form_vaksin');
    Route::post('/register-bkia', 'PasienController@storeFormBkia')->name('form_bkia');
    Route::post('/register-pasien', 'PasienController@storeFormPasien')->name('form_pasien');

    Route::get('/register-success', 'PasienController@success')->name('form_success');
});
