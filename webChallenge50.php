<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>webChallenge50</title>
</head>
<body>
    <?php
        $user = "Bruce";
        $password = "Batman";
        $users = array("Peter"=>"Spiderman","Klark"=>"Superman","Bruce"=>"Batman");

        $message = "Invalid user";
        foreach($users as $us => $pa){
            if ($user == $us && $password == $pa){
                $message = "Hello " . $user;
            }
        }
        echo $message;
    ?>
</body>
</html>
