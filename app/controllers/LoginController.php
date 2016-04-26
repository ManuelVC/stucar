<?php

namespace App\Controllers;

use App\Libs\View;

class LoginController{

	public function index(){
		session_start();

		$error = '';

		if(isset($_SESSION['error'])){
			$error = $_SESSION['error'];
			unset($_SESSION['error']);
		}elseif (isset($_SESSION['usuario'])) {
			unset($_SESSION['usuario']);	
		}

		View::render('admin/page/login',compact('error'));
	}


}