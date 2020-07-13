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
Route::resource('mutasi', 'RT\MutasiWargaController');
Route::resource('penduduk-sementara', 'RT\PendudukSementaraController');
Route::resource('register', 'RT\RegisterController');
Route::resource('pengumuman', 'RT\PengumumanController');
Route::resource('request', 'RT\RequestSuratKependudukan');
