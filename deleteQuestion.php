<?php
    include '../SERVER/server.php';

    if(isset($_GET['deleteid'])){
        $deleteID = $_GET['deleteid'];

        $sql_delete = "DELETE FROM questions WHERE QuestionID = '$deleteID'";
        $result     = mysqli_query($con, $sql_delete);
    
    }else{
        if(!$result){
            die(mysqli_error($con));
    }

    

    }


?>