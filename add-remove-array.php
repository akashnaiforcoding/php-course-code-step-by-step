<?php
    
    $users = ["akki", "prince", "demo", "divyesh"];

    array_push($users, "arvind", "jigar");
    
    print_r($users);

    $newUsers = $users;

    array_pop($users);
    array_pop($users);

    print_r($users);
    
    array_splice($newUsers, -6);
    print_r($newUsers);

?>