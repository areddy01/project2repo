<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
 <?php    $this->load->view('header'); ?>
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
	
	<div id="content">
	<section id="wrap">

	<!--<form name = "myform" action= "<?php echo base_url(); ?>school_control/enter_school" method = "POST" >
	//<div style="width:100%;"><p style="margin: 73px 0 0 113px;">Select school:
    <input style="background-color: wheat; height: 18px;" name="tag" type="text" id="tag" size="50" value = "" />
	<input id = "submitbtn" class="btnbg addform" type = "submit" value = "Submit" />
	</p></div>
	<?php if (isset($message)) {echo $message;} ?>				
	
	</form>	--><div id="content" align="center">
<form  id="resetpass" name = "resetpass"  action ="/email_control/changepassword" method ="post">
			<?php if (isset($messege))echo $messege ; ?>
			<table cellspacing="15">
			<tr><td colspan="2" align="center" style="height: 23px" ><strong>CHANGE PASSWORD</strong></td></tr>
			<tr><td style="height: 26px">Current password<span style="color:red">*</span>  </td>
				<td style="height: 26px"><input id="password" type = "password" name ="password" /></td></tr>
			<tr><td>Type New Passsword<span style="color:red">*</span></td><td><input id="newpassword" type = "password" name ="newpassword" /></td></tr>
			<tr><td>Type Again New Password<span style="color:red">*</span></td><td><input  id="newpassword1"type = "password" name ="newpassword1" /></td></tr>
			<tr><td colspan="1" align="right">
				<input  type ="button" value = "submit" class="btnbg addform" name ="submits" style="width: 81px" onclick="javascript: validate_reset_password();" /><div><td style="color:red" id="errmsg"></td></div></td></tr>
					</table>
			</form>


	</section>
	</div>
	<!-- End Content -->
</div>
<!-- End Shell -->
</div>

