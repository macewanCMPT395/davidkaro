s<?php

class UsersController extends BaseController {
    
    
	public function create() 
    {
        return View::make('users.create');
    }
	public function store()
	{
	$user = Input::get('username');
	$password = Hash::make(Input::get('password'));
	//DB::insert('Users (username, password) values (?, ?)', array($user,$password));
	//$test = DB::table('users')->get();
	$test = User::all();
	//Return Redirect::to('/');
	Return $test;
	}          
}