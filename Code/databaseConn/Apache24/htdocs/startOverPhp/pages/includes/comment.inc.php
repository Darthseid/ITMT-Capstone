<?php
    session_start();
    if(isset($_POST['comment1'])) {
        //echo "comment page " . $_SESSION['username'];

        require 'dbh.inc.php';

        $user = $_SESSION['username'];
        $comment = $_POST['inpComment'];

        //variables for database
        $sql = "UPDATE usercom SET comment1 = '$comment' WHERE uidUsers = '$user'" ;
        ///$stmt = mysqli_stmt_init($conn);    

        if (mysqli_query($conn,$sql)) {
            header("Location: ../blogList.php?commentsuccess");
            exit();
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);

    }
    else if (isset($_POST['comment2'])){
        require 'dbh.inc.php';

        $user = $_SESSION['username'];
        $comment = $_POST['inpComment'];

        //variables for database
        $sql = "UPDATE usercom SET comment2 = '$comment' WHERE uidUsers = '$user'" ;
        ///$stmt = mysqli_stmt_init($conn);    

        if (mysqli_query($conn,$sql)) {
            header("Location: ../blogList.php?commentsuccess");
            exit();
        }
        
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
    else {
        //error occurs
        echo "error";
    }
    