<?php

class DatabaseObject
{
    private $conn;

    public function __construct($host, $user, $password, $name, $port)
    {
        $this->conn = mysqli_connect($host, $user, $password, $name, $port);
        if (!$this->conn) {
            throw new Ex
            }
    }

}


?>