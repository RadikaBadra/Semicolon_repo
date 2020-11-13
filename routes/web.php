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

Route::get('/', 'UserLayoutsController@UserIndex')->name('home');

// User Route
Route::get('/user-page', 'UserLayoutsController@UserIndex');
Route::get('/user-profile', 'UserLayoutsController@UserProfile');
Route::get('/user-explore', 'UserLayoutsController@UserExplore');

// Admin Route
Route::get('/admin','AdminLayoutsController@index');

Auth::routes();
