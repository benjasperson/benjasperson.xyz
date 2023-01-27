<?php ob_start(); ?>
  <title>Jasperson, Ben: Professional- Master Degree</title>
  <link rel="stylesheet" type="text/css" href="../index.css">
  <link rel="icon" type="image/png" href="images/favicon.png">
<?php 
  $headerInfo = ob_get_clean();
  ob_start(); 
 ?>
  <section id="master"  class="main">
	<h1>Master Degree of Science in Education</h1>
	<img src="../images/master.jpg"
		alt="Master Degree of Science in Education"><br>
		<a href="../professional.php">Back</a>
  </section>
<?php
	$pageBody = ob_get_clean(); 
	$selected = 1;
	$pathToHome = "../";
	include "../templates/page.php"; 
?>