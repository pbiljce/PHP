<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>webChallenge38</title>
    <style>
        .red{
            background: red;
        }
        .date{
            display: inline-block;
            width:30px;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        $dani = 31;
        $currentday = Date('d');
        $current = "";

        for ($i=1; $i <= $dani; $i++) { 
            if($i == $currentday){
                $current = "class = 'date red'";    
            }
            else{
                $current = "class = 'date'";
            }
            if($i % 7 != 0){
                echo "<span {$current}>" . $i . "</span>&nbsp";  
            }
            else{
                echo "<span {$current}>" . $i . "</span>&nbsp<br>";  
            }
        }
    ?>
</body>
</html>