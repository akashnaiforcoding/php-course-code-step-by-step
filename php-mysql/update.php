<?php
include_once('config.php');

$id = $_GET['id'];
$getStudent = $conn->prepare("SELECT * FROM students WHERE id = '$id'");
$getStudent->execute();

$student = $getStudent->fetchAll();

$name = $student[0]['name'];
$course = $student[0]['course'];
$batch = $student[0]['batch'];
$city = $student[0]['city'];
$year = $student[0]['year'];
?>

<form action="" method="post">
    <input type="text" value="<?php echo $name; ?>" name="name">
    <br><br>
    <input type="text" value="<?php echo $course; ?>" name="course">
    <br><br>
    <input type="text" value="<?php echo $batch; ?>" name="batch">
    <br><br>
    <input type="text" value="<?php echo $city; ?>" name="city">
    <br><br>
    <input type="text" value="<?php echo $year; ?>" name="year">
    <br><br>

    <button value=<?php echo $id; ?> name="update">Update student data</button>
</form>

<?php
if (isset($_POST['update'])) {
    $id = $_POST['update'];
    $name = $_POST['name'];
    $course = $_POST['course'];
    $batch = $_POST['batch'];
    $city = $_POST['city'];
    $year = $_POST['year'];

    $updateStudent = $conn->prepare("UPDATE students SET
         name = '$name' ,
         course = '$course' ,
         batch = '$batch' ,
         city = '$city' ,
         year = '$year'
         WHERE id = '$id';
         ");

    

    if($updateStudent->execute())
    {
        header('location:delete-edit.php');
    }
    else{
        echo "Failed to update data";
    }
}
?>