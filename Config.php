<?php

define('BASE_DIR', __DIR__);

spl_autoload_register(function($className){
	include(BASE_DIR. '/Models/Classes/'.$className.'.class.php');
	// echo $className;
});

$Router =  new Router();
$Db = new DbController();
$Product = new Product();
$Cart = new Cart();
$Wishlist = new Wishlist();
$Search = new Search();
$User = new User();
$View = new View();
$Category = new Category();
// echo $Router;

$page = [];

$search = [];
$category = [];

