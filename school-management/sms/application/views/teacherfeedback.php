<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
 <?php    $this->load->view('header'); ?>
  <style type="text/css">
  .auto-style1 {
	  text-align: CENTER;
	
  }
  
  .auto-style3 {
	  color: #FFFFFF;
	  background-color: #808080;
  }
  
  .auto-style4 {
	  text-align: CENTER;
	  color: #FFFFFF;
	  background-color: #808080;
  }
  .auto-style5 {
	  text-align: CENTER;
	  font-size: large;
	  font-weight: bold;
	  text-transform: uppercase;
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
				<div class="auto-style5">
			<label>Teacher Feedback Details <br />
					<br />
					</label>
				</div>
<form method = "post" id ="" action = "/sms/admin/addteacherfeedback/"  value = ""  style="width:100%;margin-left:100px">
<table>
<tr>
<td><table style="width: 45%">
	<tr>
		<td class="auto-style3" colspan="2"><strong>SCORING OPTIONS: Yes, Ineffective,No,N/A</strong></td>
	</tr>
	<tr>
		<td style="width: 642px">Name</td>
		<td><input id="teacherfb0" name="teacherfeedback[]" type="text" style="width: 115px" /></td>
	</tr>
	<tr>
		<td style="width: 642px">Subject Taught</td>
		<td><input id="teacherfb1" name="teacherfeedback[]" type="text" style="width: 115px" /></td>
	</tr>
	<tr>
		<td style="width: 642px">Class Taught</td>
		<td><select id="teacherfb2" name="teacherfeedback[]" style="width: 120px">
		<option>Select</option>
		<option>English</option>
		<option>Maths</option>
		<option>Science</option>
		</select></td>
	</tr>
	
</table>
<table style="width: 90%">
	<tr>
		<td class="auto-style4" colspan="3" style="height: 23px"><strong>
		Indicators</strong></td>
	</tr>
	<tr>
		<td style="height: 8px" colspan="3"><strong>Teacher-student interaction</strong></td>
	</tr>
	<tr>
		<td style="width: 19px; height: 23px">1</td>
		<td style="width: 521px; height: 23px">Address students by name</td>
		<td style="width: 88px; height: 23px">
		<select id="teacherfb3" name="teacherfeedback[]" style="width: 90px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>
		</select></td>
	</tr>
	<tr>
		<td style="width: 19px; height: 15px">2</td>
		<td style="width: 521px; height: 15px">Walks around the classroom</td>
		<td style="width: 88px; height: 15px">
		<select id="teacherfb4" name="teacherfeedback[]" style="width: 90px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>
		</select></td>
	</tr>
	<tr>
		<td style="width: 19px; height: 23px">3</td>
		<td style="width: 521px; height: 23px">Friendly/patient yet firm with 
		students with positive gestures</td>
		<td style="width: 88px; height: 23px">
		<select id="teacherfb5" name="teacherfeedback[]" style="width: 90px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>

		</select></td>
	</tr>
	<tr>
		<td style="width: 19px">4</td>
		<td style="width: 521px">Maintains eye contact with the class</td>
		<td style="width: 88px"><select id="teacherfb6" name="teacherfeedback[]" style="width: 90px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>

		</select></td>
	</tr>
	<tr>
		<td style="width: 19px">5</td>
		<td style="width: 521px">Responds to questions raised by students</td>
		<td style="width: 88px"><select id="teacherfb7" name="teacherfeedback[]" style="width: 90px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>

		</select></td>
	</tr>
	<tr>
		<td style="width: 19px">6</td>
		<td style="width: 521px">Maintains discipline in the class</td>
		<td style="width: 88px"><select id="teacherfb8" name="teacherfeedback[]" style="width: 90px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>

		</select></td>
	</tr>
	<tr>
		<td style="width: 19px">7</td>
		<td style="width: 521px">Students are attentive</td>
		<td style="width: 88px"><select id="teacherfb9" name="teacherfeedback[]" style="width: 90px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>

		</select></td>
	</tr>
	<tr>
		<td class="auto-style4" colspan="3" style="height: 21px"><strong>
		Teaching-Learning Methodology</strong></td>
	</tr>
	<tr>
		<td style="width: 19px">1</td>
		<td style="width: 521px">Focuses on student understanding </td>
		<td style="width: 88px"><select id="teacherfb10" name="teacherfeedback[]" style="width: 90px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>

		</select></td>
	</tr>
	<tr>
		<td style="width: 19px">2</td>
		<td style="width: 521px">Presents factually correct content</td>
		<td style="width: 88px"><select id="teacherfb11" name="teacherfeedback[]" style="width: 90px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>

		</select></td>
	</tr>
	<tr>
		<td style="width: 19px">3</td>
		<td style="width: 521px">Gave instructions in simple steps</td>
		<td style="width: 88px"><select id="teacherfb12" name="teacherfeedback[]" style="width: 90px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>

		</select></td>
	</tr>
	<tr>
		<td style="width: 19px">4</td>
		<td style="width: 521px">Uses Visual aids</td>
		<td style="width: 88px"><select id="teacherfb13" name="teacherfeedback[]" style="width: 90px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>

		</select></td>
	</tr>
	<tr>
		<td style="width: 19px">5</td>
		<td style="width: 521px">Periodically clears doubts of the students</td>
		<td style="width: 88px"><select id="teacherfb14" name="teacherfeedback[]" style="width: 90px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>

		</select></td>
	</tr>
	<tr>
		<td style="width: 19px">6</td>
		<td style="width: 521px">Connects the lesson to students environment</td>
		<td style="width: 88px"><select id="teacherfb15" name="teacherfeedback[]" style="width: 90px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>

		</select></td>
	</tr>
	<tr>
		<td style="width: 19px">7</td>
		<td style="width: 521px">Teacher built in time for students to accomplish the task</td>
		<td style="width: 88px"><select id="teacherfb16" name="teacherfeedback[]" style="width: 90px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>

		</select></td>
	</tr>
	<tr>
		<td style="width: 19px">8</td>
		<td style="width: 521px">Encourages interaction among students to accomplish the task</td>
		<td style="width: 88px"><select id="teacherfb17" name="teacherfeedback[]" style="width: 90px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>

		</select></td>
	</tr>
	<tr>
		<td style="width: 19px">9</td>
		<td style="width: 521px">Presents a relaxed stance after asking the question</td>
		<td style="width: 88px"><select id="teacherfb18" name="teacherfeedback[]" style="width: 90px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>

		</select></td>
	</tr>
	<tr>
		<td style="width: 19px">10</td>
		<td style="width: 521px">Uses blackboard in an organized fasion</td>
		<td style="width: 88px"><select id="teacherfb19" name="teacherfeedback[]" style="width: 90px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>

		</select></td>
	</tr>
	<tr>
		<td style="width: 19px">11</td>
		<td style="width: 521px">Uses blackboard interactively</td>
		<td style="width: 88px"><select id="teacherfb20" name="teacherfeedback[]" style="width: 90px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>

		</select></td>
	</tr>
	<tr>
		<td style="width: 19px">12</td>
		<td style="width: 521px">Students relevant content related questions</td>
		<td style="width: 88px"><select id="teacherfb21" name="teacherfeedback[]" style="width: 90px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>

		</select></td>
	</tr>
	<tr>
		<td style="width: 19px">13</td>
		<td style="width: 521px">Students easily understood the instructions/tasks provided</td>
		<td style="width: 88px"><select id="teacherfb22" name="teacherfeedback[]" style="width: 90px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>

		</select></td>
	</tr>
	<tr>
		<td class="auto-style4" colspan="2"><strong>Assessment Technique</strong></td>
		<td style="width: 88px" class="auto-style3">&nbsp;</td>
	</tr>
	<tr>
		<td style="width: 19px">1</td>
		<td style="width: 521px">Addresses questions to individual students as well as the group at large </td>
		<td style="width: 88px"><select id="teacherfb23" name="teacherfeedback[]" style="width: 90px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>

		</select></td>
	</tr>
	<tr>
		<td style="width: 19px">2</td>
		<td style="width: 521px">Accepts all student responses including the &#39;wrong ones&#39; with encouraging feedback</td>
		<td style="width: 88px"><select id="teacherfb24" name="teacherfeedback[]" style="width: 90px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>

		</select></td>
	</tr>
	<tr>
		<td style="width: 19px">3</td>
		<td style="width: 521px">Uses questioning as a tool to improve student understanding</td>
		<td style="width: 88px"><select id="teacherfb25" name="teacherfeedback[]" style="width: 90px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>

		</select></td>
	</tr>
	<tr>
		<td style="width: 19px">4</td>
		<td style="width: 521px">Revises the main points of the lesson</td>
		<td style="width: 88px"><select id="teacherfb26" name="teacherfeedback[]" style="width: 90px">
		<option>Select</option>
		<option>Yes</option>
		<option>Ineffective</option>
		<option>No</option>
		<option>N/A</option>

		</select></td>
	</tr>
	<tr>
		<td style="width: 19px">5</td>
		<td style="width: 521px">Students participate actively when asked questions</td>
		<td style="width: 88px"><select id="teacherfb27" name="teacherfeedback[]" style="width: 90px">
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
<input id="teacherfb" name="Submit1" type="submit" value="submit" onclick="validate_teacherfb()" style="width: 99px" /></td>
</tr>
</table>				 
				 
				   
			    
			    </form>
			
		

		</div>
		
		
	</div>
	
	<!-- End Content -->
</div>
<!-- End Shell -->

<?php    $this->load->view('footer'); ?>

