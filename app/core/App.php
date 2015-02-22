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

				// Fetch the controllers
				require_once '../app/controllers/'. $key["controller"] .'.php';
				$this->controller = new $key["controller"];

				if (method_exists($this->controller, $key["function"]))
				{
					// Call the function
					echo $this->controller->$key["function"]();
				}
				else
				{
					echo View::make('errors.404');
					exit();
				}
				break;
			}
			else if (preg_match_all("/{(.*?)}/", $key['url'], $para))
			{
				/*
					This is for routes with parameters
					Ex: Route::get('/profile/{username}','profile','UserController@profile');
				*/

				// Fetch the controllers
				require_once '../app/controllers/'. $key["controller"] .'.php';

				$this->controller = new $key["controller"];

				if (method_exists($this->controller, $key["function"]))
				{
					$routeurl = explode('/', $key['url']);
					$requestedurl = explode('/', $url);
					if (count($routeurl) != count($requestedurl))
					{
						echo View::make('errors.404');
						exit();
					}

					for ($i=0; $i < count($routeurl); $i++)
					{ 
						if (preg_match_all("/{(.*?)}/", $routeurl[$i], $para1))
						{
							$param[$routeurl[$i]] = $requestedurl[$i];
						}
					}

					// Call the function
					echo call_user_func_array(array($this->controller, $key["function"]), $param);
					$found = true;
				}
			}
		}
		if (!$found)
		{
			echo View::make('errors.404');
			exit();
		}
	}
}