<?php
    $submit = $_POST[submit];


    if(!empty($submit)) 
	{
        $host = "localhost";
        $dbUser = "root";
        $dbpass = "Clarinet51423!";
        $dbname = "logintest";

        $dbconn = new mysqli($host, $dbUser, $dbpass, $dbname);
        if (mysqli_connect_error()) 
		{
            die('Connect Error');
        }  
         else {
            $sql = "INSERT Into testing (email, username, password) values ('$email','$username','$password')";
            if($dbconn->query($sql)) 
			{
                echo "comment added";
				echo $submit;
            }
            else 
			{
                echo "Error: ". $sql ."<br>". $dbconn->error;
            }
            $dbconn->close();
        }
    }
    
    
?>
