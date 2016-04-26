<?php

namespace App\Models;

use App\Mysql\Conexion;

class Usuario extends Conexion{


	public function login($user,$pass){
		$user = addslashes($user);
		$pass = addslashes($pass);
		$sql = 'SELECT usuarios.id,usuario FROM `usuarios` 
				inner join roles
				where usuario = "'.$user.'" 
				and password = "'.$pass.'" 
				and role_id = roles.id';
		return $this->sql($sql);
	}

}