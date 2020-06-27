<?php
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
   return view('layouts.default');
});

Route::get('/login', function () {
    return view('layouts.login');
});

Route::prefix('rw')->name('rw')->group(function (){
    require 'rw.php';
});
