<?php

    require 'DbConnect.php';

    function send($category, $phone, $amount, $time)
    {
        $conn = connect();
        $sql = $conn->prepare("INSERT INTO transactions (category, phone, amount,
        time) VALUES (?,?,?,?)");
        $sql->bind_param("ssis", $category, $phone, $amount, $time);
        return $sql->execute();
    }

?>