<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/{locale?}', function($locale = null){
	if($locale){
		App::setLocale($locale);
	}
	return view('home');
});

Route::get('/posts', 'PostsController@index');

Auth::routes();

