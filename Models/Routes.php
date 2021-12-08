<?php
Router::get('/', function() {
    include('./home.php');
}); 

Router::get('/product', function() {
    include('./product.php');
});
Router::get('/cart', function() {
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
  include('./_404.php');
   http_response_code(404);
  
});