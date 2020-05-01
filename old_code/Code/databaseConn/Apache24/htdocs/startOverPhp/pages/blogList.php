<?php
   // error_reporting(E_ERROR | E_WARNING | E_PARSE);
    require 'includes/dbh.inc.php';
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
  
    <?php
        
    ?>
  <body class="bkpg1">
    <nav id="navigation">
    <!-- This is the top navigation bar showing the 4 main pages -->
        <ul id= "topbar">
        <img class="titlemain" src="../media/boomLogo.png" alt = "Boom Saver Logo" />
        <?php
            if (isset($_SESSION['username'])) {
                //admin navigation
                if($_SESSION['username'] == "admin") {
                    echo '<a href="includes/logout.inc.php"> Log Out </a>';
                    echo '<a href="admin.php"> Users </a>';
                }
                else {
                //user navigation
                echo '<a href="includes/logout.inc.php"> Log Out </a>';
                echo '<a href="blogList.php"> Blogs</a>';
                echo '<a href="contact.php"> Contact Us</a>';
                echo '<a href="../index.php"> Tech News </a>';
                }                   
            }
            //guest navigation
            else {
                echo '<a href="login.php"> Sign In </a>';
                echo '<a href="blogList.php"> Blogs</a>';
                echo '<a href="contact.php"> Contact Us</a>';
                echo '<a href="../index.php"> Tech News </a>';
            }
         ?>
          
          
          
          
       </ul>
    </nav>
    <div id="blogList">
        <h1 id="blogTitle">Blog Posts</h1>
		<div id="blogComment">
			<?php
				if (isset($_SESSION['username'])) {
					echo '<p> Leave a comment ' . $_SESSION['username'] . '. Note only one comment per blog.</p>';
				}
				else {
					echo '<p> Note you can not comment unless you are logged in! </p>';
				}
			?>
		</div>
        <form action="includes/comment.inc.php" method="POST" id="grid">
            <div id="items">
                <h2 id="test"> Why IoT vulnerabilities leave devices open to attack</h2>
                <a href="https://www.technologyrecord.com/Article/why-iot-vulnerabilities-leave-devices-open-to-attack-76774"><img src="../media/Post1.PNG" id="images"></a>
                <p id="date">January 16, 2020 author: Elly Yates-Roberts</p>
                <p id="postDes"> <a href="https://www.technologyrecord.com/Article/why-iot-vulnerabilities-leave-devices-open-to-attack-76774">Devices were popular gifts again this holiday season. An acronym for internet of things, IoT is more than a buzzword. 
                    The trend represents a huge shift in how products are made and used,
                    as network connectivity is added to products that were not previously intended to have this functionality....</a> 
                    </p>
                <h3 id="comHeader"> Comments </h3>
                   <div id= "comSect">
                    <?php
                    //guest view
                    if ($_SESSION == null) {
                        //sql statments
                        $sql = "SELECT uidUsers, comment1 FROM usercom WHERE idUsers > 1 AND comment1 != ''";
                        $result = $conn->query($sql);

                        //to check if database is not empty
                            if ($result->num_rows > 0) {
                                    // output data of user and comment
                                while($row = $result->fetch_assoc()) {
                                    echo $row["uidUsers"]. " - " . $row["comment1"].  "<br>";
                                }
                            } 
                            //it is empty
                            else {}
                        $conn->close();
                    }
                    //user/admin view
                    else{
                        $admin = $_SESSION['username'];
                        //Users
                        if ($admin != "admin") {
                            echo '<input id="inpComment" type="text" name="inpComment" placeholder="Comment on the article"/>';
                            echo '<button id="comBut"type="submit" name="comment1">Comment</button>';

                            //sql statments
                            $sql = "SELECT uidUsers, comment1 FROM usercom WHERE idUsers > 1 AND comment1 != ''";
                            $result = $conn->query($sql);

                            //to check if database is not empty
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        echo "<br>" . $row["uidUsers"]. " - " . $row["comment1"].  "</br>";
                                  }
                                } 
                                //it is empty
                                else {}
                            $conn->close();
                        }

                        //admin view
                        else if ($admin == "admin") {
                            //sql statments
                            $sql = "SELECT uidUsers, comment1 FROM usercom";
                            $result = $conn->query($sql);

                            //to check if database is not empty
                                if ($result->num_rows > 0) {
                                    // output data of user and comment
                                    while($row = $result->fetch_assoc()) {
                                        echo "<br> Users:".$row["uidUsers"] ." - Comment:".$row["comment1"].  "</br>";
                                    }
                                } 
                                //it is empty
                                else {}
                            $conn->close();
                        }     
                    }   
                    ?>
			       </div>
            </div><br>
        </form>

        <form action="includes/comment.inc.php" method="POST" id="grid">
            <div id="items">
                <h2 id="test"> How Attackers Could Hijack Your Android Camera to Spy on You</h2>
                <a href="https://www.checkmarx.com/blog/how-attackers-could-hijack-your-android-camera"><img src="../media/Post2.PNG" id="images"></a>
                <p id="date">January 8, 2020 author: Pedro Umbelino</p>
                <p id="postDes"><a href="https://www.checkmarx.com/blog/how-attackers-could-hijack-your-android-camera"> In today’s digitally-connected society, smartphones have become an extension of us. Advanced camera and video 
                    capabilities in particular are playing a massive role in this, as users are able to quickly take out their phones and capture any moment 
                    in real-time with the simple click of a button. However, this presents a double-edged sword as these mobile...</a></p>
                <h3 id="comHeader"> Comments </h3>
                <div id= "comSect">
                <?php
                //always need a require
                require 'includes/dbh.inc.php';
                    //guest view
                    if ($_SESSION == null) {
                        //sql statments
                        $sql = "SELECT uidUsers, comment2 FROM usercom WHERE idUsers > 1 AND comment2 != ''";
                        $result = $conn->query($sql);

                        //to check if database is not empty
                            if ($result->num_rows > 0) {
                                // output data of user and comment
                                while($row = $result->fetch_assoc()) {
                                    echo $row["uidUsers"]. " - " . $row["comment2"].  "<br>";
                                }                                
                            } 
                            //it is empty
                            else {}
                        $conn->close();
                    }

                    
                    else {
                        //user/admin
                        $admin = $_SESSION['username'];
                        //Users
                        if ($admin != "admin") {
                            echo '<input id="inpComment" type="text" name="inpComment" placeholder="Comment on the article"/>';
                            echo '<button id="comBut" type="submit" name="comment2" class="btn">Comment</button>';

                            //sql statments
                            $sql = "SELECT uidUsers, comment2 FROM usercom WHERE idUsers > 1 AND comment2 != ''";
                            $result = $conn->query($sql);

                            //to check if database is not empty
                                if ($result->num_rows > 0) {
                                    // output data of user and comment
                                    while($row = $result->fetch_assoc()) {
                                        echo "<br>" . $row["uidUsers"]. " - " . $row["comment2"].  "</br>";
                                    }
                                } 
                                //it is empty
                                else {}
                            $conn->close();
                        }

                        //admin view
                        else if ($admin == "admin") {
                            //sql statments
                            $sql = "SELECT uidUsers, comment2 FROM usercom";
                            $result = $conn->query($sql);

                            //to check if database is not empty
                                if ($result->num_rows > 0) {
                                    // output data of user and comment
                                    while($row = $result->fetch_assoc()) {
                                        echo "<br> Users:".$row["uidUsers"] ." - Comment:".$row["comment2"].  "</br>";
                                    }
                                } 
                                //it is empty
                                else {}
                            $conn->close();
                        }   
                    }
                    
                ?>
				</div>
            </div><br>
        </form>

        <form action="includes/comment.inc.php" method="POST" id="grid">
            <div id="items">
                <h2 id="test"> Protect Your Computer From Viruses, Hackers, and Spies</h2>
                <a href="https://oag.ca.gov/privacy/facts/online-privacy/protect-your-computer"><img src="../media/Post3.PNG" id="images"></a>
                <p id="date">December 3, 2019 author: XAVIER BECERRA</p>
                <p id="postDes"><a href="https://oag.ca.gov/privacy/facts/online-privacy/protect-your-computer">Today we use internet-connected devices in all 
                    aspects of our lives. We go online to search for information, shop, bank, do homework, play games, and stay in touch with family and friends through social networking. As a resul
                    our devices contain a wealth of personal information about us. This may include banking and other financial records, and medical information...</a></p>
				<h3 id="comHeader"> Comments </h3>
                  <div id= "comSect">    
                    <?php
                    require 'includes/dbh.inc.php';
                    //guest view
                    if ($_SESSION == null) {
                        //sql statments
                        $sql = "SELECT uidUsers, comment3 FROM usercom WHERE idUsers > 1 AND comment3 != ''";
                        $result = $conn->query($sql);

                        //to check if database is not empty
                            if ($result->num_rows > 0) {
                                    // output data of user and comment
                                while($row = $result->fetch_assoc()) {
                                    echo $row["uidUsers"]. " - " . $row["comment3"].  "<br>";
                                }
                            } 
                            //it is empty
                            else {}
                        $conn->close();
                    }
                    //user/admin view
                    else{
                        $admin = $_SESSION['username'];
                        //Users
                        if ($admin != "admin") {
                            echo '<input id="inpComment" type="text" name="inpComment" placeholder="Comment on the article"/>';
                            echo '<button id="comBut" type="submit" name="comment3" class="btn">Comment</button>';

                            //sql statments
                            $sql = "SELECT uidUsers, comment3 FROM usercom WHERE idUsers > 1 AND comment3 != ''";
                            $result = $conn->query($sql);

                            //to check if database is not empty
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        echo "<br>" . $row["uidUsers"]. " - " . $row["comment3"].  "</br>";
                                    }
                                } 
                                //it is empty
                                else {}
                            $conn->close();
                        }

                        //admin view
                        else if ($admin == "admin") {
                            //sql statments
                            $sql = "SELECT uidUsers, comment3 FROM usercom";
                            $result = $conn->query($sql);

                            //to check if database is not empty
                                if ($result->num_rows > 0) {
                                    // output data of user and comment
                                    while($row = $result->fetch_assoc()) {
                                        echo "<br> Users:".$row["uidUsers"] ." - Comment:".$row["comment3"].  "</br>";
                                    }
                                } 
                                //it is empty
                                else {}
                            $conn->close();
                        }     
                    }   
                    ?>
				  </div>
            </div><br>
         </form>
                
        <form action="includes/comment.inc.php" method="POST" id="grid">
            <div id="items">
                <h2 id="test"> War for information, will quantum computers defeat cryptographers?</h2>
                <a href="https://www.youtube.com/watch?v=I3BJVaioX_k"><img src="../media/post4.PNG" id="images"></a>
                <p id="date">December 6, 2019 author: Craig Costello</p>
                <p id="postDes"><a href="https://www.youtube.com/watch?v=I3BJVaioX_k"> In this glimpse into our technological future, 
                cryptographer Craig Costello discusses the world-altering potential of quantum computers,
                 which could shatter the limits set by today's machines -- and give code
                 breakers a master key to the digital world. See how Costello and his fellow cryptographers 
                 are racing to reinvent encryption and secure the internet...</a></p>
                <h3 id="comHeader"> Comments </h3>
                 <div id= "comSect">
                  <?php
                    require 'includes/dbh.inc.php';
                    //guest view
                    if ($_SESSION == null) {
                        //sql statments
                        $sql = "SELECT uidUsers, comment4 FROM usercom WHERE idUsers > 1 AND comment4 != ''";
                        $result = $conn->query($sql);

                        //to check if database is not empty
                            if ($result->num_rows > 0) {
                                    // output data of user and comment
                                while($row = $result->fetch_assoc()) {
                                    echo $row["uidUsers"]. " - " . $row["comment4"].  "<br>";
                                }
                            } 
                            //it is empty
                            else {}
                        $conn->close();
                    }
                    //user/admin view
                    else{
                        $admin = $_SESSION['username'];
                        //Users
                        if ($admin != "admin") {
                            echo '<input id="inpComment" type="text" name="inpComment" placeholder="Comment on the article"/>';
                            echo '<button id="comBut" type="submit" name="comment4" class="btn">Comment</button>';
                            
                            //sql statments
                            $sql = "SELECT uidUsers, comment4 FROM usercom WHERE idUsers > 1 AND comment4 != ''";
                            $result = $conn->query($sql);

                            //to check if database is not empty
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        echo "<br>" . $row["uidUsers"]. " - " . $row["comment4"].  "<br>";
                                    }
                                } 
                                //it is empty
                                else {}
                            $conn->close();
                        }

                        //admin view
                        else if ($admin == "admin") {
                            //sql statments
                            $sql = "SELECT uidUsers, comment4 FROM usercom";
                            $result = $conn->query($sql);

                            //to check if database is not empty
                                if ($result->num_rows > 0) {
                                    // output data of user and comment
                                    while($row = $result->fetch_assoc()) {
                                        echo "<br> Users:".$row["uidUsers"] ." - Comment:".$row["comment4"].  "</br>";
                                    }
                                } 
                                //it is empty
                                else {}
                            $conn->close();
                        }     
                    }   
                    ?>
				  </div>
            </div><br>
        </form>

        <form action="includes/comment.inc.php" method="POST" id="grid">
            <div id="items">
                <h2 id="test"> War for information, will quantum computers defeat cryptographers?</h2>
                <a href="https://www.infowebica.com/online-games-computer-security/"><img src="../media/post5.PNG" id="images"></a>
                <p id="date">July 7, 2018 author: Infowebica</p>
                <p id="postDes"><a href="https://www.infowebica.com/online-games-computer-security/"> You probably have little idea about internet security and 
                cyber-crime that may be dangerous for your computer. Nowadays, most of the kids are using computers to access the internet but they 
                don’t know if there are some hackers who may put some viruses in their computers. 
                Fortunately, there are some online games that can increase your internet and computer security...<a href="https://www.consumer.ftc.gov/media/game-0013-case-cyber-criminal"><b>(Jump right in to a game here!)</b></a></a></p>
                <h3 id="comHeader"> Comments </h3>
                 <div id= "comSect">
                  <?php
                    require 'includes/dbh.inc.php';
                    //guest view
                    if ($_SESSION == null) {
                        //sql statments
                        $sql = "SELECT uidUsers, comment5 FROM usercom WHERE idUsers > 1 AND comment5 != ''";
                        $result = $conn->query($sql);

                        //to check if database is not empty
                            if ($result->num_rows > 0) {
                                    // output data of user and comment
                                while($row = $result->fetch_assoc()) {
                                    echo $row["uidUsers"]. " - " . $row["comment5"].  "<br>";
                                }
                            } 
                            //it is empty
                            else {}
                        $conn->close();
                    }
                    //user/admin view
                    else{
                        $admin = $_SESSION['username'];
                        //Users
                        if ($admin != "admin") {
                            echo '<input id="inpComment" type="text" name="inpComment" placeholder="Comment on the article"/>';
                            echo '<button id="comBut" type="submit" name="comment5" class="btn">Comment</button>';
                            
                            //sql statments
                            $sql = "SELECT uidUsers, comment5 FROM usercom WHERE idUsers > 1 AND comment5 != ''";
                            $result = $conn->query($sql);

                            //to check if database is not empty
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        echo "<br>" . $row["uidUsers"]. " - " . $row["comment5"].  "</br>";
                                    }
                                } 
                                //it is empty
                                else {}
                            $conn->close();
                        }

                        //admin view
                        else if ($admin == "admin") {
                            //sql statments
                            $sql = "SELECT uidUsers, comment5 FROM usercom";
                            $result = $conn->query($sql);

                            //to check if database is not empty
                                if ($result->num_rows > 0) {
                                    // output data of user and comment
                                    while($row = $result->fetch_assoc()) {
                                        echo "<br> Users:".$row["uidUsers"] ." - Comment:".$row["comment5"].  "<br>";
                                    }
                                } 
                                //it is empty
                                else {}
                            $conn->close();
                        }     
                    }   
                    ?>
				  </div>
            </div><br>
        </form>


    </div>
    </body>
</html>