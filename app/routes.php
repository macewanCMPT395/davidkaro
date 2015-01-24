<?php


Route::get('/', 'PagesController@home');

Route::get('/signIn', 'PagesController@signIn');

Route::resource('users', 'UsersController');
