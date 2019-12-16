<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>webChallenge58</title>
    <style>
        p{
            background: #dcddde;
            border: 1px solid black;
            font-family:Times;
            margin:3px;
            padding:3px;
        }
    </style>
</head>
<body>
    <?php
        $arr = array("TV", "Car", "Computer", "Phone"); 
        foreach($arr as $list){
            echo "<p>$list</p>";
        }
    ?>
</body>
</html>