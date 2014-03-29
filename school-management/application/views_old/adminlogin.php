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
	
	<!-- Content -->
	<?php    $this->load->view('dashboard'); ?>
	<div id="content">
		<div class="message thank-message">
			<div class="auto-style1">		
			<?php if ($newschool == 'addnewschool'){?>
			 <label><b><?php echo $message; ?> </b></label><br />
			</div>
			<p><form name = "" method = "post" id ="addschool" action = "/admin/adddatabase/"  value = ""  style="width:30%">
				 
			    <table style="width: 100%">
					<tr>
					<td>School&nbsp;&nbsp;</td>
						<td><input id = "searchschool" type = "text" value = "" name = "schoolname[school]" /></td>
						<td>&nbsp;Place&nbsp; </td>
						<td><select name="schoolname[location]">
						<option value="HYD">HYD</option>
						<option value="BLR">BLR</option>
						<option value="DEL">DEL</option></select></td>
						<td>&nbsp;</td>
						<td><input type = "submit" value = "Submit" name ="submit" onclick="return add_school()"/></td><td><span id = "adderr" style = "color:red;display:none;">Please&nbsp;fill&nbsp;the&nbsp;redmarked&nbsp;field</span></td>
						
					</tr>
				</table>
 				</form>
				<?php } elseif ($newschool == 'showschool') { ?>
				 <form id = "showschool" action = "/admin/display_school"  action  = "post">
				<label>Search school:</label>
				<input name="school" type="text" id="searchschool" size="20"/>
				<input type = "submit" value = "Submit" />	&nbsp; <a href = "/admin/display_school" >Show All School </a>			
				</div>
				</form>	<br /><br /><br /><br /><br />
					<table style="width: 100%;border:solid;">
					<tr>
					<td style="border:solid">School Name</td>
					<td style="border:solid;">School ID</td>
					<td style="border:solid;">location</td>
					<td style="border:solid;">Adding Date</td>
					<td style="border:solid;">Status</td></tr>
					<?php foreach($results as $data){?>
					<tr style="width: 100%;border:solid;">
					<td><?php echo $data->school; ?></td>
					<td><?php  echo $data->id; ?></td>
					<td><?php  echo $data->location; ?></td>
					<td><?php  echo $data->date; ?></td>	
					<td><?php if ($data->active == 1){
						echo "<a href ='/admin/inactive_school/".$data->id.$tab."' title = 'Inactive the school' >Active</a>";
					}
						else
						echo "<a href = '/admin/active_school/".$data->id.$tab."' title = 'Active the school'>Inactive</a>"; ?></td>
					</tr>
					
<?php


					}
?>			</table>
<?php if (!isset($_REQUEST['school'])):?>
  <p><?php echo $links; ?></p>
  <?php endif ; ?>
				<?php	}?>
				
			
			   
			    
			   
			</p>
			
		</div>
		<div>
		
		</div>
		
	</div>
	
	<!-- End Content -->
</div>
<!-- End Shell -->
<?php    $this->load->view('header'); ?>

