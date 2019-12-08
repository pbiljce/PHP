<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>webChallenge42</title>
    <style>
        br{
            margin-bottom:15px;
        }
    </style>
</head>
<body>
    <?php
        $a1 = mt_rand(0,100);
        $a2 = mt_rand(0,100);
        $a3 = mt_rand(0,100);
        $a4 = mt_rand(0,100);
        $a5 = mt_rand(0,100);
        $a6 = mt_rand(0,100);
        $b1 = "jan";
        $b2 = "mar";
        $b3 = "jun";
        $b4 = "avg";
        $b5 = "sep";
        $b6 = "oct";

        for($i = 1; $i <= 6; $i++){
            $a = 'a' . $i;
            $b = 'b' . $i;
            echo "<span style='display:inline-block;width:30px;'>" . $$b ."</span>" ;
            for($j = 0; $j <= $$a; $j++){
                if($$a < 50){
                    echo "<span style='background:red; margin:1px;padding:5px'></span>";
                }
                elseif($$a >= 50 && $$a <= 90){
                    echo "<span style='background:orange; margin:1px;padding:5px'></span>";
                }
                elseif($$a > 90){
                    echo "<span style='background:green; margin:1px;padding:5px'></span>";
                }
            }
            echo "<br>";
        }
    ?>
</body>
</html>