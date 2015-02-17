<?php

/*
	Application Routing (WIP)

	1. Route:get('url','name','Controller@methodincontroller');
	2. Route:post('url','name','Controller@methodincontroller');
*/

Route::get('/','home','HomeController@home');

Route::get('/images','images','ImageController@home');

/*
	Account Routes
*/

Route::get('/register', 'register', 'AccountController@register');

Route::post('/register', 'register-post', 'AccountController@register_post');

Route::get('/login', 'login', 'AccountController@login');

Route::post('/login', 'login-post', 'AccountController@login_post');

Route::get('/logout', 'logout', 'AccountController@logout');