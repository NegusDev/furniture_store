<?php
global $Search;
$product_name = $_GET['product_name'] ?? '';

echo $product_name;
$result = $Search->search($product_name);
$search['content'] = $Search->viewSearched($result);
