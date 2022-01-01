<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title></title>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/swiper-bundle.css">
<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="assets/css/aos.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
    <?php  
        if (isset($_SESSION['id'])) {
            $session = $_SESSION['id'];
            $cat = $Category->getCategories('category');
            $category['content'] = $Category->viewCategories($cat);
            echo '
            <header id="header" class="shadow">
            <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <div class="container-fluid">
            <a class="navbar-brand py-2 px-1" href="/">
            FaniTure
            </a>
            <ul class="nav-icons my-auto text-center ">
            <li class="nav-item d-inline-block ">
                <a class="nav-link" href="#">
                <i class="fas fa-bell"></i>
                <span class="text-center badge rounded-circle  bg-danger d-flex">1</span>
                </a>
            </li>
            <li class="nav-item d-inline-block">
                <a class="nav-link" href="/wishlist">
                <i class="fas fa-heart"></i>
                '; ?>
                <?php 
                    if (!empty($Wishlist->getWishlist( $session))) {
                        echo '
                            <span class="text-center badge rounded-circle bg-danger d-flex">'.count($Wishlist->getWishlist($session)).'</span>
                        ';
                    }
                    else {
                        echo '';
                    }
                ?>
                <?php
                echo '
                
                </a>
            </li>
            <li class="nav-item d-inline-block">
                <a class="nav-link " href="/cart">
                <i class="fas fa-shopping-cart"></i>'?>
               <?php
                    if (!empty($Cart->getCart($session))) {
                        echo '
                            <span class="text-center badge rounded-circle bg-danger d-flex">'.count($Cart->getCart($session)).'</span>
                        ';
                    }
                    else {
                        echo '';
                    }
                ?>
               <?php echo '</a>
            </li>
            </ul>
            <button class="navbar-toggler  " type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-icon">
            <i class="fas fa-align-justify "></i>
            </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav mx-auto mb-2 mb-md-0">
            <li class="nav-item  me-1">
                <a class="nav-link nav_link " aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item  dropdown ">
                <a class="nav-link nav_link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" id="drop" href="#" aria-expanded="false">Categories</a>
               '. $category["content"].'
            </li>
            <li class="nav-item me-1 ">
                <a class="nav-link nav_link" href="/more">Who we are</a>
            </li>
            <li class="nav-item me-1 ">
                <a class="nav-link nav_link" href="/logout">logout</a>
            </li>
            </ul>
            
            </div>
            
            <form method="GET" class="d-flex form-search mx-auto ">
            <div class="input-group">
            <input type="search" name="product_name" class="form-control input-search" placeholder="Search" aria-label="Search" aria-describedby="search">
            <button type="submit" class="btn btn-dark btn-search" ><i class="fas fa-search"></i></button>
            </div>
            </form>
            </div>
            </nav>
            
            </header> 
            ';
        }else {
            echo '
            <header class="loggedout">
                <nav class="navbar navbar-expand-xs navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand py-2 px-1" href="#">
                    FaniTure
                    </a>
                                        
                    <div class="d-flex tags">
                        <a class="nav-link" href="/register">Signup</a>
                        <a class="nav-link" href="/login">Login</a>
                    </div>
                    </div>
                </div>
                </nav>
            </header>
            ';
        }
    ?>

    <main class="content">
