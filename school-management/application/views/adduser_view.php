<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
 <?php    $this->load->view('header'); ?>
 <?php error_reporting(0); ?>
<script>
$(document).ready(function(){

 $("#tag").autocomplete("/school_control/select_school", {  //we have set data with source here
        formatItem: function(rowdata) { //This function is called right before the item is displayed on the dropdown, so we splitted and returned what we show in the selection box
            var info = rowdata[0].split(":");
            return info[1];
        },
        formatResult: function (rowdata) { // This function is called when any item selected, here also we returned that what we wanted to show our customerName field.
            var info = rowdata[0].split(":");
            return info[1];
        }
    }).result(function(event, data, formatted){ //Here we do our most important task :)
            if(!data) { //If no data selected set the customer_id field value as 0
                $("#customerId").val('0');
            } else { // Set the value for the customer id
                var info = formatted.split(":");
                $("#customerId").val(info[0]);
				$("#submitbtn").removeAttr('disabled');
            }
    });

});
</script>
  </head>
 <div id="container">
 <header>
	<h2>School Ratings System</h2>
	<form method="post" action="" id="search">
		<span class="wlcmuser">Welcome <strong>&nbsp;<?php echo $username ; ?></strong></span>
			<ul class="topLinks">
				<li><a href="#">Help</a>|</li>
				<li><a href="">Profile Setting</a>|</li>
				<li><a href="/home/logout">Log Out</a></li>

			
			</ul>
	</form>
	
	<nav id="mainMenu">
			<div id="breadcrumb">
				<?php    $this->load->view('menu', $id, $username); ?>	
			</div>
			
	</nav>
</header>
<div id="shell">
	
	<div id="content" align="center">
	<section id="wrap">
 <form id = "showschool" action = "/adduser/add_user/" method="POST"  >
	 <table align="center">
	 <tr><td colspan="2" align="center"><strong>NEW USER</strong></td></tr></br>
	 <tr><td>First Name</td><td>
		 <input type="text" name="fname" style="width: 239px" /></td></tr>
    <tr><td>Last Name</td><td><input type="text" name="lname" style="width: 239px" /></td></tr>
    <tr><td>Date of Birth</td><td>
	<input id="add_user" type="text" name="dob"  readonly="readonly" style="width: 239px" value=""/></td></tr>
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
    </table>
    
    <table width="600px">
	</br>
    <tr><td colspan="2" align="center" >	<input  class="btnbg addform" type = "submit" value = "Submit" />	</td></tr>
    <tr><td align="center" style="color:red;"><?php if(isset($message)) { echo $message; } ?></td></tr>			
	</table>
	
	
	</form>
				
	


	</section>
	</div>
	<!-- End Content -->
</div>
<!-- End Shell -->
</div>

