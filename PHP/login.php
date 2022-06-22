<?php
    include '../SERVER/server.php';
    //require 'loginvalidation.php';
    
    if(isset($_POST['submit'])){
        $checkemail    = $_POST['email'];
        $checkpassword = $_POST['password'];
        //Query for retrieving email and password of the admin
        $sql = "SELECT email, password FROM admin WHERE email='$checkemail' AND password='$checkpassword'";
        $result = mysqli_query($con,$sql);
        if(mysqli_num_rows($result)){
            $_SESSION['email']=$checkemail;
            header('location:mainPage.php');  
            die;              
            
        }else{
           echo("Invalid Login!! Please try again.");
           header('location:loginForm.php');  
        }
    }

    /*$sql_create = "
    CREATE TABLE admin(
        adminID INT AUTO_INCREMENT,
        name VARCHAR(255),
        email VARCHAR(255),
        password VARCHAR(100),
        PRIMARY KEY(adminID)
    )";*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <!--LINKING EXTERNAL BOOTRSAP FILES-->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    
    <!--LINKING EXTERNAL JS FILES-->
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src = 'https://kit.fontawesome.com/a076d05399.js'></script>

    <!--Linking CSS External Files-->
    <link rel = "stylesheet" href = "../CSS/loginStyling.css">

</head>
<body>

<div class = "loginContainer">
    <div class = "content">
        <h1>Login Form</h1>

        <form method="POST" id = "login-form" name = "login" >
        <div class = "field">
            <span class = "fas fa-user-alt"></span>
            <input type = "text" name = "email" placeholder = "email" id = "myname" required >
        </div>
         
        <div class = "field space">
            <span class = "fas fa-lock"></span>
            <input type = "password" name = "password" placeholder = "password" required > 
        </div>
        <div class = "field space">
            <input type = "submit" value = "Login" name ="submit">    
        </div>
        </form>                                                   
        
    </div>
 </div>  
</body>
</html>