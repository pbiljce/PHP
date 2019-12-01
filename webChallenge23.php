<?php
    $currentTime = date("H");
    $userAge = 35;
    $userName = "Joan";
    $userGender = "f";
    $timeMessage = "morning";
    $userMessage;

    if($currentTime > 0 && $currentTime < 12){
        $timeMessage = "morning";
    }
    elseif($currentTime >= 12 && $currentTime < 18){
        $timeMessage = "day";
    }
    else{
        $timeMessage = "evening";
    }

    $userMessage = "Good " . $timeMessage . ", nice";

    switch($userGender){
        case "m":
            $userMessage = (($userAge < 18)? "boy" : "man");
        break;
        case "f":
            $userMessage = (($userAge < 18)? "girl" : "woman");
        break;
        default:
            $userMessage = "someone";
        break;
    }

    echo $userMessage . " " . $userName . " and welcome to our site!" . PHP_EOL;
    echo "Your age is, " . $userAge . "!" . PHP_EOL;
    echo "Current time is, " . $currentTime . "h!";
?>
