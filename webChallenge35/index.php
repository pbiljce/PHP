<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>webChallenge34</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <?php
        $currentTemperature = mt_rand(0,45);
        $rain = mt_rand(0,1) == 1;
        $mud = mt_rand(0,1) == 1;
        $image = $suggestedBoots = $suggestedJacket = $suggestedShirt = "";

        if($rain || $mud){
            if($rain){
                $image = "<img src='images/oblak.png' alt='oblak' image='oblak'>";
                $suggestedBoots = "Boots";
            }
            else{
                $suggestedBoots = "Boots";
            }
        }
        if($currentTemperature > 25 && !$rain){
            $image = "<img src='images/sunce.png' alt='sunce' image='sunce'>";
            $suggestedShirt = "Shirt";
        }
        if($currentTemperature < 26){
            $suggestedJacket = "Jacket";
        }
    ?>
    <div>
        <h1>Weather forecast</h1>
        <p><?=$image?></p>
        <p>Current temperature:<?=$currentTemperature?>&#8451;</p>
        <h4>Suggested clothes</h4>
        <p><?php echo $suggestedBoots . " " . $suggestedJacket . " " . $suggestedShirt?></p>
    </div>
</body>
</html>