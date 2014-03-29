<div id="shell">
	<!-- Header -->
	<div id="header">
		<h1><a href="#">School Management System</a></h1>
		<div class="right">
			<p>Welcome <a href="#"><strong>Administrator</strong></a></p>
			<p class="small-nav"><a href="#">Help</a> / <a href="">Profile Settings</a> / <a href="home/logout">Log Out</a></p>
		</div>
	</div>
	<!-- End Header -->
	<!-- Navigation -->
	 <?php    $this->load->view('menu'); ?>	
	<!-- End Navigation -->
	<!-- Content -->
	<div id="content">
<p></p>
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
	<input type ="submit" value = "Submit" >				
	
	</form>	
	<!-- End Content -->
</div>
<!-- End Shell -->
<?php    $this->load->view('header'); ?>