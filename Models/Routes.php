<?php

Router::get('/', function() {
    include('./home.php');
}); 
Router::post('/', function() {
  include('./home.php');
  // echo "<pre>";
  // var_dump($_POST);
  // echo "</pre>";
  // exit;
});

Router::get('/product', function() {
    include('./product.php');
});

Router::get('/cart', function() {
   include('./cart.php');
});
Router::post('/cart', function() {
  include('./cart.php');
});

Router::get('/wishlist', function() {
  include('./wishlist.php');
});
Router::post('/wishlist', function() {
  include('./wishlist.php');
});

Router::get('/register', function() {
  include('./register.php');
});
Router::post('/register', function() {
  include('./register.php');
  echo "<pre>";
  var_dump($_POST);
  echo "</pre>";
  exit;
});

Router::get('/login', function() {
  include('./login.php');
});
Router::post('/login', function() {
  include('./login.php');
});
Router::get('/logout', function() {
  include('./logout.php');
});


// NOT FOUND
Router::get(Router::uri(), function () {
  http_response_code(404);
  include('./_404.php');
  
});

// '
// CM73024100HAUD
// KIMERA ZAKI MUSA
// 5/08/2002
// 19Yrs
// ';

// '0700968238 specioza';