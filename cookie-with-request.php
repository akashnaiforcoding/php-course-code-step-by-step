<form action="" method="post">
    <input type="text" name="username" placeholder="Enter value">
    <button name="button" value="set_cookie">Set Cookie</button>
    <button name="button" value="display_cookie">Display Cookie</button>
    <button name="button" value="delete_cookie">Delete Cookie</button>
</form>

<?php
    if(isset($_POST['button'])){
        $val = $_POST['username'];

        if($_POST['button'] == 'set_cookie'){
            if(isset($_COOKIE))
            {
                setcookie("username", $val);
                echo "Cookie is set sir";
            }
        }

        if($_POST['button'] == 'display_cookie'){
            if(isset($_COOKIE["username"]))
            {
                echo $_COOKIE["username"];
            }
        }

        if($_POST['button'] == 'delete_cookie'){
            if(isset($_COOKIE["username"])){
                setcookie("username", '', -1);
                echo "cookie removed";
            }
        }
    }

?>