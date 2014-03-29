<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
 <?php    $this->load->view('header'); ?>
  <style type="text/css">
  .auto-style1 {
	  text-align: CENTER;
	
  }
  
  .auto-style2 {
	  text-align: CENTER;
	  color: #FFFFFF;
	  background-color: #808080;
  }
  .auto-style3 {
	  color: #FFFFFF;
	  background-color: #808080;
  }
  
  .auto-style4 {
	text-align: CENTER;
	text-transform: uppercase;
	font-weight: bold;
	font-size: large;
}
  
  </style>
  </head>
<div id="shell">
	
	<!-- Header -->
	<div id="header">
		<h1><a href="#">School Managment System</a></h1>
		<div class="right">
			<p>Welcome <a href="#"><strong>Administrator</strong></a></p>
			<p class="small-nav"><a href="#">Help</a> / <a href="">Profile Settings</a> / <a href="/sms/home/logout">Log Out</a></p>
		</div>
	</div>
	<!-- End Header -->
	
	<!-- Navigation -->
	<?php    $this->load->view('menu'); ?>
	<!-- End Navigation -->
	
	<!-- Content -->
	<div id="content">
<?php    $this->load->view('dashboard', $info ); ?>

		<div class="message thank-message">
			<div class="auto-style1">
			<br/>
				</div>		
			 
			
			<div align="left">
				<div class="auto-style4">
			<label>OBSERVATIONS Details <br />
					<br />
					</label>
				</div>
<form method = "post" id ="" action = "/sms/admin/addobservations/"    style="width:100%;margin-left:100px">
<table>
<tr>
<td><table style="width: 100%">
<tr><td colspan="3"  class="auto-style3"><strong>SCORING OPTIONS: Yes, Ineffective, No, N/A</strong></td></tr>
<tr><td colspan="2">Name</td><td>
	<input  id="observations0" name="observations[]" style="width: 117px" type="text" /></td></tr>
<tr><td colspan="2">Subject Taught</td><td>
	<input id="observations0" name="observations[]" style="width: 117px" type="text" /></td></tr>
