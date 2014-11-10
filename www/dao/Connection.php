<?php

class Connection {

    var $conn;

    function __construct() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $banco = "bazar_banco";

// Create connection
        $this->conn = new mysqli($servername, $username, $password, $banco);
        $this->conn->set_charset('utf8');
      


// Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        //echo "Connected successfully \n";
    }

    function getConnection() {
        return $this->conn;
    }

}

?>