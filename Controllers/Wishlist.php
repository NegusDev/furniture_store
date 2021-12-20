<?php

if (isset($_POST['add_fav'])) {

    $wishlist_id = rand(time(),2000);
    $data = [
        "wishlist_id" =>hash('sha256', $wishlist_id),
        "user_id" => $_SESSION['id'],
        "product_id" => $_POST['add_fav']
    ];

    $result = $Wishlist->inserIntoWishlist($data);
    if ($result) {
        header("location".$_SERVER['PHP_SELF']);
    }else{
        die('failed');
    }
}

if (isset($_POST['remove_submit']) && isset($_POST['delete_fav'])) {

    $product_id = $_POST['delete_fav'];
    $result = $Wishlist->deleteWishlistItem($product_id, 'wishlist');
    // json_encode($result);
    // exit;

    if ($result) {
        header("location".$_SERVER['PHP_SELF']);  
    }else {
        die('failed');
    }

}