<?php
global $View;
global $User;
include("./Controllers/Auth.php");


$View->header();
include('Views/Templates/_login.php');
$View->footer();