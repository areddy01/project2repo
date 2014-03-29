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
	color: #FFFFFF;
	text-align: center;
	background-color: #808080;
}
  .auto-style5 {
	  text-align: CENTER;
	  font-size: large;
  }
  </style>
  </head>
<div id="shell">
	
	<!-- Header -->
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
	<?php $this->load->view('dashboard',  $school_code, $school_name,$assessment_id);?>
		<div class="message thank-message">
			<div class="auto-style1">
			
			<br/>
				</div>		
			 
			
			<div align="left">
				<div class="auto-style5">
			<label><strong>ATTENDANCE DETAILS <br />
					<br />
					</strong></label>
				</div>
	
<form method = "post" id ="" action = "/attendance/input/?info=<?php echo $info; ?>"  value = ""  >

<table>
<tr>
<td><table>
	<tr>
	<td style="width: 119px" class="auto-style3"><strong>School Name:	</strong>	</td>
	<td style="width: 200px">
	<label><?php echo $school_name ; ?> </label></td>
	</tr>
	<tr><td colspan="2"><strong>STUDENT AND TEACHER ATTENDANCE</strong></td>
		</tr>
	<tr><td style="width: 119px" class="auto-style3"><strong>Current Month:</strong></td>
	<td style="width: 200px">
	<label style="width: 400px" ><?php
$my_t=getdate(date("U"));
//print("$my_t[weekday],$my_t[month]$my_t[mday],$my_t[year]");
print("$my_t[month],$my_t[year]");
?></label></td></tr>
	</table>
	<table style="width: 60%">
	<tr>
		<td class="auto-style4" style="width: 154px"><strong>Class</strong></td>
		<?php  for ($row = 0; $row < count($arr['setvalue']) ;  $row++) { ?>
		<td class="auto-style4"><strong><?php echo $arr['setvalue'][$row]['class_name'] ;?></strong></td>
		<input name = "class_id[<?php echo $row ;?>]"type="hidden" value = "<?php echo $arr['setvalue'][$row]['class_id'] ;?>"style="width: 72px" />

		<?php }?>
	</tr>
	

	
	<tr>
		<td style="width: 200px" class="auto-style3"><strong>Section</strong></td>
		<?php  for ($row = 0; $row < count($arr['setvalue']) ;  $row++) { ?><?php //echo "<pre>"; print_r($arr['getvalue']); ?>
		<td style="width: 56px"><input id="Section0<?php echo $row; ?>"  name="Section0[<?php echo $row; ?>]" type="text" style="width: 56px" value="<?php if(isset($arr['getvalue'][$row]['no_of_sections'])) echo $arr['getvalue'][$row]['no_of_sections']; ?>" onkeyup="return trimalpha('#Section0<?php echo $row; ?>')"/>
		</td>
		<?php }?>
	</tr>
	<tr>
		<td class="auto-style3" ><strong>No of Working Days</strong></td>
		<?php  for ($row = 0; $row < count($arr['setvalue']) ;  $row++) { ?>
		<td style="width: 56px"><input id="workingdays0<?php echo $row; ?>" name="WorkingDays0[<?php echo $row; ?>]" type="text" style="width: 56px" value ="<?php if(isset($arr['getvalue'][$row]['no_working_days'])){echo $arr['getvalue'][$row]['no_working_days'] ;}else{ echo "";}?>" onkeyup="return trimalpha('#workingdays0<?php echo $row; ?>" />        </td>
		<?php }?>
	</tr>
	<tr>
		<td style="width: 154px" class="auto-style3"><strong>Number of students</strong></td>
		<?php  for ($row = 0; $row < count($arr['setvalue']) ;  $row++) { ?>
		<td style="width: 56px"><input id="numberofstudents0<?php echo $row; ?>" name="NumberOFStudents0[<?php echo $row; ?>]" type="text" style="width: 56px" value ="<?php if(isset($arr['getvalue'][$row]['no_students_attended'])){echo $arr['getvalue'][$row]['no_students_attended'] ;}else{ echo "";}?>" 
		onkeyup="return trimalpha('#numberofstudents0<?php echo $row; ?>')"/></td>
		<?php }?>
	</tr>
	<tr>
		<td style="width: 154px" class="auto-style3"><strong>Cumulative Attendance</strong></td>
		<?php  for ($row = 0; $row < count($arr['setvalue']) ;  $row++) { ?>
		<td style="width: 56px"><input id="cumulativeattendance0<?php echo $row; ?>" name="CumulativeAttendance0[<?php echo $row; ?>]" type="text" style="width: 56px"  value ="<?php if(isset($arr['getvalue'][$row]['student_cumulative_attendance'])){ echo $arr['getvalue'][$row]['student_cumulative_attendance'] ;}else{ echo "";}?>" onkeyup="return trimalpha('#cumulativeattendance0<?php echo $row; ?>')"/></td>
		<?php }?>
	</tr>
	<tr ><td colspan="2" style="width: 154px" class="auto-style3"><strong>Previous Month:</strong></td><td><label style="width: 400px" >
