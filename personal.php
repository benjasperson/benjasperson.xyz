<?php ob_start(); ?>
  <title>Jasperson, Ben: Personal</title>
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.3/fotorama.css">
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="icon" type="image/png" href="images/favicon.png">
  <script src="jquery-3.2.1.min.js">
  </script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.3/fotorama.js">
  </script>
<?php 
  $headerInfo = ob_get_clean();
  ob_start(); 
 ?>
  <section id="personal" class="main">
    <h1>Personal Information</h1>
	<p>First and formost, I'm a husband and father.  My wife and children mean 
	everything to me.</p>
	<div id="fotorama1" class="fotorama" data-autoplay="true" data-width="500">
	  <img id="family" src="images/fam_2022_web.jpg" alt="My Family 2022"
		 data-caption="Me and my family"><br>
	  <img src="images/children_zoo_web.jpg" alt="Children at the zoo"
		data-caption="This is a picture of my children at the zoo">
		<br>
	  <img src="images/children_hospital_web.jpg" alt="Here's a picture of the children 
		with the new baby."
		data-caption="Here's a picture of the children with the new baby."><br>
	  <img src="images/older_children_hike_web.jpg" alt="Older children hiking"
		data-caption="Older children hiking."><br>
	  <img src="images/knoxville_web.jpg" 
		alt="Corn Maze"
		data-caption="Having fun at corn maze"><br>
	</div>
  </section>
<?php
	$pageBody = ob_get_clean(); 
	$selected = 2;
	$pathToHome = "";
	include "templates/page.php"; 
?>