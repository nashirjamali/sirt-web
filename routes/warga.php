<?php
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Warga Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function() {
    return redirect('/warga/pengumuman');
});

Route::prefix('pengumuman')->name('pengumuman')->group(function () {
    // Route::get('/', 'Warga\PengumumanController@index');
    Route::get('/', function ()
    {
        return abort(404);
    });
});

Route::prefix('request')->name('request.')->group(function () {
    Route::get('/', function () {
        return view('pages.warga.request_surat_kependudukan.index');
    });

    Route::get('/create', function () {
        return view('pages.warga.request_surat_kependudukan.create');
    });

    Route::get('/detail', function () {
        return view('pages.warga.request_surat_kependudukan.detail');
    });
});