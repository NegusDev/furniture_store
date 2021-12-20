<?php

if (isset($_POST['cart'])) {

    $cart_id = rand(time(),2000);
    $data = [
        "cart_id" => $cart_id,
        "user_id" => $_SESSION['id'],
        "product_id" => $_POST['cart']
    ];
    $result = $Cart->inserIntoCart('cart', $data);
    if ($result) {
        header("location".$_SERVER['PHP_SELF']);
    }else{
        die('failed');
    }
}

if (isset($_POST['delete-cart-submit']) && isset($_POST['product_id'])) {

    $product_id = $_POST['product_id'];
    $result = $Cart->deleteCartItem($product_id, 'cart');
    // json_encode($result);
    // exit;

    if ($result) {
        header("location".$_SERVER['PHP_SELF']);  
    }else {
        die('failed');
    }

}

if (isset($_POST['empty-cart'])) {
    $result = $Cart->clearCartList('cart');
    if ($result) {
        header("location".$_SERVER['PHP_SELF']);  
    }else {
        die('failed');
    }
}

    