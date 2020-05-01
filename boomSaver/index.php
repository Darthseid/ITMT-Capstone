<?php
	require 'pages/includes/createdb.inc.php';
	require 'pages/includes/dbh.inc.php';
	require "pages/header.php";
?>


<main>
	<!-- Advertisement for us, makin the user to easily scan (extra option)-->	

	<?php
		if (isset($_SESSION['username'])) {
			echo '<p> Welcome ' . $_SESSION['username'] . ' !</p>';
		}
		else {
			echo '<p> You are logged out. </p>';
		}
	?>

	<h2 id= "meeting">Find out what is going on around you Tech Wise!</h2>
 	<div id="social">
      <a href="pages/blogList.php"><img id="social" src="media/scan1.png" alt = "Nimby Cloud Logo"/></a>
	</div>
	
  <div class="grid-container">
  	 <div class="container">
		  <div class="wsite-section-elements">
			<!-- Article 1(Huawei) -->
			<div class="grid-item">
			  <div >
				<img id= "homestep1" src="media/huawei.png" alt = "Huawei" />
			  </div>
			  <div id= "link" >
				<a href="https://www.cnet.com/news/us-finds-huawei-has-backdoor-access-to-mobile-networks-globally-report-says/">
				  <h3 id= "header">US finds Huawei has backdoor access to mobile networks globally.​</h3> 
				</a>
			  </div>
			  <div id= "description" >
				<p>The Chinese tech giant has reportedly had access to carrier equipment for over a decade.</p> 
				<a href="https://www.cnet.com/news/us-finds-huawei-has-backdoor-access-to-mobile-networks-globally-report-says/">
				  <font color="#3387a2">Read More</font>
				</a>       
			  </div>
			</div>
	
		   <!-- Article 2 (Twitter) -->
			 <div class="grid-item">
			   <hr class="styled-hr" style="width:100%;">
				<div class="wsite-multicol">
				  <div class="wsite-multicol-table-wrap" style="margin:0 -15px;">
				   <h3 id= "header">Twitter rolls out new tool to combat misinformation about US census.&#8203;</h2>
					<table class="wsite-multicol-table">
					  <tbody class="wsite-multicol-tbody">
						<tr class="wsite-multicol-tr">
						  <td class="wsite-multicol-col" style="width:55.570713960891%; padding:0 15px;">
							<div class="paragraph" style="display:block;">
							  <p>
								<a href="https://www.cnet.com/tags/twitter/"> Twitter </a>
								<span style="color:rgb(0, 0, 0)">&nbsp;said Tuesday that users looking for information about the US census will see a link to the official website at the top of their search results, a tool meant to crack down on misinformation. The social network's move comes as the US Census Bureau turns to tech giants, including&nbsp;</span>
								<a href="https://www.cnet.com/tags/facebook/">Facebook</a>
								<span style="color:rgb(0, 0, 0)">&nbsp;and Google, to combat fake news.&nbsp;</span>&#8203;
							  </p>
							</div>
							<h2 class="wsite-content-title">
							  <a href="https://www.cnet.com/news/twitter-rolls-out-new-tool-to-combat-misinformation-about-us-census/" target="_blank">
							   <font color="#3387a2">Click here to read more.</font>
							  </a>
							</h2>
						  </td>				
						  <td class="wsite-multicol-col" style="width:33.333333333333%; padding:0 15px;">
							<div>
							  <div class="wsite-image wsite-image-border-none " style="padding-top:0px;padding-bottom:0px;margin-left:0px;margin-right:0px;text-align:center">
							   <a>
								<img src="media/twitter.png" alt="Twitter Logo" style="width:auto;max-width:100%">
							   </a>
							   <div style="display:block;font-size:90%"></div>
							  </div>
							</div>
						  </td>				
						  <td class="wsite-multicol-col" style="width:11.095952705775%; padding:0 15px;">
							<div class="wsite-spacer" style="height:50px;"></div>
						  </td>			
						</tr>
					  </tbody>
					</table>
				  </div>
				</div>
				<hr class="styled-hr" style="width:100%;">
			  </div>
			  
			  <!-- Article 3 (Microsoft) -->
			  <div class="grid-item">
				<hr class="styled-hr" style="width:100%;">
				<h3 id= "header" style="text-align:center;">
				  <a href="https://threatpost.com/microsoft-active-attacks-air-gap-99-patches/152807/" target="_blank">
					Microsoft Addresses Active Attacks, Air-Gap Danger with 99 Patches
				  </a>
				</h3>
				<!-- Image input on left -->
				<span class="imgPusher" style="float:left;height:0px"></span>
				<span style="display: table;width:459px;position:relative;float:left;max-width:100%;;clear:left;margin-top:0px;*margin-top:0px">
				  <a  href="https://threatpost.com/microsoft-active-attacks-air-gap-99-patches/152807/">
					<img src="media/microsoft.jpg" style="margin-top: 10px; margin-bottom: 10px; margin-left: 0px; margin-right: 10px; border-width:0; max-width:100%" alt="Microsoft Logo" class="galleryImageBorder wsite-image">
				  </a>
				  <span style="display: table-caption; caption-side: bottom; font-size: 90%; margin-top: -10px; margin-bottom: 10px; text-align: center;" class="wsite-caption"></span>
				</span>
				<!-- paragraph description on right -->
				<div class="paragraph" style="display:block;">
				  <p>
				   There are 12 critical and five previously disclosed bugs in the February 2020 Patch Tuesday Update. Microsoft has issued one of its largest Patch Tuesday updates for the shortest month of the year, addressing 99 security vulnerabilities across a range of products. Twelve of the bugs are listed as critical – and the rest are rated as being important.
				  </p>
				</div>
				<!-- Read more access -->
				<h2 class="wsite-content-title" style="text-align:right;">
				  <a href="https://threatpost.com/microsoft-active-attacks-air-gap-99-patches/152807/" target="_blank">
					<font color="#3387a2">Click here to read more.</font>
				  </a>
				</h2>
				<div>
				  <div style="height: 20px; overflow: hidden; width: 100%;"></div>
				  <hr class="styled-hr" style="width:100%;">
				</div>
			  </div>
			<!-- Article 4 (IEE) -->  
			  <div class="grid-item">
			   <hr class="styled-hr" style="width:100%;">
				<div class="wsite-multicol">
				  <div class="wsite-multicol-table-wrap" style="margin:0 -15px;">
				   <h3 id= "header">5 Cybersecurity Threats to Be Aware of in 2020&#8203;</h2>
					<table class="wsite-multicol-table">
					  <tbody class="wsite-multicol-tbody">
						<tr class="wsite-multicol-tr">
						  <td class="wsite-multicol-col" style="width:55.570713960891%; padding:0 15px;">
							<div class="paragraph" style="display:block;">
							  <p> 
							   <span style="color:rgb(0, 0, 0)">
							    The risk and severity of cyber-attacks have clearly grown over the past few years. In fact, since the year 2018, mankind has witnessed the most horrific cases of cybercrimes related to massive data breaches, flaws in microchips, cryptojacking, and many others
							   </span >
							  </p>
							</div>
							<h2 class="wsite-content-title">
							  <a href="https://www.computer.org/publications/tech-news/trends/5-cybersecurity-threats-to-be-aware-of-in-2020" target="_blank">
							   <font color="#3387a2">Click here to read more.</font>
							  </a>
							</h2>
						  </td>				
						  <td class="wsite-multicol-col" style="width:33.333333333333%; padding:0 15px;">
							<div>
							  <div class="wsite-image wsite-image-border-none " style="padding-top:0px;padding-bottom:0px;margin-left:0px;margin-right:0px;text-align:center">
							   <a  href="https://www.computer.org/publications/tech-news/trends/5-cybersecurity-threats-to-be-aware-of-in-2020">
								<img src="media/iee.jpg" style="margin-top: 10px; margin-bottom: 10px; margin-left: 0px; margin-right: 10px; border-width:0; max-width:100%" alt="Microsoft Logo" class="galleryImageBorder wsite-image">
							   </a>
							   <div style="display:block;font-size:90%"></div>
							  </div>
							</div>
						  </td>				
						  <td class="wsite-multicol-col" style="width:11.095952705775%; padding:0 15px;">
							<div class="wsite-spacer" style="height:50px;"></div>
						  </td>			
						</tr>
					  </tbody>
					</table>
				  </div>
				</div>
				<hr class="styled-hr" style="width:100%;">
			  </div>		
			  
			<!-- Article 5 (Varonis) -->   
			  <div class="grid-item">
				<hr class="styled-hr" style="width:100%;">
				<h3 id= "header" style="text-align:center;">
				  <a href="https://www.varonis.com/blog/cybersecurity-statistics/" target="_blank">
					110 Must-Know Cybersecurity Statistics for 2020
				  </a>
				</h3>
				<!-- Image input on left -->
				<span class="imgPusher" style="float:left;height:0px"></span>
				<span style="display: table;width:459px;position:relative;float:left;max-width:100%;;clear:left;margin-top:0px;*margin-top:0px">
				  <a  href="https://www.varonis.com/blog/cybersecurity-statistics/">
					<img src="media/varonis.png" style="margin-top: 10px; margin-bottom: 10px; margin-left: 0px; margin-right: 10px; border-width:0; max-width:100%" alt="Microsoft Logo" class="galleryImageBorder wsite-image">
				  </a>
				  <span style="display: table-caption; caption-side: bottom; font-size: 90%; margin-top: -10px; margin-bottom: 10px; text-align: center;" class="wsite-caption"></span>
				</span>
				<!-- paragraph description on right -->
				<div class="paragraph" style="display:block;">
				  <p>
				     With new threats emerging every day, the risks of not securing files is more dangerous than ever, especially for companies. Most companies have unprotected data and poor cybersecurity practices in place, making them vulnerable to data loss. To fight against malicious intent, it’s imperative that companies make cybersecurity awareness, prevention and security best practices a part of their culture.
				  </p>
				</div>
				<!-- Read more access -->
				<h2 class="wsite-content-title" style="text-align:right;">
				  <a href="https://www.varonis.com/blog/cybersecurity-statistics/" target="_blank">
					<font color="#3387a2">Click here to read more.</font>
				  </a>
				</h2>
				<div>
				  <div style="height: 20px; overflow: hidden; width: 100%;"></div>
				  <hr class="styled-hr" style="width:100%;">
				</div>
			  </div>	
			  
			<!-- Article 6 (DICT) --> 		
			  <div class="grid-item">
			   <hr class="styled-hr" style="width:100%;">
				<div class="wsite-multicol">
				  <div class="wsite-multicol-table-wrap" style="margin:0 -15px;">
				   <h3 id= "header">Cyber Security and the Internet of Things: Vulnerabilities, Threats, Intruders and Attacks</h2>
					<table class="wsite-multicol-table">
					  <tbody class="wsite-multicol-tbody">
						<tr class="wsite-multicol-tr">
						  <td class="wsite-multicol-col" style="width:55.570713960891%; padding:0 15px;">
							<div class="paragraph" style="display:block;">
							  <p> 
							   <span style="color:rgb(0, 0, 0)">
							    Internet of Things (IoT) devices are rapidly becoming ubiquitous while IoT services are becoming pervasive. Their success has not gone unnoticed and the number of threats and attacks against IoT devices and services are on the increase as well.
							   </span>
							  </p>
							</div>
							<h2 class="wsite-content-title">
							  <a href="https://www.riverpublishers.com/journal/journal_articles/RP_Journal_2245-1439_414.pdf" target="_blank">
							   <font color="#3387a2">Click here to read more.</font>
							  </a>
							</h2>
						  </td>				
						  <td class="wsite-multicol-col" style="width:33.333333333333%; padding:0 15px;">
							<div>
							  <div class="wsite-image wsite-image-border-none " style="padding-top:0px;padding-bottom:0px;margin-left:0px;margin-right:0px;text-align:center">
							   <a  href="https://www.riverpublishers.com/journal/journal_articles/RP_Journal_2245-1439_414.pdf">
								<img src="media/iot.jpg" style="margin-top: 10px; margin-bottom: 10px; margin-left: 0px; margin-right: 10px; border-width:0; max-width:100%" alt="Microsoft Logo" class="galleryImageBorder wsite-image">
							   </a>
							   <div style="display:block;font-size:90%"></div>
							  </div>
							</div>
						  </td>				
						  <td class="wsite-multicol-col" style="width:11.095952705775%; padding:0 15px;">
							<div class="wsite-spacer" style="height:50px;"></div>
						  </td>			
						</tr>
					  </tbody>
					</table>
				  </div>
				</div>
				<hr class="styled-hr" style="width:100%;">
			  </div>			
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

