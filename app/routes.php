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

Route::get('/{pLength?}', function($pLength = 0)
{
	return View::make('main');
});

Route::post('Main', function()
{
    return 'Hello World';
});


Route::get('/lorem', function()
{
	return View::make('lorem');
});

Route::post('/lorem', function()
{
	return View::make('lorem');
});

Route::get('/lorem/{pLength?}', function($pLength = 0)
{
	return View::make('lorem') ->with('pLength', $pLength);
});

Route::get(strtolower('/user'), function()
{
	return View::make('users');
});

Route::get(strtolower('/users'), function()
{
	return View::make('users');
});

Route::post(strtolower('/user'), function()
{
	return View::make('users');
});

Route::post(strtolower('/users'), function()
{
	return View::make('users');
});
