<?php
    function loginForm($boja){
        echo "<form style='background-color:{$boja}; text-align: center; color:#ffffff; padding:10px;' action='#' method='GET'>";
            echo "<div>";
                echo "<label for='username'>Username</label>";
                echo "<input type='text' name='username'>";
            echo "</div>";
            echo "<div>";
                echo "<label for='password'>Password</label>";
                echo "<input type='text' name='password'>";
            echo "</div>";
            echo "<div>";
                echo "<input type='submit' value='Login'>";
            echo "</div>";
        echo "</form>";
    }

    $color = array("red","blue","green");
    $colorNumber = mt_rand(0,2);
    loginForm($color[$colorNumber]);
?>