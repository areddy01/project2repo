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
	

	</tr>
	<tr>
		<td style="width: 200px" class="auto-style3"><strong>Section</strong></td>
		<?php  for ($row = 0; $row < count($arr['setvalue']) ;  $row++) { ?>
		<td style="width: 56px"><input id="section0<?php echo $row; ?>" name="Section0[<?php echo $row; ?>]" type="text" style="width: 56px"  validate="required ,regexp" value ="<?php if(isset($arr['getvalue'][$row]['no_of_setion']))  echo $arr['getvalue'][$row]['no_of_setion'] ;?>" onblur="return validat_numeric('#section0<?php echo $row; ?>');" /></td>
		<?php }?>
	</tr>
	<tr>
		<td class="auto-style3" ><strong>No of Working Days</strong></td>
		<?php  for ($row = 0; $row < count($arr['setvalue']) ;  $row++) { ?>
		<td style="width: 56px"><input id="workingdays0<?php echo $row; ?>" name="WorkingDays0[<?php echo $row; ?>]" type="text" style="width: 56px" value ="<?php if(isset($arr['getvalue'][$row]['no_working_days']))echo $arr['getvalue'][$row]['no_working_days'] ;?>" onblur="return  validat_numeric('#workingdays0<?php echo $row; ?>'); "  /></td>
		<?php }?>
	</tr>
	<tr>
		<td style="width: 154px" class="auto-style3"><strong>Number of students</strong></td>
		<?php  for ($row = 0; $row < count($arr['setvalue']) ;  $row++) { ?>
		<td style="width: 56px"><input id="numberofstudents0<?php echo $row; ?>" name="NumberOFStudents0[<?php echo $row; ?>]" type="text" style="width: 56px" value ="<?php if(isset($arr['getvalue'][$row]['no_students_attended']))echo $arr['getvalue'][$row]['no_students_attended'] ;?>" onblur="return validat_numeric('#numberofstudents0<?php echo $row; ?>');"/></td>
		<?php }?>
	</tr>
	<tr>
		<td style="width: 154px" class="auto-style3"><strong>Cumulative Attendance</strong></td>
		<?php  for ($row = 0; $row < count($arr['setvalue']) ;  $row++) { ?>
		<td style="width: 56px"><input id="cumulativeattendance0<?php echo $row; ?>" name="CumulativeAttendance0[<?php echo $row; ?>]" type="text" style="width: 56px"  value ="<?php if(isset($arr['getvalue'][$row]['student_cumulative_attendance'])) echo $arr['getvalue'][$row]['student_cumulative_attendance'] ;?>" onblur="return  validat_numeric('#cumulativeattendance0<?php echo $row;?>');" /></td>
		<?php }?>
	</tr>
	<tr ><td colspan="2" style="width: 154px" class="auto-style3"><strong>Previous Year (1)</strong></td><td><input type="text" style="width: 56px" /></td></tr>
</table>





