<?php

namespace App\Libs;

class View{

	public static function render($view,$data = array()){
		$path = APP_PATH.'views/'.$view.'.view.php';

		if(file_exists($path)){
			extract($data);
			require_once $path;
		}else{
			die('Page Not Found');
		}
	}

}