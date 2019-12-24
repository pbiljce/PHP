<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vjezba 64</title>
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
    <form action="" method="get">
        <label for="search">Pretraga</label>
        <input type="text" name="search">
        <input type="submit" value="Pretraži">
    </form> 
    <hr>
    <?php
        $connection = mysqli_connect("localhost","root","","superheroes");
        mysqli_set_charset($connection,"utf8");

        if(!empty($_GET["search"]) && isset($_GET["search"])){
            $search = $_GET["search"];

            $result = mysqli_query($connection,"select * from heroes where firstname = '$search' or lastname = '$search' or alias = '$search'");
            
            if(mysqli_num_rows($result) > 0){
                while($hero = mysqli_fetch_assoc($result)){
                    echo "<div>";
                    echo "<h2>" . $hero['alias'] . "</h2>";
                    echo "<img src='{$hero['imageurl']}'/><a href='{$hero['descriptionurl']}'>Read more</a>";
                    echo "</div>";
                }
            }else{
                echo "Ne postoji traženi junak u bazi podataka.";
            }
        }else{
            echo "Unesite ime, prezime ili alijas junaka po kojem ćete pretraživati";
        }
    ?>
</body>
</html>
