<form action="" method="post">
    <input type="text" name="username" id="username">
    <button name="button" value="set">Set Value</button>
    <button name="button" value="get">Get Value</button>
    <button name="button" value="delete">Delete Value</button>
</form>

<?php
    session_start();

    if(isset($_POST['username']) w){
        $val = $_POST['username'];

        if($_POST['button'] == 'set')
        {
            $_SESSION['username'] = $val;
            echo "Session value set.";
        }

        if($_POST['button'] == 'get'){
            if(isset($_SESSION['username']))
            echo $_SESSION['username'];
        }

        if($_POST['button'] == 'delete')
        {
            echo $_SESSION['username'] = "";
            session_destroy();
        }

    }
?>