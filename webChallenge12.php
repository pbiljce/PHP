<?php
    $nazivRestorana = "Restoranče";
    $latituda = 43.827021;
    $longituda = 18.3625171;
    $ocjenaRestorana = 5;
    $statusRestorana = "Otvoren";
    $brojTelefona = "+38765123456";

    echo "Restoran: " . $nazivRestorana . "<br>";
    echo "<a href='https://maps.google.com?q=$latituda,$longituda'>Lokacija restorana</a><br>";
    echo "Ocjena restorana: " . $ocjenaRestorana . "<br>";
    echo "Status restorana: " . $statusRestorana . "<br>";
    echo "Broj telefona: " . $brojTelefona;
?>
