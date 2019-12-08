<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>wewbChallenge34</title>
</head>
<body>
    <?php
        $currentTemperature = mt_rand(0,45);
        $rain = mt_rand(0,1) == 1;
        $mud = mt_rand(0,1) == 1;

        if($rain || $mud){
            if($rain){
                echo "<img src='oblak.png' alt='oblak' image='oblak'>Preporučena obuća: čizme<br>";
            }
            else{
                echo "Preporučena obuća: čizme<br>";
            }
        }
        if($currentTemperature > 25 && !$rain){
            echo "<img src='sunce.png' alt='sunce' image='sunce'>Preporučena odjeća: majica<br>";
        }
        if($currentTemperature < 26){
            echo "Preporučena odjeća: jakna<br>";
        }
    ?>
</body>
</html>