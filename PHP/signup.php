<?php
    include '../SERVER/server.php';
    include 'signupvalidation.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Now</title>
 
    <!--LINKING EXTERNAL BOOTRSAP FILES-->
    <lin
    k href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
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
        <h1>Register Form</h1>
        
<form method="POST" id = "register-form" name = "register">
<div class = "field">
    <span class = "fas fa-user-alt"></span>
    <input type = "text" name = "name" placeholder = "Name" required autocomplete = "off" >
</div>

<div class = "field space">
    <span class = "fa fa-envelope"></span>
    <input type = "email" name = "email" placeholder = "Email" required autocomplete = "off"> 
</div>
 
<div class = "field space">
    <span class = "fas fa-lock"></span>
    <input type = "password" name = "password" placeholder = "Password" required autocomplete = "off"> 
</div>

<div class = "field space">
    <span class = "fa fa-check"></span>
    <input type = "password" name = "Confirmpassword" placeholder = "Confirm Password" required autocomplete = "off" > 
</div>
<div class = "field space">
    <input type = "submit" value = "Login" name ="submit">    
</div>
</form>                                                   

</body>
</html>