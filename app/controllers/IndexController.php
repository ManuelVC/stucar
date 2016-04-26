<?php

namespace App\Controllers;

use App\Models\Camioneta;
use App\Libs\View;

class IndexController{

	public function index(){
		$camioneta = new Camioneta();
		$tableCam = $camioneta->all();

		View::render('page/index',compact('tableCam'));
	}
}