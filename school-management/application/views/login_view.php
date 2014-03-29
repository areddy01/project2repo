<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
 <?php    $this->load->view('header'); ?>
  </head>

<body>
<div id="container">
<header>
	<h2>School Ratings System</h2>
</header>	
<section id="wrap" class="p20">
	<h2>Welcome to School Ratings System</h2>
	<article class="formBox">
	<form name ="" action = "/verifylogin" method = "POST" >
               <?php if (isset($message)) echo $message; ?><br/>

				<label for="user_login">Email or Username (Case Sensitive)<br>
					<input type="text" id="username" name="username" class="txtbox" value="" size="20">
				</label>
				<label for="user_pass">Password (Case Sensitive)<br>
					<input type="password" id="passowrd" name="password" class="txtbox" value="" size="20">
				</label>
				<span class="forgetmenot">
					<label for="rememberme">
						<input type="checkbox" name="rememberme" value=""> Remember Me
					</label>
				</span>
			
				<input type="submit"  class="button-primary btnbg" value="Log In">
				</form>
				

	</article>
	<div class="message error-message">
			<p><strong></strong></p>
		</div>
	<article class="formBox">
		
				<label for="user_login"><strong>Report an Issue</strong></label>
				<br><p>Experiencing difficulty with School Management?</p>
					<p><a style="font-size: 12px;">Email Us</a></p><br>
					<label for="user_login"><strong>Recomended Browsers</strong></label>
					<br><p>For Windows - Firefox 3.6.x , Internet Explorer 8.x</p>
					<p>For mac - Firefox 3.6.x </p><br>

	</article>
	<article class="link">
		<a  href="/email_control/forget_password">Forgot your password? </a>
	</article>
</section>
</div>
</body>
</html>