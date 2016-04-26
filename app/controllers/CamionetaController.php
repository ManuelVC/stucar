<?php

namespace App\Controllers;

use App\Libs\View;
use App\Models\Camioneta;

class CamionetaController{

	public function index(){
		$camioneta = new Camioneta();
		$tableCam = $camioneta->all();

		View::render('page/camioneta',compact('tableCam'));
	}

	public function show(){
		$id = $_GET['c'] ?? false;
		$filaCam = '';

		$camioneta = new Camioneta();
		$tableCam = $camioneta->all();

		if($id){
			$cam = $camioneta->find($id);

			if($cam->num_rows > 0){
				$filaCam = $cam->fetch_array(MYSQLI_ASSOC); 
			}

			View::render('page/camioneta',compact('filaCam','tableCam'));
		}else{
			View::render('page/camioneta',compact('filaCam','tableCam'));
		}
	}
}