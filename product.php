<?php
global $View;
global $Product;


$product_id = (int) $_GET['product_id'];
$product = $Product->getProductById($product_id);

$View->header();
include('Views/Templates/_product.php');
$View->footer();

