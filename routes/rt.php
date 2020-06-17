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

Route::group(['prefix' => 'sementara'], function(){
    Route::get('/',function(){
        return view('admin.penduduk_sementara.index');
    });
    Route::get('/detail', function(){
        return view('admin.penduduk_sementara.detail');
    });
});