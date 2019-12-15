<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Heroes</title>
    <style>
        .image{
            display:inline-block;
            margin:10px;
            border:3px solid #de3526;
        }
        p{
            text-align:center;
        }
    </style>
</head>
<body>
    <?php
        function PrikazHeroja($niz1,$niz2){
            echo "<div class='image'><img src='$niz1' alt='$niz2' title='$niz2'><p>$niz2</p></div>";
            return;
        }

        $images = array("superman.png", "spiderman.png","batman.png");
        $names = array("Superman", "Spiderman", "Batman");

        array_map("PrikazHeroja",$images,$names);
    ?>
</body>
</html>