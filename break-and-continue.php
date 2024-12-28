<?php
    echo "Break example: <br>";
    for($i = 1; $i <= 10; $i++)
    {
        if($i == 5)
            break;

        echo $i;
        echo "<br>";
    }

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "Continue example: <br>";
    for($i = 1; $i<= 10; $i++){
        if($i ==5 || $i == 3)
        {
            continue;
        }

        echo $i;
        echo "<br>";
    }


?>