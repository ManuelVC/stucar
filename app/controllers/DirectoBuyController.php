<?php

namespace App\Controllers;

use App\Libs\View;

class DirectoBuyController{

	public function index(){
		View::render('page/directobuy');
	}

}