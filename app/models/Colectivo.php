<?php

namespace App\Models;

use App\Mysql\Conexion;

class Colectivo extends Conexion{

	public function find($oficina = 21){
		$sql = 'SELECT origen,destino,tarifa 
			   FROM oficinas inner join colectivos 
			   where oficinas.numero = '.$oficina.' and oficinas.id = oficina_id';
			   
		return $this->sql($sql);
	}

}