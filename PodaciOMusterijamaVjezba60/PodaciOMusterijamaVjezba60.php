<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    table{
        width:100%;
    }
    table, tr, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding:3px;
    }
    .bgcolor{
        background:lightgrey;
    }
</style>
<body>
    <?php
        $connection = mysqli_connect("localhost","root","","my_company");
        
        mysqli_set_charset($connection,"utf8");

        $result = mysqli_query($connection,"select * from customers");
        echo "<table>";
            echo "<tr class='bgcolor'>";
                echo "<td>Id</td>";
                echo "<td>Username</td>";
                echo "<td>Email</td>";
            echo "</tr>";
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                    echo "<td>" . $row["customer_id"] . "</td>";
                    echo "<td>" . $row["customer_name"] . "</td>";
                    echo "<td>" . $row["customer_email"] . "</td>";
                echo "</tr>";
            }
        echo "</table>";
    ?>
</body>
</html>

