<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>webChallenge37</title>
</head>
<body>
    <?php
        $dani = 31;
        $mjeseci = 12;
        $godineStart = 1980;
        $godineEnd = Date('Y');

        echo "<div>";
            echo "<select name='dani'>";
                echo "<option>Dan</option>";
                    for ($i=1; $i <= $dani; $i++) { 
                        echo "<option value='$i'>";
                        echo $i;
                        echo "</option>";
                    }
            echo "</select>";
            echo "<select name='mjeseci'>";
                echo "<option>Mjesec</option>";
                    for ($j=1; $j <= $mjeseci; $j++) { 
                        echo "<option value='$j'>";
                        echo $j;
                        echo "</option>";
                    }
            echo "</select>";
            echo "<select name='godine'>";
                echo "<option>Godina</option>";
                    for ($k = $godineStart; $k <= $godineEnd; $k++) { 
                        echo "<option value='$k'>";
                        echo $k;
                        echo "</option>";
                    }
            echo "</select>";
        echo "</div>";
    ?>
</body>
</html>