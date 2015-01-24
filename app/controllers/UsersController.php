<?php

class UsersController extends BaseController {
    
    
	public function create() 
    {
        return View::make('users.create');
    }
    
}