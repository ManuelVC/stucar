<?php

namespace App\Controllers;

use App\Libs\{View,Errores};
use App\Models\Oficina;

class OficinaController{

	public function index(){
		session_start();

		$error = '';

		if(isset($_SESSION['error'])){
			$error = $_SESSION['error'];
			unset($_SESSION['error']);
		}

		if(isset($_SESSION['usuario'])){
			$user = $_SESSION['usuario'];
			$oficina = new Oficina();
			$tableOfi = $oficina->all();
			
			View::render('admin/page/oficinas',compact('user','tableOfi','error'));
		}else{
			Errores::errorLog('Error de autenticación. Favor de iniciar sesión');
		}
	}

	public function show($id = null){
		session_start();

		if(isset($_SESSION['usuario'])){
			if(isset($_GET['of'])){
				$idofi = $_GET['of'];

				$user = $_SESSION['usuario'];
				$oficina = new Oficina();
				$ofi = $oficina->find($idofi);

				if($ofi->num_rows > 0){
					$filOfi = $ofi->fetch_array(MYSQLI_ASSOC);
					View::render('admin/page/oficina/show',compact('user','filOfi'));
				}else{
					Errores::errorOfi('La oficina seleccionada no se encuentra disponible');
				}
					
			}else{
				Errores::errorOfi('La oficina seleccionada no se encuentra disponible');
			}
			
		}else{
			Errores::errorLog('Error de autenticación. Favor de iniciar sesión');
		}
	}
}