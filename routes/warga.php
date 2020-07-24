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
Route::resource('request', 'Warga\RequestSuratKependudukan');
Route::resource('pemilu', 'Warga\PemiluController');