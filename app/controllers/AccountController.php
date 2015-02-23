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

		if (strlen($username) < 4)
		{
			$errors["username"] = "Username is to short";
		}
		if (User::where('username',$username)->first())
		{
			$errors["username"] = "Username already taken";
		}
		/* Password Validation */

		if ($password != $repassword)
		{
			$errors["password"] = "Password must be same as password again";
		}
		if (strlen($password) < 8) {
        	$errors["password"] = "Password too short!";
    	}

	    if (!preg_match("#[0-9]+#", $password))
	    {
	        $errors["password"] = "Password must include at least one number!";
	    }

	    if (!preg_match("#[a-zA-Z]+#", $password))
	    {
	        $errors["password"] = "Password must include at least one letter!";
	    }    

	    /* Email Validation */

	    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    		$errors["email"] = "Email must be a valid email";
		}
		if (isset($errors))
		{
			// Return the view with the errors and the input
			$inputs["username"] = $username;
			$inputs["email"] = $email;

			return View::make('account/register')->with('errors',$errors)->with('inputs',$inputs);
		}

		$user = User::create(array(
			'username' => $username,
			'password' => md5($password),
			'email' => $email
		));

		/* Logging in the user now and then return him to the home site */
		Auth::login($user->id);
		return Redirect::route('home');
	}

	public function login()
	{
		return View::make('account.login');
	}

	public function login_post()
	{
		$email = $_POST["email"];
		$password = md5($_POST["password"]);

		$user = User::where('email', $email)->where('password', $password)->first();

		if ($user)
		{
			Auth::login($user->id);
			return Redirect::route('home');
		}
	}

	public function logout()
	{
		Auth::logout();
		
		return Redirect::route('login');
	}

	public function account()
	{
		return View::make('account/account');
	}
}