<?php $this->load->view('main_header'); ?>
<script type="text/javascript">

</script>

	<article id="formDetail">
		
		
	<h2>Attendance Details</h2>
<div id="attendence">
<form method = "post" id ="attendance" action = "/attendance/input/?info=<?php echo $info; ?>&page=3"  value = ""  ><br/>
<p id="attendanceerror" style="color:red;"></p>

<strong  class="btnbg addform" style="float:left;"><?php echo date("F");?></strong>
  <table class="attendenceTable" style="width: 100%">
  
  	<thead><tr>
				<th><strong>Class</strong></th>
				<?php  for ($row = 0; $row < count($arr['setvalue']) ;  $row++) { ?>
				<th><strong><?php echo $arr['setvalue'][$row]['class_name'] ;?></strong></th>
		        <input name = "class_id[<?php echo $row ;?>]"type="hidden" value = "<?php echo $arr['setvalue'][$row]['class_id'] ;?>"/>
                <?php }?>
			</tr>
			<tr><th class="noborder nobg" colspan=14>&nbsp;</th></tr>
	</thead>
	<tbody>

	
	<tr>
		<td  class="classNo"><strong>Section</strong></td>
				<?php  for ($row = 0; $row < count($arr['setvalue']) ;  $row++) { ?>
				<td><input maxlength="4" id="Section0<?php echo $row; ?>"  name="Section0[<?php echo $row; ?>]" type="text" value="1"   onblur="return validate_numeric('#Section0<?php echo $row; ?>');"  onkeyup="javascript: trimalpha('#Section0<?php echo $row; ?>')"/></td>
				<?php }?>
   </tr>
	<tr>
		<td class="classNo"><strong>No of Working Days</strong></td>
	            <?php  for ($row = 0; $row < count($arr['setvalue']) ;  $row++) { ?>
				<td><input  maxlength="4"id="workingdays0<?php echo $row; ?>" name="WorkingDays0[<?php echo $row; ?>]" type="text" value ="<?php if(isset($arr['getvalue'][$row]['no_working_days'])){echo $arr['getvalue'][$row]['no_working_days'] ;}else{ echo "";}?>" onblur="return  validat_numeric('#workingdays0<?php echo $row; ?>'); " onkeyup="javascript: trimalpha('#workingdays0<?php echo $row; ?>')" /></td>
				<?php }?>
	</tr>
	<tr>
		<td  class="classNo"><strong>Number of students</strong></td>
		        <?php  for ($row = 0; $row < count($arr['setvalue']) ;  $row++) { ?>
				<td><input  maxlength="4"id="numberofstudents0<?php echo $row; ?>" name="NumberOFStudents0[<?php echo $row; ?>]" type="text" value ="<?php if(isset($arr['getvalue'][$row]['no_students_attended'])){echo $arr['getvalue'][$row]['no_students_attended'] ;}else{ echo "";}?>" onblur="return validat_numeric('#numberofstudents0<?php echo $row; ?>');" onkeyup="javascript: trimalpha('#numberofstudents0<?php echo $row; ?>')"/></td>
				<?php }?>
							</tr>
	<tr>
	
		<td  class="classNo"><strong>Cumulative Attendance</strong></td>
	        	<?php  for ($row = 0; $row < count($arr['setvalue']) ;  $row++) { ?>
				<td><input maxlength="4" id="cumulativeattendance0<?php echo $row; ?>" name="CumulativeAttendance0[<?php echo $row; ?>]" type="text"  value ="<?php if(isset($arr['getvalue'][$row]['student_cumulative_attendance'])){ echo $arr['getvalue'][$row]['student_cumulative_attendance'] ;}else{ echo "";}?>" onblur="return  validat_numeric('#cumulativeattendance0<?php echo $row;?>');" onkeyup="javascript: trimalpha('#cumulativeattendance0<?php echo $row; ?>')" /></td>
				<?php }?>
							</tr>
