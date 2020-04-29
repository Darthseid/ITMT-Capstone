<?php
    session_start();
    if(isset($_POST['comment'])) {
        echo "comment page " . $_SESSION['username'];

        require 'dbh.inc.php';

        $comment = $_POST['inpComment'];

        //variables for database
        $sql = "SELECT uidUsers from usercom WHERE uidUsers=?";
        $stmt = mysqli_stmt_init($conn);    

    }
    else {
        //error occurs
        echo "error";
    }
    