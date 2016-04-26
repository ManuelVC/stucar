<?php

namespace App\Controllers;

use App\Libs\View;

class AcercaController{

	public function index(){
		View::render('page/acerca');
	}

}