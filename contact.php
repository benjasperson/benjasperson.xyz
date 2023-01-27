<?php ob_start(); ?>
  <title>Jasperson, Ben: Contact</title>
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="icon" type="image/png" href="images/favicon.png">  
<?php 
  $headerInfo = ob_get_clean();
  ob_start(); 
 ?>
  <section id="contact"  class="main">
	<h1>Contact Me</h1>
	<p>This page is temporarily down.  Please, check back soon</p>
<!--<p id="instructions">If you would like to contact me about a job
		offer, question, comment, or for any reason, send me an 
		<a href="mailto:benjaminjasperson+softwaredev@gmail.com">e-mail</a>
		<span id="email">
	    (benjaminjasperson+softwaredev@gmail.com)</span> or complete the 
		form below:</p><br>
    <form id="gform" action=
		"https://script.google.com/macros/s/AKfycbzyEAu2BE6IRf_ogRdjIQtf6H7gw1HsLzicr66LfQEN1Or4Q_Y4/exec"
		method="post">
	  <div class="tableRow">
	    <p>Name:</p>
		<p><input type="text" name="name"></p>
	  </div>
	  <div class="tableRow">
	    <p>Address:</p>
		<p><input type="text" name="address"></p>
	  </div>
	  <div class="tableRow">
	    <p>Zip:</p>
		<p><input type="text" name="zip"></p>
	  </div> 
	  <div class="tableRow">
	    <p>Phone Number:</p>
		<p><input id="phone" type="text" name="phone">
			<span id="phone_warning">
			Numbers should be in the format (888)888-8888
			</span></p>
	  </div>
	  <div class="tableRow">
	    <p>Email:</p>
		<p><input type="text" name="email"></p>
	  </div>
	  <div class="tableRow">
	    <p>Best method of contact:</p>
		<p>
		  <input type="radio" name="contact" value="phone">Phone<br>
		  <input type="radio" name="contact" value="email">Email
		</p>
	  </div>
	  <div class="tableRow">
	    <p>Preferred contact time/s (select all that apply):</p>
		<p>
		  <input type="checkbox" name="morning" value="morning">Morning<br>
		  <input type="checkbox" name="evening" value="evening">Evening<br>
		  <input type="checkbox" name="night" value="night">Night<br>
		</p>
	  </div>
	  <div class="tableRow">
	    <p>Reason for request:</p>
		<p>
		  <select name="reason">
		    <option value="offer">Job Offer</option>
			<option value="comment">Comment</option>
			<option value="question">Question</option>
			<option value="other">Other</option>
		  </select>
		</p>
	  </div>
	  <div class="tableRow">
		<p>Details:</p>
		<p><textarea name="details" rows="10" cols="30"></textarea></p>
	  </div>
	  <div class="tableRow">
	    <p></p>
		<p><input type="submit"></p>
	  </div>
    </form>
    <div id="thankyou_message">
	Thank you for your message.  If you left contact information, I will
	respond soon.
	</div>
	-->
  </section>
<?php
	$pageBody = ob_get_clean(); 
	$selected = 4;
	$pathToHome = "";
	include "templates/page.php"; 
?>