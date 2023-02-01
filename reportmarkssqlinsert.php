<?php
    /*include '../SERVER/server.php';

    if(isset($_POST['submit'])){
        $Question = $_POST['Question'];
        $Result   = $_POST['Result'];
        $Points     = $row['Points'];

        $sql_insert = "INSERT INTO reports(Result,QuestionID,CandidateID) VALUES('$Result','$QueID', '$candidateID') ";
        $result     = mysqli_query($con,$sql_insert); 
           
    }
?>*/

 if(isset($_POST['submit'])){
    $Result = $row['result'];
    
    $sql_insert = "INSERT INTO reports(Result,QuestionID,CandidateID) VALUES('$Result','$QueID', '$candidateID') ";
    $result     = mysqli_query($con,$sql_insert); 
}
?>

