<?php ob_start(); ?>
  <title>Jasperson, Ben: Professional- Bachelor Degree</title>
  <link rel="stylesheet" type="text/css" href="../index.css">
  <link rel="icon" type="image/png" href="images/favicon.png">
<?php 
  $headerInfo = ob_get_clean();
  ob_start(); 
 ?>
  <section id="bachelor"  class="main">
	<h1>Bachelor of Science</h1>
	<img src="../images/bachelor.jpg"
		alt="Bachelor of Science"><br>
		<a href="../professional.php">Back</a>
  </section>
<?php
	$pageBody = ob_get_clean(); 
	$selected = 1;
	$pathToHome = "../";
	include "../templates/page.php"; 
?>