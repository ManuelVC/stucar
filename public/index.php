<?php

require_once '../config/global.php';

define('PUBLIC_PATH','./');

use App\Libs\Route;


$url = $_GET['url'] ?? '';

$route = ROUTE[$url] ?? false;

if($route){
	$controller = $route['controller'];
	$method = $route['method'];
}else{
	$controller = ROUTE['error']['controller'];
	$method = ROUTE['error']['method'];
}


Route::get($controller,$method);

