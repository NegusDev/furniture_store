<?php

class Wishlist extends DbController{

    public function inserIntoWishlist($data) {
        //get columns
        $columns = implode(',', array_keys($data));
        $values = "'" . implode("','", array_values($data)) . "'";

        $sql = sprintf("INSERT INTO %s(%s) VALUES(%s)", 'wishlist', $columns, $values);
        $result = $this->conn->query($sql) or die($this->conn->error);
        return $result;
   }
   public function getWishlist($session) {
        $sql = "SELECT * FROM `wishlist` WHERE `user_id` = '$session'";
        $result = $this->conn->query($sql) or die($this->conn->error);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $wishlist[] = $row;
            }

        }
        return $wishlist ?? [];
    }

    public function deleteWishlistItem($product_id, $table) {
        if ($product_id != null) {
            $sql = "DELETE FROM $table WHERE `product_id` = '$product_id'";
            $result = $this->conn->query($sql) or die($this->conn->error);
            return $result;
        }
    }

    public function getWishlistId($cartArray , $key = 'product_id') {
        $wishlist_id = array_map(function($value) use($key){
            return $value[$key];
        }, $cartArray);
        return $wishlist_id;
        
    }
    
}