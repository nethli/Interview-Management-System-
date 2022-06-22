<?php
    include '../SERVER/server.php';

    if(isset($_GET['deleteid'])){
        $deleteid = $_GET['deleteid'];

        $sql    = "DELETE FROM candidate WHERE CandidateID = '$deleteid'";
        $result = mysqli_query($con, $sql);

    }else{
        die(mysqli_error($con));
    }

?>