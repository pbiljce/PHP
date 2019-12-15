<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>webChallenge49</title>
</head>
<body>
    <?php
        $niz = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73, 68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73);

        $zbirNiza = $prosjecnaTemperatura = 0;
        $brojClanovaNiza = count($niz);
        for($i=0; $i < $brojClanovaNiza; $i++){
            $zbirNiza += $niz[$i];
        }
        $prosjecnaTemperatura = $zbirNiza/$brojClanovaNiza;
        echo "Prosječna temperatura je: " . $prosjecnaTemperatura . "<br>";

        sort($niz);
        echo "Pet najmanjih temperatura je: ";
        for($i=0; $i < 5; $i++){
            echo $niz[$i] . " ";
        }
        echo "<br>";
        rsort($niz);
        echo "Pet najvećih temperatura je: ";
        for($i=0; $i < 5; $i++){
            echo $niz[$i] . " ";
        }
    ?>
</body>
</html>