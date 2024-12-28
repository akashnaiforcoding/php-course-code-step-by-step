<?php
    function sum($a, $b){
        echo $a + $b;
        echo "<br>";
    }

    sum(19, 1);
    sum(19, 7);
    sum(19, 6);

    function showUser($name, $color){
        echo "<h1 style='color:$color'>$name</h1>";
    }

    showUser('Akki', 'red');
    showUser('Vivek', 'green');


?>