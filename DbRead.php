<?php

    require 'DbConnect.php';
    function getAll()
    {
        $conn = connect();
        $sql =  $conn->prepare("SELECT category, phone, amount, time FROM transactions");
        $sql->execute();
        $res = $sql->get_result();
        return $res->fetch_all(MYSQLI_ASSOC);
    }

    function getOne($datetime)
    {
        $conn = connect();
        $sql =  $conn->prepare("SELECT category, phone, amount, time FROM transactions 
        WHERE time LIKE ?");
        $sql->bind_param("s", $datetime);
        $sql->execute();
        $res = $sql->get_result();
        return $res->fetch_all(MYSQLI_ASSOC);
    }

?>