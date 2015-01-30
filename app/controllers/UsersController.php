<?php

class UsersController extends BaseController {
    
    public function index() 
    {
        $users = User::all();
        return View::make('users.index', ['users' => $users]);
    }
    
	public function create() 
    {
        return View::make('users.create');
    }
    
	public function store()
	{
              //Create New User
	if (DB::table('users')->where('UserName', Input::get('Username'))->pluck('name'))
	{
	return Redirect::to("/");
	}
        $user = new User;
        $user->UserName = Input::get('Username');
        $user->Password = Hash::make(Input::get('Password'));
        $user->Gender = Input::get('Gender');
        $user->SexualOrientation = Input::get('LookingFor');
        $user->FurColor = Input::get('FurColor');
        $user->Type = Input::get('CommitmentLevel');
        $user->Interests = Input::get('Interests');
        $user->Email = Input::get('Email');
        $user->save();

        
        return Redirect::to("/users/{$user->UserName}");
	}  
    
    public function validate()
    {
        $username = Input::get('Username');
        $password = Input::get('Password');
        if (Auth::attempt(array('UserName' => $username, 'Password' => $password) ))
	{
        return Redirect::to("/users/{$username}");
	}
	return Redirect::to("/");
    }
    
    public function show($username)
    {
        $users = DB::table('users')->get();
        $users = User::all();
        
        $user = User::whereUsername($username)->first();
        
        return View::make('users.show', ['user' => $user]);
    }
    
    public function edit($username)
    {
        $users = DB::table('users')->get();
        $users = User::all();
        
        $user = User::whereUsername($username)->first();
        
        return View::make('users.edit', ['user' => $user]);
    }
    public function update($user)
    {
	DB::table('users')->where('UserName', 'test')->update(array('Password' => '4343'));
	return Redirect::to("/users/{$user->UserName}");
    }
}