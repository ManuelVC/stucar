<?php

namespace App\Mysql;

class Conexion{

	private $con = null;

	private function connect(){
		$this->con = new mysqli(DB['host'],DB['user'],DB['pass'],DB['database']);
		if($this->con->connect_errno)
			die('Ocurrio un error al conectar con la base de datos');
	}

	public function sql($sql){
		$this->connect();
		$res = null;
		$res = $this->con->query($sql);
		$this->con->close();

		return $res;
	}

}