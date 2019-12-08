<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>webChallenge30</title>
</head>
<style>
    .border{
        border: 1px solid red;
    }
</style>
<body>
    <?php
        $price = mt_rand(10,100);
        $isNew = mt_rand(0,1) == 1;
        $discount = 0.2;
        $class="";
  
        if($isNew){
            $class = "class = 'border'";
        }

        if($price > 50){
            $newPrice = $price * $discount;
                echo "<p>Proizvod je na popustu <span {$class}>" . $newPrice . " KM <del>". $price . "</del></span></p>";
        }
        else{
            echo "<p>Proizvod nije na popustu <span {$class}>" . $price . "KM" . "</span></p>";
        }
    ?>
</body>
</html>
