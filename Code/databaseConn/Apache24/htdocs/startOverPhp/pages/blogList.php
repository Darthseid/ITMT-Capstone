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
    <link rel="stylesheet" type="text/css" href="../styling/style.css" />
	<script
      src="https://code.jquery.com/jquery-3.4.1.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous">
	</script>
    <script src="{{ url_for('static', filename='index_handlers.js') }}" type=text/javascript></script>
  </head>
  
    <?php
        
    ?>
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
                echo '<a href="login.php"> Sign In </a>';
            }
         ?>
          <a href="history.php"> My History </a>
          <a href="blogList.php"> Blogs</a>
          <a href="contact.php"> Contact Us</a>
          <a href="../index.php"> Tech News </a>
       </ul>
    </nav>

    <div id="blogList">
        <h1 id="blogTitle">Blog Posts</h1>
        <form action="includes/comment.inc.php" method="POST">
            <div id="items">
                <h2 id="test"> Why IoT vulnerabilities leave devices open to attack</h2>
                <img src="../media/Post1.PNG" id="images">
                <p id="date">January 16, 2020 author: Elly Yates-Roberts</p>
                <p id="postDes"> <a href="https://www.technologyrecord.com/Article/why-iot-vulnerabilities-leave-devices-open-to-attack-76774">Devices were popular gifts again this holiday season. An acronym for internet of things, IoT is more than a buzzword. 
                    The trend represents a huge shift in how products are made and used,
                    as network connectivity is added to products that were not previously intended to have this functionality....</a> 
                    </p>
                <input id="inpComment" type="text" name="inpProduct" placeholder="Comment on the article"/>
                <input type="submit" value="Submit">
            </div><br>
        </form>

        
        <div id="items">
            <h2 id="test"> How Attackers Could Hijack Your Android Camera to Spy on You</h2>
            <img src="../media/Post2.PNG" id="images">
            <p id="date">January 8, 2020 author: Pedro Umbelino</p>
            <p id="postDes"><a href="https://www.checkmarx.com/blog/how-attackers-could-hijack-your-android-camera"> In today’s digitally-connected society, smartphones have become an extension of us. Advanced camera and video 
                capabilities in particular are playing a massive role in this, as users are able to quickly take out their phones and capture any moment 
                in real-time with the simple click of a button. However, this presents a double-edged sword as these mobile...</a></p>
            <input id="inpComment" type="text" name="inpProduct" placeholder="Comment on the article"/>
			<input type="submit" value="Submit">
        </div><br>

        <div id="items">
            <h2 id="test"> Protect Your Computer From Viruses, Hackers, and Spies</h2>
            <img src="../media/Post3.PNG" id="images">
            <p id="date">December 3, 2019 author: XAVIER BECERRA</p>
            <p id="postDes"><a href="https://oag.ca.gov/privacy/facts/online-privacy/protect-your-computer">Today we use internet-connected devices in all 
                aspects of our lives. We go online to search for information, shop, bank, do homework, play games, and stay in touch with family and friends through social networking. As a resul
                our devices contain a wealth of personal information about us. This may include banking and other financial records, and medical information...</a></p>
            <input id="inpComment" type="text" name="inpProduct" placeholder="Comment on the article"/>
			<input type="submit" value="Submit">
        </div>
    </div>
    </body>
</html>