<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>webChallenge41</title>
    <style>
        .bingoBall {
            height: 20px;
            width: 20px;
            background-color: lightblue;
            border-radius: 50%;
            display: inline-block;
            text-align: center;
            padding:10px;
            border:1px solid grey;
        }
        .redNumber{
            color:red;
        }
    </style>
</head>
<body>
    <?php
        #Odabrani broj
        $brojKorisnika = 25;

        #Generisanje pet random brojeva i provjera da se generisani brojevi ne ponavljaju
        $broj1 = mt_rand(1,25);
        do {
            $broj2 = mt_rand(1,25);
        }
        while($broj2 == $broj1);

        do {
            $broj3 = mt_rand(1,25);
        }
        while($broj3 == $broj2 || $broj3 == $broj1);

        do {
            $broj4 = mt_rand(1,25);
        }
        while($broj4 == $broj3 || $broj4 == $broj2 || $broj4 == $broj1);

        do {
            $broj5 = mt_rand(1,25);
        }
        while($broj5 == $broj4 || $broj5 == $broj3 || $broj5 == $broj2 || $broj5 == $broj1);

        #Poređenje odabranog broja sa generisanim brojevima i ispis generisanih brojeva
        for ($i=1; $i <= 5; $i++) { 
            $brojevi = 'broj'.$i; 
            if($$brojevi == $brojKorisnika) { //https://www.php.net/manual/en/language.variables.variable.php
                echo "<span class = 'bingoBall redNumber'>" . $$brojevi . "</span>&nbsp";
            }
            else{
                echo "<span class = 'bingoBall'>" . $$brojevi . "</span>&nbsp";
            }
        }
    ?> 
</body>
</html>

