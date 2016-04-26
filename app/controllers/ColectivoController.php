<?php

namespace App\Controllers;

use App\Libs\View;

class ColectivoController{

	public function index(){

		View::render('page/colectivo');
	}

}