<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Application Routes
	|--------------------------------------------------------------------------
	|
	| Simply tell Laravel the HTTP verbs and URIs it should respond to. It's a
	| piece of cake to create beautiful applications using the elegant RESTful
	| routing available in Laravel.
	|
	| Let's respond to a simple GET request to http://example.com/hello:
	|
	|		'GET /hello' => function()
	|		{
	|			return 'Hello World!';
	|		}
	|
	| You can even respond to more than one URI:
	|
	|		'GET /hello, GET /world' => function()
	|		{
	|			return 'Hello World!';
	|		}
	|
	| It's easy to allow URI wildcards using (:num) or (:any):
	|
	|		'GET /hello/(:any)' => function($name)
	|		{
	|			return "Welcome, $name.";
	|		}
	|
	*/

	// 'GET /' => function()
	// {
	// 	return View::make('home.index');
	// },
	'GET /start/(:any), GET /other/(:any)' => array('name' => 'docs', 'uses' => 'start@index'),
	'GET /database/(:any)' => array('name' => 'docs', 'uses' => 'start@database'),
	'GET /cache/(:any)' => array('name' => 'docs', 'uses' => 'start@cache'),
	'GET /session/(:any)' => array('name' => 'docs', 'uses' => 'start@session'),
	'GET /auth/(:any)' => array('name' => 'docs', 'uses' => 'start@auth'),

);
