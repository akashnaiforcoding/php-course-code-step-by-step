<?php
    // print_r($_REQUEST);

    // echo $_REQUEST['username'];
    // echo "<br>";
    // echo $_REQUEST['password'];

    if($_REQUEST)
    {
        foreach($_REQUEST as $k => $val)
        {
            echo $k . " => " . $val;
            echo "<br>";
        }
    }

?>