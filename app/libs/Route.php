<?php

namespace App\Libs;

class Route{

	public static function get($controller,$method,$array = array()){
		$path = APP_PATH.'app/controllers/'.$controller.'.php';
		if(file_exists($path)){
			$classCtrl = 'App\\Controllers\\'.$controller;
			$controller = new $classCtrl();

			if(method_exists($controller, $method)){
				extract($array);
				return $controller->$method();
			}else{
				die('Method Invalid');
			}
		}else{
			die('Page Not Found');
		}		
	}

}