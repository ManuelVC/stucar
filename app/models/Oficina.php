<?php

namespace App\Models;

use App\Mysql\Conexion;

class Oficina extends Conexion{

	public function all(){
		$sql = 'SELECT oficinas.id,numero,direccion,telefono,colonia,municipio FROM oficinas inner join colonias inner join municipios where colonia_id = colonias.id and municipio_id = municipios.id;';

		return $this->sql($sql);
	}

	public function find($id){
		$sql = 'SELECT oficinas.id,numero,direccion,telefono,colonia,municipio FROM oficinas inner join colonias inner join municipios where oficinas.id = '.$id.'
		    and colonia_id = colonias.id and municipio_id = municipios.id;';

		return $this->sql($sql);
	}

}