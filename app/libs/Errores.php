<?php

namespace App\Libs;

class Errores{

	static function errorLog($error){
		$_SESSION['error'] = $error;
		header('Location: ../'.PUBLIC_PATH.'admin');
	}

	static function errorOfi($error){
		$_SESSION['error'] = $error;
		header('Location: ../'.PUBLIC_PATH.'admin/oficinas');
	}
	
}