</tbody>
  </table>
 
  <strong  class="btnbg addform" style="float:left;"><?php echo date("F",strtotime("-1 Months")); ?></strong>
  <table style="width: 100%" class="attendenceTable">
  	<thead><tr>
				<th><strong>Class</strong></th>
				<th><strong>Nursery</strong></th>
				<th><strong>LKG</strong></th>
				<th><strong>UKG</strong></th>
				<th><strong>Class 1</strong></th>
		
				<th><strong>Class 2</strong></th>
		
				<th><strong>Class 3</strong></th>
		
				<th><strong>Class 4</strong></th>
		
				<th><strong>Class 5</strong></th>
		
				<th><strong>Class 6</strong></th>
		
				<th><strong>Class 7</strong></th>
		
				<th><strong>Class 8</strong></th>
		
				<th><strong>Class 9</strong></th>
		
				<th class="border0"><strong>Class 10</strong></th>
		

			</tr>
			<tr><th colspan="14" class="noborder nobg">&nbsp;</th></tr>
	</thead>
	<tbody>

	
	<tr>
		<td class="classNo"><strong>Section</strong></td>
				<?php  for ($row = 0; $row < count($arr['setvalue']) ;  $row++) { ?>
		<td><input maxlength="4" id="section1<?php echo $row; ?>" name="Section1[<?php echo $row; ?>]" type="text" value ="1" onblur="return validat_numeric('#section1<?php echo $row; ?>');" onkeyup="javascript: trimalpha('#section1<?php echo $row; ?>')" /></td>
		<?php }?>
	</tr>
	<tr>
		<td class="classNo"><strong>No of Working Days</strong></td>
						<?php  for ($row = 0; $row < count($arr['setvalue']) ;  $row++) { ?>
		<td><input  maxlength="4"id="workingdays1<?php echo $row; ?>" name="WorkingDays1[<?php echo $row; ?>]" type="text" value ="<?php if(isset($arr['getvaluelastmonth'][$row]['no_working_days'])){echo $arr['getvaluelastmonth'][$row]['no_working_days'] ;}else{ echo "";}?>" onblur="return validat_numeric('#workingdays1<?php echo $row; ?>');" onkeyup="javascript: trimalpha('#workingdays1<?php echo $row; ?>')"/></td>
		<?php }?>
			</tr>
	<tr>
		<td class="classNo"><strong>Number of students</strong></td>
						<?php  for ($row = 0; $row < count($arr['setvalue']) ;  $row++) { ?>
		<td><input maxlength="4" id="numberofstudents1<?php echo $row; ?>" name="NumberOFStudents1[<?php echo $row; ?>]" type="text"  value ="<?php if(isset($arr['getvaluelastmonth'][$row]['no_students_attended'])){echo $arr['getvaluelastmonth'][$row]['no_students_attended'] ;}else{ echo "";}?>" onblur="return validat_numeric('#numberofstudents1<?php echo $row; ?>');" onkeyup="javascript: trimalpha('#numberofstudents1<?php echo $row; ?>')"/></td>
		<?php }?>
			</tr>
	<tr>
		<td class="classNo"><strong>Cumulative Attendance</strong></td>
		<?php  for ($row = 0; $row < count($arr['setvalue']) ;  $row++) { ?>
		<td><input  maxlength="4" id="cumulativeattendance1<?php echo $row; ?>" name="CumulativeAttendance1[<?php echo $row; ?>]" type="text"  value ="<?php if(isset($arr['getvaluelastmonth'][$row]['student_cumulative_attendance'])){ echo $arr['getvaluelastmonth'][$row]['student_cumulative_attendance'] ;}else{ echo "";}?>" onblur="return validat_numeric('#cumulativeattendance1<?php echo $row; ?>');" onkeyup="javascript: trimalpha('#cumulativeattendance1<?php echo $row; ?>')" /></td>
		<?php }?>
			</tr>
