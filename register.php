<?php
global $View;
global $User;

include("./Controllers/Login.php");

$View->header();
include('Views/Templates/_register.php');
$View->footer();