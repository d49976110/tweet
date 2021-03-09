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

Route::get('/', function () {
    return view('index');
});

Route::get('/home', 'TweetController@index');

Route::middleware('auth')->group(function(){

    Route::get('/tweets', 'TweetController@index')->name('home');
    Route::post('/tweets', 'TweetController@store');
    Route::delete('/tweets/{tweet}', 'TweetController@destroy');

    Route::post('/profile/{user}/follow','FollowsController@store');
    //profile
    Route::get('/profile/{user}','ProfileController@show')->name('profile');
    Route::get('/profile/{user}/edit','ProfileController@edit');
    Route::put('/profile/{user}','ProfileController@update');

    Route::get('/explore','ExploreController@index');

    Route::post('/tweets/{tweet}/like','TweetLikesController@store');
    Route::delete('/tweets/{tweet}/like','TweetLikesController@destroy');

});


Route::get('/regi',function(){
    return view('auth.register');
});
