<?php
use Philo\Blade\Blade;

class View {
	
	public static function make($view)
	{
		// $loader = new Twig_Loader_Filesystem('../app/views');
		// $twig = new Twig_Environment($loader, array());

		// //Render the view to the browser
		// echo $twig->render($view.'.php', array('name' => 'Fabien'));

		//include '../app/views/'.$view.'.php';
		$views = '../app/views';
		$cache = '../app/cache';

		$blade = new Blade($views, $cache);
		echo $blade->view()->make($view);
	}

	public static function extend($view)
	{
		$thefile = '../app/views/home.php';
		self::make('layout/main');
	}

}