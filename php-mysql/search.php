<form action="" method="post">
    <input type="text" name="search" placeholder="Enter search value">
    <br>
    <br>
    <button>Search</button>
</form>


<?php
    include('./config.php');
    if(isset($_POST['search'])){
        $search = $_POST['search'];

        
        $student =  $conn->prepare("SELECT * FROM students WHERE name like '%$search%'");
        $student->execute();

        
        $result = $student->fetchAll();
        echo "<table border='1'>";
        foreach($result as $student){
            echo "<tr>
                <td>" . $student['name'] . "</td>
                <td>" . $student['course'] . "</td>
                <td>" . $student['batch'] . "</td>
                <td>" . $student['city'] . "</td>
                <td>" . $student['year'] . "</td>
            </tr>";
        }

        echo "</table>";


    }

?>