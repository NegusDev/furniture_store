<?php
session_start();


if (isset($_POST['login'])) {
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    $email = $_POST['log_email'];
    $password = $_POST['log_password'];

    $error = [
        "email" => "",
        "password" => ""
    ];

    if (empty($email)) {
        $error['email'] = "Email required";
    }
    if (empty($password)) {
        $error['password'] = "Password required";
    }


    $result = $User->userAuth($email, $password);
    if ($result && !empty($email) && !empty($password)){
        if (mysqli_num_rows($result) == 1) {

            $_SESSION['id'] = $_POST['log_email'];
            echo '<script>alert("Logged in using email:'.$_SESSION['user_id'] .'")</script>';
            header("Location:/");
        }
        else {
            echo '<script>alert("Invalid Email or Password")</script>';
            // exit;
        }
    }
}

