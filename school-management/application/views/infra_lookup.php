<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
 <?php    $this->load->view('header'); ?>

	<script>
	function getcategory(){
		
		var valu = $('#getcat').val();
		if(valu == 'dropdown'){
			$('#drop').show()
		}
			else
			$('#drop').hide()
		
	}
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
				<?php    $this->load->view('menu',$id,$username); ?>	
			</div>
			
	</nav>
</header>
<div id="shell">
	
	<div id="content" align="center">
	<section id="wrap">
<form name = "myform1" id = "showschool" action = "/lookup_controller/getform_data/"  method  = "POST">
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
<p></p>
 
<p><strong> Infra Lookup</strong></p>
    <div id = "add" style = " color:#d96a02; text-decoration: none; cursor:pointer;float:left;margin-left:350px;" onclick = "infr_form(1);" >Add New Field </div>
	<div id = "add1" style = "color:#d96a02; text-decoration: none; cursor:pointer;float:left;margin-left:20px; New Field" onclick="infr_form(2);"> Add New Category</div>
<br/><p></p>


<div id="message" ><?php if(isset($message))echo($message); ?></div>
     <div id = "addcat1" style ="display:none;" >
 <form name = "myform"  action = "/lookup_controller/submitform_data/"  method  = "POST">
     <label>Add New Category</label>
	 <input type ="text" value = "" name = "formname1[facility_cat_name]" ><p></p></br>
     <input class="btnbg addform" type ="Submit"  value = "Add New Category" name ="submit" >
     <input type =  "hidden"  name = "formname" value = "infraaddcat" >
 </form>
</div>

	<div id ="addnewfield" style ="display:none;" >
	 <form name = "myfrom"  action = "/lookup_controller/submitform_data/"  method  = "POST">
	<label>Facility Category </label>
   <select  name="formname1[facility_cat_id]" style="width: 200px" >
  <?php  for ($catrow = 0; $catrow < count($category) ;  $catrow++) { ?>
		<option value="<?php echo $category[$catrow]['facility_cat_id']; ?>"><?php echo $category[$catrow]['facility_cat_name']; ?></option>
<?php } ?>
	</select><br/><br/>
	<label>Facility Sub Cat Name </label>
	<input type ="text" value = "" name = "formname1[facility_sub_cat_name]" >this value will display on label<br/><br/>
	<label>Facility Sub Cat Type Field</label>
	<select name  = "formname1[facility_sub_cat_type]" onchange = "getcategory();" id = "getcat"  style="width: 200px">
	<option value = "textbox">Text</option>
	<option value = "dropdown">DropDown</option>
	</select> <br/><br/>
	<span id  ="drop" style = "display:none;">Enter Dropdown value <input name  = "formname1[facility_sub_cat_type_field]" type = "text" value = ""  >Get the dropdown value comma(,)separated with out space <br/></span>	
	<input type =  "hidden"  name = "formname" value = "infra" >
	<input class="btnbg addform" type ="Submit"  value = "Add New Field" name ="submit" >
	</form>

	
	
	
	
	</section>
	</div>
	<!-- End Content -->
</div>
<!-- End Shell -->
</div>

