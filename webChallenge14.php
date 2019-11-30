<?php
    $potrosnjaGoriva = 7;
    $rezervoarstanje = mt_rand(0,40);
    $ocekivanaDistanca = 150;
    define("DISTANCA","km");
    define("ZAPREMINA","l");
    define("MJERA_POTROŠNJE","litara na sto kilometara");

    $predjeniPut = $rezervoarstanje / $potrosnjaGoriva * 100;
    $potrosenoGoriva = $ocekivanaDistanca * $potrosnjaGoriva / 100;

    if($predjeniPut > $ocekivanaDistanca){
        echo "U rezervoaru se nalazi " . $rezervoarstanje . ZAPREMINA . " što je dovoljno da se pređe put od " . $ocekivanaDistanca . DISTANCA . ". Pri tome će se potrošiti " . $potrosenoGoriva . ZAPREMINA . " goriva.";
    }
    else{
        $putPreostalo = $ocekivanaDistanca - $predjeniPut;
        $potrebnoGoriva = round($putPreostalo * $potrosnjaGoriva / 100,0);
        echo "U rezervoaru se nalazi " . $rezervoarstanje . ZAPREMINA . " što nije dovoljno da se pređe put od " . $ocekivanaDistanca . DISTANCA . ", jer automobil troši " . $potrosnjaGoriva . MJERA_POTROŠNJE . ". Da bi prešli ukupan put, potrebno je nasuti najmanje " . $potrebnoGoriva . ZAPREMINA . " goriva.";
    }
?>
