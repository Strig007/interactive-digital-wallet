<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="data.js"></script>
</head>
<body>
    <h1>Page 1 [Home]</h1>
    <h2>Digital Wallet</h2>
    1. <a href="home.php">Home</a>
    2. <a href="history.php">Transaction History</a>
    <br><br>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" 
       name="transactionForm" onsubmit="submitForm(this); return false;">
        <h2>Fund Transfer: </h2>
        <br>
        <label for="category">Select Category: </label>
        <select name="category" id="category">
            <option value="">Select An Option</option>
            <option value="mobile_recharge">Mobile Recharge</option>
            <option value="send_money">Send Money</option>
            <option value="merchant_pay">Merchant Pay</option>
        </select>
        <span style="color: red;" id="categoryError"></span>
        <br><br>

        <label for="to">To: </label>
        <input type="text" id="to" name="to"> <span style="color: red;" id="phoneError"></span>
        <br><br>
        <label for="amount">Amount: </label>
        <input type="number" id="amount" name="amount"> <span style="color: red;" id="amountError"></span>

        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <br><br>
    <h3 id="message"></h3>

</body>
</html>