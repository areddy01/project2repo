<div id="shell">
<?php    $this->load->view('header'); ?>
	<!-- Header -->
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
	<div id="header">
		<h1><a href="#">School Management System</a></h1>
		<div class="right">
			<p>Welcome <a href="#"><strong>Administrator</strong></a></p>
			<p class="small-nav"><a href="#">Help</a> / <a href="">Profile Settings</a> / 
			<a href="/home/logout">Log Out</a></p>
		</div>
	</div>
	<!-- End Header -->
	<!-- Navigation -->
	 <?php    $this->load->view('menu'); ?>	
	<!-- End Navigation -->
	<!-- Content -->
	<div id="content">


         <p></p>
         

	 <form name = "myform" id = "showschool" action = "/lookup_controller/getform_data/"  method  = "POST">
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
	<input type = "submit" value = "Submit" />				
	
	</form>	
<p></p>
<p><strong>Add Observation Lookup</strong></p>


	<div id = "add" style = " color:#d96a02; text-decoration: none; cursor:pointer;float:left;" onclick = "obsrv_form(1);" >Add New Field </div>
	<div id = "add1" style = "color:#d96a02; text-decoration: none; cursor:pointer;float:left;margin-left:20px; New Field" onclick="obsrv_form(2);"> Add New Category</div>
<br/>
<div id="message" ><?php if(isset($message))echo($message); ?></div>
<div id = "addcat1" style ="display:none;" >
 <form name = "myform1"  action = "/lookup_controller/submitform_data/"  method  = "POST">
  <label>Add New Cat</label>
	<input type ="text" value = "" name = "formname1[observ_cat_name]" >
<input  type ="Submit"  align="right" value = "Add New Field" name ="submit" >
<input type =  "hidden"  name = "formname" value = "obsrvaddcat" >
 </form>
</div>

	<div id ="addnewfield" style ="display:none;" >
	 <form name = "myfrom"  action = "/lookup_controller/submitform_data/"  method  = "POST">
	 	  	
	<input type =  "hidden"  id = "school_code" value = "" >
	<table><tr><td>Observation Category Name</td><td><select  name="formname1[observ_cat_id]" style="width: 200px" >
  <?php  for ($catrow = 0; $catrow < count($category) ;  $catrow++) { ?>
		<option value="<?php echo $category[$catrow]['observ_cat_id']; ?>"><?php echo $category[$catrow]['observ_cat_name']; ?></option>
<?php } ?>
	</select></td></tr>
	<tr><td>Observation Sub Cat Name</td>
	<td><input type ="text" value = "" name = "formname1[observ_sub_cat_name]" >this value will display on label</td></tr>
	<tr><td colspan="2"><input  align="right" type ="Submit"  value = "Add New Field" name ="submit" ></td></tr>
	<input type =  "hidden"  name="formname" value = "observation" >
	</table>
	
	<div>
	
	
	
	</div>
	</form>
	<!-- End Content -->

<!-- End Shell -->