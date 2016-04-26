<?php

namespace App\Controllers;

use App\Libs\View;

class EspecialController{

	public function index(){
		View::render('page/especial');
	}

}