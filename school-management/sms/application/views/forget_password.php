<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
 <?php    $this->load->view('header'); ?>
  </head>
  <body>
<!-- Shell -->
<div id="shell">
	
	<!-- Header -->
	<div id="header">
		<h1><a href="#">School Managment System </a></h1>
	</div>
	<!-- End Header -->
		 <?php    $this->load->view('menu'); ?>	
	
	<!-- End Navigation -->
	
	<!-- Content -->
	<div id="content">
		<?php if(isset($messages)) echo $messages; ?>
		<div class="message thank-message">
				<br />	<br />
    			<form name = "" action = "/email_control/send_email" method ="POST">
     			 <label for="username"><b>Enter email id</b></label>
      			<input type="text" size="40" id="email" name="email"/>
      			<br />	<br />
      			<input type="submit" value="Submit"/>
    			</form>
		</div>
		<div class="message error-message">
			<p><strong></strong></p>
		</div>

	
	<!-- End Content -->
</div>
<!-- End Shell -->

<!-- Footer -->
<div id="footer">
	
</div>
<!-- End Footer -->
</body>
</html>
