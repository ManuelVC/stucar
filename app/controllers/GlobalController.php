<?php

namespace App\Controllers;

use App\Libs\View;

class GlobalController{

	public function index(){
		View::render('index');
	}

	public function especial(){
		View::render('especial');
	}

	public function directo(){
		View::render('directo');
	}

	public function colectivo(){
		View::render('colectivo');
	}

	public function camioneta(){
		View::render('camioneta');
	}

	public function acerca(){
		View::render('acerca');
	}

	public function contacto(){
		View::render('contacto');
	}

	public function directobuy(){
		View::render('directobuy');
	}

	public function notfound(){
		View::render('notfound');
	}


}