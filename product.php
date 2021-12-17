<?php
session_start();
if (!isset($_SESSION['id'])) {
	header('Location: /login');
}
global $View;
global $Product;
global $Seach;
include("./Controllers/Search.php");



$product_id = (int) $_GET['product_id'];
$product = $Product->getProductById($product_id);

$View->header();
include('Views/Templates/_product.php');
$View->footer();

