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

Route::prefix('penduduk')->name('penduduk.')->group(function () {
    Route::get('/', 'RW\PendudukController@index')->name('index');
    Route::get('/warga', 'RW\PendudukController@getWarga')->name('data.warga');

    Route::get('/create', function () {
        return view('pages.rw.penduduk.create');
    });

    Route::get('/detail', function () {
        return view('pages.rw.penduduk.detail');
    });
});

Route::resource('inventaris', 'RW\InventarisController');
Route::resource('register', 'RW\RegisterController');

Route::resource('tamu-kunjungan', 'RW\TamuController');

Route::prefix('tamu-kunjungan')->name('tamu-kunjungan')->group(function () {
});