<?php $my_t=getdate(date("U"));
//print("$my_t[weekday],$my_t[month]$my_t[mday],$my_t[year]");
print("$my_t[month],$my_t[year]"); 
?>
</label></td></tr>
</table>





<table style="width: 60%">
	<tr>
		<td class="auto-style4" style="width: 154px"><strong>Class</strong></td>
		<?php  for ($row = 0; $row < count($arr['setvalue']) ;  $row++) { ?>
		<td class="auto-style4"><strong><?php echo $arr['setvalue'][$row]['class_name'] ;?></strong></td>
		<input  name = "class_id[<?php echo $row ;?>]"type="hidden" value = "<?php if(isset($arr['setvalue'][$row]['class_id']))echo $arr['setvalue'][$row]['class_id'] ;?>"
		style="width: 72px" />

		<?php }?>
	</tr>
	

	
	<tr>
	
		<td style="width: 200px" class="auto-style3"><strong>Section</strong></td>
		<?php  for ($row = 0; $row < count($arr['setvalue']) ;  $row++) { ?>
		<td style="width: 56px"><input id="section1<?php echo $row; ?>" name="Section1[<?php echo $row; ?>]" type="text" style="width: 56px" value ="<?php if(isset($arr['getvaluelastmonth'][$row]['no_of_sections'])){echo $arr['getvaluelastmonth'][$row]['no_of_sections'] ;}else{ echo "";}?>" onkeyup="return trimalpha('#section1<?php echo $row; ?>')" /></td>
		<?php }?>
	</tr>
	<tr>
		<td class="auto-style3" ><strong>No of Working Days</strong></td>
		<?php  for ($row = 0; $row < count($arr['setvalue']) ;  $row++) { ?>
		<td style="width: 56px"><input id="workingdays1<?php echo $row; ?>" name="WorkingDays1[<?php echo $row; ?>]" type="text" style="width: 56px" value ="<?php if(isset($arr['getvaluelastmonth'][$row]['no_working_days'])){echo $arr['getvaluelastmonth'][$row]['no_working_days'] ;}else{ echo "";}?>" onkeyup="return trimalpha('#workingdays1<?php echo $row; ?>')" /></td>
		<?php }?>
	</tr>
	<tr>
		<td style="width: 154px" class="auto-style3"><strong>Number of students</strong></td>
		<?php  for ($row = 0; $row < count($arr['setvalue']) ;  $row++) { ?>
		<td style="width: 56px"><input id="numberofstudents1<?php echo $row; ?>" name="NumberOFStudents1[<?php echo $row; ?>]" type="text" style="width: 56px" value ="<?php if(isset($arr['getvaluelastmonth'][$row]['no_students_attended'])){echo $arr['getvaluelastmonth'][$row]['no_students_attended'] ;}else{ echo "";}?>" 
		onkeyup="return trimalpha('#numberofstudents1<?php echo $row; ?>')" /></td>
		<?php }?>
	</tr>
	<tr>
		<td style="width: 154px" class="auto-style3"><strong>Cumulative Attendance</strong></td>
		<?php  for ($row = 0; $row < count($arr['setvalue']) ;  $row++) { ?>
		<td style="width: 56px"><input id="cumulativeattendance1<?php echo $row; ?>" name="CumulativeAttendance1[<?php echo $row; ?>]" type="text" style="width: 56px"  value ="<?php if(isset($arr['getvaluelastmonth'][$row]['student_cumulative_attendance'])){ echo $arr['getvaluelastmonth'][$row]['student_cumulative_attendance'] ;}else{ echo "";}?>" onkeyup="return trimalpha('#cumulativeattendance1<?php echo $row; ?>')" /></td>
		<?php }?>
	</tr>
	
	<tr ><td colspan="2" style="width: 154px" class="auto-style3"><strong>
		Previous Month (2)</strong></td><td><input type="text" style="width: 56px" /></td></tr>
