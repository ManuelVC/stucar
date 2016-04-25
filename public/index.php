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
	die('Page Not Found');
}

Route::get($controller,$method);

