<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "college";

    $conn = new mysqli($host, $user, $pass, $db);

    if($conn->connect_error)
    {
        die("Connection error " . $conn->connect_error);
    }
    else{
        echo "Connection successful";

        $result = $conn->query("show tables")->fetch_all();
        print_r($result);
    }
?>