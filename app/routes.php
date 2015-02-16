<?php

/*
	Application Routing (WIP)

	1. Route:get('url','name','Controller@methodincontroller');
	2. Route:post('url','name','Controller@methodincontroller');
*/

Route::get('/','home','HomeController@home');

Route::get('/images','images','HomeController@home');

Route::get('/albums','albums','HomeController@home');