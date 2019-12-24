<?php
    $connection = mysqli_connect("localhost","root","","users");

    mysqli_set_charset($connection,"utf8");

    $table1 = mysqli_query($connection,"select * from users_table1");

    while($row = mysqli_fetch_assoc($table1)){
        $id = $row["id"];
        $username = $row["username"];
        $password = $row["password"];
        $creationdate = $row["creationdate"];
        mysqli_query($connection,"insert into users_table2 values($id,'$username','$password','$creationdate')");
    }
?>