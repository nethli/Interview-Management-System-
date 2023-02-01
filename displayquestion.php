<?php
    include '../SERVER/server.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Questions</title>

    <!--Linking External CSS Files-->
    <link rel ="stylesheet" href= "../CSS/candidateDetailsStyling.css">

    <!--Linking External Boostrap Files-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
   
</head>

<body>

<form method = "POST">

<div class   = "Container">
    <div class = "Content">
        
    <h2>Display Questions</h2>

        <center>
        <table border="1">
            <tr>
                <th>#</th>
                <th><center>Question</center></th>
                <th><center>Actions</center></th>
            </tr>

            <?php
            
            $sql    = "SELECT*FROM questions";
            $result = mysqli_query($con,$sql);

            if($result){
                while($row = mysqli_fetch_assoc($result)){
                    $QueID         = $row['QuestionID'];
                    $Question      = $row['Question'];

                    echo '<tr>
                                <td style="vertical-align: middle;">'.$QueID.'</td>
                                <td style="vertical-align: middle;">'.$Question.'</td>  
                                
                                <td>
                                <button type="button" class="btn btn-primary btn btn-primary" style="border-radius:0%"><a href= "updateQuestion.php? updateid='.$QueID.'" class ="text-light">Update</a></button>
                                <button type="button" class="btn btn-danger btn btn-danger" style="border-radius:0%"><a href = "deleteQuestion.php? deleteid='.$QueID.'" class ="text-light">Delete</a></button>
                                </td>
                          </tr>';

                }

            }
            
            ?>

        </table>
        </center>
</body>
</html>