<?php

class AccountController extends Controller{

	public function register()
	{
		return View::make('account/register');
	}

	public function register_post()
	{
		$username = $_POST["username"];
		$password = $_POST["password"];
		$repassword = $_POST["repassword"];
		$email = $_POST["email"];

		User::create(array(
			'username' => $username,
			'password' => $password,
			'email' => $email
		));
	}

	public function login()
	{
		return View::make('account/login');
	}

	public function login_post()
	{
		$email = $_POST["email"];
		$password = $_POST["password"];

		$user = User::where('email', $email)->where('password', $password)->first();

		if ($user)
		{
			Auth::login($user->id);
			return View::make('home');
		}
	}

	public function logout()
	{
		Auth::logout();
	}
}