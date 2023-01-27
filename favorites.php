<?php ob_start(); ?>
  <title>Jasperson, Ben: Favorites</title>
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="icon" type="image/png" href="images/favicon.png">  
<?php 
  $headerInfo = ob_get_clean();
  ob_start(); 
 ?>
  <section id="favorites" class="main">
	<h1>Some of My Favorites</h1>
	<h2>Books</h2>
	<ul>
	  <li><cite>Les Miserables</cite> by Victor Hugo</li>
	  <li><cite>The Constitution Today</cite> by Akhil Reed Amar</li>
	  <li><cite>The Outliers</cite> by Malcom Gladwell</li>
  	  <li><cite>Moonwalking with Einstein</cite> by Joshua Foer</li>
   	  <li><cite>The Count of Monte Cristo</cite> by Alexandre Dumas</li>
  	  <li><cite>The Screwtape Letters</cite> by C. S. Lewis</li>
	  <li><cite>What if?</cite> by Randall Munroe
	</ul>
	<h2>Youtube Channels</h2>
	<ul>
	  <li><a href="https://www.youtube.com/user/1veritasium" 
			target="_blank">Veritasium</a></li>
	  <li><a href="https://www.youtube.com/user/minutephysics" 
			target="_blank">Minute Physics</a></li>
	  <li><a href="https://www.youtube.com/user/numberphile" 
			target="_blank">Numberphile</a></li>
	  <li><a href="https://www.youtube.com/user/TEDtalksDirector" 
			target="_blank">Ted Talks</a></li>
	</ul>
	<h2>Other</h2>
	<ul>
	  <li>I love playing music when I can.  I especially enjoy the
			piano and uke.</li>
	  <li>I'm always trying to learn new things (currently studying 
			Morse code)</li>
	  <li>Most of all, I enjoy being outside with my 
			<a href="personal.php#family">family</a>.</li>
	</ul>
  </section>
<?php
	$pageBody = ob_get_clean(); 
	$selected = 3;
	$pathToHome = "";
	include "templates/page.php"; 
?>