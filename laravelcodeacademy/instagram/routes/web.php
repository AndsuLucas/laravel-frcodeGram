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
    return view('welcome');
});

Auth::routes();

Route::get('/p/create', 'PostController@create')->name('post.create');
Route::post('/p', 'PostController@store');
Route::get("/p/show/{post}", 'PostController@showPost')->where('post', '[0-9]+');
Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show')->where('user', '[0-9]+');
