<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en" id="index">
  <head>
    <title> Boom Saver </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,shrink-to-fit=no" />
    <link rel="stylesheet" type="text/css" href="../styling/normalize.css">
    <link rel="stylesheet" type="text/css" href="../styling/styling.css" />
	<script
      src="https://code.jquery.com/jquery-3.4.1.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous">
	</script>
    <script src="{{ url_for('static', filename='index_handlers.js') }}" type=text/javascript></script>
  </head>


  <body class="bkpg1">
    <nav id="navigation">
    <!-- This is the top navigation bar showing the 4 main pages -->
        <ul id= "topbar">
        <img class="titlemain" src="../media/boomLogo.png" alt = "Boom Saver Logo" />
        <?php
            if (isset($_SESSION['username'])) {
                echo '<a href="includes/logout.inc.php"> Log Out </a>';
            }
            else {
                echo '<a href="pages/login.php"> Sign In </a>';
            }
        ?>
        <a href="blogList.php"> Blogs</a>
       </ul>
    </nav>

    <h1> Admin Page </h1>
    <fieldset>
        <h2>Users and Emails</h2>
        <?php
            require 'includes/dbh.inc.php';
            
            $sql = "SELECT uidUsers, emailUsers FROM usercom";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<br> users: ". $row["uidUsers"]. " - email: ". $row["emailUsers"].  "<br>";
                }
            } else {
                echo "0 results";
            }
            
            $conn->close();
        ?>
  </fieldset>
  </body>