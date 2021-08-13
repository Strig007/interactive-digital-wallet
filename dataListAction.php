<style>
    table {
        width: 50%;
        border-collapse: collapse;
    }

    table,
    td,
    th {
        border: 1px solid black;
        padding: 5px;
    }

    th {
        text-align: left;
    }
</style>

<?php
    require 'DbRead.php';
    $datetime = empty($_GET["datetime"]) ? "" : $_GET["datetime"];
    if (empty($datetime))
    {
        $dataList = getAll();
    }
    else
    {
        $datetime = $datetime . "%";
        $dataList = getOne($datetime);
    }

    echo "<b>TOTAL RECORDS: </b>" . "<b>(</b>" . "<b>" . count($dataList) . "</b>" .
    "<b>)</b>"; 
    echo "<br><br>";

    if (count($dataList) > 0)
    {
        echo "<table>";
        echo "<tr>";
        echo "<th> Transaction Category </th>";
        echo "<th> To </th>";
        echo "<th> Amount </th>";
        echo "<th> Transferred On </th>";
        echo "</tr>";

        for ($i = 0; $i < count($dataList); $i++)
        {
            echo "<tr>";
            echo "<td>". $dataList[$i]["category"] . "</td>";
            echo "<td>". $dataList[$i]["phone"] . "</td>";
            echo "<td>". $dataList[$i]["amount"] . "</td>";
            echo "<td>". $dataList[$i]["time"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    
    else
    {
        echo "Data not found! Please try again!";
    }
?>