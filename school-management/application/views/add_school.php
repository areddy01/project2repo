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


			<form name = "" method = "post" id ="addschool" action = "/outside_controller/adddatabase/"  value = ""  style="width:30%">
				 
			    <table cellspacing="10" style="width: 374px; height: 108px">
				<tr><td></td></tr><tr><td></td></tr>
				<tr><td colspan="2" align="center"><strong>NEW SCHOOL</strong></td></tr>
					<tr>
					<td style="width: 52px; height: 29px"><strong>School </strong> </td>
						<td style="width: 158px; height: 29px;" align="left">
						<input id = "searchschool" type = "text" value = "" name = "schoolname" onblur="return validate_nulls('#searchschool');"  style="width: 166px" /></td>
						<td style="height: 29px; width: 67px"><?php if(isset($message)) { echo "$message"; } ?></td>
						</tr>
						<tr>
						<td style="width: 52px; height: 28px"><strong>Place</strong></td>
						<td style="width: 158px; height: 28px;" align="left">
						<select name="schoolloc">
						<option value="HYD">HYDERABAD</option>
						<option value="BLR">BANGALORE</option>
						<option value="DEL">DELHI</option></select></td>
						</tr>
						</table>
						<table class="auto-style2" style="width: 369px; height: 13px">
						<tr>
						<td align="center" style="width: 258px">
						<input class="btnbg addform" type = "submit" value = "Submit" name ="submit" onclick="return add_school()"/></td>
						<span id="error" style = "display:none;color:red;" > Only Numeric Values are Allowed </span> <span id ="errmark" style = "display:none;color:red;" > All Red mark field is required </span>
						</tr>
						</table>
 				</form>


	</section>
	</div>
	<!-- End Content -->
</div>
<!-- End Shell -->
</div>

