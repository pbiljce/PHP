<?php
    function obrtanjeStringa($string){
        $stringArray = str_split($string);
        
        for($i = count($stringArray)-1;$i >= 0; $i--){
            $stringArrayReverse[] = $stringArray[$i];
        }

        $stringReverse = implode($stringArrayReverse);

        if($string === $stringReverse){
            echo $string . " - Ovo je palindrom";
        }
        else{
            echo $string . " - Ovo nije palindrom";
        }
    }

    obrtanjeStringa("sirimamiris");
?>
