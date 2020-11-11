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
Route::get('/user-page', function () {
    return view('layouts.main');
});

Route::get('/user-profile', function () {
    return view('profile');
});
Route::get('/admin',function(){
    return view('admin');
});

Auth::routes();
