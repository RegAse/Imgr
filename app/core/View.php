<?php
use Philo\Blade\Blade;

class View {
	
	public static function make($view)
	{
		//include '../app/views/'.$view.'.php';
		
		$views = '../app/views';
		$cache = '../app/cache';

		$blade = new Blade($views, $cache);
		return $blade->view()->make($view);
	}

	public static function extend($view)
	{
		$thefile = '../app/views/home.php';
		self::make('layout/main');
	}

}