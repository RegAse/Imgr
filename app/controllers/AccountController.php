<?php

class AccountController extends Controller{

	public function register()
	{
		return View::make('account/register');
	}

	public function register_post()
	{

	}

	public function login()
	{
		return View::make('account/login');
	}

	public function login_post()
	{

	}

}