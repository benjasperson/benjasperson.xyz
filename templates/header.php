<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Jasperson, Ben</title>		<?php
    echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"" . $pathToHome . "index.css\">";
	echo "<link rel=\"icon\" type=\"image/png\" href=\"" . $pathToHome . "images/favicon.png\">";	?>
  </head> 

  <body>
    <header class="top">
      Ben Jasperson
    </header>

	<nav>
	<a href="#" id="menu-icon"></a>
	<ul>	<?php	function getClassText(int $i){		global $selected;		return ($selected == $i) ? "class=\"selected\"" : "";	}
	echo "<li ".getClassText(0)."><a href=\"{$pathToHome}index.php\">HOME</a></li>";	
	echo "<li ".getClassText(1)."><a href=\"{$pathToHome}professional.html\">PROFESSIONAL</a></li>";
	echo "<li ".getClassText(2)."><a href=\"{$pathToHome}personal.html\">PERSONAL</a></li>";
	echo "<li ".getClassText(3)."><a href=\"{$pathToHome}favorites.html\">FAVORITES</a></li>";
	echo "<li ".getClassText(4)."><a href=\"{$pathToHome}contact.html\">CONTACT ME</a></li>";	?>
	</ul>
	</nav>