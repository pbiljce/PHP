<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    div{
        text-align:center;
        width:200px;
        height:450px;
        border:1px solid gray;
        padding:5px;
    }
    h2{
        margin: 10px;
    }
    img{
        width:200px;
    }
</style>
<body>
    <?php
        $connection = mysqli_connect("localhost","root","","superheroes");
        mysqli_set_charset($connection,"utf8");

        $heroeid = 1;
        $heroe = mysqli_query($connection,"select * from heroes where id = $heroeid");
        $heroeArray = mysqli_fetch_row($heroe);

        echo "<div>";
            echo "<h2>" . $heroeArray[3] . "</h2>";
            echo "<img src='{$heroeArray[4]}'/><a href='{$heroeArray[5]}'>Read more</a>";
        echo "</div>";

    ?>
</body>
</html>
