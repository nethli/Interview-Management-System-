<?php
    include '../SERVER/server.php';
    include 'addcandidatesqlinsert.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Candidate</title>

    <!--Importing External CSS Files-->
    <link rel="stylesheet" type="text/css" href="../CSS/addcandidatestyling.css">
</head>

<body>

<div class = "main">
     <div class = "register">
         <h2>Candidate Registration</h2>

         <form method = "POST" enctype="multipart/form-data" name="CandForm" id = "register">
             <label>Full Name</label>
             <br>
             <input type = "text" id = "fullname" name = "fullname" placeholder = "Enter your full name" autocomplete = "off" >
             <br><br>

             <label>Age</label>
             <br>
             <input type = "text" id = "age" name="age" placeholder = "Enter your age" autocomplete = "off">
             <br><br>

             <label>Email</label>
             <br>
             <input type = "email" id = "email" name="email" placeholder = "Enter your email" autocomplete = "off">
             <br><br>

             <label>Degree Name</label>
             <br>
             <input type = "text" id = "text" name="degree" placeholder = "Enter your degree name" autocomplete = "off">
             <br><br>

             <label>Gender</label>
             <br>
             &nbsp;&nbsp;&nbsp;&nbsp;
            
             <input type= "radio" name = "gender" id= "male" value="Male"> Male
             &nbsp;&nbsp;&nbsp;&nbsp;
             <input type = "radio" name= "gender" id = "female" value="Female"> Female
             <br><br>

             <label>Address</label>
             <br>
             <input type = "text" id = "address" name="address" placeholder = "Enter your address" autocomplete = "off">
             <br><br>

             <label>Contact Number</label>
             <br>
             <input type = "text" id = "contact" name="contact" placeholder = "Enter your contact" autocomplete = "off">
             <br><br>

             <label>Upload your image</label>
             <br>
             <input type = "file" id = "image" name="image" accept = ".jpg, .jpeg, .png" value = "" placeholder = "Upload your image" autocomplete = "off">
             <br><br>

             <label>Upload your CV</label>
             <br>
             <input type = "file" id = "pdf" name="file" accept = ".pdf" value = "" placeholder = "Upload your CV" autocomplete = "off">
             <br><br>

            <center>
            <input type = "submit" value= "Submit" name = "submit" id = "submit">
            <input type = "reset" value= "Reset" name = "reset" id = "reset">
            </center>

         </form>
               
</body>
</html>