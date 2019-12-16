<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>webChallenge59</title>
    <style>
        div{
            background: #dcddde;
            border: 1px solid black;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            padding:30px;
            width:60px;
            height: 60px;
            margin-bottom:10px;
        }
    </style>
</head>
<body>
    <?php
        $arr = array( "Anakin", "Luke", "Leia", "Obi-wan" ,"Bobba","Palpatine", "Padme", "Yoda");
        $arrLenght = count($arr);
        for($i = 0; $i < $arrLenght; $i++){            
            if($i%3 == 0 && $i != 0){
                echo "<br>";
                echo "<div>$arr[$i]</div>";
            }
            else {
                echo "<div>$arr[$i]</div>";
            }               
        }
    ?>
</body>
</html>
