<?php

session_start();
//takes all session variables and deletes all 
session_unset();
session_destroy();

header("Location: ../login.php?logout=success");