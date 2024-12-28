<?php
    function fruit($name="apple", $color="red")
    {
        return $name . " is " . $color . " colored. <br>";
    }

    echo fruit("apple", "red");
    echo fruit("orange", "orange");
    echo fruit("banana", "yellow");
    echo fruit();
?>

<?php
    function showUser($name="User", $age=20)
    {
        return $name . " is " . $age . " years old. <br>";
    }

    echo showUser("Akki", 21);
    echo showUser("Vivek", 18);
    echo showUser("Vaibhavi", 20);
    echo showUser();
?>