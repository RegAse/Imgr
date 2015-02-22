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
			require '../app/routes.php';
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
		session_unset();
		session_destroy();
		require '../app/routes.php';
	}

	public static function user()
	{
		if (isset($_SESSION["id"]))
		{
			return User::find($_SESSION["id"]);
		}
	}
}