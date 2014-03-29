<div id="shell">
<?php    $this->load->view('header'); ?>
	<!-- Header -->
	<script language="javascript" >
	function getcategory(){
			$('#drop').show()
	}
	function getcategory1(){
			$('#drop').show()
	}
	</script>
	<div id="header">
		<h1><a href="#">School Managment System</a></h1>
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
	
     <?php $this->load->view('dashboard', $info);?>
     
      <p></p>

	 <form name = "myform" id = "showschool" action = "/admin/getform_data/?info=<?php echo $info; ?>"  method  = "POST">
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
<p><strong>Add Subject Lookup</strong></p>

<div id = "add" style = " color:#d96a02; text-decoration: none; cursor:pointer;float:left;" onclick = "addsub_form(2);" >Add New Field </div>
	<div id = "add1" style = "color:#d96a02; text-decoration: none; cursor:pointer;float:left;margin-left:20px; New Field" onclick="addsub_form(1);"> Display Values</div>
<br/>
<div id="message" ><?php if(isset($message))echo($message); ?></div>
<div id = "addcat1" style ="display:none;" >

     
	 <form name = "myfrom" id = "showschool" action = "/admin/submitform_data?info=<?php echo $info; ?>"  method  = "POST">
	 	<table><br/>
	 	<tr><td>Subject Name</td><td><input type ="text" value = "" name = "ref_subject[subject_name]" >this value will dispaly on label</td></tr>
	<tr>
	<td>Subject Category</td>
	<td><input type ="text" value = "" name = "ref_subject[subject_category]" >this value will dispaly on label</td></tr>
	<tr><td colspan="2">
	<input  type ="Submit"  value = "Add New Field" name ="submit" ></td></tr>
	<input type =  "hidden"  id="formname" name = "formname" value = "addsubject" >
	
	</table>
	</form>
	</div>
	<div id ="addnewfield" style ="display:none;" >
	<table><br/>
	<tr><td><strong>Subject Name</strong></td><td><strong>Subject Category</strong></td></tr>
		<?php for ($row = 0; $row < count($arr) ;  $row++) {  ?>
	<tr><td><?php echo $arr[$row]['subject_name'];?> </td>
	<td><?php echo  $arr[$row]['subject_category']; ?></td> </tr>
	<?php } ?>
	</table>
	</div>

	<!-- End Content -->

<!-- End Shell -->