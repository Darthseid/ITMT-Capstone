<?php
    if(isset($_POST['login-submit'])) {
        require 'dbh.inc.php';

        $username = $_POST['username'];
        $password = $_POST['password'];


        $sql = "SELECT * FROM usercom WHERE uidUsers=?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../login.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);

            $results = mysqli_stmt_get_result($stmt);

            //check if we get a result
            if ($row = mysqli_fetch_assoc($results)) {
                //$passwordCheck = password_verify($password, $row['pwdUsers']);
                if($password != $row['pwdUsers']) {
                    header("Location: ../login.php?error=incorrect password firsttime");
                    echo "wrong";    
                }
                //everything is correct
                else if ($password == $row['pwdUsers'] && ($password != "root")) {
                    session_start();
                    //$_SESSION['username'] = $row['idUsers'];
                    $_SESSION['username'] = $row['uidUsers'];

                    header("Location: ../../index.php?success");
                    exit();
                }
                else if ($username == "admin" && $password == "root") {
                    session_start();
                    //$_SESSION['username'] = $row['idUsers'];
                    $_SESSION['username'] = $row['uidUsers'];
                    header("Location: ../admin.php?=adminLogin");
                    exit();
                }
                else {
                    header("Location: ../login.php?error=incorrect password");
                    exit();
                }
            }

            else {
                header("Location: ../login.php?error=nouserfound");
                exit();
            }
        }
    }
    else {
        header("Location: ../login.php");
        exit();
    }

