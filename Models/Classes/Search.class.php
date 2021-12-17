<?php

class Search extends DbController {

    public function search($name){
        $sql = "SELECT product.*, category.category_name FROM product
                LEFT JOIN category ON product.category_id = category.id
                WHERE `product_name` LIKE '$name%'
                LIMIT 12";
        $result = $this->conn->query($sql) or die($this->conn->error);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $search[] = $row;
            }
        }
        return $search ?? [];
    }

    public function viewSearched(array $search):string {
        global $Cart;
        $html = '<div class="row">';
        if (empty($search)) {
            $html .= '
            <div class="col-12 product-box py-2 px-2 my-2 rounded-2">
                <div class="alert alert-danger">Ivalid Search</div>
            </>           
            ';
        }else {
            foreach ($search as $s) {
                if (!empty(in_array($s['product_id'], $Cart->getCartId($Cart->getCart('cart'))))) {
                    $html .= '
                    <div class="col-md-3 col-6">
                    <div class="product-box py-2 px-2 my-2 rounded-2">
                    <form method="post" >
                        <input type="hidden" name="add_fav" value="'.$s['product_id'].'">
                        <button type="submit"  class="btn btn-heart fas fa-heart"></button>
                    </form>
                    <div class="product-img mt-3">
                    <a href="/product?product_id='.$s['product_id'].'">
                    <img src="'.$s['product_image'].'" class="img-fluid">
                    </a>
                    </div>
                    <h6 class="text-center">'.$s['product_name'].'</h6>
                   
                    <div class="price mt-2">
                    <p class="text-center">Shs<strong>'.$s['product_price'].'</strong></p>
                    </div>
                    <div class="cart mt-2">
                    <form method="post" action="" >
                        <input type="hidden" name="cart" value="'.$s['product_id'].'">
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
                <form method="post" >
                    <input type="hidden" name="add_fav" value="'.$s['product_id'].'">
                    <button type="submit" class="btn btn-heart fas fa-heart"></button>
                </form>
                <div class="product-img mt-3">
                <a href="/product?product_id='.$s['product_id'].'">
                <img src="'.$s['product_image'].'" class="img-fluid">
                </a>
                </div>
                <h6 class="text-center">'.$s['product_name'].'</h6>
               
                <div class="price mt-2">
                <p class="text-center">Shs<strong>'.$s['product_price'].'</strong></p>
                </div>
                <div class="cart mt-2">
                <form method="post" action="" >
                    <input type="hidden" name="cart"  value="'.$s['product_id'].'">
                    <button type="submit"  class="btn btn-light w-100 add">Add to cart</button>
                </form>
                </div>
                </div>
                </div>
                
                ';
                }
            }
            $html .= '</div>';
        }
        return $html;

    }
}