<tr><td colspan="2">Class Taught</td><td>
	<input id="observations0" name="observations[]" style="width: 117px" type="text" /></td></tr>
	<tr>
		<td class="auto-style2" colspan="3"><strong>Indicators </strong></td>
	</tr>
	<tr>
		<td style="width: 19px"></td>
		<td style="width: 568px"><strong>Teacher-student interaction</strong></td>
		<td style="width: 88px"></td>
	</tr>
	<tr>
		<td style="width: 19px">1</td>
		<td style="width: 568px">Address students by name</td>
		<td style="width: 88px">
		<select id="observations0" name="observations[]" style="width: 121px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>
		</select></td>
	</tr>
	<tr>
		<td style="width: 19px">2</td>
		<td style="width: 568px">Walks around the classroom</td>
		<td style="width: 88px">
		<select id="observations0" name="observations[]" style="width: 121px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>
		</select></td>
	</tr>
	<tr>
		<td style="width: 19px">3</td>
		<td style="width: 568px">Friendly/patient yet firm with students with positive gestures</td>
		<td style="width: 88px">
		<select id="observations0" name="observations[]" style="width: 121px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>

		</select></td>
	</tr>
	<tr>
		<td style="width: 19px">4</td>
		<td style="width: 568px">Maintains eye contact with the class</td>
		<td style="width: 88px"><select id="observations0" name="observations[]" style="width: 121px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>

		</select></td>
	</tr>
	<tr>
		<td style="width: 19px">5</td>
		<td style="width: 568px">Responds to questions raised by students</td>
		<td style="width: 88px"><select id="observations0" name="observations[]" style="width: 121px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>

		</select></td>
	</tr>
	<tr>
		<td style="width: 19px">6</td>
		<td style="width: 568px">Maintains discipline in the class</td>
		<td style="width: 88px"><select id="observations0" name="observations[]" style="width: 121px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>

		</select></td>
	</tr>
	<tr>
		<td style="width: 19px">7</td>
		<td style="width: 568px">Students are attentive</td>
		<td style="width: 88px"><select id="observations0" name="observations[]" style="width: 121px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>

		</select></td>
	</tr>
	<tr>
		<td class="auto-style2" colspan="3" ><strong>
		Teaching-Learning Methodology</strong></td>
	</tr>
	<tr>
		<td style="width: 19px">1</td>
		<td style="width: 568px">Focuses on student understanding </td>
		<td style="width: 88px"><select id="observations0" name="observations[]" style="width: 121px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>

		</select></td>
	</tr>
	<tr>
		<td style="width: 19px">2</td>
		<td style="width: 568px">Presents factually correct content</td>
		<td style="width: 88px"><select id="observations0" name="observations[]" style="width: 121px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>

		</select></td>
	</tr>
	<tr>
		<td style="width: 19px">3</td>
		<td style="width: 568px">Gave instructions in simple steps</td>
		<td style="width: 88px"><select id="observations0" name="observations[]" style="width: 121px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>

		</select></td>
	</tr>
	<tr>
		<td style="width: 19px">4</td>
		<td style="width: 568px">Uses Visual aids</td>
		<td style="width: 88px"><select id="observations0" name="observations[]" style="width: 121px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>

		</select></td>
	</tr>
	<tr>
		<td style="width: 19px">5</td>
		<td style="width: 568px">Periodically clears doubts of the students</td>
		<td style="width: 88px"><select id="observations0" name="observations[]" style="width: 121px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>

		</select></td>
	</tr>
	<tr>
		<td style="width: 19px">6</td>
		<td style="width: 568px">Connects the lesson to students environment</td>
		<td style="width: 88px"><select id="observations0" name="observations[]" style="width: 121px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>

		</select></td>
	</tr>
	<tr>
		<td style="width: 19px">7</td>
		<td style="width: 568px">Teacher built in time for students to accomplish the task</td>
		<td style="width: 88px"><select id="observations0" name="observations[]" style="width: 121px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>

		</select></td>
	</tr>
	<tr>
		<td style="width: 19px">8</td>
		<td style="width: 568px">Encourages interaction among students to accomplish the task</td>
		<td style="width: 88px"><select id="observations0" name="observations[]" style="width: 121px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>

		</select></td>
	</tr>
	<tr>
		<td style="width: 19px">9</td>
		<td style="width: 568px">Presents a relaxed stance after asking the question</td>
		<td style="width: 88px"><select id="observations0" name="observations[]" style="width: 121px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>

		</select></td>
	</tr>
	<tr>
		<td style="width: 19px">10</td>
		<td style="width: 568px">Uses blackboard in an organized fasion</td>
		<td style="width: 88px"><select  id="observations0" name="observations[]" style="width: 121px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>

		</select></td>
	</tr>
	<tr>
		<td style="width: 19px">11</td>
		<td style="width: 568px">Uses blackboard interactively</td>
		<td style="width: 88px"><select id="observations0" name="observations[]" style="width: 121px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>

		</select></td>
	</tr>
	<tr>
		<td style="width: 19px">12</td>
		<td style="width: 568px">Students relevant content related questions</td>
		<td style="width: 88px"><select id="observations0" name="observations[]" style="width: 121px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>

		</select></td>
	</tr>
	<tr>
		<td style="width: 19px">13</td>
		<td style="width: 568px">Students easily understood the instructions/tasks provided</td>
		<td style="width: 88px"><select id="observations0" name="observations[]" style="width: 121px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>

		</select></td>
	</tr>
	<tr>
		<td class="auto-style2" colspan="3"><strong>Assessment Technique</strong></td>
	</tr>
	<tr>
		<td style="width: 19px">1</td>
		<td style="width: 568px">Addresses questions to individual students as well as the group at large </td>
		<td style="width: 88px"><select id="observations0" name="observations[]" style="width: 121px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>

		</select></td>
	</tr>
	<tr>
		<td style="width: 19px">2</td>
		<td style="width: 568px">Accepts all student responses including the &#39;wrong ones&#39; with encouraging feedback</td>
		<td style="width: 88px"><select id="observations0" name="observations[]" style="width: 121px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>

		</select></td>
	</tr>
	<tr>
		<td style="width: 19px">3</td>
		<td style="width: 568px">Uses questioning as a tool to improve student understanding</td>
		<td style="width: 88px"><select id="observations0" name="observations[]" style="width: 121px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>

		</select></td>
	</tr>
	<tr>
		<td style="width: 19px">4</td>
		<td style="width: 568px">Revises the main points of the lesson</td>
		<td style="width: 88px"><select id="observations0" name="observations[]" style="width: 121px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>

		</select></td>
	</tr>
	<tr>
		<td style="width: 19px">5</td>
		<td style="width: 568px">Students participate actively when asked questions</td>
		<td style="width: 88px"><select id="observations0" name="observations[]" style="width: 121px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>

		</select></td>
	</tr>
</table>
</td>

</tr>
<tr>
<td align="center">
<input id="observations" name="Submit1" type="submit" value="submit" onclick ="return validate_observations()" style="width: 96px" /><span id="error" style = "display:none;color:red;" > Only Numeric Values are Allowed </span> <span id ="errmark" style = "display:none;color:red;" > All Red mark field is required </span></td>
</tr>
</table>				 
				 
				   
			    
			    </form>
		</div>
		
		
	</div>
	
	<!-- End Content -->
</div>
<!-- End Shell -->
<?php    $this->load->view('header'); ?>

