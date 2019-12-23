<?php
    $connection = mysqli_connect("localhost","root","","widget");
    mysqli_set_charset($connection,"utf8");

    $allNews = mysqli_query($connection,"select * from news");

    if (mysqli_num_rows($allNews) > 0) {
        while($row = mysqli_fetch_assoc($allNews)) {
            $newsArray[]=$row;
        }
        shuffle($newsArray);
        foreach($newsArray as $n){
            echo "<div style='border: 5px double black; padding:10px;width:200px;'>";
                echo "<h2>" . $n["title"] . "</h2>";
                echo  "<p>" . substr($n["content"],0,200) . "...</p>";
            echo "</div>";
        }
    } else {
        echo "0 results";
    }
?>

