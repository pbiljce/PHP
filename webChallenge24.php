<?php
    $name = "jkjkjkj---";
    $surname = "ooooo";
    $pfoneEmail = $gender = "";
    $birthDate = "01.12.2009";
    $password = "54656m";

    $date = date('d.m.Y');

    #Provjera da li su unijete sve vrijednosti
    if(empty($name)){
        echo "Unesite ime.<br>";
    }
    if(empty($surname)){
        echo "Unesite prezime.<br>";
    }
    if(empty($phoneEmail)){
        echo "Unesite broj telefona ili email.<br>";
    }
    if(empty($password)){
        echo "Unesite lozinku.<br>";
    }
    if(empty($gender)){
        echo "Odaberite pol.<br>";
    }

    #Provjera da li se ime i prezime sastoje samo od velikih i malih slova - PHP Regular Express - https://www.guru99.com/php-regular-expressions.html
    if(!preg_match('/^[a-zA-Z]+$/',$name)) {
        echo "Unesite ispravno ime.<br>";
     }
    if(!preg_match('/^[a-zA-Z]+$/',$surname)) {
        echo "Unesite ispravno prezime.<br>";
    }

    #Provjera kompleksnosti lozinke -  strlen ( string $string ) : int - Returns the length of the given string. 
    $letters = preg_match('/[a-zA-Z]/',$password);
    $numbers = preg_match('/[0-9]/',$password);
    if(!$letters || !$numbers || strlen($password) < 8){
        echo "Lozinka mora biti duža od 8 karaktera, mora sadržavati najmanje jedan karakter i najmanje jedan broj.<br>";
    }

    #Provjera godina korisnika - strtotime — Parse about any English textual datetime description into a Unix timestamp
    $yearNumber = round((strtotime($date) - strtotime($birthDate))/ 86400 / 365);
    if($yearNumber < 13){
        echo "Korisnik ima manje od 13 godina i ne može se registrovati.";
    }
?>
