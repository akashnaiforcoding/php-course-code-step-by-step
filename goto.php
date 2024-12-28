<?php


$name = "Akki1";

if($name == "Akki")
{
    goto greet;
}


$calc = 10 + 10;
echo $calc . "<br>";

greet:
    echo "Welcome $name";

?>



<?php
// NOTE: Never run goto before loop else it will go into infinity loop like below.

// abc:
//     echo "here we go again. infitinity loop";

// for($i = 1; $i < 10; $i++)
// {
//     echo $i;
//     if($i==5){
//         goto abc;
//     }
// }

?>