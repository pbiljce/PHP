<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>webChallenge28</title>
</head>
<body>
    <?php
        $startValue = 10;
        $endValue = 120;
        $trip = 150;

        $completeValue = $endValue - $startValue;

        if($trip > $completeValue){
            $lenghtExceded = $trip - $completeValue;
            echo "You passed " . $lenghtExceded . " more than needed.";
        }
        elseif($trip < $completeValue){
            $lenghtNeeded = $completeValue - $trip;
            echo "You need " . $lenghtNeeded . " to go.";
        }
        else{
            echo "You passed " . $trip . ".";
        }
    ?>
</body>
</html>