<?php
    $prviBroj = mt_rand(0,100);
    $drugiBroj = mt_rand(0,100);
    $operator = array("+","-","*","/");
    $operatorIzbor = mt_rand(0,3);

    function racunskaOperacija($a,$b,$operator){
        if($operator == "+"){
            return $a + $b;
        }
        elseif($operator == "-"){
            return $a - $b;
        }
        elseif($operator == "*"){
            return $a * $b;
        }
        elseif($operator == "/"){
            if ($b==0){
                return "Greška - dijeljenje sa nulom";
            }
            else {
                return $a/$b;
            }
        }
    }

    echo $prviBroj . $operator[$operatorIzbor] . $drugiBroj . "=" . racunskaOperacija($prviBroj,$drugiBroj,$operator[$operatorIzbor]);
?>
