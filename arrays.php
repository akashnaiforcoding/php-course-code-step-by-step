<?php
    $names = array("Akash", "Vivek", "vaibhavi");
    $users = ["akki", "prince", "demo", "divyesh"];

    // print_r($names);
    // print_r($users);


    for($i=0;$i<count($users);$i++)
    {
        echo "User" .  $i+1 . " is " . $users[$i] . "<br>";
    }

?>