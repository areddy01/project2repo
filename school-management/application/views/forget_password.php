<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
 <?php    $this->load->view('header'); ?>
  </head>
  <div id="container">
<header>
<h2>School Ratings System</h2>
<nav id="mainMenu">
<div id="breadcrumb">
<ul class="topLinks">
<li><a href="#">Password Recovery</a></li>
</ul>
</div>
</nav>
</header>
<div id="shell">
<div> 
<section id="wrap"  >
<a href="/home/logout" style="margin-left:15px;" > Back </a>
<div id="content" align='center'  >
<br/>
<form   name = "" action ="/email_control/send_email" method ="post" id='form'>
	<table>
		<tr>
			<td><label for="username"><b>Enter email id</b></label></td>
			<td><input type="text" width="50%" id="email" name="email"/></td>
			<td><div id="errmrk" style="color:teal"></div></td>
		</tr>
		<tr>
			<td colspan="3" align="center"><input type="button" value="Submit"  onclick="javascirpt: validate_forget_password();" ></td>
			<div><?php if(isset($messages)) echo $messages; ?></div>
			</tr>
	</table>
</form>
</div>
</div>

<!-- End Content -->
</div>
<!-- End Shell -->
</div>