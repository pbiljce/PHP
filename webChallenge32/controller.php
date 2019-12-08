<?php
    require 'model.php';
    $message = "";

    switch($userStatus){
        case '3':
            $message = "Welcome superadministrator";
            $class = "superadmin";
        break;
        case '2':
            $message = "Welcome administrator";
            $class = "admin";
        break;
        case '1':
        $message = "Welcome user";
        $class = "user";
    break;
        default:
            $message = "Unknown user type";
            $class = "unknown";
        break;
    }
?>
