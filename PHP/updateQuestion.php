<?php
    include '../SERVER/server.php';

if(isset($_GET['updateid'])){
    $update = $_GET['updateid'];
    
    if(isset($_POST['addQuestion'])){
        $Question = $_POST['question'];
    
        $sql_update     = "UPDATE questions SET Question = '$Question' WHERE QuestionID='$update'";
        $result  = mysqli_query($con,$sql_update);
    
        if(!$result){
            die(mysqli_error($con));
        }
    }
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Question</title>

    <!--Importing External JS and Bootstrap Files-->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>

<div style="width: 50%; margin: 25px auto;">
    <div id="signupbox" style=" margin-top:10px" class="mainbox col-md-10 col-md-offset-1 col-sm-8 col-sm-offset-2">
        <div class="panel panel-primary">
            <div class="panel-heading">
               <div class="panel-title">Update Interview Question</div>
            </div>

        <div class="panel-body">
        <form method="post" action="">
            <div id="div_id_username" class="form-group required">
                <label for="id_username" class="control-label col-md-4  requiredField"> Update Question <span class="asteriskField"></span> </label>
                    <div class="controls col-md-8 ">
                        <input class="input-md  textinput textInput form-control" id="question" name="question" placeholder="Update Question" style="margin-bottom: 10px" type="text" />
                    </div>
            </div>

        <div class="form-group">
            <div class="aab controls col-md-4 "></div>
                <div class="controls col-md-8 ">
                    <input type="submit" name="addQuestion" value="Update Question" class="btn btn-primary btn btn-primary"  id="addQuestion" />
                 </div>
        </div>
    
</body>
</html>














