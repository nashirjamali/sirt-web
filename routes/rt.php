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


Route::prefix('pengumuman')->name('pengumuman.')->group(function(){
    Route::get('/', function(){
        return view('pages.rt.pengumuman.index');
    });
    Route::get('/create', function(){
        return view('pages.rt.pengumuman.create');
    });
});