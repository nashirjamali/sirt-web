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

Route::resource('pengumuman', 'Warga\PengumumanController');

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