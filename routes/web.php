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

Route::resource('users', 'usersController');
Route::resource('venue_post', 'venue_postController');
Route::resource('genres', 'genresController');
Route::resource('fav', 'user_favController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
