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
    Route::get('/', 'Warga\PengumumanController@index');
});