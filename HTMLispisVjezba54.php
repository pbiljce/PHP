<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $tag = array("h1","p","div");
        $randomTag = mt_rand(0,2);
        $stil = "style='color:red; text-align:center;padding:10px;'";
        $sadrzajTaga = "Sadržaj taga";
        $brojPonavljanja = mt_rand(0,5);

        function ispisTaga($t,$s,$sadrzaj,$ponavljanje = 1){
            for($i = 0; $i <= $ponavljanje; $i++){
                echo "<" . $t . " {$s}>" . $sadrzaj . " $t" . "</" . $t . ">" . "<br>";
            }
        }

        ispisTaga($tag[$randomTag],$stil,$sadrzajTaga,$brojPonavljanja);
    ?>
</body>
</html>

