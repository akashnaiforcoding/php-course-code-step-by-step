<?php
    // $name = "Akki";

    // function getName()
    // {
    //     // global $name;
    //     $name = "Vivek";
    //     echo $name;
    // }

    // getName();
    // echo $name;

?>


<?php
    $name = "Akki";

    function getName(){
        $name = "Prince";
        echo $name;

        function getGlobalName(){
            global $name;
            echo "Global name is $name <br>";
        }
    }

    echo $name;
    echo "<br>";
    
    getName();
    echo "<br>";
    getGlobalName();
    echo "<br>";

?>