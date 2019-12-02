<?php
    require 'model.php';
    $message = "";

    if($userStatus == 1){
        $message = "Welcome administrator";
        $class = "admin";
    }
    elseif($userStatus == 2){
        $message = "Welcome user";
        $class = "user";
    }
    else{
        $message = "Unknown user type";
        $class = "unknown";
    }
    
    #switch case struktura
    /*switch($userStatus){
        case '1':
            $message = "Welcome administrator";
            $class = "admin";
        break;
        case '2':
            $message = "Welcome user";
            $class = "user";
        break;
        default:
            $message = "Unknown user type";
            $class = "unknown";
        break;
    }*/
?>
