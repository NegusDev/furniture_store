<?php
global $View;
global $Product;
global $Cart;
global $Wishlist;
include("./Controllers/Cart.php");
// include("./Controllers/Wishlist.php");


$product  = $Product->getAllProducts();
$page['content'] = $Product->viewProducts($product);

$total_cart = $Cart->getTotalCart('cart');
global $total_cart;

// var_dump($total_cart);
// exit;

$View->header();
include('Views/Templates/_home.php');
$View->footer();

