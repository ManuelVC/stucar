<?php

namespace App\Controllers;

use App\Libs\View;

class ContactoController{

	public function index(){
		View::render('page/contacto');
	}

}