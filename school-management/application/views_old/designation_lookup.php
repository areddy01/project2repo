<div id="shell">
<?php    $this->load->view('header'); ?>
	<!-- Header -->
	<script>
	function getcategory(){
			$('#drop').show()
	}
	function getcategory1(){
			$('#drop').show()
	}
	</script>
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

     
    
   <form name = "myform" id = "showschool" action = "/lookup_controller/getform_data/"  method  = "POST">
   <p></p>
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
		<p><strong>Add Designation</strong></p>
  
	<div id = "add" style = " color:#d96a02; text-decoration: none; cursor:pointer;float:left;" onclick = "desgn_form(2);" >Add New Field </div>
	<div id = "add1" style = "color:#d96a02; text-decoration: none; cursor:pointer;float:left;margin-left:20px; New Field" onclick="desgn_form(1);"> Display Values</div>
<br/>
<div id="message" ><?php if(isset($message))echo($message); ?></div>
<div id = "addcat1" style ="display:none;" >


	 <form name = "myfrom" id = "showschool" action = "/lookup_controller/submitform_data"  method  = "POST">
	
	 <table><tr><td>Designation Name</td><td><input type ="text" value = "" name = "ref_designation[designation_name]" >this value will display on label</td></tr>
	 <tr><td><input  type ="Submit"  value = "Add New Field" name ="submit" >
		<input type =  "hidden"  name = "formname" value = "designation" >
		</td></tr><br/>
	 </table>
		</form>
		</div>
		
		<div id ="addnewfield" style ="display:none;" >
	<table>
			<tr><td><strong>Designation Name</strong></td></tr>
		<?php for ($row = 0; $row < count($arr) ;  $row++) {  ?>
	<tr><td><?php echo $arr[$row]['designation_name'];?> </td>
	 </tr><br/>
	<?php } ?>
	</table>
	
</div>
	<!-- End Content -->

<!-- End Shell -->