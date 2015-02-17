<?php

class Auth
{

	public static function check()
	{
		//Simple login <- not secure
		if (isset($_SESSION["id"]))
		{
			return true;
		}
		return false;
	}

	public static function login($id)
	{
		if(!isset($_SESSION)) 
		{
			session_start();
		}

		$_SESSION["id"] = $id;
		if (isset($_SESSION["id"]))
		{
			return true;
		}
		return false;
	}

	public static function logout()
	{
		if(!isset($_SESSION)) 
		{
			session_start();
		}

		session_destroy();
		return Redirect::route('home');
	}

	public static function user()
	{
		if (isset($_SESSION["id"]))
		{
			return User::find($_SESSION["id"]);
		}
	}
}