<?php

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

Route::get('/', function () {
    return redirect()->route('front_end_home');
});

Auth::routes();

Route::get('/panel', 'HomeController@home')->name('home');
Route::get('/logout', 'HomeController@logout')->name('logout_cms');
Route::get('/change-password', 'HomeController@changePassword')->name('change_password_cms');
Route::post('/change-password/store', 'HomeController@changePasswordStore')->name('change_password_store_cms');

Route::group(['prefix' => 'front-end'], function () {
    Route::get('/search/{search_text}', 'HomeController@search')->name('search');
});