<table style="width: 60%">
	<tr>
		<td class="auto-style4" style="width: 154px"><strong>Class</strong></td>
		<?php  for ($row = 0; $row < count($arr['setvalue']) ;  $row++) { ?>
		<td class="auto-style4"><strong><?php echo $arr['setvalue'][$row]['class_name'] ;?></strong></td>
		<input name = "class_id[<?php echo $row ;?>]"type="hidden" value = "<?php if(isset($arr['setvalue'][$row]['class_id']))echo $arr['setvalue'][$row]['class_id'] ;?>"style="width: 72px" />

		<?php }?>
	</tr>
	

	</tr>
	<tr>
	
		<td style="width: 200px" class="auto-style3"><strong>Section</strong></td>
		<?php  for ($row = 0; $row < count($arr['setvalue']) ;  $row++) { ?>
		<td style="width: 56px"><input id="section1<?php echo $row; ?>" name="Section1[<?php echo $row; ?>]" type="text" style="width: 56px" value ="<?php if(isset($arr['getvaluelastmonth'][$row]['no_of_setion']))  echo $arr['getvaluelastmonth'][$row]['no_of_setion'] ;?>" onblur="return validat_numeric('#section1<?php echo $row; ?>');" /></td>
		<?php }?>
	</tr>
	<tr>
		<td class="auto-style3" ><strong>No of Working Days</strong></td>
		<?php  for ($row = 0; $row < count($arr['setvalue']) ;  $row++) { ?>
		<td style="width: 56px"><input id="workingdays1<?php echo $row; ?>" name="WorkingDays1[<?php echo $row; ?>]" type="text" style="width: 56px" value ="<?php if(isset($arr['getvaluelastmonth'][$row]['no_working_days']))echo $arr['getvaluelastmonth'][$row]['no_working_days'] ;?>" onblur="return validat_numeric('#workingdays1<?php echo $row; ?>');"/></td>
		<?php }?>
	</tr>
	<tr>
		<td style="width: 154px" class="auto-style3"><strong>Number of students</strong></td>
		<?php  for ($row = 0; $row < count($arr['setvalue']) ;  $row++) { ?>
		<td style="width: 56px"><input id="numberofstudents1<?php echo $row; ?>" name="NumberOFStudents1[<?php echo $row; ?>]" type="text" style="width: 56px" value ="<?php if(isset($arr['getvaluelastmonth'][$row]['no_students_attended']))echo $arr['getvaluelastmonth'][$row]['no_students_attended'] ;?>" onblur="return validat_numeric('#numberofstudents1<?php echo $row; ?>');" /></td>
		<?php }?>
	</tr>
	<tr>
		<td style="width: 154px" class="auto-style3"><strong>Cumulative Attendance</strong></td>
		<?php  for ($row = 0; $row < count($arr['setvalue']) ;  $row++) { ?>
		<td style="width: 56px"><input id="cumulativeattendance1<?php echo $row; ?>" name="CumulativeAttendance1[<?php echo $row; ?>]" type="text" style="width: 56px"  value ="<?php if(isset($arr['getvaluelastmonth'][$row]['student_cumulative_attendance'])) echo $arr['getvaluelastmonth'][$row]['student_cumulative_attendance'] ;?>" onblur="return validat_numeric('#cumulativeattendance1<?php echo $row; ?>');" /></td>
		<?php }?>
	</tr>
	
	<tr ><td colspan="2" style="width: 154px" class="auto-style3"><strong>Previous Year (2)</strong></td><td><input type="text" style="width: 56px" /></td></tr>
</table>






