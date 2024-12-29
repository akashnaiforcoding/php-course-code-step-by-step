<?php
    $users = ["akki", "vivek", "vaibhavi", "arvind", "thakur", "akki", "arvind", "vivek"];

    $user = ["name" => "Akki", "age" => 19, "email" => "akki@mail.com"];

    if(is_array($users)){
        echo "Yes this is array";
    }else{
        echo "This is not an array";
    }

    echo "<br>";
    echo count($users);
    echo "<br>";
    unset($users[1]);
    print_r($users);
    
    array_push($users, "prince", "deep");
    print_r($users);

    array_pop($users);
    print_r($users);

    print_r(array_keys($user));

    echo implode($users);

    $arrStr = "this,is,gonna,get,converted,to,array,using,explode";
    print_r(explode(",", $arrStr));

    $data = array_merge($users, $user);

    print_r($data);

    echo "<br>";

    print_r(array_unique($users));



?>