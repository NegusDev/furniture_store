<?php

class Wishlist extends DbController{

    public function inserIntoWishlist( $data) {
        //get columns
        $columns = implode(',', array_keys($data));
        $values = "'" . implode("','", array_values($data)) . "'";

        $sql = sprintf("INSERT INTO %s(%s) VALUES(%s)", 'wishlist', $columns, $values);
        $result = $this->conn->query($sql) or die($this->conn->error);
        return $result;
   }
    
}