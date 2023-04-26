<?php ob_start(); ?>
  <title>Jasperson, Ben</title>
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="icon" type="image/png" href="images/favicon.png">  
<?php 
  $headerInfo = ob_get_clean();
  ob_start(); 
 ?>
  <section id="about" class="main">
	<h1>Welcome</h1>
	<!--<video poster="images/about_me.jpg" width="800" controls>
	  <source src="videos/about_me.mp4" type="video/mp4">
		Sorry!  It looks like your browser doesn't like mp4.  Don't worry,
		I summed it all up in the paragraph below.
	</video>-->
	<img src="images/about_me.jpg" alt="head shot" width="800" >
	<p>Thanks for visiting my page.  Take a look around.  Make sure to
	  check out my <a href="professional/portfolio.pdf" download>portfolio</a>,
	  my <a href="professional.php">professional experience</a>, and my 
	  <a href="contact.php">contact page</a></p>
	<p>Cheers!</p>
  </section>
<?php
	$pageBody = ob_get_clean(); 
	$selected = 0;
	$pathToHome = "";
	include "templates/page.php"; 
?>