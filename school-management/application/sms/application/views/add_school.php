<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
 <?php    $this->load->view('header'); ?>
  <style type="text/css">
  .auto-style1 {
	  text-align: Left;
  }
  </style>
  <script>
$(document).ready(function(){

 $("#searchschool").autocomplete("/admin/search_school", {  //we have set data with source here
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
            }
    });

});
</script>
  </head>
<div id="shell">
	
	<!-- Header -->
	<div id="header">
		<h1><a href="#">School Management System</a></h1>
		<div class="right">
			<p>Welcome <a href="#"><strong>Administrator</strong></a></p>
			<p class="small-nav"><a href="#">Help</a> / <a href="">Profile Settings</a> / <a href="/home/logout">Log Out</a></p>
		</div>
	</div>
	<!-- End Header -->
	
	<!-- Navigation -->
	 <?php    $this->load->view('menu'); ?>
	<!-- End Navigation -->
	<div id="content">
		<div class="message thank-message">
			<div class="auto-style1">		
		
			 <label><b></b></label><br />
			</div>
			<p><form name = "" method = "post" id ="addschool" action = "/outside_controller/adddatabase/"  value = ""  style="width:30%">
				 
			    <table cellspacing="10" style="width: 271px; height: 108px">
					<tr>
					<td><strong>School </strong> </td>
						<td style="width: 158px" align="left">
						<input id = "searchschool" type = "text" value = "" name = "schoolname[school]" onblur="return validate_nulls('#searchschool');"  style="width: 166px" /></td>
						<tr>
						<td><strong>Place</strong></td>
						<td style="width: 158px" align="left">
						<select name="schoolname[location]" style="width: 123px">
						<option value="HYD">HYDERABAD</option>
						<option value="BLR">BANGALORE</option>
						<option value="DEL">DELHI</option></select></td>
						</tr><tr>
						<td colspan="2" align="right">
						<input type = "submit" value = "Submit" name ="submit" onclick="return add_school()"/></td>
						<span id="error" style = "display:none;color:red;" > Only Numeric Values are Allowed </span> <span id ="errmark" style = "display:none;color:red;" > All Red mark field is required </span>
						
					</tr>
				</table>
 				</form>
					</table>

			   
			</p>
			
		</div>
		<div>
		
		</div>
		
	</div>
	
	<!-- End Content -->
</div>
<!-- End Shell -->
<?php    $this->load->view('header'); ?>

