<?php ob_start(); ?>
  <title>Jasperson, Ben: Professional- Utah Certificate</title>
  <link rel="stylesheet" type="text/css" href="../index.css">
  <link rel="icon" type="image/png" href="images/favicon.png">
<?php 
  $headerInfo = ob_get_clean();
  ob_start(); 
 ?>
  <section id="utah_certificate"  class="main">
	<h1>Utah Teacher Certificate</h1>
	<img src="../images/utah_certificate.jpg"
		alt="Utah Teacher Certificate"><br>
		<a href="../professional.php">Back</a>
  </section>
<?php
	$pageBody = ob_get_clean(); 
	$selected = 1;
	$pathToHome = "../";
	include "../templates/page.php"; 
?>