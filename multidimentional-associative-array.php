<?php 
$users = [
        ["sr.no." => 1,"name" => "Akki","email" => "akash@mail.com"],
        ["sr.no." => 2,"name" => "vivek","email" => "vivek@mail.com"],
        ["sr.no." => 3,"name" => "vaibhavi","email" => "vaibhavi@mail.com"],
        ["sr.no." => 4,"name" => "arvind","email" => "arvind@mail.com"],
    ];


    echo "<table border=1>";
    
    foreach($users as $user){
        echo "<tr>";
        foreach($user as $key => $value){
            echo "<td>" . $value . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";


?>