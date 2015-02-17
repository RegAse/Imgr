<?php

class App
{

	protected $controller = 'home';

	protected $method = 'index';

	protected $params = [];

	public function __construct()
	{
		$url = $this->parseUrl();
		$this->FindRoute($url);
		// if (file_exists('../app/controllers/' . $url[0] . '.php'))
		// {
		// 	$this->controller = $url[0];
		// 	unset($url[0]);
		// }

		// require_once '../app/controllers/'. $this->controller .'.php';

		// $this->controller = new $this->controller;

		// if (isset($url[1]))
		// {
		// 	if (method_exists($this->controller, $url[1]))
		// 	{
		// 		echo "Works";
		// 		//var_dump(Route::$routes);
		// 	}
		// }
	}

	public function parseUrl()
	{
		if (isset($_GET['url']))
		{
			$url = '/'.filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL);
			if ($url == "/index.php")
			{
				return '/';
			}
			return $url;
		}
	}

	public function FindRoute($url)
	{
		$found = false;
		foreach (Route::$routes as $key)
		{
			if ($key['url'] == $url and $key['method'] == $_SERVER['REQUEST_METHOD'] or $url == "")
			{
				/* 
					Include the Controller and create a new controller
					then call the function
				*/

				$found = true;

				require_once '../app/controllers/'. $key["controller"] .'.php';

				$this->controller = new $key["controller"];

				if (method_exists($this->controller, $key["function"]))
				{
					// Call the function
					echo $this->controller->$key["function"]();
				}
				else
				{
					echo "404";
				}
				break;
			}
		}
		if (!$found)
		{
			echo "404";
		}
	}
}