<?php

    if($_FILES)
    {
        $name = $_FILES['fileUpload']['name'];
        $path = "./uploads/".$name;

        if(move_uploaded_file($_FILES['fileUpload']['tmp_name'] ,$path)){
            echo "File uploaded successfully";
        }
        else{
            die("Failed to upload");
        }
    }
?>