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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'auth'], function(){

	Route::get('/user/profile' , [

	 'uses' => 'UserController@getProfile' ,
	 'as' => 'user.profile' 

	]);
 
});
