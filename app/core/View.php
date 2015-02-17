<?php

class View {
	
	public static function make($view)
	{
		include '../app/views/'.$view.'.php';
	}

	public static function extend($view)
	{
		$thefile = '../app/views/home.php';
		self::make('layout/main');
	}

}