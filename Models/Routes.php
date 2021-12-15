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
  // echo "<pre>";
  // var_dump($_POST);
  // echo "</pre>";
  // exit;
  include('./cart.php');

});
Router::post('/contact', function() {
  echo "handling submitted data";
  echo "<pre>";
   var_dump($_POST);
   echo "</pre>";
 });


// NOT FOUND
Router::get(Router::uri(), function () {
  http_response_code(404);
  include('./_404.php');
  
});