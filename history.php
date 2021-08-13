<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
    <script src="search.js"></script>
</head>
<body>
    <h1>Page 2 [Transaction History]</h1>
    <h2>Digital Wallet</h2>
    1. <a href="home.php">Home</a>
    2. <a href="history.php">Transaction History</a>
    <br><br>

    <form action="dataListAction.php" method="GET"
    name="historyForm" onsubmit="getData(this);return false;">

    <input type="text" name="datetime">
    <input type="submit" name="submit" value="Search">
    
    </form>

    <br><br>
    <div id="result"></div>
    <br><br>

    
</body>
</html>