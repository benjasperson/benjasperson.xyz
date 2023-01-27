<?php ob_start(); ?>
  <title>Jasperson, Ben: Professional- Counselor Certificate</title>
  <link rel="stylesheet" type="text/css" href="../index.css">
  <link rel="icon" type="image/png" href="images/favicon.png">
<?php 
  $headerInfo = ob_get_clean();
  ob_start(); 
 ?>
  <section id="counselor_certificate"  class="main">
	<h1>Colorado School Counseling Certificate</h1>
	<img src="../images/counselor_certificate.jpg"
		alt="Colorado School Counseling Certificate"><br>
		<a href="../professional.php">Back</a>
  </section>
<?php
	$pageBody = ob_get_clean(); 
	$selected = 1;
	$pathToHome = "../";
	include "../templates/page.php"; 
?>