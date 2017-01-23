<?php

namespace App\Core;


class Router
{
	protected $routes = [

		'GET' => [],

		'POST' => []

	];

	public static function load($file)
	{

		$router = new static; //or self. This is a Router instance

		require $file;

		return $router;

	}

	public function get($uri, $controller)
	{

		$this->routes['GET'][$uri] = $controller;

	}

	public function post($uri, $controller)
	{

		$this->routes['POST'][$uri] = $controller;

	}

	public function direct($uri, $requestType)
	{

//        var_dump($this->routes[$requestType][$uri]);

	    if(array_key_exists($uri, $this->routes[$requestType])){

		    return $this->callAction(


				...explode('@', $this->routes[$requestType][$uri]) // php6 commes with splat operator: ...

			);

		}

		throw new \Exception('No route defined for this URI.');

	}

	protected function callAction($controller, $action)
	{

//		$controller = new $controller;

		$controller = "App\\Controllers\\{$controller}";

		$controller = new $controller;

//        var_dump($action);
//        exit;


        if(!method_exists($controller, $action)){

			throw new \Exception(

				"{$controller} does not respond to the {$action} action."

			);

		}


		return $controller->$action();

	}
}
