<?php
    // include("./hello-world.php");

    // include will just give warning
    // for($i=0;$i<10;$i++)
    // {
        // include("./hello-world1.php");
    //     // include("./hello-world.php");
    //     include_once("./hello-world.php"); // will automatically check and will stop if try to require more than onc3
    // }


    // require will just give warning as well as fatal error
    for($i=0;$i<10;$i++)
    {
        // require("./hello-world1.php");
        require("./hello-world.php");
        // require_once("./hello-world.php"); // will automatically check and will stop if try to require more than onc3
        
    }
?>