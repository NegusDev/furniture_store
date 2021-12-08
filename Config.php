<?php

define('BASE_DIR', __DIR__);

spl_autoload_register(function($className){
	include(BASE_DIR. '/Models/Classes/'.$className.'.class.php');
	// echo $className;
});

$Router =  new Router();
$View = new View();
// echo $Router;