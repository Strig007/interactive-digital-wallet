<?php

    function connect()
    {
        $conn = new mysqli("localhost","strig","1234","digital-wallet");
        if($conn->connect_errno)
        {
            die("Database connection failed..." . $conn->connect_error);
        }   
        return $conn;
    }

?>