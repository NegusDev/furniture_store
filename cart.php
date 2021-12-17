<?php
session_start();
if (!isset($_SESSION['id'])) {
	header('Location: /login');
}
global $View;
global $Product;
global $Cart;
global $Seach;

include("./Controllers/Cart.php");
include("./Controllers/Search.php");


// AJAX CALL
if (isset($_POST['productId'])) {
    $pro = $Product->getProductById($_POST['productId']);
    echo json_encode($pro);
    exit;
 }


$get_cart = $Cart->getCart('cart');



// echo "<pre>";
// print_r($get_cart);
// echo "</pre>";
// exit;

$View->header();
include('Views/Templates/_cart.php');
$View->footer();