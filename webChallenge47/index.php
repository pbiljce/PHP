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
        $images = array("superman.png", "spiderman.png","batman.png");
        $titles = array("Superman", "Spiderman", "Batman");

        for($i = 0; $i < count($images); $i++){
            echo "<div class='image'><img src='$images[$i]' alt='$titles[$i]' title='$titles[$i]'><p>$titles[$i]</p></div>";
        }
    ?>
</body>
</html>