<?php
session_start();
global $View;
global $Product;
global $Cart;
global $Wishlist;
global $Search;
global $Category;

include("./Controllers/Cart.php");
include("./Controllers/Wishlist.php");
include("./Controllers/Search.php");

if (!isset($_SESSION['id'])) {
	header('Location: /login');
}

// include("./Controllers/Wishlist.php");
// echo "<pre>";
// print_r($Category->getCategories('category'));
// echo "</pre>";
// exit;


$product  = $Product->getAllProducts();
$page['content'] = $Product->viewProducts($product);

$total_cart = $Cart->getTotalCart('cart');
global $total_cart;

// var_dump($total_cart);
// exit;
$View->header();

include('Views/Templates/_home.php');
$View->footer();

