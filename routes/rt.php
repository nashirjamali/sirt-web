<?php
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| RT Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function() {
    return redirect('/rt/penduduk');
});

Route::resource('penduduk', 'RT\PendudukController');
Route::resource('inventaris', 'RT\InventarisController');
Route::resource('tamu-kunjungan', 'RT\TamuController');

Route::prefix('request')->name('request.')->group(function () {
    Route::get('/', function () {
        return view('pages.rt.request_surat_kependudukan.index');
    });

    Route::get('/create', function () {
        return view('pages.rt.request_surat_kependudukan.create');
    });

    Route::get('/detail', function () {
        return view('pages.rt.request_surat_kependudukan.detail');
    });
});
Route::resource('mutasi', 'RT\MutasiWargaController');
Route::resource('penduduk-sementara', 'RT\PendudukSementaraController');
Route::resource('register', 'RT\RegisterController');
Route::resource('pengumuman', 'RT\PengumumanController');
