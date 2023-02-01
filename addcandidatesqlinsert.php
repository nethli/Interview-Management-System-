<?php

include '../SERVER/server.php';

if(isset($_POST['submit'])){
        $fullname    =  $_POST['fullname'];
        $age         =  $_POST['age'];
        $email       =  $_POST['email'];
        $degree      =  $_POST['degree'];
        $gender      =  $_POST['gender'];
        $address     =  $_POST['address'];
        $contact     =  $_POST['contact'];
        
        //GETTING CANDIDATE UPLOADED IMAGE
        $image_name  =  $_FILES['image']['name'];
        $tmp_name    =  $_FILES['image']['tmp_name'];
        $folder      = "upload_image/".$image_name;
        move_uploaded_file($tmp_name,$folder);

        //GETTING CANDIDATE UPLOADED FILE
        $file        = $_FILES["file"];
        $tmp_name    = $_FILES['file']['tmp_name'];
        $folder1     = "upload_cv/". $file["name"];
        move_uploaded_file($tmp_name,$folder1);
     
        $sql_insert = "INSERT INTO candidate(FullName, Age, Email, DegreeName, Gender,  Address, Contact, Image, CV) VALUES ('$fullname', '$age', '$email', '$degree', '$gender', '$address', '$contact', '$folder', '$folder1')";
        $result     = mysqli_query($con,$sql_insert);

        if(!$result){
            die(mysqli_error($con));
        }
}

?>