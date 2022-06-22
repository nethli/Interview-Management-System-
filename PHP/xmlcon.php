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
        
        $FullName=$xml->createElement("Full Name", $row['FullName']);
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