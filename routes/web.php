<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Auth::routes();

Route::get('/', function() {
    return redirect('/login');
});

Route::prefix('rw')->name('rw.')->middleware(['auth', 'rw'])->group(function (){
    require 'rw.php';
});
Route::prefix('rt')->name('rt.')->middleware(['auth', 'rt'])->group(function (){
    require 'rt.php';
});
Route::prefix('warga')->name('warga.')->middleware(['auth', 'warga'])->group(function (){
    require 'warga.php';
});
