<?php
    $i = 10;
    $i =  (string) $i;

    $num = "10";
    $num = (int) $num;

    $f = 1;
    $f = (float) $f;
    
    // $f = 0;
    $b = (boolean) $f;

    $a = 10;
    $a = array($a);

    $ob = 20;
    $ob = (object) $ob;

    // // tho you can't convert array to string using casting there are functions like implode and explode
    // $str = ["test"];
    // $str = (string) $str;

    var_dump($ob);

?>