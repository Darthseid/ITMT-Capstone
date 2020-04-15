<?php
    $email = $_POST[email];
    $username = $_POST[username];
    $password = $_POST[password];

    if(!empty($username) || !empty($password)) {
        $host = "localhost";
        $dbUser = "root";
        $dbpass = "Clarinet51423!";
        $dbname = "logintest";

        $dbconn = new mysqli($host, $dbUser, $dbpass, $dbname);
        if (mysqli_connect_error()) {
            die('Connect Error');
        }  
         else {
            $sql = "INSERT Into testing (email, username, password) values ('$email','$username','$password')";
            if($dbconn->query($sql)) {
                echo "record added";
            }
            else {
                echo "Error: ". $sql ."<br>". $dbconn->error;
            }
            $dbconn->close();
        }
    }

    header('Location: blogList.html');
    
?>
