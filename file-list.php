<?php
    $path = "files";
    $items = scandir($path);
    $items = array_diff($items, ['.', '..']);

    foreach($items as $item)
    {
        echo "<a href="."files/".$item.">".$item."</a><br>";
    }
?>