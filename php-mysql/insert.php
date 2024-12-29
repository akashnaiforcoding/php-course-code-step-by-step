<form action="" method="post">
    <input type="text" name="name" placeholder="Enter username">
    <br>
    <br>
    <input type="text" name="course" placeholder="Enter course">
    <br>
    <br>
    <input type="text" name="batch" placeholder="Enter batch">
    <br>
    <br>
    <input type="text" name="city" placeholder="Enter city">
    <br>
    <br>
    <input type="text" name="year" placeholder="Enter year">
    <br>
    <br>
    <button>Add data</button>
</form>


<?php

if(isset($_POST['name'])){
    $name = $_POST['name'];
    $course = $_POST['course'];
    $batch = $_POST['batch'];
    $city = $_POST['city'];
    $year = $_POST['year'];
    
    include('./config.php');
        $student = $conn->prepare("INSERT INTO students (`id`, `name`,`course`, `batch`, `city`, `year`) VALUES (NULL, '$name', '$course', '$batch', '$city', '$year')");

        $result = $student->execute();

        if($result){
            echo "Data inserted successfully";
        }
        else{
            echo "Operation failed";
        }
    }

?>