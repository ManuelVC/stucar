<?php

namespace App\Libs;

class View{

	public static function render($view,$array = array()){
		$path = APP_PATH.'views/page/'.$view.'.view.php';

		if(file_exists($path)){
			extract($array);
			require_once $path;
		}else{
			die('Page Not Found');
		}
	}

}