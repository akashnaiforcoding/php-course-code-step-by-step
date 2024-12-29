<?php
    $users = ["name" => "Akki", "age" => 20, "gender" => "male"];

    echo json_encode($users);

    $usersJson = '{"name": "akki", "age": 20, "email": "akki@mail.com"}';

    $data = json_decode($usersJson, true);

    print_r( $data);
?>