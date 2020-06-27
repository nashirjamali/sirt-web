<?php
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| RW Routes
|--------------------------------------------------------------------------
*/

Route::prefix('bagian')->name('bagian')->group(function () {
    Route::get('/', function () {
        return view('pages.rw.bagian.index');
    });

    Route::get('/create', function () {
        return view('pages.rw.bagian.create');
    });
});
