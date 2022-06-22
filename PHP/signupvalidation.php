<?php
    include '../SERVER/server.php';

    if(isset($_POST['submit'])){
        $name     = $_POST['name'];
        $email    = $_POST['email'];
        $password = $_POST['password'];
        $confirm  = $_POST['Confirmpassword'];

        if($password == $confirm){
            $sql_insert = "INSERT INTO admin (name, email, password) VALUES('$name', '$email', '$password')";
            $result     = mysqli_query($con, $sql_insert);
        }

        if(!$result){
            die(mysqli_error($con));
        }

    }   
?>

