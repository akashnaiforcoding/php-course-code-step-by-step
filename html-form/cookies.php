<?php
    // SYNTAX: setcookie("name", "value", expiry_time, path, domain, secure_boolean_value, httponly);


    setcookie("fruit", "apple", time() + 86400);
    // echo $_COOKIE['fruit'];

    setcookie("color", "red", time() + 86400);
    // echo $_COOKIE['color'];


    foreach($_COOKIE as $key => $value)
    {
        echo $key . " is " . $value . "<br>";
    }
?>