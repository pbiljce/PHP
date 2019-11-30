<?php
    $studenti = 1;
    $profesori = 2;
    $koordinatoriNastave = 4;
    $tehnickaPodrska = 8;

    $korisnik = 8;
    $dozvoljenPristup = $koordinatoriNastave | $tehnickaPodrska;

    if(($korisnik & $dozvoljenPristup)!=0){
        echo "Dio dostupan koordinatorima nastave i tehničkoj podršci<br>";
    }

    echo "Dio dostupan svima";
?>