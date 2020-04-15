<?php
	require "pages/header.php";
?>


<main>
	<!-- Advertisement for us, makin the user to easily scan (extra option)-->	

	<?php
		if (isset($_SESSION['username'])) {
			echo '<p> you are logged in ' . $_SESSION['username'] . '.</p>';
		}
		else {
			echo '<p> You are logged out!! </p>';
		}
	?>

	<h2 id= "meeting">Find out what is going on around you Tech Wise!</h2>
 	<div id="social">
      <a href="vcheck.html"><img id="social" src="media/scan1.png" alt = "Nimby Cloud Logo"/></a>
	</div>
	
  <div class="grid-container">
   	 <!-- Article 1 with link (Huwaei) -->
    <div class="grid-item">
      <div >
        <img id= "homestep1" src="media/huawei.png" alt = "Microsoft Patched Up." />
      </div>
	  <div id= "link" >
        <a href="https://www.cnet.com/news/us-finds-huawei-has-backdoor-access-to-mobile-networks-globally-report-says/">
		  <h3 id= "header">US finds Huawei has backdoor access to mobile networks globally.​</h3> 
		</a>
      </div>
	  <div id= "description" >
		<p>The Chinese tech giant has reportedly had access to carrier equipment for over a decade.</p> 
 	    <a href="https://www.cnet.com/news/us-finds-huawei-has-backdoor-access-to-mobile-networks-globally-report-says/">
	      <h4 id= "more">Read More</h3>
        </a>       
	  </div>
    </div>
	 <!-- Article 2 (Microsoft) -->
	<div class="grid-item">
	  <a href="https://threatpost.com/microsoft-active-attacks-air-gap-99-patches/152807/">
	    <h3 id= "header">Microsoft Addresses Active Attacks, Air-Gap Danger with 99 Patches</h3>
      </a>
	  <img id= "homestep2" src="media/microsoft.jpg" alt = "Microsoft" />
	  <div id= "description" >
		<p>There are 12 critical and five previously disclosed bugs in the February 2020 Patch Tuesday Update. Microsoft has issued one of its largest Patch Tuesday updates for the shortest month of the year, addressing 99 security vulnerabilities across a range of products. Twelve of the bugs are listed as critical – and the rest are rated as being important.</p> 
 	    <a href="https://threatpost.com/microsoft-active-attacks-air-gap-99-patches/152807/">
	      <h4 id= "more">Read More</h3>
        </a>     
	  </div>
    </div>
	 <!-- Article 3 with link (Twitter) -->
	<div class="grid-item">
	  <a href="https://www.cnet.com/news/twitter-rolls-out-new-tool-to-combat-misinformation-about-us-census/">
	    <h3 id= "header">Twitter rolls out new tool to combat misinformation about US census.</h3>
      </a>
	  <img id= "homestep2" src="media/twitter.png" alt = "First Profile" />
	  <div id= "description" >
		<p>Twitter said Tuesday that users looking for information about the US census will see a link to the official website at the top of their search results, a tool meant to crack down on misinformation. The social network's move comes as the US Census Bureau turns to tech giants, including Facebook and Google, to combat fake news.</p> 
	    <a href="https://www.cnet.com/news/twitter-rolls-out-new-tool-to-combat-misinformation-about-us-census/">
	      <h4 id= "more">Read More</h3>
        </a>
	  </div>
    </div>	
  </div>


	<footer id="footer">
	  <ul>
		  <h4>Boom Saver<em> 2020 </em> <strong>&copy;</strong></h4>
	  </ul>
	</footer>
  </body>
</main>

