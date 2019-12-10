<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>webChallenge40</title>
</head>
<body>
    <?php
        if(isset($_GET['prvi']) && !empty($_GET['prvi'] && $_GET['zadnji']) && !empty($_GET['zadnji'])){
            $prviBroj = $_GET['prvi'];
            $drugiBroj = $_GET['zadnji'];
            $zbir = 0;

            for($i = $prviBroj; $i <= $drugiBroj; $i++){
                $zbir += $i;
            }
            echo "<h3>Zbir svih brojeva između " . $prviBroj . " i " . $drugiBroj . ", uključujući i te brojeve je " . $zbir . "</h2>";
        }
        else{
            echo "<h3>Unesite početni i krajnji broj.</h3><br>";
        }
    ?>
    <form action="">
        Unesite početni broj: <input type="text" name="prvi">
        Unesite krajnji broj: <input type="text" name="zadnji">
        <input type="submit" value="Saberi sve brojeve između početnog i krajnjeg">
    </form>
</body>
</html>