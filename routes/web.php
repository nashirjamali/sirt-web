<?php
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/default', function () {
    return view('admin.default.index');
});

Route::group(['prefix' => 'rt'], function () {
    require ('rt.php');
});
