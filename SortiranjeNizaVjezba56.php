<?php
    function sortiranjeNiza($niz,$sortiranje){
        if($sortiranje=="desc"){
            rsort($niz);
        }
        else{
            sort($niz);
        }
        foreach($niz as $n){
            echo $n . " ";
        }
    }

    $niz = array(5,4,8,47,89,15,7,28,6,46,22);

    sortiranjeNiza($niz,"desc");
?>
