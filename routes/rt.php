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

Route::group(['prefix' => 'data-warga'], function () {
    Route::get('/', function () {
        return view('admin.warga.index');
    });
    Route::get('/create', function () {
        return view('admin.warga.create');
    });
    Route::get('/edit', function () {
        return view('admin.warga.edit');
    });
    Route::get('/detail', function () {
        return view('admin.warga.detail');
    });
});
