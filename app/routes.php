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
	return View::make('main');
});

Route::post('Main', function()
{
    return 'Hello World';
});


Route::get('/lorem/{pLength?}', function($pLength = 1)
{
	return View::make('lorem') ->with('pLength', $pLength);
});

Route::post('/lorem/{pLength?}', function($pLength = 1)
{
	return View::make('lorem') ->with('pLength', $pLength);
});

Route::get('/user', function()
{
	return 'user Page /';
});

Route::get('/users', function()
{
	return 'user Page /';
});
