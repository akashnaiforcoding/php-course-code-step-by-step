<?php
    $users = [
        [1, "Akki", "akash@mail.com"],
        [2, "vivek", "vivek@mail.com"],
        [3, "vaibhavi", "vaibhavi@mail.com"],
        [4, "Arvind", "arvind@mail.com"],
    ];


    // echo "<pre>";
    // print_r($users);
    // exit;

    echo "<table border=1>";
    for($i = 0; $i < count($users) ; $i++){
        echo "<tr>";
        for($j = 0; $j < count($users[$i]); $j++)
        {
            echo "<td>" . $users[$i][$j] . "</td>";
        }
        echo "</tr>";
        
    }
    
    echo "</table>";
?>