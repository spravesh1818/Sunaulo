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
Route::get('/single/{content}','PageController@show')->name('view');
Route::post('/comment','PageController@comment')->name('comment.post');

Route::get('/login','loginController@login')->name('login');

Route::post('/login','loginController@verify')->name('login.verify');
Route::get('/logout','loginController@destroy')->name('logout');
Route::get('/quiz','PageController@quiz')->name('quiz'); 


Route::group(['prefix'=>'/dashboard'],function(){
	Route::get('','ArticlesController@index')->name('dashboard');
	Route::get('/content','ArticlesController@index')->name('content.index');
	Route::get('content/create','ArticlesController@create')->name('content.create');
	Route::post('/content','ArticlesController@store')->name('content.store');
	Route::get('/content/{content}','ArticlesController@show')->name('content.show');
	Route::get('/content/{content}/edit','ArticlesController@edit')->name('content.edit');
	Route::put('/content/{content}','ArticlesController@update')->name('content.update');
	Route::delete('/content/{content}','ArticlesController@destroy')->name('content.destroy');


	#quiz routes
	Route::get('/quiz','quizController@index')->name('quiz.index');
	Route::get('/quiz/create','quizController@create')->name('quiz.create');
	Route::post('/quiz','quizController@store')->name('quiz.store');
	Route::get('/quiz/{quiz}','quizController@show')->name('quiz.show');
	Route::get('/quiz/{quiz}/edit','quizController@edit')->name('quiz.edit');
	Route::put('/quiz/{quiz}','quizController@update')->name('quiz.update');
	Route::delete('/quiz/{quiz}','quizController@destroy')->name('quiz.destroy');



	#category routes

	Route::get('/category','categoryController@index')->name('category.index');
	Route::get('category/create','categoryController@create')->name('category.create');
	Route::post('/category','categoryController@store')->name('category.store');
	Route::get('/category/{content}','categoryController@show')->name('category.show');
	Route::get('/category/{content}/edit','categoryController@edit')->name('category.edit');
	Route::put('/category/{content}','categoryController@update')->name('category.update');
	Route::delete('/category/{content}','categoryController@destroy')->name('category.destroy');

	//user routes
	Route::get('/user','UserController@index')->name('user.index');
    Route::get('user/create','UserController@create')->name('user.create');
    Route::post('/user','UserController@store')->name('user.store');
    Route::get('/user/{user}','UserController@show')->name('user.show');
    Route::get('/user/{user}/edit','UserController@edit')->name('user.edit');
    Route::put('/user/{user}','UserController@update')->name('user.update');
    Route::delete('/user/{user}','UserController@destroy')->name('user.destroy');
	
	


});

Route::get("/single",function(){

	return view('single');

});












