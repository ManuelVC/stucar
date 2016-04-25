<?php

namespace App\Controllers;

use App\Libs\View;
use App\Models\Camioneta;

class GlobalController{

	public function index(){
		$camioneta = new Camioneta();
		$tableCam = $camioneta->all();

		View::render('page/index',compact('tableCam'));
	}

	public function especial(){
		View::render('page/especial');
	}

	public function directo(){
		View::render('page/directo');
	}

	public function colectivo(){
		View::render('page/colectivo');
	}

	public function camioneta(){
		View::render('page/camioneta');
	}

	public function acerca(){
		View::render('page/acerca');
	}

	public function contacto(){
		View::render('page/contacto');
	}

	public function directobuy(){
		View::render('page/directobuy');
	}

}