<?php

class Cart extends DbController {
    
    public function inserIntoCart($table, $data) {
         //get columns
         $columns = implode(',', array_keys($data));
         $values = "'" . implode("','", array_values($data)) . "'";
 
         $sql = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);
         $result = $this->conn->query($sql) or die($this->conn->error);
         return $result;
    }


    public function getTotalCart($table = 'cart') {
        $result = $this->conn->query("SELECT * FROM {$table}") or die($this->conn->error);
        $num = mysqli_num_rows($result);
        return $num;
    }

    public function getCart($session) {
        $sql = "SELECT * FROM `cart` WHERE `user_id` = '$session'";
        $result = $this->conn->query($sql) or die($this->conn->error);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $cart[] = $row;
            }

        }
        return $cart ?? [];
    }

    public function calculateSubTotal($arr) {
        if (isset($arr)) {
            $sum = 0;
            foreach ($arr as $item) {
                $sum += floatval($item[0]); 
            }
            return sprintf('%.2f',$sum);
        }
    }

    public function deleteCartItem($product_id, $table) {
        if ($product_id != null) {
            $sql = "DELETE FROM $table WHERE `product_id` = '$product_id'";
            $result = $this->conn->query($sql) or die($this->conn->error);
            return $result;
        }
    }

    public function clearCartList($table) {
        $sql = "TRUNCATE {$table}";
        $result = $this->conn->query($sql) or die($this->conn->error);
        return $result;

    }

    public function getCartId($cartArray , $key = 'product_id') {
        
        $cart_id = array_map(function($value) use($key){
            return $value[$key];
        }, $cartArray);
        return $cart_id;
        
    }
}












    // public function addToCart($userid, $product_id) {
    //     if (isset($userid) && isset($product_id)) {

    //         $cart_id = rand(time(),2000);
    //         $data = [
    //             "cart_id" => $cart_id,
    //             "user_id" => $userid,
    //             "product_id" => $product_id
    //         ];

    //         $result = $this->inserIntoCart('cart', $data);
    //         if ($result) {
    //             header("location".$_SERVER['PHP_SELF']);
    //         }else{
    //             die('failed');
    //         }
    //     }

    // }