<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
	<meta name="viewport" 
		content="width=device-width,initial-scale=1,maximum-scale=1">    	
	<?php echo $headerInfo; ?>
  </head> 
  <body>
    <header class="top">Ben Jasperson</header>
	<nav>
	  <a href="#" id="menu-icon"></a>
	  <ul>
	    <?php
	      function getClassText(int $i){
		    global $selected;
		    return ($selected == $i) ? "class=\"selected\"" : "";
	      }
	      echo "<li ".getClassText(0)."><a href=\"{$pathToHome}index.php\">HOME</a></li>";
		  echo "<li ".getClassText(1)."><a href=\"{$pathToHome}professional.php\">PROFESSIONAL</a></li>";
		  echo "<li ".getClassText(2)."><a href=\"{$pathToHome}personal.php\">PERSONAL</a></li>";
		  echo "<li ".getClassText(3)."><a href=\"{$pathToHome}favorites.php\">FAVORITES</a></li>";
		  //echo "<li ".getClassText(4)."><a href=\"{$pathToHome}contact.php\">CONTACT ME</a></li>";
		?>
	  </ul>
	</nav>
	<div id="tableContainer">
	  <div id="tableRow">
	    <?php include "{$pathToHome}templates/highlights.php"; ?>
		<?php echo $pageBody; ?>		
	    <?php include "{$pathToHome}templates/quote.php"; ?>
	  </div>
	</div>
	<?php include "{$pathToHome}templates/footer.php"; ?>
	<center>This page was last updated: 2023/04/29</center>
  </body>
</html>