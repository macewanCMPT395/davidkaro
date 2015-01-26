<?php

class PagesController extends BaseController {

	

	public function home()
	{
		//$usrs = DB::table('Users')->get();
		return View::make('home');
	}
    
    public function signIn()
	{
		return View::make('signIn');
	}
    
    
    
}


