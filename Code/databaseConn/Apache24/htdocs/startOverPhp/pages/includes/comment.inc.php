<?php
    session_start();
    if(isset($_POST['comment'])) {
        //echo "comment page " . $_SESSION['username'];

        require 'dbh.inc.php';

        $user = $_SESSION['username'];
        $comment = $_POST['inpComment'];

        //variables for database
        $sql = "UPDATE usercom SET comments = '$comment' WHERE uidUsers = '$user'" ;
        //$stmt = mysqli_stmt_init($conn);    

        if (mysqli_query($conn,$sql)) {
            echo "Record updated successfully";
        }
        else {
            echo "failed";
        }

    }
    else {
        //error occurs
        echo "error";
    }
    