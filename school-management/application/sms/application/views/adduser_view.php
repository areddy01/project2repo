<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
 <?php    $this->load->view('header'); ?>
  </head>
 
<div id="shell">
	
	<!-- Header -->
	<div id="header">
		<h1><a href="#">School Management System</a></h1>
		<div class="right">
			<p>Welcome <a href="#"><strong>Administrator</strong></a></p>
			<p class="small-nav"><a href="#">Help</a> / <a href="">Profile Settings</a> / <a href="home/logout">Log Out</a></p>
		</div>
	</div>
	<!-- End Header -->
	
	<!-- Navigation -->
	 <?php    $this->load->view('menu'); ?>	

	<!-- End Navigation -->
	
	<!-- Content -->
	<div id="content">

	 <form id = "showschool" action = "/adduser/add_user/" method="POST"  >
	 <table>
	 <tr><td>First Name</td><td>
		 <input type="text" name="fname" style="width: 239px" ></td></tr>
    <tr><td>Last Name</td><td><input type="text" name="lname" style="width: 239px" ></td></tr>
    <tr><td>Date of Birth</td><td>
	<input id="add_user" type="text" name="dob"  readonly="readonly" style="width: 239px" value=""></td></tr>
	 <tr><td>
	<label>User Name</label></td><td>
    <input name="username" type="text" id="uname" size="20" style="width: 239px" onblur = "return validate_user('uname');"/></td></tr>
    <tr>
<td>	<label>Email Id</label></td>
    <td><input name="email" type="text" id="email" size="20" style="width: 239px" onblur = "return validate_user('uname');"/></td></tr>
<tr>
	<td><label>Password</label></td>
    <td><input name="password" type="password" id="pass" size="20" style="width: 239px" onblur = "return validate_user('pass');"/></td></tr>
	<tr><td><label>User Type</label></td>
    <td><select name="usertype" style="width: 184px" >
    <option value = "manager" >Manager</option>
    <option value = "volunteer" selected="selected">Volunteer</option>
    </select></td></tr>
    
    
    <tr><td colspan="2" align="center" >	<input type = "submit" value = "Submit" />	</td></tr>			
	</table>
	
	
	</form>
	</div>	
	<!-- End Content -->
</div>
<!-- End Shell -->
<?php    $this->load->view('header'); ?>

