<?php
    include("./config.php");
    $getStudent = $conn->prepare("SELECT id, name from students");
    $getStudent->execute();

    $studentData = $getStudent->fetchAll();

    echo "<select>";
    echo "<option >Select Option</option>";
    foreach($studentData as $student){
        echo "<option value=" . $student['id'] . ">". $student['name'] . "</option>";
    }

    echo "</select>";

?>