<?php
    $playersPerMatch = array(3,2,5,1,2,3,4,5);
    for($i = 0; $i < count($playersPerMatch); $i++){
        $playerMatch[] = array_fill(0,$playersPerMatch[$i],"igrac");
    }
    print_r($playerMatch);
?>