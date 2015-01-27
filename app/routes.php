<?php

Route::get('/', 'PagesController@home');
Route::get('/signIn', 'PagesController@signIn');

Route::post('/validate', array('as' => 'users.validate', 'uses' => 'UsersController@validate'));
Route::resource('users', 'UsersController');

