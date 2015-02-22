<?php

class UserController extends Controller{

	public function profile($username)
	{
		$user = User::where('username',$username)->first();
		if (isset($user))
		{
			return View::make('user.profile')->with('user',$user);
		}
		else
		{
			return View::make('errors.404');
		}
	}

	public function dashboard()
	{
		return View::make('user.dashboard');
	}

}