<?php
//test if user gets in from button
if(isset($_POST['submit'])) {
    
    require 'dbh.inc.php';

    //pass all data from signup page
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $comment1 = "";
    $comment2 = "";
    $comment3 = "";
    $comment4 = "";
    $comment5 = "";
    
    //checks if the any boxes are empty
   /* if (empty($username) || empty($email) || empty($password)) {
        //header("Location: ../signup.php?error=emptys)
    }*/

    //does this exist already
    $sql = "SELECT uidUsers from usercom WHERE uidUsers=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../signup.php?error=userexist");
        exit();
    }
    else {
        mysqli_stmt_bind_param($stmt, "s");
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);

        if ($resultCheck > 0) {
            header("Location: ../signup.php?error=usertaken");
        exit();
        }

        else {
            $sql = "INSERT INTO usercom (uidUsers, emailUsers, pwdUsers, comment1, comment2, comment3, comment4, comment5) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: ../signup.php?error=sqlerror");
                exit();
            }
            //the information is success
            else {
                mysqli_stmt_bind_param($stmt, "ssssssss", $username, $email, $password, $comment1, $comment2, $comment3, $comment4, $comment5);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                header("Location: ../login.php?signup=success");
                exit();
            }
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

}

else {
    header("Location: ../signup.php");
    exit();
}


