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

/*Route::get('/', function()
{
	return View::make('layout');
});*/

/*Route::get('/', function () {
   return View::make('template'); 
});*/

Route::get('/', 'HomeController@showWelcome');

Route::get('login', 'UserController@getIndex');

/*Route::get('fdf_add_template(fdf_document, newpage, filename, template, rename)e', function () {
   return View::make('template'); 
});*/