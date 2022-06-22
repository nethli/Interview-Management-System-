<?php
  include '../SERVER/server.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Type Selection</title>

    <!--Linking Bootstrap External Files-->
    <link rel = "stylesheet" type="text/css" href = "../CSS/MainPageStyling.css">
    
    <!--Linking Bootstrap External Files-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>

<body>
    <center><h1>BAYMAX INTERVIEW MANAGEMENT SYSTEM</h1></center>

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
    <a href ="signup.php?" ><input type = "submit" name = "submit" value="ADD NEW ADMIN" class="btn btn-success" style="border-radius:0%" ></a>
  
    <center>
    <table>
        <tr>
            <td><div class="card" style="width: 20rem;">
                <img class="card-img-top" src="../IMAGES/recruitment.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Add New Candidate Details</h5>
                  <p class="card-text">Click the following button to add candidate details.</p>
                  <center><a href="addcandidate.php" class="btn btn-primary">Add Candidate Details</a></center>
                </div>
              </div>
            </td>
            
            &nbsp;&nbsp;&nbsp;&nbsp;

            <td>
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top" src="../IMAGES/46.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Display All Candidate Details</h5>
                      <p class="card-text">Click the following button display the information related to candidate.</p>
                      <center><a href="candidatedetails.php" class="btn btn-primary">Display Candidate Details</a></center>
                    </div>
                  </div>
            </td>
        </tr>

        <br><br>

        <!--<tr>-->
            <td>
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top" src="../IMAGES/Interview.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Add New Interview Question</h5>
                        <p class="card-text">Click the following button to add an interview question.</p>
                        <center><a href="addnewquestion.php" class="btn btn-primary">Add Interview Question</a></center>
                    </div>
                </div>
            </td>

            <td>
                <div class="card" style="width: 20rem;">
                    <img class="card-img-top" src="../IMAGES/candidates.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Display All Interview Questions</h5>
                        <p class="card-text">Click the following button to display interview questions.</p>
                        <center><a href="displayQuestion.php" class="btn btn-primary">Display Interview Questions</a></center>
                    </div>
                </div>
            </td>
        </tr>
      
      </table>
    </center>

</body>
</html>