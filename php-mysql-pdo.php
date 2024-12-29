<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "college";

    try{
        $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connection done";
    }catch(PDOException $err){
        echo "Connection failed: ".$err->getMessage();
    }

    echo "<br>";
    $result = $conn->query("SHOW TABLES");
    while($row = $result->fetchAll(PDO::FETCH_NUM))
    {
        print_r($row);
    }
?>