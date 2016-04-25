<?php

namespace App\Controllers;

use App\Libs\View;

class AdminController{

	public function index(){
		View::render('admin/page/login');
	}

	public function panel(){
		View::render('admin/page/panel');
	}

	public function directos(){
		View::render('admin/page/directos');
	}

}