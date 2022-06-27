<?php
  include '../SERVER/server.php';
  include 'reportmarkssqlinsert.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Report</title>

    <!--Linking CSS External Files-->
    <link rel ="stylesheet" type="text/css" href="../CSS/viewreportstyling.css">

    <!--Linking Bootstrap External Files-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" /> 
</head>

<body>
<body>
    <form method = "POST">
    <div class = "Container">
        <div class = "Content">
            <h2>View Marks</h2>

            <h3> Candidate Details</h3>

            <center>
                <table border = "1">
                    <tr>
                        <th><center>Candidate ID</center></th>
                        <th><center>Full Name</center></th>
                        <th><center>Email</center></th>
                        <th><center>Degree</center></th>
                        <th><center>Contact Number</center></th>
                    </tr>

                <?php
                    if(isset($_GET['reportid'])){
                        $REPORTID = $_GET['reportid'];

                         $sql    = "SELECT CandidateID, FullName, Email, DegreeName, Contact FROM candidate WHERE CandidateID = '$REPORTID'";
                         $result = mysqli_query($con,$sql);  

                        if($result){
                            while($row= mysqli_fetch_assoc($result)){
                                $candidateID = $row['CandidateID'];
                                $fullname    = $row['FullName'];
                                $email       = $row['Email'];
                                $degree      = $row['DegreeName'];
                                $contact     = $row['Contact'];
                                
                                echo '<tr>
                                <td>'.$candidateID.'</td>
                                <td>'.$fullname.'</td>
                                <td>'.$email.'</td>
                                <td>'.$degree.'</td>
                                <td>'.$contact.'</td>
                                <tr>';
                            }
                        }
                    }
                ?>

</table>
      </center>
      <br><br<br>

      <center>
      <table border = "1">
          <tr>
              <th>#</th>
              <th>Question</th>
              <th>Points Obtained</th>
          </tr>
          <?php
          
          $sql2   = "SELECT QuestionID, Question FROM questions";
          $result = mysqli_query($con,$sql2);
          if($result){
              while($row = mysqli_fetch_assoc($result)){
                  $QueID      = $row['QuestionID'];
                  $Question   = $row['Question'];
                  echo '<tr>
                      <td>'.$QueID.'</td>
                      <td>'.$Question.'</td>
                      <td><input type = "number" min="1" max="10" placeholder="Range: 1-10" name="result"></td>
                  <tr>';
              }
          }
          
          ?>
      </table>
      </center>
  </div>    
</div>
</form>
    
</body>
</html>
