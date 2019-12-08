<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>webChallenge31</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <?php
        require 'menu.php';
        if(isset($_GET['page']) && !empty($_GET['page'])){
            $page = $_GET['page'];
            switch($page){
                case 1:
                    require 'stranice/prvaStranica.html';
                    break;
                case 2:
                    require 'stranice/drugaStranica.html';
                    break;
                case 3:
                    require 'stranice/trecaStranica.html';
                    break;
                default:
                    require 'stranice/prvaStranica.html';
                    break;
            }
        }
        else{
            require 'stranice/prvaStranica.html';
        }
    ?>
</body>
</html>