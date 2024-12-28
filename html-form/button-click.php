<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button click</title>
</head>
<body>
    <form action="" method="get">
        <button name="btn" value="clickme">Click me</button>
    </form>
</body>
</html>


<?php
    function testClick(){
        echo "Button clicked";
    }

    if(isset($_REQUEST['btn']))
    {
        testClick();
    }
?>