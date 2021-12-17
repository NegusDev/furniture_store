<?php
session_start();
if (!isset($_SESSION['id'])) {
	header('Location: /login');
}
global $View;
global $Product;
global $Cart;
global $Wishlist;
global $Search;
include("./Controllers/Search.php");
include("./Controllers/Cart.php");
include("./Controllers/Wishlist.php");




$get_wishlist = $Cart->getCart('wishlist');

$View->header();
include('Views/Templates/_wishlist.php');
$View->footer();