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



Auth::routes();

Route::get('/', 'HomeController@toppage')->name('toppage');

Route::resource('posts', 'PostController')->except(['update']);
Route::post('update/{id}', 'PostController@update')->name('posts.update');
