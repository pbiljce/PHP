<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>webChallenge57</title>
    <style>
        .image{
            display:inline-block;
            margin:5px;
        }
        p{
            padding:0;
            margin:0;
        }
    </style>
</head>
<body>
    <?php
        $heroesRaw = array(
            array("Cho'Gall",15,"https://us.battle.net/heroes/static/images/heroes/busts/chogall.jpg"),
            array("The lost vikings",5,"https://us.battle.net/heroes/static/images/heroes/busts/the-lost-vikings.jpg"),
            array("Tychus",12,"https://us.battle.net/heroes/static/images/heroes/busts/tychus.jpg"),
            array("Valla",25,"https://us.battle.net/heroes/static/images/heroes/busts/valla.jpg")
        );
        $a = [];
        for($i = 0; $i < count($heroesRaw); $i++){
                $grade = $heroesRaw[$i][1];
                $a[$grade] = $heroesRaw[$i];
        }
        ksort($a);
        foreach($a as $heroesRaw){
            $src = $heroesRaw[2];
            $title = $heroesRaw[0];
            $grade = $heroesRaw[1];
            echo "<div class='image'><img src='$src' alt='$title' image='$title'><p>Name: $title</p><p>Grade: $grade</p></div>";
    }
    ?>
</body>
</html>