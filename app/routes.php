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

Route::get('/', function()
{
	return View::make('Main');
});

Route::post('lorem', function()
{
	$pLength = _POST('pLength');
	return View::make('Main');
});

Route::get('/latin', function()
{
	return 'Latin Page /';
});

Route::get('/user', function()
{
	return 'user Page /';
});

Route::get('/users', function()
{
	return 'user Page /';
});
