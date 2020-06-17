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

