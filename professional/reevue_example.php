<?php ob_start(); ?>
  <title>Jasperson, Ben: Professional</title>
  <link rel="stylesheet" type="text/css" href="../index.css">
  <link rel="icon" type="image/png" href="../images/favicon.png"> 
<?php 
	$headerInfo = ob_get_clean();
	ob_start(); 
?>
  <section id="professional" class="main">
	<h1>ReeVue</h1>
	<video width="800" controls>
	  <source src="../videos/reevue.mp4" type="video/mp4">
		Sorry!  It looks like your browser doesn't like mp4.</source>
	</video>
  </section>
<?php
	$pageBody = ob_get_clean(); 
	$selected = 1;
	$pathToHome = "../";
	include "../templates/page.php"; 
?>