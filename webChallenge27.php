<?php
    $user = "administrator";
    $pass = "123456!";

    $validUser = "admin";
    $validPass = "123456!";

    if($user == $validUser && $pass == $validPass){
        echo "Uspješno ste se logovali";
    }
    else {
        echo "Pogrešno korisničko ime ili lozinka";
    }
?>
