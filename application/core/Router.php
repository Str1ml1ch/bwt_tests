<?php
require 'application/controllers/AccountController.php';
require 'application/controllers/MainController.php';
require 'application/core/View.php';
class Router
{

protected $routes =[];
protected $params =[];

	
	public function __construct()
	{
		$arr = require 'application/config/routes.php';
		//debug($arr);
		foreach ($arr as $key => $val) {
			$this->add($key,$val);
		}
	}

public function add($route,$params)
{

$route = '#^'.$route.'$#';
$this->routes[$route]=$params;
}

public function match()
{
$url = trim($_SERVER['REQUEST_URI'],'/');
foreach ($this->routes as $route => $params) {
	if(preg_match($route, $url, $matches))
	{
		$this->params = $params;
		return true;
	}
}
return false;
}

public function run()
{
	if($this->match())
	{
		$patch = ucfirst($this->params['controller']).'Controller';
		if(class_exists($patch))
		{
			$action = $this->params['action'].'Action';
			if(method_exists($patch,$action))
			{
				$controller =  new $patch($this->params);
				$controller->$action();
			}
		else 
			echo "Action Не найден";
		}else
		{
			echo 'Не найден: '.$patch;
		}
	}
	else
	{
		echo "Маршрут не найден";
	}
	//echo "start";
}

}