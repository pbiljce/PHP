<?php
    $niz = array(
        array(1, 2, 3),
        array(2, 2, 3),
        array(3, 2, 3),
    );

    for($i = 0; $i < count($niz); $i++){
        for($j = 0; $j < count($niz[$i]); $j++){
            echo $niz[$i][$j];
        }
        echo "<br>";
    }
?>
