<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
 <?php    $this->load->view('header'); ?>
<script>
$(document).ready(function(){

 $("#tag").autocomplete("/outside_controller/assesment_school", {  //we have set data with source here
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
				$("#submit").removeAttr("disabled");

            }
    });

});
</script>
  </head>
 
<div id="shell">
	
	<!-- Header -->
	<div id="header">
		<h1><a href="#">School Managment System</a></h1>
		<div class="right">
			<p>Welcome <a href="#"><strong><?php echo $username ; ?></strong></a></p>
			<p class="small-nav"><a href="#">Help</a> / <a href="">Profile Settings</a> / <a href="home/logout">Log Out</a></p>
		</div>
	</div>
	<!-- End Header -->
	
	<!-- Navigation -->
	 <?php    $this->load->view('menu'); ?>	
     
	<!-- End Navigation -->
	
	<!-- Content -->
	<div id="content">
	<form name = "myform" action= "<?php echo base_url(); ?>outside_controller/start_assessment" method = "POST" >
	<span id = "" ><?php if(isset($message)) echo $message; ?></span><br/><br/>
	<table>
	<tr><td>Select school </td><td>   <input name="tag" class="ac_input" type="text" id="tag" size="40" value = "" /></td></tr>
	<tr><td>Academic Year</td><td><input name="academic_year" type="text"  size="40" value = "" /></td></tr>
	<tr><td>Assessment Date </td><td>
		<input id="add_user" name="assessment_date" type="text" size="40" value = "" style="width: 243px" /></td></tr>
	
	<tr><td>School Assessed By </td> <td>  <input name="school_assessed_by" type="text"  size="40" value = "" /></td></tr>

	<tr><td>School Assessed Again Same Year </td><td>
	<select name="school_assessed_again_same_year" style="width: 94px" >
	<option value="Yes" name="Yes">Yes</option>
	<option value="No" name="No">No</option>
	</select>
	</td></tr>
	<tr><td>Assessment type If Re Assessed</td><td>
	<select name="assessment_type_if_re_assessed" style="width: 94px" >
	<option name="BaseLine" value="BaseLine">BaseLine</option>
	<option name="MidLine" value="MidLine">MidLine</option>
	<option name="EndLine" value="EndLine">EndLine</option>
	</select>
	
	</td></tr>
	<tr><td colspan="2" align="center">	<input type = "submit" id = "submit"  value = "Start Assessment" /> </td></tr>
	</table>
	</form>	
	</div>
	<!-- End Content -->
</div>
<!-- End Shell -->
<?php    $this->load->view('header'); ?>

