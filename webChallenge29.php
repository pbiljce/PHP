<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>webChallenge29</title>
</head>
<body>
    <?php
        #Kreiranje tri proizvoda
        $firstProduct = "Jakna";
        $secondProduct = "Košulja";
        $thirdProduct = "Džemper";

        #Kreiranje tri cijene
        $firstProductPrice = mt_rand(10,100);
        $secondProductPrice = mt_rand(10,100);
        $thirdProductPrice = mt_rand(10,100);

        #Ispitivanje cijene prvog proizvoda i ispisivanje da li je ta cijena niska, srednja ili visoka
        if($firstProductPrice >= 10 && $firstProductPrice <= 40){
            echo $firstProduct . " košta " . $firstProductPrice . " KM i ta cijena je niska.<br>" ;
        }
        elseif($firstProductPrice > 40 && $firstProductPrice < 70){
            echo $firstProduct . " košta " . $firstProductPrice . " KM i ta cijena je srednja.<br>" ;
        }
        elseif($firstProductPrice >= 70 && $firstProductPrice <= 100){
            echo $firstProduct . " košta " . $firstProductPrice . " KM i ta cijena je visoka.<br>" ;
        }

        #Ispitivanje cijene drugog proizvoda i ispisivanje da li je ta cijena niska, srednja ili visoka
        if($secondProductPrice >= 10 && $secondProductPrice <= 40){
            echo $secondProduct . " košta " . $secondProductPrice . " KM i ta cijena je niska.<br>" ;
        }
        elseif($secondProductPrice > 40 && $secondProductPrice < 70){
            echo $secondProduct . " košta " . $secondProductPrice . " KM i ta cijena je srednja.<br>" ;
        }
        elseif($secondProductPrice >= 70 && $secondProductPrice <= 100){
            echo $secondProduct . " košta " . $secondProductPrice . " KM i ta cijena je visoka.<br>" ;
        }

        #Ispitivanje cijene trećeg proizvoda i ispisivanje da li je ta cijena niska, srednja ili visoka
        if($thirdProductPrice >= 10 && $thirdProductPrice <= 40){
            echo $thirdProduct . " košta " . $thirdProductPrice . " KM i ta cijena je niska.<br>" ;
        }
        elseif($thirdProductPrice > 40 && $thirdProductPrice < 70){
            echo $thirdProduct . " košta " . $thirdProductPrice . " KM i ta cijena je srednja.<br>" ;
        }
        elseif($thirdProductPrice >= 70 && $thirdProductPrice <= 100){
            echo $thirdProduct . " košta " . $thirdProductPrice . " KM i ta cijena je visoka.<br>" ;
        }
    ?>
</body>
</html>