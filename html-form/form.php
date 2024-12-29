<?php
    // print_r($_POST);

    if(isset($_POST['username'])){
        echo "Username is ". $_POST['username'];
        echo "<br>";
        echo "Email is ". $_POST['email'];
        echo "<br>";
        echo "Password is ". $_POST['password'];
        echo "<br>";
        echo "Skills is ". implode(", ",$_POST['skills']);
        echo "<br>";
        echo "Gender is ". $_POST['gender'];
        echo "<br>";
        echo "Bio is ". $_POST['bio'];
        echo "<br>";
    }
?>