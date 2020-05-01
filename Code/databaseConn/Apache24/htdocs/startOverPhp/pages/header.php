<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en" id="index">
  <head>
    <title> Boom Saver </title>
      <meta charset="utf-8">
      <meta name="viewport"
          content="width=device-width,initial-scale=1.0,shrink-to-fit=no" /> 
      <link rel="stylesheet" type="text/css" href="styling/normalize.css">			
      <link rel="stylesheet" type="text/css" href="styling/styling.css" /> 
  </head>
  <body class="bkpg1">
    <header id="header" class="homehead">
     <h1>Tech News</h1>
	 <nav id="navigation">	
	 <!-- This is the top navigation bar showing the 4 main pages -->
       <ul id= "topbar">
         <img class="titlemain" src="media/boomLogo.png" alt = "Boom Saver Logo" />
         <?php
            if (isset($_SESSION['username'])) {
                echo '<a href="pages/includes/logout.inc.php"> Log Out </a>';
            }
            else {
                echo '<a href="pages/login.php"> Sign In </a>';
            }
         ?>
          <a href="pages/blogList.php"> Blogs</a>
          <a href="pages/contact.php"> Contact Us</a>
          <a href="index.php"> Tech News</a>
        </ul>

        
    </header>

    </html>

    <?php

    /*
<div>
            <form action="includes/login.inc.php" method="post">
                <input type = "text" name="username" placeholder="username">
                <input type = "text" name="password" placeholder="password">
                <button type = "submit" name="login-submit" > Login </button>
            </form>
            <a href="signup.php"> Signup </a>
            <form action="includes/logout.inc.php" method="post">
                <button type = "submit" name="logout-submit" > Logout </button>
            </form>
        </div>
     </nav>
    */

    ?>