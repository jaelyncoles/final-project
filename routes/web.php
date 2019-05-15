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
Route::resource('home', 'HomeController');
Route::resource('users', 'usersController');
Route::resource('venuepost', 'venuepostsController');
Route::resource('userfav', 'userfavsController');
Route::resource('genreformuser', 'genreformuserController');
Route::resource('venues', 'venuesController');
//oute::get('gohome', 'HomeController@gohome')->name('gohome');
Route::get('postcreate', 'venuepostsController@create');
Route::resource('createpost', 'venuepostsController');
Route::get('editgenre', 'genreformuserController@editgenre');
Route::get('suggestions', 'suggestionsController@test');
//Route::get('/home', 'HomeController@anon')->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('approval', 'HomeController@approval')->name('approval');
    
    Route::middleware(['approved'])->group(function () {
        Route::get('home', 'HomeController@index')->name('home');
        Route::get('gohome', 'HomeController@gohome')->name('home');
    });

    Route::middleware(['admin'])->group(function () {
        Route::get('users', 'UsersController@index')->name('admin.users.index');
        Route::get('users/{user_id}/approve', 'UsersController@approve')->name('admin.users.approve');
    });
    Route::get('favs', 'userfavsController@favs');
    Route::get('venuefavs', 'venuefavsController@show');
    Route::get('gohome', 'HomeController@gohome');


    Route::get('venueprofile', 'usersController@venueprofile');
    Route::get('posts', 'venuefavsController@venueposts');
    //Route::get('userprofile', 'genreform');
    Route::get('gohome', 'HomeController@gohome');
});
