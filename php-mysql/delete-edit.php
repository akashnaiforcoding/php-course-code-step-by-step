<?php
    include('./config.php');

    
    if(isset($_POST['delete']))
    {
        $id = $_POST['delete'];
        
        $query = $conn->prepare("DELETE FROM students where id = '$id'");
        

        if($query->execute()){
            echo "record deleted";
        }
        else{
            echo "record failed to delete.";
        }

    }

    $getStudents = $conn->prepare("SELECT * FROM students");
    $getStudents->execute();
    $studentsData = $getStudents->fetchAll();


    echo "<table border=1>";
    foreach($studentsData as $student){
        echo "<tr>
            <td>".$student['name']."</td>
            <td>".$student['course']."</td>
            <td>".$student['batch']."</td>
            <td>".$student['city']."</td>
            <td>".$student['year']."</td>
            <td><form method='post'><button name='delete' value=". $student['id'] .">Delete</button></form></td>
            <td><a href="."update.php?id=".$student['id'].">Update</a></td>
        </tr>";
    }
    echo "</table>";


?>