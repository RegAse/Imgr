<?php

class Route {

	public static $routes = array();

	private static $initialized = false;

    public static function initialize()
    {
    	if (self::$initialized)
    		return;

    	self::$initialized = true;
    }

    public static function get($url, $name, $controllerfunction)
    {
    	self::initialize();
        //echo $url.'->'.$controllermethod;
        
        $route = array(
        	"url" => $url,
        	"name" => "",
        	"controller" => explode('@', $controllerfunction)[0],
            "function" => explode('@', $controllerfunction)[1],
        	"method" => "GET"
        );

        array_push(self::$routes, $route);
    }
}