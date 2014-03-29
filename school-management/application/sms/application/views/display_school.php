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

 $("#searchschool").autocomplete("/outside_controller/search_school", {  //we have set data with source here
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
				$("#submitdisplay").removeAttr('disabled');
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
	<div id="content">
		<div class="message thank-message">
			<div class="auto-style1">		
				 <form id = "showschool" action = "/outside_controller/get_school"  action  = "post">
				<label>Search school:</label>
				<input name="school" type="text" id="searchschool" size="50"/>
				<input id = "submitdisplay" type = "submit" value = "Submit" disabled= "disabled" />	
				&nbsp; <a href = "/outside_controller/display_school" >Show All School </a>			
				</div>
		
				</form>	<br /><br /><br /><br /><br />
					<table style="width: 100%;border:solid;">
					<tr>
					<td style="border:solid">School Name</td>
					<td style="border:solid;">School ID</td>
					<td style="border:solid;">Status</td></tr>
					<?php for ($school = 0; $school < count($results); $school++){?>
					<tr style="width: 100%;border:solid;">
					<td><?php echo $results[$school]['school_name']; ?></td>
					<td><?php echo $results[$school]['school_code']; ?></td>	
					<td><?php if ($results[$school]['assessment_status'] == 1){
						echo "Active";
					}
						else
						echo "Inactive"; ?></td>
					</tr>
					<?php }?>
		</table>
<?php if (!isset($_REQUEST['school'])):?>
  <p><?php echo $links; ?></p>
  <?php endif ; ?>
			
			    
			   
			</p>
			
		</div>
		<div>
		
		</div>
		
	</div>
	
	<!-- End Content -->
</div>
<!-- End Shell -->
<?php    $this->load->view('header'); ?>

