<?php

class DatabaseObject
{
    private $conn;

    public function __construct($host, $user, $password, $name, $port)
    {
        $this->conn = mysqli_connect($host, $user, $password, $name, $port);
        if (!$this->conn) {
            throw new Exception("Error: Couldn't Establish a connection to Database!!");
        }
    }

    public function clean($raw_data)
    {
        return mysqli_real_escape_string($this->conn, $raw_data);
    }

}


?>