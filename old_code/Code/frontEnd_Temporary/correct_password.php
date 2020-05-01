<?php
if($result->num_rows == 1) {
     if($user==$username && $pass==$password){    
            session_start();
            if($rank=="2"){
                $_SESSION['mysesi']=$user;
                $_SESSION['rank']=$rank;
                echo "<script>window.location.assign('index.php')</script>";
                } else if($rank=="1"){
                $_SESSION['mysesi']=$user;
                $_SESSION['rank']=$rank;
                echo "<script>window.location.assign('index.php')</script>";

        }
        else { 
            echo "Invalid login - Username and passwords do not match";
        }
}
else {
    echo "Invalid Login - Single entry not returned";
}
}
?>
