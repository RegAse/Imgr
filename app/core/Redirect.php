<?php

class Redirect {

	public static function route($route)
	{
		foreach (Route::$routes as $key)
		{
			if ($key['name'] == $route)
			{
				/* 
					Return the url *Move this to a reusable function*
				*/

				header('Location: '.$key['url']);
				die();
			}
		}
	}
}