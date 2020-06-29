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

Route::prefix('penduduk')->name('penduduk')->group(function () {
    Route::get('/', 'RT\PendudukController@index');
});

Route::prefix('penduduk')->name('penduduk')->group(function () {
    Route::get('/', function () {
        return view('pages.rt.penduduk.index');
    });

    Route::get('/create', function () {
        return view('pages.rt.penduduk.create');
    });

    Route::get('/detail', function () {
        return view('pages.rt.penduduk.detail');
    });
});

Route::prefix('inventaris')->name('inventaris')->group(function () {
    Route::get('/', function () {
        return view('pages.rt.inventaris.index');
    });

    Route::get('/create', function () {
        return view('pages.rt.inventaris.create');
    });

    Route::get('/detail', function () {
        return view('pages.rt.inventaris.detail');
    });
});

Route::prefix('tamu_kunjungan')->name('tamu_kunjungan')->group(function () {
    Route::get('/', function () {
        return view('pages.rt.tamu_kunjungan.index');
    });

    Route::get('/create', function () {
        return view('pages.rt.tamu_kunjungan.create');
    });

    Route::get('/detail', function () {
        return view('pages.rt.tamu_kunjungan.detail');
    });
});