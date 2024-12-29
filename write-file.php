<?php

    if(isset($_POST['filename'])){
        $filename = "./files/".$_POST['filename'];
        $content = $_POST['filecontent'];
    
        $file = fopen($filename, 'w') or die("Unable to create a file");
    
        fwrite($file, $content);
    
        fclose($file);
        echo "File created";
    }

    

?>

<form action="" method="post">
    <label for="filename">Enter filename: </label>
    <input type="text" name="filename">
    
    <br>
    <br>
    <br>
    <label for="filename">Enter filename: </label>
    <textarea name="filecontent" id="filecontent"></textarea>

    <button>Create file</button>

</form>