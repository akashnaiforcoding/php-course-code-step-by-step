<?php
    $i = 1;

    do{
        echo $i . "<br>";
        $i++;
    }while($i<=10);

    $i = 10;
    do{
        echo $i . "<br>";
        $i--;
    }while($i >= 1);
?>

<!-- Loop will be executed even if condition is wrong on the very first time -->
<?php
    $i = 0;
    do{
        echo $i . "<br>";
        $i--;
    }while($i>=1);
?>