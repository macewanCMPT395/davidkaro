<?php

Route::get('/', 'PagesController@home');
Route::get('/signIn', 'PagesController@signIn');
Route::get('/validate', ['as' => 'validate', 'uses' => 'PagesController@validate']);

Route::resource('users', 'UsersController');
