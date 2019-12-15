<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>webChallenge54</title>
</head>
<body>
    <?php
        $page = "test.html";
        $pages = array("index.html","index.php","index.htm");
        $p = false;
        $pa ="";

        echo "Osnovna stranica<br>";
        foreach($pages as $inc){
            if($inc == $page){
                $p = true;
            }
        }
        if(!$p){
            $pa = 'inc/' . $page;
            include $pa;
        }
    ?>
</body>
</html>
