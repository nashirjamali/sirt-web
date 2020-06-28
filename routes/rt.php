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