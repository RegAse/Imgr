<?php

class Url {

	public static function route($route, $parameters = array())
	{
		foreach (Route::$routes as $key)
		{
			if ($key['name'] == $route)
			{
				/*
					replace {} with parameter values 
					Return the url
				*/
				$url = $key['url'];
				if (preg_match_all("/{(.*?)}/", $url, $para)) {
			      foreach ($para[1] as $i => $varname) {
			        $url = str_replace($para[0][$i], $parameters[$i], $url);
			      }
			    }
				return 'http://'.$_SERVER['SERVER_NAME'] . $url;
			}
		}
		return 'Not found';
	}

}

class Assets{

	public static function asset($url)
	{
		return 'http://'.$_SERVER['SERVER_NAME'].'/'. $url;
	}

}