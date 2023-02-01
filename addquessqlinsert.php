<?php
if(isset($_POST['addQuestion'])){
    
    $Question = $_POST['question'];

    $sql     = "INSERT INTO questions(Question) VALUES('$Question')";
    $result  = mysqli_query($con,$sql);

    if(!$result){
        die(mysqli_error($con));
    }
}
?>