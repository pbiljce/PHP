<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>webChallenge45</title>
</head>
<style>
    *{
        margin:0;
        padding:0;
    }
    div{
        border: 2px solid black; 
        width: 160px;
        line-height:10px;
    }
    .field{
        display:inline-block; 
        width:20px; 
        height:20px;
    }
    .black{
        background:black;
    }
    .white{
        background:white;
    }
</style>
<body>
    <?php
    echo "<div>";
    for($j = 1; $j <= 8; $j++){
        if($j % 2){
            for($i = 1; $i <= 8; $i++){
                if($i % 2){
                    echo "<span class='field white'></span>";
                }
                else{
                    echo "<span class='field black'></span>";
                }
            }
        }
        else{
            for($k = 1; $k <= 8; $k++){
                if($k % 2){
                    echo "<span class='field black'></span>";
                }
                else{
                    echo "<span class='field white'></span>";
                }
            }
        }
    }
    echo "</div>";
    ?>
</body>
</html>