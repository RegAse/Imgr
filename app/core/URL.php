<?php

class Url {

	public static function route($route)
	{
		foreach (Route::$routes as $key)
		{
			if ($key['name'] == $route)
			{
				/* 
					Return the url
				*/

				return 'http://'.$_SERVER['SERVER_NAME'] . $key['url'];
			}
		}
		return 'Not found';
	}

}