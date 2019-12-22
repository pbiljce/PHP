<?php
    function malaSlova($string){
        $stringWithoutSpace = explode(" ",$string);  
        $stringLower = "";
        $allLower = 1;//sva mala slova - true
        foreach($stringWithoutSpace as $s){
            if(ctype_lower($s)){
                $stringLower .= ucwords($s) . " ";
            } else {
                $allLower = 0;//ukoliko bilo koja od riječi ne sadrži sva mala slova, $allLower se postavlja na false i prekida se petlja
                break;
            }
        } 
        if ($allLower){
            echo $stringLower;
        } else {
            echo strtolower($string);
        }
    }

    malaSlova("ime prezime");
?>
