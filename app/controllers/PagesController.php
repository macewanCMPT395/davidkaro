<?php

class PagesController extends BaseController {

	

	public function home()
	{
		$name = 'Alpaca';
		return View::make('home') -> with ('name', $name);
	}
    
    public function signIn()
	{
		return View::make('signIn');
	}
    
    
    
}


