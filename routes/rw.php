<?php

use App\Http\Middleware\RT;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| RW Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function() {
    return redirect('/rw/bagian');
});

Route::resource('bagian', 'RW\BagianController');

Route::prefix('penduduk')->name('penduduk')->group(function () {
    Route::get('/', function () {
        return view('pages.rw.penduduk.index');
    });

    Route::get('/create', function () {
        return view('pages.rw.penduduk.create');
    });

    Route::get('/detail', function () {
        return view('pages.rw.penduduk.detail');
    });
});

Route::prefix('inventaris')->name('inventaris')->group(function () {
    Route::get('/', function () {
        return view('pages.rw.inventaris.index');
    });

    Route::get('/create', function () {
        return view('pages.rw.inventaris.create');
    });

    Route::get('/detail', function () {
        return view('pages.rw.inventaris.detail');
    });
});

Route::prefix('tamu_kunjungan')->name('tamu_kunjungan')->group(function () {
    Route::get('/', function () {
        return view('pages.rw.tamu_kunjungan.index');
    });

    Route::get('/create', function () {
        return view('pages.rw.tamu_kunjungan.create');
    });

    Route::get('/detail', function () {
        return view('pages.rw.tamu_kunjungan.detail');
    });
});
