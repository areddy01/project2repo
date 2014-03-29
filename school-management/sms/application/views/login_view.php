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
	
	
	<!-- End Navigation -->
	
	<!-- Content -->
	<div id="content">
		
		<div class="message thank-message">
			<?php //echo validation_errors(); ?>
    			<form name ="" action = "/verifylogin" method = "POST" >
     			 <label for="username">Username:</label>
      			<input type="text" size="20" id="username" name="username"/>
      			<br/><br/>
     			 <label for="password">Password:</label>
      			<input type="password" size="20" id="passowrd" name="password"/>
      			<br/><br/>
				<a href = "/email_control/forget_password" > forget Password</a>
      			<input type="submit" value="Login"/>
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
	<p>&copy; Sitename.com. Design by</p>
</div>
<!-- End Footer -->
</body>
</html>
