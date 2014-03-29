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
	
	<div id="content" >
	<section id="wrap" >
	<strong style="margin-left:150px;"> START NEW ASSESSMENT</strong>
	<form style="margin: -12px 0 0;" id="assesment" name = "myform" action= "<?php echo base_url(); ?>/outside_controller/start_assessment/" method ="post" >
	<br/><br/>
	<table style="margin-left:150px;">
	<tr><td style="width: 214px">Select school </td><td><input id="tag" name="tag" class="ac_input" type="text"  size="40" value = "" /></td>
	&nbsp;&nbsp;<td id="tagerror" style="color:red;"></td>
	
	</tr>
	
	<tr><td style="width: 214px">Assessment Date </td><td>
		<input id="add_user" name="assessment_date" type="text" size="40" value = "" style="width: 243px" onblur="return add_res('#add_user','#academic_year');"/></td></tr>
	<tr><td style="width: 214px">Academic Year</td><td>	
		<input type="hidden" name="academic_year" value="<?php echo date("Y"); ?>"/><label id="academic_year" name="academic_year"><?php echo date("Y") ; ?> </label>
	</td></tr>
	<tr><td style="width: 214px">School Assessed By </td>
	<td>
	<select name="title" id="title">
	<option value="">Select</option>
	<option value="Mr.">Mr.</option>
	<option value="Ms.">Ms.</option>
	<option value="Mrs.">Mrs.</option>
	<option value="Miss.">Miss.</option>
	</select>
	 
	<input id="schoolassess" name="school_assessed_by" type="text"  size="40" value = ""  /></td>&nbsp;&nbsp;<td id="schoolassesserror" style="color:red;" ></div></td></tr>

	<tr><td style="width: 214px">School Assessed Again Same Year </td><td>
	<select name="school_assessed_again_same_year" style="width: 94px" >
	<option value="Yes" name="Yes">Yes</option>
	<option value="No" name="No">No</option>
	</select>
	</td></tr>
	<tr><td style="width: 214px">Assessment type If Re Assessed</td><td>
	<select name="assessment_type_if_re_assessed" style="width: 94px" >
	<option name="BaseLine" value="BaseLine">BaseLine</option>
	<option name="MidLine" value="MidLine">MidLine</option>
	<option name="EndLine" value="EndLine">EndLine</option>
	</select>
	
	</td></tr>
	
	<tr><td colspan="2" align="center"><input id="assess"  class="btnbg addform" type = "button"  value = "Start Assessment" onclick="javascript: validate_new_assesment();" />
	<span id = "" ><?php if(isset($message)) echo $message; ?></span>
	<div style="padding-left:350px"><span id="errmark" style=""></span></div> </td>
	</tr>
	</table>
	</form>	

	</section>
	</div>
	<!-- End Content -->
</div>
<!-- End Shell -->
</div>

