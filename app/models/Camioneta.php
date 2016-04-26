<?php

namespace App\Models;

use App\Mysql\Conexion;

class Camioneta extends Conexion{

	public function all(){
		$sql = 'SELECT camionetas.id as camid,imagenes.id as imaid,marca,capacidad,ac,television,audio,descripcion,imagen FROM camionetas 
				INNER JOIN imagenes 
				WHERE camionetas.id = imagenes.camioneta_id';

		return $this->sql($sql);;
	}

	public function find($id){
		$sql = 'SELECT camionetas.id as camid,imagenes.id as imaid,marca,capacidad,ac,television,audio,descripcion,imagen FROM camionetas 
				INNER JOIN imagenes 
				WHERE camionetas.id = '.$id.'
				AND camionetas.id = imagenes.camioneta_id';
		return $this->sql($sql);
	}

}