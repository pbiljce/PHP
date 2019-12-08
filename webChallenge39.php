<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>webChallenge39</title>
</head>
<body>
    <?php
        if(isset($_GET['find']) && !empty($_GET['find'] && $_GET['sentence']) && !empty($_GET['sentence'])){
            $karakter = $_GET['find'];
            $recenica = $_GET['sentence'];
            $broj = 0;
            for ($i=0; $i < strlen($recenica); $i++) { 
                if($karakter == substr($recenica,$i,1)){//substr(string,start,length)
                    $broj++;
                }
            }
            echo "<h3>Slovo " . "'" . $karakter . "'" . " se pojavljuje " . $broj . " puta u rečenici.</h3><br>";
            //echo substr_count($recenica,$karakter);
        }
        else{
            echo "<h3>Unesite tražene vrijednosti u polja.</h3><br>";
        }
    ?>
    <form action="">
        Unesite slovo koje tražite: <input type="text" name="find">
        Unesite rečenicu: <input type="text" name="sentence">
        <input type="submit" value="Traži" name="search">
    </form>
</body>
</html>