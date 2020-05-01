<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en" id="contact">
  <head>
    <title> Community Page </title>
      <meta charset="utf-8">
      <meta name="viewport"
          content="width=device-width,initial-scale=1.0,shrink-to-fit=no" /> 
      <link rel="stylesheet" type="text/css" href="../styling/normalize.css">			
      <link rel="stylesheet" type="text/css" href="../styling/styling.css" /> 
  </head>
  <body class="contactpg">
    <header id="header" class="homehead">
     <h1>Questions</h1>
	 <nav id="navigation">	
	 <!-- This is the top navigation bar showing the 4 main pages -->
       <ul id= "topbar">
	     <img class="titlemain" src="../media/boomLogo.png" alt = "Boom Saver Logo" />
       <?php
            if (isset($_SESSION['username'])) {
                echo '<a href="includes/logout.inc.php"> Log Out </a>';
            }
            else {
                echo '<a href="login.php"> Sign In </a>';
            }
         ?>
       <a href="blogList.php"> Blogs</a>
       <a href="contact.php"> Contact Us</a>
       <a href="../index.php"> Tech News </a>
        </ul>
     </nav>
    </header>
	<!-- This is a simple goggle doc form embedded for questions  -->
    <fieldset class="first" id="googleForm">
		<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeAz48-6cjKLvxoB1esdk2tlIMU1YDNYwIBYadp961PQZvTxA/viewform?embedded=true"  width="640" height="800" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
    </fieldset>
	<footer id="footer">
	  <ul>
		  <h4>Boom Saver<em> 2020 </em> <strong>&copy;</strong></h4>
	  </ul>
	</footer>
  </body>
</html>