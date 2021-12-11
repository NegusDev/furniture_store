<?php

class DbController {
    
    protected $hostname;
    protected $user;
    protected $password;
    protected $database;

    public $conn = null;

    public function __construct() {
        $this->hostname = "localhost";
        $this->user = "root";
        $this->password = "";
        $this->database = "furniture_store";

        $this->conn = new mysqli($this->hostname, $this->user,$this->password, $this->database);
        if ($this->conn->connect_error) {
            echo "failed to connect to database". $this->conn->connect_error;
        }
    }
}