</table>
<table style="width: 60%">
	<tr>
		<td class="auto-style4" style="width: 154px"><strong>Class</strong></td>
		<?php  for ($row = 0; $row < count($arr['setvalue']) ;  $row++) { ?>
		<td class="auto-style4"><strong><?php echo $arr['setvalue'][$row]['class_name'] ;?></strong></td>
		<input name = "Section2[<?php echo $row; ?>]"type="hidden" value = "<?php if(isset($arr['getvaluelastlastmonth'][$row]['class_id']))echo $arr['setvalue'][$row]['class_id'] ;?>"style="width: 72px" />

		<?php }?>
	</tr>
	

	
	<tr>
		<td style="width: 200px; height: 26px;" class="auto-style3"><strong>Section</strong></td>
		<?php  for ($row = 0; $row < count($arr['setvalue']) ;  $row++) { ?>
		<td style="width: 56px; height: 26px;"><input id="section2<?php echo $row; ?>"name="Section2[<?php echo $row; ?>]" type="text" style="width: 56px" value ="<?php if(isset($arr['getvaluelastlastmonth'][$row]['no_of_sections'])){  echo $arr['getvaluelastlastmonth'][$row]['no_of_sections'] ;}else{ echo "";}?>" 
		onkeyup="return trimalpha('#section2<?php echo $row; ?>')" /></td>
		<?php }?>
	</tr>
	<tr>
		<td class="auto-style3" ><strong>No of Working Days</strong></td>
		<?php  for ($row = 0; $row < count($arr['setvalue']) ;  $row++) { ?>
		<td style="width: 56px"><input id="workingdays2<?php echo $row; ?>"name="WorkingDays2[<?php echo $row; ?>]" type="text" style="width: 56px" value ="<?php if(isset($arr['getvaluelastlastmonth'][$row]['no_working_days'])){echo $arr['getvaluelastlastmonth'][$row]['no_working_days'] ;}else{ echo "";}?>" 
		onkeyup="return trimalpha('#workingdays2<?php echo $row; ?>')" /></td>
		<?php }?>
	</tr>
	<tr>
		<td style="width: 154px" class="auto-style3"><strong>Number of students</strong></td>
		<?php  for ($row = 0; $row < count($arr['setvalue']) ;  $row++) { ?>
		<td style="width: 56px"><input id="noofstudents2<?php echo $row; ?>" name="NumberOFStudents2[<?php echo $row; ?>]" type="text" style="width: 56px" value ="<?php if(isset($arr['getvaluelastlastmonth'][$row]['no_students_attended'])){echo $arr['getvaluelastlastmonth'][$row]['no_students_attended'] ;}else{ echo "";}?>" 
		onkeyup="return trimalpha('#noofstudents2<?php echo $row; ?>')" /></td>
		<?php }?>
	</tr>
	<tr>
		<td style="width: 154px" class="auto-style3"><strong>Cumulative Attendance</strong></td>
		<?php  for ($row = 0; $row < count($arr['setvalue']) ;  $row++) { ?>
		<td style="width: 56px"><input id="cumulativeattendance2<?php echo $row; ?>" name="CumulativeAttendance2[<?php echo $row; ?>]" type="text" style="width: 56px"  value ="<?php if(isset($arr['getvaluelastlastmonth'][$row]['student_cumulative_attendance'])){ echo $arr['getvaluelastlastmonth'][$row]['student_cumulative_attendance'] ;}else{ echo "";}?>" onkeyup="return trimalpha('cumulativeattendance2#<?php echo $row; ?>')" /></td>
		<?php }?>
	</tr>
