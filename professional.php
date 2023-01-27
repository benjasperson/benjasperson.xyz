<?php ob_start(); ?>
  <title>Jasperson, Ben: Professional</title>
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="icon" type="image/png" href="images/favicon.png"> 
<?php 
	$headerInfo = ob_get_clean();
	ob_start(); 
?>
<section id="professional" class="main">
	  <h1>Professional Accomplishments</h1>
	  <article>
	  <header>
	  <h2>Programming Skills</h2>
	  <p>Current</p>
	  </header>
	  <p>Since May 2018, I have developed and mantained UWP, Android, iOS and Garmin 
	  applications for <a href="http://www.korr.com/about" target="_blank" rel="noopener noreferrer">Korr Medical Technologies</a><br>
		You may download my portfolio <a href="professional/portfolio.pdf">here</a>
		or follow the links below to checkout the applications I've worked on:</p>
	  <ul>
	    <li><a href="https://www.korr.com/downloads/cardiocoach/cardiocoach_installer.exe" >Windows Universal Platform Application (download ~376 MB)</a></li>
		<li><a href="https://play.google.com/store/apps/details?id=com.korr.cardiocoach" target="_blank" rel="noopener noreferrer">Android Application</a></li>
		<li><a href="https://apps.apple.com/us/app/cardiocoach/id1054133646" target="_blank" rel="noopener noreferrer">iOS Application</a></li>
		<li><a href="https://apps.garmin.com/en-US/apps/2a2aa14a-22b1-4435-8096-aa2e9fb292bb" target="_blank" rel="noopener noreferrer">Garmin app</a></li>
		<li><a href="professional/reevue_example.php">Arudino Program</a></li>
	  </ul>
	  </article>
	  <article>
	  <header>
	  <h2>Counseling Skills</h2>
	  <p>August 2015 to May 2017</p>
	  </header>
	  <p>I worked as a school counselor for two years at Coal Ridge High 
		School.<br>
	    You're welcome to check out my school counseling documents:</p>
	  <ul>
	    <li><a href="professional/counselor_certificate.php">
		    Colorado School Counselor Certificate</a>
			June 2016</li>
		<li><a href="professional/master.php">
			Master of Science in Education for School Counseling from the
			Univeristy of the Southwest</a>
			May 2016</li>
	  </ul>
	  </article>
	  <article>
	  <header>
	  <h2>Teaching Skills</h2>
	  <p>August 2012 to May 2015</p>
	  </header>
	  <p>I spent three years teaching middle school science in Arizona
		and Utah.<br>
	    I have a few documents for that as well:</p>
	  <ul>
	    <li><a href="professional/arizona_certificate.php">
		    Arizona Teacher Certificate</a>
			August 2013</li>
		<li><a href="professional/utah_certificate.php">
			Utah Teacher Certificate</a>
			June 2012</li>
		<li><a href="professional/bachelor.php">
		    Bachelor of Science in Physics Education</a> 
			June 2012</li>
	  </ul>
	  </article>
	</section>
<?php $pageBody = ob_get_clean();
	$selected = 1;
	$pathToHome = "";
	include "templates/page.php";
 ?>