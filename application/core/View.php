<?php

class View
{
	public $putch;
	public $route;
	public $layout = "default";
	
	public function __construct($route)
	{
		$this->route = $route;
     		$this->patch = $route['controller'].'/'.$route['action'];
           
  			}

			public function render($title,$vars = [])
			{
               require 'application/views/'.$this->patch.'.php';
               require 'application/views/layout/'.$this->layout.'.php';
			}
}