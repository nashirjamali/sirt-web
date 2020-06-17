<?php
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| RT Routes
|--------------------------------------------------------------------------
*/

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
});

<<<<<<< HEAD
Route::group(['prefix' => 'sementara'], function(){
    Route::get('/',function(){
        return view('admin.penduduk_sementara.index');
    });
    Route::get('/detail', function(){
        return view('admin.penduduk_sementara.detail');
=======
Route::group(['prefix' => 'mutasi-warga'], function () {
    Route::get('/', function () {
        return view('admin.mutasi.index');
    });
    Route::get('/create', function () {
        return view('admin.mutasi.create');
    });
    Route::get('/edit', function () {
        return view('admin.mutasi.edit');
    });
    Route::get('/detail', function () {
        return view('admin.mutasi.detail');
>>>>>>> 88a9c9155adfae9e06bd18b26370d0af8727584c
    });
});