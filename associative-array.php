<?php
    $userDetails = [
        "name" => "Akki",
        "age" => 18,
        "email" => "akki@mail.com",
        "city" => "Ahmedabad",
        "salary" => 14000
    ];


    foreach($userDetails as $key => $value){
        echo $key . " is " . $value . "<br>";
    }

    // or we can use it like 

    foreach($userDetails as $key => $value):
        echo "<br>";
        echo $key . " => " . $value . "<br>";
    endforeach;
?>