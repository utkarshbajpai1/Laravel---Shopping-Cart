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
	'uses' => 'UserController@getSignUp',
	'as' => 'user.signup'
]);


Route::post('/signup' , [
	'uses' => 'UserController@postSignUp',
	'as' => 'user.signup'
]);

Route::get('/signin' , [
	'uses' => 'UserController@getSignIn',
	'as' => 'user.signin'
]);


Route::post('/signin' , [
	'uses' => 'UserController@postSignIn',
	'as' => 'user.signin'
]);

Route::get('/user/profile' , [
	'uses' => 'UserController@getProfile',
	'as' => 'user.profile'
]);

