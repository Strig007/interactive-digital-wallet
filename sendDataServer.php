<?php
    require 'DbSend.php';
    $category = $to = $amount = "";
    $categoryErr = $toErr = $amountErr = "";
    $toNumberErr = "";
    $amountNegative = "";
    $flag = true;
    $time = date("Y-m-d H:i:s");
    if($_SERVER['REQUEST_METHOD'] === "POST")
    {
        $category = test_input($_POST["category"]);
        $to = test_input($_POST["to"]);
        $amount = test_input($_POST["amount"]);
        if (empty($category))
        {
            $CategoryErr = "Category Cannot Be Empty!";
            $flag = false;
        }
        if (empty($to))
        {
            $toErr = "Please write mobile number!";
            $flag = false;
        }
        if (strlen($to) != 11)
        {
            $toNumberErr = "Number is not valid";
            $flag = false;
        }
        if (empty($amount) or $amount==0)
        {
            $amountErr = "Amount Cannot Be Empty!";
            $flag = false;
        }
        elseif ($amount < 0)
        {
            $amountNegative = "Amount Cannot Be Negative";
            $flag = false;
        }

        if ($flag == true)
        {
            
            $result = send($category, $to, $amount, $time);
            if ($result)
            {
                echo "Successfully Submitted!";
            }   
            else
            {
                echo "Error While Saving Data!";
            }

        }

    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
}
?>