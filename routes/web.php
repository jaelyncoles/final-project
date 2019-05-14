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
Route::get('suggestions', 'suggestionsController@test');
Route::get('/', function () {
    return view('welcome');
});
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

Auth::routes();
//Route::get('/home', 'HomeController@anon')->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/approval', 'HomeController@approval')->name('approval');
    
    Route::middleware(['approved'])->group(function () {
        Route::get('/home', 'HomeController@index')->name('home');
        Route::get('/gohome', 'HomeController@gohome')->name('home');
    });

    Route::middleware(['admin'])->group(function () {
        Route::get('/users', 'UsersController@index')->name('admin.users.index');
        Route::get('/users/{user_id}/approve', 'UsersController@approve')->name('admin.users.approve');
    });
    Route::get('/favs', 'userfavscontroller@favs');
    Route::get('/venuefavs', 'venuefavscontroller@show');
    Route::get('/gohome', 'HomeController@gohome');


    Route::get('/venueprofile', 'userscontroller@venueprofile');
    Route::get('/posts', 'venuefavsController@venueposts');
    //Route::get('userprofile', 'genreform');
    Route::get('gohome', 'HomeController@gohome');
});
