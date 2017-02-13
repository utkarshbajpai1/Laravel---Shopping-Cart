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

Route::get('/' , [
	'uses' => 'ProductController@getIndex',
	'as' => 'product.index'
]);


Route::get('/signup' , [
	'uses' => 'UserController@getSignup',
	'as' => 'user.signup'
]);


Route::post('/signup' , [
	'uses' => 'UserController@postSignup',
	'as' => 'user.signup'
]);