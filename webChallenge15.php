<?php
    $potrosnjaGoriva = 7;
    $rezervoarStanje = 15;
    $ukupanPut = 200;
    $vrstaGoriva = "benzin";
    $cijenaGoriva = 2.26;
    define("KM", "km");
    define("ZAPREMINA","zapremina");
    define("JEDINICA_POTROSNJE","litara na sto kilometara");
    define("VALUTA","KM");
    $predjenPut = $rezervoarStanje / $potrosnjaGoriva * 100;
    $predjenPut = round($predjenPut,2);
    $potrosnja = $ukupanPut * $potrosnjaGoriva / 100;
    $troskoviPuta = $potrosnja * $cijenaGoriva;
    if($predjenPut < $ukupanPut){
        $putPreostalo = $ukupanPut - $predjenPut;
        $potrosnjaDodatna = $putPreostalo * $potrosnjaGoriva / 100;
        echo "Automobil ne može preći put od " . $ukupanPut . " " . KM . " a da ne sipa gorivo. ";
        echo "Da bi prešao cijeli put potrebno je da naspe još " . $potrosnjaDodatna . " litara goriva. ";
        echo "Pređeni put će ukupno koštati " . $troskoviPuta . VALUTA . ".";
    }
    else{
        echo "Automobil pređe put od " . $ukupanPut. " " . KM . " i pri tom potroši " . $potrosnja . 
        " litara goriva, te ukupan put košta " . $troskoviPuta . VALUTA . ".";
    }
?>