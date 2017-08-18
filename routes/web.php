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

Route::get('/numberOfComments','PageController@sortNC')->name('sortNC');
Route::get('/mostRead','PageController@sortMR')->name('sortMR');
Route::post('/post','PageController@check')->name('check');
Route::get('/solution','PageController@solution')->name('quiz.solution');
Route::get('/questionThread/{question}','questionController@openThread')->name('question.thread');

Route::post('/search','PageController@search')->name('search');

Route::post('/reply','questionController@reply')->name('reply.post');
Route::post('/questionP','questionController@insertQuestion')->name('postQuestion');
Route::get('/ask','questionController@show')->name('askQuestion');
Route::get('/','PageController@home')->name('home');
Route::get('/loadComments/{comment}','PageController@loadComments')->name('loadComments');
Route::get('/test','PageController@special')->name('khulduli');
Route::get('/categories/{category}','PageController@categorywise')->name('category');
Route::get('/allpost','PageController@allpost')->name('all');
Route::get('/article/{content}','PageController@show')->name('view');
Route::post('/comment','PageController@comment')->name('comment.post');


Route::get('/login','loginController@login')->name('login');

Route::post('/login','loginController@verify')->name('login.verify');
Route::get('/logout','loginController@destroy')->name('logout');
Route::get('/quiz','PageController@quiz')->name('quiz'); 
Route::get('/fetchcategories','PageController@fetchcategories')->name('test'); 
Route::get('/fetchspecial','PageController@fetchspecial')->name('khulduli'); 


Route::group(['prefix'=>'/dashboard'],function(){
	Route::get('','ArticlesController@index')->name('dashboard');
	Route::get('/content','ArticlesController@index')->name('content.index');
	Route::get('content/create','ArticlesController@create')->name('content.create');
	Route::get('content/vcreate','ArticlesController@vcreate')->name('video.create');
	Route::post('/content','ArticlesController@store')->name('content.store');
	Route::get('/content/{content}','ArticlesController@show')->name('content.show');
	Route::get('/content/{content}/edit','ArticlesController@edit')->name('content.edit');
	Route::put('/content/{content}','ArticlesController@update')->name('content.update');
	Route::delete('/content/{content}','ArticlesController@destroy')->name('content.destroy');


	#tag routes
	Route::get('/tag','TagController@index')->name('tag.index');
	Route::get('tag/create','TagController@create')->name('tag.create');
	Route::post('/tag','TagController@store')->name('tag.store');
	Route::get('/tag/{tag}','TagController@show')->name('tag.show');
	Route::get('/tag/{tag}/edit','TagController@edit')->name('tag.edit');
	Route::put('/tag/{tag}','TagController@update')->name('tag.update');
	Route::delete('/tag/{tag}','TagController@destroy')->name('tag.destroy');

	//viewing the comments,questions,replies
	Route::get('/review/question','review@question')->name('question.review');
	Route::get('/review/comment','review@comment')->name('comment.review');
	Route::get('/review/replies','review@reply')->name('reply.review');

	//deleting routes
	Route::delete('/review/question/{question}','review@questiondel')->name('question.delete');
	Route::delete('/review/comment/{comment}','review@commentdel')->name('comment.delete');
	Route::delete('/review/replies/{replies}','review@replydel')->name('reply.delete');


	#quiz routes
	Route::get('/quiz','quizController@index')->name('quiz.index');
	Route::get('/quiz/create','quizController@create')->name('quiz.create');
	Route::post('/quiz','quizController@store')->name('quiz.store');
	Route::get('/quiz/{quiz}','quizController@show')->name('quiz.show');
	Route::get('/quiz/{quiz}/edit','quizController@edit')->name('quiz.edit');
	Route::put('/quiz/{quiz}','quizController@update')->name('quiz.update');
	Route::delete('/quiz/{quiz}','quizController@destroy')->name('quiz.destroy');

	Route::get('/quizq','quizController@indexq')->name('quiz.indexq');
	Route::get('/quizq/create','quizController@createq')->name('quiz.createq');
	Route::post('/quizq','quizController@storeq')->name('quiz.storeq');
	Route::get('/quizq/{quiz}','quizController@showq')->name('quiz.showq');
	Route::get('/quizq/{quiz}/edit','quizController@editq')->name('quiz.editq');
	Route::put('/quizq/{quiz}','quizController@updateq')->name('quiz.updateq');
	Route::delete('/quizq/{quiz}','quizController@destroyq')->name('quiz.destroyq');

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


//image upload

$middleware = array_merge(\Config::get('lfm.middlewares'), [
    '\Unisharp\Laravelfilemanager\middlewares\MultiUser',
    '\Unisharp\Laravelfilemanager\middlewares\CreateDefaultFolder',
]);
$prefix = \Config::get('lfm.prefix', 'laravel-filemanager');
$as = 'unisharp.lfm.';
$namespace = '\Unisharp\Laravelfilemanager\controllers';

// make sure authenticated
Route::group(compact('middleware', 'prefix', 'as', 'namespace'), function () {

    // Show LFM
    Route::get('/', [
        'uses' => 'LfmController@show',
        'as' => 'show',
    ]);

    // Show integration error messages
    Route::get('/errors', [
        'uses' => 'LfmController@getErrors',
        'as' => 'getErrors',
    ]);

    // upload
    Route::any('/upload', [
        'uses' => 'UploadController@upload',
        'as' => 'upload',
    ]);

    // list images & files
    Route::get('/jsonitems', [
        'uses' => 'ItemsController@getItems',
        'as' => 'getItems',
    ]);

    // folders
    Route::get('/newfolder', [
        'uses' => 'FolderController@getAddfolder',
        'as' => 'getAddfolder',
    ]);
    Route::get('/deletefolder', [
        'uses' => 'FolderController@getDeletefolder',
        'as' => 'getDeletefolder',
    ]);
    Route::get('/folders', [
        'uses' => 'FolderController@getFolders',
        'as' => 'getFolders',
    ]);

    // crop
    Route::get('/crop', [
        'uses' => 'CropController@getCrop',
        'as' => 'getCrop',
    ]);
    Route::get('/cropimage', [
        'uses' => 'CropController@getCropimage',
        'as' => 'getCropimage',
    ]);
    Route::get('/cropnewimage', [
        'uses' => 'CropController@getNewCropimage',
        'as' => 'getCropimage',
    ]);

    // rename
    Route::get('/rename', [
        'uses' => 'RenameController@getRename',
        'as' => 'getRename',
    ]);

    // scale/resize
    Route::get('/resize', [
        'uses' => 'ResizeController@getResize',
        'as' => 'getResize',
    ]);
    Route::get('/doresize', [
        'uses' => 'ResizeController@performResize',
        'as' => 'performResize',
    ]);

    // download
    Route::get('/download', [
        'uses' => 'DownloadController@getDownload',
        'as' => 'getDownload',
    ]);

    // delete
    Route::get('/delete', [
        'uses' => 'DeleteController@getDelete',
        'as' => 'getDelete',
    ]);

    Route::get('/demo', 'DemoController@index');
});

Route::group(compact('prefix', 'as', 'namespace'), function () {
    // Get file when base_directory isn't public
    $images_url = '/' . \Config::get('lfm.images_folder_name') . '/{base_path}/{image_name}';
    $files_url = '/' . \Config::get('lfm.files_folder_name') . '/{base_path}/{file_name}';
    Route::get($images_url, 'RedirectController@getImage')
        ->where('image_name', '.*');
    Route::get($files_url, 'RedirectController@getFIle')
        ->where('file_name', '.*');
});













