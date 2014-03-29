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
	
	<div id="content" align="center">
	<section id="wrap">
	<form name = "myfrom" id = "showschool" action = "/lookup_controller/getform_data/"  method  = "POST">
	<label>Select the form: </label>
   <select name="formname" style="width: 200px">
		<option value="infra">Infra Form</option>
		<option value="enrollment">Enrollment Form</option>
		<option value="addsubject">Add Subject</option>
		<option value="observation">Observation</option>
		<option value="fee">Add Fee</option>
		<option value="qualification">Add Qualification</option>
		<option value="designation">Add Designation</option>
		<option value="survey">Survey Forms</option>
		<option value="expense">Add Expense</option>
	</select>
	<input class="btnbg addform" type ="submit" value = "Submit" >				
	
	</form>	

	
	
	
	
	</section>
	</div>
	<!-- End Content -->
</div>
<!-- End Shell -->
</div>

