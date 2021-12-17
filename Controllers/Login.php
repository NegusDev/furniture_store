<?php

$error = [
    "user_name" => "",
    "user_email" => "",
    "password" => "",
    "confirm_password" => ""
];

if (isset($_POST['signup'])) {

    $user_id = rand(time(),2000);
    $name = trim($_POST['username']);
    $email = trim($_POST['email']);
    // $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // $name = trim($_POST['username']);

    $data = [
        "user_id" => $user_id,
        "user_name" => filter_var($name, FILTER_SANITIZE_STRING),
        "user_email" => filter_var($email, FILTER_SANITIZE_EMAIL),
        "user_password" => $_POST['password']
    ];
    $confirm_pass = $_POST['confirm_password'];

    if (empty($data['user_name'])) {
        $error['user_name'] = "Username is required and must have more than 4 characters";
    }
    if (empty($data['user_email'])) {
        $error['user_email'] = "Email is required";
    }
    if (empty($data['user_password'])) {
        $error['password'] = "password is required and must have more than 8 characters ";
    }
    if (empty($confirm_pass)) {
        $error['confirm_password'] = "Password doesn't match";
    }
    // var_dump($_POST);
    // exit;

    $result = $User->createUser($data);
    if ($result) {
        header("location:/login");
    }
    else{
        die("failed");
    }

}

