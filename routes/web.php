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

Route::get('/','PageController@home')->name('home');

Route::get('/login','loginController@login')->name('login');

Route::post('/login','loginController@verify')->name('login.verify');
Route::get('/logout','loginController@destroy')->name('logout');


Route::group(['prefix'=>'/dashboard'],function(){
	Route::get('','ArticlesController@index')->name('dashboard');
	Route::get('/content','ArticlesController@index')->name('content.index');
	Route::get('content/create','ArticlesController@create')->name('content.create');
	Route::post('/content','ArticlesController@store')->name('content.store');
	Route::get('/content/{content}','ArticlesController@show')->name('content.show');
	Route::get('/content/{content}/edit','ArticlesController@edit')->name('content.edit');
	Route::put('/content/{content}','ArticlesController@update')->name('content.update');
	Route::delete('/content/{content}','ArticlesController@destroy')->name('content.destroy');

	//user routes
	Route::get('/user','UserController@index')->name('user.index');
    Route::get('user/create','UserController@create')->name('user.create');
    Route::post('/user','UserController@store')->name('user.store');
    Route::get('/user/{user}','UserController@show')->name('user.show');
    //Route::get('/user/{user}/edit','UserController@edit')->name('user.edit');
    //Route::put('/user/{user}','UserCOntroller@update')->name('user.update');
    Route::delete('/user/{user}','UserController@destroy')->name('user.destroy');
	
	


});












