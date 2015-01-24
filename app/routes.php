<?php


Route::get('/', 'PagesController@home');

Route::get('/about', 'PagesController@about');

Route::get('/signIn', 'PagesController@signIn');

Route::get('users', function()
{
	$users = User::all();
});