</table>
<table style="width: 50%">
		<tr>
			<td class="auto-style4" style="height: 22px"><strong>Teacher attendance</strong></td>
			<td class="auto-style4" style="height: 22px"><strong>Current</strong></td>
			<td class="auto-style4" style="height: 22px"><strong>Prev 1</strong></td>
			<td class="auto-style4" style="height: 22px"><strong>Prev 2</strong></td>
		</tr>
		<tr>
			<td class="auto-style3" style="height: 26px"><strong>Months</strong></td>
			<td style="height: 26px"><input value="<?php echo date("M",strtotime("Months"));?>" type="text" style="width: 56px" value="" /></td>
			<td style="height: 26px"><input value="<?php echo date("M",strtotime(" 5 Months")); ?>" style="width: 56px"/></td>
			<td style="height: 26px"><input value="<?php echo date("M",strtotime(" 3 Months"));?>" style="width: 56px" /></td>
		</tr>
		<tr>
			<td class="auto-style3"><strong>No of working Days</strong></td>
			<?php for($row=0; $row < 3; $row++) { ?>
			<td><input id="Workingdays3<?php echo $row; ?>" name="WorkingDays3[<?php echo $row; ?>]" type="text" style="width: 56px" value="<?php if(isset($arr['getvalue'][$row]['no_working_days']))echo $arr['getvalue'][$row]['no_working_days'] ;?>" onkeyup="return trimalpha('#Workingdays3<?php echo $row; ?>')" /></td>
			
			<?php }?>
		</tr>
		<tr>
			<td class="auto-style3" style="height: 26px"><strong>Number of Teachers</strong></td>
			<?php for($row=0; $row < 3; $row++) { ?>
			<td style="height: 26px"><input id="noofteachers<?php echo $row; ?>" name="NumberofTeachers3[<?php echo $row; ?>]" type="text" style="width: 56px"  value="<?php if(isset($arr['getvalue'][0]['no_teachers_attended'])) echo $arr['getvalue'][0]['no_teachers_attended'] ;?>" onkeyup="return trimalpha('#noofteachers<?php echo $row; ?>')" /></td>
			<?php }?>
		</tr>
		<tr>
			<td class="auto-style3"><strong>Cumulative Attendance</strong></td>
			<?php for($row=0; $row < 3; $row++) { ?>
			<td><input id="CumulativeAttendance3<?php echo $row; ?>" name="CumulativeAttendance3[<?php echo $row; ?>]" type="text" style="width: 56px" value="<?php if(isset($arr['getvalue'][0]['teacher_cumulative_attendance'])) echo $arr['getvalue'][0]['teacher_cumulative_attendance'] ;?>"
			 onkeyup="return trimalpha('#CumulativeAttendance3<?php echo $row; ?>')"  /></td>
			<?php }?>
		</tr>
	</table>
<!--<td align="center"><input id = "attendance" name="Submit1" type="submit" value="submit" onclick="return validate_attendance_button(<?php echo count($arr['setvalue'])?>);" /><div>
<span id="error" style = "display:none;color:red;" > Only Numeric Values are Allowed </span> <span id ="errmark" style = "display:none;color:red;" > All Red mark field is required </span></div>
</td>-->
<table width="650px">
<tr>
<td colspan="1" align="right" style="width: 273px; height: 34px;">
  <input id="admissions" name="Submit1" type="submit" value="submit" style="width: 98px" onclick="return validate_attendance_button(<?php echo count($arr['getvalue']); ?>);"/></td></tr>
<div style="width: 491px"><span id="errmark" style = "display:none;color:red;" > Only Numeric Values are Allowed </span> <!--<span id ="errmark" style = "display:none;color:red;" > All Red mark field is required </span>--></div>
<tr><td align="right"><?php if(isset($confirm)) { echo "$confirm"; }?></td></tr>




</table>				 
				 
				   
			    
			    </form>
			
		

		</div>
		
		
	</div>
	
	<!-- End Content -->
</div>
<!-- End Shell -->
<?php    $this->load->view('header'); ?>

