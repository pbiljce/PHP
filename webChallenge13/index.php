<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ITAcademy</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $adresa = "16 Zmaja od Bosne, Kubus D, Sarajevo 71000";
        $telefon = "033 788-525";
        $brojRecenzija = 12;
    ?>
    <div class="forma">
        <span><img src="images/firstImage.png" alt="Slika sale"></span>
        <span><a href="https://maps.google.com?q=ITAcademysarajevo" target="_blank"><img src="images/secondImage.png" alt="Mapa"></a></span>
        <h1>ITAcademy</h1>
        <button>Web lokacija</button>
        <button>Uputstva</button>
        <button>Sačuvaj</button>
        <p>Obrazovna ustanova</p>
        <hr>
        <p><strong>Adresa:</strong><?=$adresa?></p>
        <p><strong>Telefon:</strong><?=$telefon?></p>
        <p>Predložite izmjenu: Vlasnik ste ove kompanije?</p>
        <hr>
        <p><strong>Poznajete li ovo mjesto?</strong> Odgovorite na kratka pitanja</p>
        <hr>
        <p><strong>Pošaljite na telefon</strong><button style="float:right">Pošalji</button></p>
        <hr>
        <p>Recenzije<button style="float:right">Dodaj fotografiju</button><button style="float:right">Napiši recenziju</button></p>
        <p>Ukupno <?=$brojRecenzija?> recenzija</p>
    </div>
</body>
</html>