<table style="width: 60%">
	<tr>
		<td class="auto-style4" style="width: 154px"><strong>Class</strong></td>
		<?php  for ($row = 0; $row < count($arr['setvalue']) ;  $row++) { ?>
		<td class="auto-style4"><strong><?php echo $arr['setvalue'][$row]['class_name'] ;?></strong></td>
		<input name = "Section2[<?php echo $row; ?>]"type="hidden" value = "<?php if(isset($arr['getvaluelastlastmonth'][$row]['class_id']))echo $arr['setvalue'][$row]['class_id'] ;?>"style="width: 72px" />

		<?php }?>
	</tr>
	

	</tr>
	<tr>
		<td style="width: 200px; height: 26px;" class="auto-style3"><strong>Section</strong></td>
		<?php  for ($row = 0; $row < count($arr['setvalue']) ;  $row++) { ?>
		<td style="width: 56px; height: 26px;"><input id="section2<?php echo $row; ?>"name="Section2[<?php echo $row; ?>]" type="text" style="width: 56px" value ="<?php if(isset($arr['getvaluelastlastmonth'][$row]['no_of_setion']))  echo $arr['getvaluelastlastmonth'][$row]['no_of_setion'] ;?>" onblur="return validat_numeric('#section2<?php echo $row; ?>');" /></td>
		<?php }?>
	</tr>
	<tr>
		<td class="auto-style3" ><strong>No of Working Days</strong></td>
		<?php  for ($row = 0; $row < count($arr['setvalue']) ;  $row++) { ?>
		<td style="width: 56px"><input id="workingdays2<?php echo $row; ?>"name="WorkingDays2[<?php echo $row; ?>]" type="text" style="width: 56px" value ="<?php if(isset($arr['getvaluelastlastmonth'][$row]['no_working_days']))echo $arr['getvaluelastlastmonth'][$row]['no_working_days'] ;?>" onblur="return validat_numeric('#workingdays2<?php echo $row; ?>');" /></td>
		<?php }?>
	</tr>
	<tr>
		<td style="width: 154px" class="auto-style3"><strong>Number of students</strong></td>
		<?php  for ($row = 0; $row < count($arr['setvalue']) ;  $row++) { ?>
		<td style="width: 56px"><input id="noofstudents2<?php echo $row; ?>" name="NumberOFStudents2[<?php echo $row; ?>]" type="text" style="width: 56px" value ="<?php if(isset($arr['getvaluelastlastmonth'][$row]['no_students_attended']))echo $arr['getvaluelastlastmonth'][$row]['no_students_attended'] ;?>" onblur="return validat_numeric('#noofstudents2<?php echo $row; ?>');" /></td>
		<?php }?>
	</tr>
	<tr>
		<td style="width: 154px" class="auto-style3"><strong>Cumulative Attendance</strong></td>
		<?php  for ($row = 0; $row < count($arr['setvalue']) ;  $row++) { ?>
		<td style="width: 56px"><input id="cumulativeattendance2<?php echo $row; ?>" name="CumulativeAttendance2[<?php echo $row; ?>]" type="text" style="width: 56px"  value ="<?php if(isset($arr['getvaluelastlastmonth'][$row]['student_cumulative_attendance'])) echo $arr['getvaluelastlastmonth'][$row]['student_cumulative_attendance'] ;?>" onblur="return validat_numeric('#cumulativeattendance2<?php echo $row; ?>');" /></td>
		<?php }?>
	</tr>
