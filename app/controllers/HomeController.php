<?php

class HomeController extends Controller{

	public function home()
	{
		//$user = new User();
		return View::make('home');
	}

	public function home_post()
	{
		return 'hh';
	}
}