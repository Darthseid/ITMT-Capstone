<?php
    $username = $_POST[username];
    $password = $_POST[password];

    if(!empty($username) || !empty($password)) {
        $host = "localhost";
        $dbUser = "root";
        $dbpass = "Clarinet51423!";
        $dbname = "logintest";

        $dbconn = new mysqli($host, $dbUser, $dbpass, $dbname);

        if (maysqli_connect_error()) {
            die('Connect Error');
        }  
         else {
            $SELECT = "SELECT username From register Where username = ? Limit 1";
            $INSERT = "INSERT Into register (username, password) values(?, ?)";

            //prepare statement
            $stmt = $dbconn->prepare($SELECT);
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $stmt->bind_result($username);
            $stmt->store_result();
            $rnum = $stmt->num_rows;

            if ($rnum==0) {
                $stmt->close();

                $stmt = $dbconn->prepare($INSERT);
                $stmt->bind_param("ss", $username, $password);
                $stmt->execute();
                echo "Recorded success";
            } else {
                echo "Username already exist";
            }
            $stmt->close();
        }
    }
    
?>