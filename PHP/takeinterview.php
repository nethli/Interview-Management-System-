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
    <title>Take Interview</title>
      
    <!--Linking CSS External Files-->
    <link rel ="stylesheet" type="text/css" href="../CSS/takeinterviewstyling.css">

    <!--Linking Bootstrap External Files-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />  
</head>

<body>
    <form method = "POST">
    <div class = "Container">
        <div class = "Content">
            <h2>Take Interview</h2>

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
                    if(isset($_GET['interviewid'])){
                        $INTERVIEWID = $_GET['interviewid'];

                        // echo $INTERVIEWID;
                        // echo '<script>alert('."$INTERVIEWID".')</script>';

                        $sql    = "SELECT CandidateID, FullName, Email, DegreeName, Contact FROM candidate WHERE CandidateID = '$INTERVIEWID'";
                        $result1 = mysqli_query($con,$sql);  

                        if($result1){
                            
                            while($row= mysqli_fetch_assoc($result1)){
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
                    <th>Points</th>
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
            
            <br><br>

            <center><button type="button" class="btn btn-success" style="border-radius:0%" name = "submit">Submit</button></center>
            
            <br><br>
        </div>
    </div>
</form>
</body>
</html>
<?php 

if(isset($_POST['xml'])){
    $con=mysqli_connect("localhost", "root", "", "interviewmanagementsystem");

    if(!$con){
        echo "DB not Connected...";
    }
    else{
    $result=mysqli_query($con, "Select * from candidate");
    if($result>0){
    $xml = new DOMDocument("1.0");
    
    // It will format the output in xml format otherwise
    // the output will be in a single row
    $xml->formatOutput=true;
    $root=$xml->createElement("candidate");
    $xml->appendChild($root);
    while($row=mysqli_fetch_array($result)){
        $candidate=$xml->createElement("candidate");
        $root->appendChild($candidate);
        
        $CID=$xml->createElement("CID", $row['CandidateID']);
        $candidate->appendChild($CID);
        
        $FullName=$xml->createElement("Full_Name", $row['FullName']);
        $candidate->appendChild($FullName);
        
        $Age=$xml->createElement("Age", $row['Age']);
        $candidate->appendChild($Age);
        
        $Email=$xml->createElement("Email", $row['Email']);
        $candidate->appendChild($Email);
        
    }
    echo "<xmp>".$xml->saveXML()."</xmp>";
    $xml->save("report.xml");
    }
    else{
        echo "error";
    }
    }
    
    
}

?>