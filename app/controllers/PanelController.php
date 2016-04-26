<?php

namespace App\Controllers;

use App\Libs\{View,Errores};
use App\Models\Usuario;

class PanelController{

	public function index(){

		session_start();

		if(isset($_SESSION['usuario'])){
			$user = $_SESSION['usuario'];
			View::render('admin/page/panel',compact('user'));
		}else{
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				extract($_POST);
				if(!empty($email) && !empty($password)){
					$usuario = new Usuario();
					$auth = $usuario->login($email,$password);
					if($auth->num_rows > 0){
						$us = $auth->fetch_array(MYSQLI_ASSOC);
						$_SESSION['usuario'] = $us['usuario'];
						$user = $us['usuario'];
						View::render('admin/page/panel',compact('user'));
					}else{
						Errores::errorLog('Error de autenticación. Usuario o contraseña invalidos');
					}
				}else{
					Errores::errorLog('Favor de completar los campos');
				}
			}else{
				Errores::errorLog('Error al iniciar sesión. Favor de intentarlo nuevamente');
			}
		}

	}

}