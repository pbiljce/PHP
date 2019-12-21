<?php
    $vijesti = array("Prva vijest","Druga vijest","Treća vijest","Četvrta vijest");
    $vijestIzbor = rand(0,3);

    function prikazVijesti($vijest){
        echo $vijest;
    }

    prikazVijesti($vijesti[$vijestIzbor]);
?>
