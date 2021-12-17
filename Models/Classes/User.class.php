<?php

class User extends DbController {

    public function createUser($data) {
        $columns = implode(',', array_keys($data));
        $values = "'" . implode("','", array_values($data)) . "'";

        $sql = sprintf("INSERT INTO %s(%s) VALUES(%s)", 'user', $columns, $values);
        $result = $this->conn->query($sql) or die($this->conn->error);
        // var_dump($result);
        return $result;
    }

    // LOGIN
    public function userAuth($user_email, $password) {
        $sql ="SELECT * FROM `user`  WHERE `user_email`= '$user_email' AND `user_password` = '$password' " ;
        $result = $this->conn->query( $sql) or die($this->conn->error);
        return $result;  
    }
}