<?php
session_start();

if (!isset($_SESSION['id'])) {
	header('Location: /login');
}
global $View;
global $Product;
global $Search;
include("./Controllers/Search.php");


$View->header();
include('Views/Templates/_404.php');
$View->footer();
