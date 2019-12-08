<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=	, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>webChallenge33</title>
</head>
<body>
    <?php
        $userStatus = mt_rand(1,5);
        $userMessage = ($userStatus == 1 || $userStatus == 2 || $userStatus == 3) ? "Welcome user" : "Unknown user";
        echo $userMessage;
    ?>
</body>
</html>