</table>
</td>
</tr>
<table style="width: 50%">
		<tr>
			<td class="auto-style4" style="height: 22px"><strong>Teacher attendance</strong></td>
			<td class="auto-style4" style="height: 22px"><strong>Current</strong></td>
			<td class="auto-style4" style="height: 22px"><strong>Prev 1</strong></td>
			<td class="auto-style4" style="height: 22px"><strong>Prev 2</strong></td>
		</tr>
		<tr>
			<td class="auto-style3" style="height: 26px"><strong>Months</strong></td>
			<td style="height: 26px"><input id="month<?php echo $row; ?>"name="month[<?php echo $row; ?>]" type="text" style="width: 56px" value ="<?php if(isset($arr['getvaluemonth'][$row]['month']))  echo $arr['getvaluemonth'][$row]['month'];?>" onblur="return validate_numeric('#month<?php echo $row; ?>');" /></td>
			<td style="height: 26px"><input id="month1<?php echo $row; ?>"name="month1[<?php echo $row; ?>]" type="text" style="width: 56px" value ="<?php if(isset($arr['getvaluelastmonth'][$row]['month1']))  echo $arr['getvaluelastmonth'][$row]['month1'] ;?>" onblur="return validate_numeric('#month1<?php echo $row; ?>');" /></td>
			<td style="height: 26px"><input id="month2<?php echo $row; ?>"name="month2[<?php echo $row; ?>]" type="text" style="width: 56px" value ="<?php if(isset($arr['getvaluelastlastmonth'][$row]['month2']))  echo $arr['getvaluelastlastmonth'][$row]['month2'] ;?>" onblur="return validate_numeric('#month2<?php echo $row;?>');"/></td>
		</tr>
		<tr>
			<td class="auto-style3" style="height: 26px"><strong>No of working Days</strong></td>
			<td style="height: 26px"><input id="Workingdays3<?php echo $row; ?>" name="Workingdays3[<?php echo $row; ?>]" type="text" style="width: 56px" value="<?php if(isset($arr['getvaluemonth'][$row]['no_working_days']))echo $arr['getvaluemonth'][$row]['no_working_days'] ;?>" onblur="return validate_numeric('#Workingdays3<?php echo $row; ?>');" /></td>
			<td style="height: 26px"><input id="Workingdays4<?php echo $row; ?>" name="Workingdays4[<?php echo $row; ?>]" type="text" style="width: 56px" value="<?php if(isset($arr['getvaluelastmonth'][$row]['no_working_days']))echo $arr['getvaluelastmonth'][$row]['no_working_days']; ?>" onblur="return validate_numeric('#Workingdays4<?php echo $row; ?>');"/></td>
			<td style="height: 26px"><input id="Workingdays5<?php echo $row; ?>" name="Workingdays5[<?php echo $row; ?>]" type="text" style="width: 56px" value="<?php if(isset($arr['getvaluelastlastmonth'][$row]['no_working_days']))echo $arr['getvaluelastlastmonth'][$row]['no_working_days'];?>" onblur="return validate_numeric('#Workingdays5<?php echo $row;?>');"/></td>
			
		</tr>
		<tr>
			<td class="auto-style3" style="height: 26px"><strong>Number of Teachers</strong></td>
			<td style="height: 26px"><input id="noofteachers6<?php echo $row;?>" name="noofTeachers6[<?php echo $row;?>]" type="text" style="width: 56px" value="<?php if(isset($arr['getvalue'][0]['no_teachers_attended'])) echo $arr['getvalue'][0]['no_teachers_attended'] ;?>" onblur="return validate_numeric('#numberofteachers6<?php echo $row;?>');"/></td>
			<td style="height: 26px"><input id="noofteachers7<?php echo $row;?>" name="noofTeachers7[<?php echo $row;?>]" type="text" style="width: 56px" value="<?php if(isset($arr['getvalue'][1]['no_teachers_attended'])) echo $arr['getvalue'][1]['no_teachers_attended']; ?>" onblur="return validate_numeric('#numberofteachers7<?php echo $row;?>')" /></td>
			<td style="height: 26px"><input id="noofteachers8<?php echo $row;?>" name="noofTeachers8[<?php echo $row;?>]" type="text" style="width: 56px" value="<?php if(isset($arr['getvalue'][2]['no_teachers_attended'])) echo $arr['getvalue'][2]['no_teachers_attended'];?>" onblur="return validate_numeric('#numberofteachers8<?php echo $row;?>')"/></td>
		</tr>
		<tr>
			<td class="auto-style3"><strong>Cumulative Attendance</strong></td>
			<td><input name="CumulativeAttendance9<?php echo $row; ?>" type="text" style="width: 56px" value="<?php if(isset($arr['getvaluemonth']['Teacher_cumulative_attendance'])) echo $arr['getvaluemonth']['teacher_cumulative_attendance'];?>" onblur="return validate_numeric('#CumulativeAttendance9<?php echo $row;?>');"  /></td>
			<td><input name="CumulativeAttendance10" type="text" style="width: 56px" value="<?php if(isset($arr['getvaluelastmonth']['Teacher_cumulative_attendance'])) echo $arr['getvaluelastmonth']['teacher_cumulative_attendance'];?>" onblur="return validate_numeric('#CumulativeAttendance10<?php echo $row;?>');" /></td>
			<td><input name="CumulativeAttendance11" type="text" style="width: 56px" value="<?php if(isset($arr['getvaluelastlastmonth']['Teacher_cumulative_attendance'])) echo $arr['getvaluelastlastmonth']['teacher_cumulative_attendance'];?>" onblur="return validate_numeric('#CumulativeAttendance11<?php echo $row;?>');" /></td>
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

