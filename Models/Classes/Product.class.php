<?php

class Product extends DbController {
    
    public function getAllProducts() {
        if ($this->conn != null) {
            $sql = "SELECT product.*, category.category_name FROM product
                    LEFT JOIN category ON product.category_id = category.id";      
            $result = $this->conn->query($sql) or die($this->conn->error);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $products[] = $row;
                }
            }
            return $products ?? [];
        }
        return false;
    }

    public function viewProducts(array $products):string {
        global $Cart;
        $html = '<div class="row">';
        if (empty($products)) {
            $html .= '
            <div class="col-12 product-box py-2 px-2 my-2 rounded-2">
                <div class="alert alert-danger">No Products Available</div>
            </>           
            ';
        }else {
            foreach ($products as $product) {
                if (!empty(in_array($product['product_id'], $Cart->getCartId($Cart->getCart($_SESSION['id']))))) {
                    $html .= ' 
                    <div class="col-md-3 col-6">
                    <div class="product-box py-2 px-2 my-2 rounded-2">
                    <form method="post" class="form-fav">
                        <input type="hidden" name="add_fav" value="'.$product['product_id'].'">
                        <button type="submit" class="btn btn-heart fas fa-heart"></button>
                    </form>
                    <div class="product-img mt-3">
                    <a href="/product?product_id='.$product['product_id'].'">
                    <img src="'.$product['product_image'].'" class="img-fluid">
                    </a>
                    </div>
                    <h6 class="text-center">'.$product['product_name'].'</h6>
                   
                    <div class="price mt-2">
                    <p class="text-center">Shs<strong>'.$product['product_price'].'</strong></p>
                    </div>
                    <div class="cart mt-2">
                    <form method="post" action="" >
                        <input type="hidden" name="cart" value="'.$product['product_id'].'">
                        <input type="submit"  disabled class="btn btn-danger w-100 disabled" value="In the Cart">
                    </form>
                    </div>
                    </div>
                    </div>
                    
                    ';
                }else {
                $html .= '
                <div class="col-md-3 col-6">
                <div class="product-box py-2 px-2 my-2 rounded-2">
                <form method="post" class="form-fav">
                    <input type="hidden" name="add_fav" value="'.$product['product_id'].'">
                    <button type="submit" class="btn btn-heart fas fa-heart"></button>
                </form>
                <div class="product-img mt-3">
                <a href="/product?product_id='.$product['product_id'].'">
                <img src="'.$product['product_image'].'" class="img-fluid">
                </a>
                </div>
                <h6 class="text-center">'.$product['product_name'].'</h6>
               
                <div class="price mt-2">
                <p class="text-center">Shs<strong>'.$product['product_price'].'</strong></p>
                </div>
                <div class="cart mt-2">
                <form method="post" action="" >
                    <input type="hidden" name="cart"  value="'.$product['product_id'].'">
                    <button type="submit"  class="btn btn-light w-100 add">Add to cart</button>
                </form>
                </div>
                </div>
                </div>
                
                ';}
            }
            $html .= '</div>';
        }
        return $html;

    }

    public function getProductById($product_id){
        $sql = "SELECT * FROM `product` WHERE `product_id` = '$product_id' ";
        $result = $this->conn->query($sql) or die($this->conn->error);
        // var_dump($result);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $product[] = $row;
            }
        }
        return $product ?? [];
    }
}