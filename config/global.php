<?php 

ini_set('display_errors',true);
error_reporting(E_ALL);

define('APP_PATH',__DIR__.'/../');

require_once APP_PATH.'vendor/autoload.php';
require_once 'env.php';
require_once 'routes.php';