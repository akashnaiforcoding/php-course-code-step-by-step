<?php
    $users = ["akki", "vivek", "prince", "divyesh", "joy", "harshit"];

    foreach($users as $user)
    {
        echo $user . "<br>";
    }

    // or we can use it like 

    foreach($users as $user):
        echo "<h1>$user</h1>" . "<br>";
        echo "$user is doing great";
    endforeach;
?>