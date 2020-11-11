<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('home');
<<<<<<< HEAD
Route::get('/profile', 'HomeController@profile')->name('profile');
=======
Route::get('/user-page', function () {
    return view('layouts.main');
});

Route::get('/user-profile', function () {
    return view('profile');
});
>>>>>>> 1f0724b5b3ad5478fb0eb6ec68d3278d881d2ca7

Auth::routes();