</tbody>
  </table>
 
 
 <strong class="btnbg addform" style="float:left;"><?php echo date("F",strtotime("-2 Months")); ?></strong>
 <table class="attendenceTable">
  	<thead><tr>
				<th><strong>Class</strong></th>
				<th><strong>Nursery</strong></th>
				<th><strong>LKG</strong></th>
				<th><strong>UKG</strong></th>
				<th><strong>Class 1</strong></th>
		
				<th><strong>Class 2</strong></th>
		
				<th><strong>Class 3</strong></th>
		
				<th><strong>Class 4</strong></th>
		
				<th><strong>Class 5</strong></th>
		
				<th><strong>Class 6</strong></th>
		
				<th><strong>Class 7</strong></th>
		
				<th><strong>Class 8</strong></th>
		
				<th><strong>Class 9</strong></th>
		
				<th class="border0"><strong>Class 10</strong></th>
		

			</tr>
			<tr><th colspan="14" class="noborder nobg">&nbsp;</th></tr>
	</thead>
	<tbody>

	
	<tr>
		<td class="classNo"><strong>Section</strong></td>
						<?php  for ($row = 0; $row < count($arr['setvalue']) ;  $row++) { ?>
		<td><input maxlength="4" id="section2<?php echo $row; ?>"name="Section2[<?php echo $row; ?>]" type="text" value ="1" onblur="return validat_numeric('#section2<?php echo $row; ?>');" onkeyup="javascript: trimalpha('#section2<?php echo $row; ?>')"/></td>
		<?php }?>
			</tr>
	<tr>
		<td class="classNo"><strong>No of Working Days</strong></td>
				<?php  for ($row = 0; $row < count($arr['setvalue']) ;  $row++) { ?>
		<td><input maxlength="4" id="workingdays2<?php echo $row; ?>"name="WorkingDays2[<?php echo $row; ?>]" type="text" value ="<?php if(isset($arr['getvaluelastlastmonth'][$row]['no_working_days'])){echo $arr['getvaluelastlastmonth'][$row]['no_working_days'] ;}else{ echo "";}?>" 
		onkeyup="return trimalpha('#workingdays2<?php echo $row; ?>')" /></td>
		<?php }?>
			</tr>
	<tr>
		<td class="classNo"><strong>Number of students</strong></td>
				<?php  for ($row = 0; $row < count($arr['setvalue']) ;  $row++) { ?>
		<td><input  maxlength="4"id="noofstudents2<?php echo $row; ?>" name="NumberOFStudents2[<?php echo $row; ?>]" type="text"  value ="<?php if(isset($arr['getvaluelastlastmonth'][$row]['no_students_attended'])){echo $arr['getvaluelastlastmonth'][$row]['no_students_attended'] ;}else{ echo "";}?>" 
		onkeyup="return trimalpha('#noofstudents2<?php echo $row; ?>')" /></td>
		<?php }?>
			</tr>
	<tr>
		<td class="classNo"><strong>Cumulative Attendance</strong></td>
				<?php  for ($row = 0; $row < count($arr['setvalue']) ;  $row++) { ?>
		<td><input  maxlength="4"id="cumulativeattendance2<?php echo $row; ?>" name="CumulativeAttendance2[<?php echo $row; ?>]" type="text"   value ="<?php if(isset($arr['getvaluelastlastmonth'][$row]['student_cumulative_attendance'])){ echo $arr['getvaluelastlastmonth'][$row]['student_cumulative_attendance'] ;}else{ echo "";}?>"  onkeyup="javascript: trimalpha('#cumulativeattendance2<?php echo $row; ?>')" /></td>
		<?php }?>
			</tr>
			<table class="attendenceTable" >
		<thead>
		
		<tr>
			<th><strong>Teacher attendance</strong></th>
			<th><strong>Current</strong></th>
			<th><strong>Prev 1</strong></th>
			<th class="brdright"><strong>Prev 2</strong></th>
		</tr>
		</thead>

		<tr>
			<td class="classNo"><strong>Months</strong></td>
			<td style="height: 26px"><input  value="<?php echo date("F");?>"  /></td>
			<td style="height: 26px"><input  value="<?php echo date("F",strtotime("-1 Months")); ?>" /></td>
			<td style="height: 26px"><input  value="<?php echo date("F",strtotime("-2 Months"));?>"  /></td>
		</tr>
		<tr>
			<td class="classNo"><strong>No of working Day</strong></td>
			<?php $table='0'; for($row=0; $row < 3; $row++)  { //echo "<pre>";
//print_r($arr['getvalue']);
          
		   if($table=='0'){
			$table='getvalue';
		   }elseif($table=='getvaluelastmonth'){
		  $table='getvaluelastlastmonth';
		   }else{
		    $table='getvaluelastmonth';
		   }
			?>
			
			<td><input maxlength="4" id="workingdays3<?php echo $row; ?>" name="Workingdays3[<?php echo $row; ?>]" type="text"  value="<?php if(isset($arr[$table][$row]['no_working_days_teachers'])){echo $arr[$table][$row]['no_working_days_teachers'] ;}?>" onkeyup="return trimalpha('#workingdays3<?php echo $row; ?>')"  /></td>
			<?php }?>		
			</tr>
		<tr>
			<td class="classNo"><strong>Number of Teachers</strong></td>
			<?php $table='0'; for($row=0; $row < 3; $row++) { 
			 
		   if($table=='0'){
			$table='getvalue';
		   }elseif($table=='getvaluelastmonth'){
		     $table='getvaluelastlastmonth';
		   }else{
		    $table='getvaluelastmonth';
		   }  
			?>
			<td style="height: 26px"><input maxlength="4" id="noofteachers3<?php echo $row; ?>" name="NumberofTeachers3[<?php echo $row; ?>]" type="text"   value="<?php if(isset($arr[$table][$row]['no_teachers_attended'])){ echo $arr[$table][$row]['no_teachers_attended']; } ?>" onkeyup="return trimalpha('#noofteachers3<?php echo $row; ?>')" /></td>
			<?php }?>
		</tr>
		<tr>
			<td class="classNo"><strong>Cumulative Attendance</strong></td>
			<?php $table='0'; for($row=0; $row < 3; $row++) { 
			 if($table=='0'){
			$table='getvalue';
		   }elseif($table=='getvaluelastmonth'){
		     $table='getvaluelastlastmonth';
		   }else{
		    $table='getvaluelastmonth';
		   }  
			?>
			<td><input  maxlength="4" id="cumulativeattendance3<?php echo $row; ?>" name="CumulativeAttendance3[<?php echo $row; ?>]" type="text"  value="<?php if(isset($arr[$table][$row]['teacher_cumulative_attendance'])){echo $arr[$table][$row]['teacher_cumulative_attendance'] ;}?>" onkeyup="return trimalpha('#cumulativeattendance3<?php echo $row; ?>')"  /></td>
			<?php }?>
			</tr>
	</tbody></table>
			
			
			<tr align="center">
		<td colspan=14 align="center"><input id="admissions" class="btnbg addform" style="float:right;" name="Submit1" type="button" value="submit" style="width: 98px" onclick="return attendence_validate();"/></td></td>
	  </tr>
</tbody>
  </table>
  </form>
	</div>
 </article>
	
</section>
</div>
</body>
</html>