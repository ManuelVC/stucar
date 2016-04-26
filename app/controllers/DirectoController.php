<?php

namespace App\Controllers;

use App\Libs\View;

class DirectoController{

	public function index(){
		View::render('page/directo');
	}

}