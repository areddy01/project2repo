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
	<form name = "showschool" action = "/lookup_controller/getform_data/>"  method  = "POST">
	Select the form: 
   <select name="formname" style="width: 200px">
		 <?php if (isset($_REQUEST['formname'])){?>
			<option value="infra" <?php if ($_REQUEST['formname']  == 'infra'){ ?> selected  = "selected" <?php } ?> >Infra Form</option>
			<option value="enrollment" <?php if ($_REQUEST['formname']  == 'enrollment'){ ?> selected  = "selected" <?php } ?> >Enrollment Form</option>
			<option value="addsubject" <?php if ($_REQUEST['formname']  == 'addsubject'){ ?> selected  = "selected" <?php } ?> >Add Subject</option>
			<option value="observation" <?php if ($_REQUEST['formname']  == 'observation'){ ?> selected  = "selected" <?php } ?> >Observation</option>
			<option value="fee" <?php if ($_REQUEST['formname']  == 'fee'){ ?> selected  = "selected" <?php } ?> >Add Fee</option>
			<option value="qualification" <?php if ($_REQUEST['formname']  == 'qualification'){ ?> selected  = "selected" <?php } ?> >Add Qualification</option>
			<option value="designation" <?php if ($_REQUEST['formname']  == 'designation'){ ?> selected  = "selected" <?php } ?> >Add Designation</option>
			<option value="survey" <?php if ($_REQUEST['formname']  == 'survey'){ ?> selected  = "selected" <?php } ?> >Survey forms</option>
			<option value="expense" <?php if ($_REQUEST['formname']  == 'expense'){ ?> selected  = "selected" <?php } ?> >Add Expense</option>
		<?php } ?>	
	</select>
	<input class="btnbg addform" type = "submit" value = "Submit" />				
	
	</form>	
<p></p><br/>
<p><strong>Survey Lookup</strong></p>
<br/>
<p></p>	 
	  
	<div id = "add" style = " color:#d96a02; text-decoration: none; cursor:pointer;float:left;margin-left:350px;" onclick = "sur_form(1);" >Add New Field </div>
	<div id = "add1" style = "color:#d96a02; text-decoration: none; cursor:pointer;float:left;margin-left:20px; New Field" onclick="sur_form(2);"> Add New Category</div>
<br/><br/>
<div id="message" ><?php if(isset($message))echo($message); ?></div>
<div id = "addcat1" style ="display:none;" >
	<form name = "myform1" action = "/lookup_controller/submitform_data/"  method  = "POST">
	
	 <label>Add New Cat</label>
	<input type ="text" value = "" name = "formname1[survey_cat_name]" >
<input  class="btnbg addform" type ="Submit"  value = "Add New Field" name ="submit" >
<input type =  "hidden"  name = "formname" value = "suraddcat" >
 </form>
</div>

	<div id ="addnewfield" style ="display:none;" >
	 <form name = "myfrom"  action = "/lookup_controller/submitform_data/"  method  = "POST">
		<table><tr><td>Survey Category Name </td><td>  <select  name="formname1[survey_cat_id]" style="width: 177px" >
  <?php  for ($catrow = 0; $catrow < count($category) ;  $catrow++) { ?>
		<option value="<?php echo $category[$catrow]['survey_cat_id']; ?>"><?php echo $category[$catrow]['survey_cat_name']; ?></option>
<?php } ?>
	</select></td></tr><tr><td>Survey Sub Cat Name</td><td>
		<input type ="text" value = "" name = "formname1[survey_sub_cat_name]" style="width: 177px" >this value will display on label </td></tr>
	<tr><td colspan="2" align="center">
	<div>
	
	<input type =  "hidden"  name = "formname" value = "survey" >
	
	<input class="btnbg addform" type ="Submit"  value = "Add New Field" name ="submit" >
	</div>
	</td></tr></table>
	</section>
	</div>
	<!-- End Content -->
</div>
<!-- End Shell -->
</div>

