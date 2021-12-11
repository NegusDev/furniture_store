<?php
global $View;
global $Product;


$product  = $Product->getAllProducts();
$page['content'] = $Product->viewProducts($product);

$View->header();
include('Views/Templates/_home.php');
$View->footer();

