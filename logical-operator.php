<?php
    $a = 10;
    $b = 12;
    $c = 30;

    if($a == 10 && $b == 12){
        echo "Yes both conditions are true";
        echo "<br>";
    }
    if($a == 40 || $b == 12){
        echo "One of them or both are true";
        echo "<br>";
    }
    
    // this xor will only work if only one is true,, if both are true or false it won't work
    if($a == 40 xor $b == 12){
        echo "One of them is true, but not both are true or false";
        echo "<br>";
    }
    
    if($b != 102){
        echo "yes value is not same";
        echo "<br>";
    }



?>