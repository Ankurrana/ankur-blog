<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
	Route::get('/', array('as'=>'home','uses'=>'HomeController@showWelcome'));

// Route::get('/', function()
// {	
	
// 		Simply give links to the various fucntionalities of the site
	
	
// });

Route::get('create',array('uses'=>'HomeController@create','as'=>'createpost'));
Route::post('create','HomeController@postcreate');
Route::get('view/{id}','HomeController@show');