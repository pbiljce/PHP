<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>webChallenge44</title>
</head>
<body>
    <?php
        $x = 15;
        $y = 15;

        for($i = 1; $i <= $y; $i++){
            for ($j=1; $j <= $x; $j++) { 
                if($j == 1 || $j == $x || $i == 1 || $i == $y){
                    echo "X";
                }
                elseif($i == $j){
                    echo "O";
                }
                else{
                    echo "H";
                }
            }
            echo "<br>";
        }
    ?>    
</body>
</html>