<?php

include '../SERVER/server.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Candidate Details</title>
      
    <!--Linking CSS External Files-->
    <link rel ="stylesheet" type="text/css" href="../CSS/candidateDetailsStyling.css">

    <!--Linking Bootstrap External Files-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
   
</head>

<body>
    <form method = "POST" action="takeinterview.php">
    <div class = "Container">
        <div class = "Content">

            <h2>Candidates Details</h2>
            
            <center>
            <input type="submit" name="xml" value="VIEW XML">
            <br><br>

                <table border = "1">

                    <tr>
                        <th><center>Candidate ID</center></th>
                        <th><center>Full Name</center></th>
                        <th><center>Age</center></th>
                        <th><center>Email</center></th>
                        <th><center>Degree</center></th>
                        <th><center>Gender</center></th>
                        <th><center>Address</center></th>
                        <th><center>Contact Number</center></th>
                        <th><center>Image</center></th>
                        <th><center>CV</center></th>
                        <th><center>Operations</center></th>
                    </tr>

                <?php
                    $sql    = "SELECT*FROM candidate";
                    $result = mysqli_query($con,$sql);

                    if($result){
                        while( $row = mysqli_fetch_assoc($result)){
                            $candidateID = $row['CandidateID'];
                            $fullname    = $row['FullName'];
                            $age         = $row['Age'];
                            $email       = $row['Email'];
                            $degree      = $row['DegreeName'];
                            $gender      = $row['Gender'];
                            $address     = $row['Address'];
                            $contact     = $row['Contact'];
                            $image       = $row['Image'];
                            $CV          = $row['CV'];

                            echo '<tr>
                                <td style="vertical-align: middle;">'.$candidateID.'</td>
                                <td style="vertical-align: middle;">'.$fullname.'</td>
                                <td>'.$age .'</td>
                                <td>'.$email.'</td>
                                <td>'.$degree.'</td>
                                <td>'.$gender.'</td>
                                <td>'.$address.'</td>
                                <td>'.$contact.'</td>
                                <td>'.$image.'</td>
                                <td>'.$CV.'</td>

                                <td>
                                   
                                    <button type="button" class="btn btn-primary" style="border-radius:0%"><a href = "takeinterview.php? interviewid='.$candidateID.'" class ="text-light">Interview</a></button>
                                    <button type="button" class="btn btn-success" style="border-radius:0%"><a href = "reportview.php? reportid='.$candidateID.'" class ="text-light" >View Report</button>
                                    <button type="button" class="btn btn-danger" style="border-radius:0%"><a href = "deletecandidate.php? deleteid= '.$candidateID.'" class ="text-light">Delete</a></button>
                                </td>
                            </tr>';
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