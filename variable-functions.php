<?php
    function test(){
        echo "Test function called" . "<br>";
    }

    $test = "test";

    $test();

    function main($a){
        echo "Main function called" . "<br>";
        $a();
    }

    function apple(){
        echo "This is an apple function";
    }

    $apple = "apple";

    $main = "main";

    $main($test);
    $main($apple);

?>