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
        $user = new User;
        $user->UserName = Input::get('Username');
        $user->Password = Input::get('Password');
        
        $username = $user->UserName;
        if (Auth::attempt(Input::only('Username','Password')))
	{
        return Redirect::to("/users/{$username}");
	}
	return Redirect::to("/users/{$username}");
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
    public function update()
    {
	DB::table('users')->where('Username', 'test')->update(array('Password' => '4343'));
	return Redirect::to("/");
    }
}