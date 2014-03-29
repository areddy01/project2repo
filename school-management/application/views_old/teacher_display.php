<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
 <?php    $this->load->view('header'); ?>
  <style type="text/css">
  .auto-style1 {
	  text-align: CENTER;
  }
  .auto-style2 {
	  color: #FFFFFF;
	  background-color: #808080;
  }
  .auto-style3 {
	  text-align: CENTER;
	  color: #FFFFFF;
	  background-color: #808080;
  }
  .auto-style4 {
	  text-align: right;
  }
  .auto-style5 {
	  text-align: left;
  }
  .auto-style6 {
	  font-size: large;
	  text-transform: uppercase;
  }
  .auto-style7 {
	  margin-left: 0px;
  }
  .auto-style8 {
	  color: #0007FF;
  }
  </style>
  </head>
<div id="shell">
	
	<!-- Header -->
	<div id="header">
		<h1><a href="#">School Management System</a></h1>
		<div class="right">
			<p>Welcome <a href="#"><strong>Administrator</strong></a></p>
			<p class="small-nav"><a href="">Help</a> / <a href="">Profile Settings</a> / <a href="/home/logout">Log Out</a></p>
		</div>
	</div>
	<!-- End Header -->
	
	<!-- Navigation -->
	 <?php    $this->load->view('menu'); ?>
	<!-- End Navigation -->
	
	<!-- Content -->
	<div id="content">
	<?php    $this->load->view('dashboard',$info); ?>
		<div class="message thank-message">
			<div class="auto-style1">
			
				</div>		
			 
			
			<div align="left">
				<div class="auto-style1">
			<label><b><span class="auto-style6">Teacher Details</span> <br />
					<br />
					</b></label>
				</div>
				
				

<table style="width: 20px; height: 193px;">
<tr>
<td ><table style="width: 21%; height: 92px;">
	<tr>
		<td class="auto-style2" style="width: 319px"><strong></strong></td>
		<td class="auto-style3" style="width: 88px"><strong>Current Year</strong></td>
		<td style="width: 102px" class="auto-style3"><strong>Previous Year</strong></td>
	</tr>
	<tr>
		<td class="auto-style2" style="width: 319px"><strong>New Teachers</strong></td>
		<td class="auto-style5" style="width: 88px"><input id="teacher0" name="Text244" style="width: 101px" type="text" /></td>
		<td style="width: 102px" class="auto-style4"><input id="teacher1" name="Text245" style="width: 101px" type="text" /></td>

	</tr>
	<tr>
		<td class="auto-style2" style="width: 319px"><strong>Current Joinees</strong></td>
		<td class="auto-style5" style="width: 88px"><input id="teacher2" name="Text246" style="width: 101px" type="text" /></td>
		<td style="width: 102px" class="auto-style4"><input id="teacher3" name="Text247" style="width: 101px" type="text" /></td>

	</tr>
	</table>
<div id = "addnew" ><span class="auto-style8"><u>Add new teachers Record</u></span> &nbsp;<a href = "/admin/edit_teacher/display/?info=<?php echo $info ; ?>">Edit teachers Record</a></div>


<div id = "addnewteach" style = "display:none;"> 
	<form method="post" action = "/admin/teacher/?info=<?php echo $info ; ?>">
	<table>
	<tr><td >No of&nbsp; Teachers </td><td colspan="2"><select name="not">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>

</select>
	<input name="Submit2" type="submit" value="submit" /></td></tr>
	
</table>
</form>
</div>
<table style="width: 100%">
	
	<tr><td class="auto-style2" style="height: 41px; width: 62px" ><strong>Name</strong></td>
	<td class="auto-style2" style="height: 41px; width: 97px" ><strong>Designation</strong></td>
	<td class="auto-style2" style="width: 94px; height: 41px" ><strong>Full time /<br/>
	Part time</strong></td>
	<td class="auto-style2" style="width: 55px; height: 41px" ><strong>Gender</strong></td>
	<td class="auto-style2" style="width: 71px; height: 41px" ><strong>Age</strong></td>
	<td class="auto-style2" style="width: 79px; height: 41px" ><strong>Qualifications</strong></td>
	<td class="auto-style2" style="width: 174px; height: 41px" ><strong>Teacher Training(B.Ed,M.Ed,TTC)</strong></td>
	<td class="auto-style2" style="width: 97px; height: 41px" ><strong>Years of Teaching Exp.</strong></td>
	<td class="auto-style2" style="width: 108px; height: 41px" ><strong>Years in Cuurent School</strong></td>
	<td class="auto-style2" style="width: 100px; height: 41px" ><strong>Class Sections Taught(PP,P,S)</strong></td>
	<td class="auto-style2" style="height: 41px; width: 76px" ><strong>Subject(s) taught</strong></td>
	<td class="auto-style2" style="height: 41px; width: 92px" ><strong>Subject 
	<br />
	Specific(Y/N)</strong></td>
	<td class="auto-style2" style="height: 41px; width: 90px" ><strong>Monthly 
	<br />
	Salary(Rs.)</strong></td>
	
	<td class="auto-style2" style="height: 41px; width: 97px" ><strong>Action</strong></td>
	</tr>
	<?php if (isset($arr)) {
for($row=0;$row<count($arr);$row++){ 
?>
<form name = "" method ="POST" action ="/admin/edit_teacher/edit/?info=<?php echo $info ; ?>?>">
<tr>
<td style="height: 34px">
<input type = "text" value ="<?php echo $arr[$row]['teacher_name']; ?>" name = "teacher[teacher_name]">
</td>
<td style="height: 34px">
<input type = "text" value= "<?php echo $arr[$row]['designation'] ; ?>" name = "teacher[designation]">
</td>

<td style="height: 34px">
<select  name="teacher[fulltime_parttime]" style="width: 85px">
			<option value = "Select" <?php if($arr[$row]['fulltime_parttime'] == "Select") echo "selected"; ?> >Select</option>
			<option value = "Full time" <?php if($arr[$row]['fulltime_parttime'] == "Full time") echo "selected"; ?>>Full time</option>
			<option value = "Part time"<?php if($arr[$row]['fulltime_parttime'] == "Part time") echo "selected"; ?> >Part time</option>
			</select>
</td>
<td style="height: 34px">
<select name = "teacher[gender] style="width: 84px" class="auto-style7">
			<option value = "Select" <?php if($arr[$row]['gender'] == "Select") echo "selected"; ?> >Select</option>
			<option value = "Select" <?php if($arr[$row]['gender'] == "Male") echo "selected"; ?> >Male</option>
			<option value = "Select" <?php if($arr[$row]['gender'] == "Female") echo "selected"; ?> >Female</option>
			</select> 
</td>
<td style="height: 34px">
<input type = "text" value= "<?php echo $arr[$row]['age'] ; ?>" name = "teacher[age]">

</td>
<td style="height: 34px">
<select name = "teacher[qualification]" style="width: 89px">
			<option value = "Select" <?php if($arr[$row]['qualification'] == "Select") echo "selected"; ?> >Select</option>
			<option value = "Graduate" <?php if($arr[$row]['qualification'] == "Graduate") echo "selected"; ?> >Graduate</option>
			<option value = "HSC" <?php if($arr[$row]['qualification'] == "HSC") echo "selected"; ?> >HSC</option>
			<option value = "SSC" <?php if($arr[$row]['qualification'] == "SSC") echo "selected"; ?> >SSC</option>
			<option value = "PG" <?php if($arr[$row]['qualification'] == "PG") echo "selected"; ?> >PG</option>
			</select>
</td>
<td style="height: 34px">
<select name = "teacher[teacher_training]" style="width: 125px">
			<option value = "Select" <?php if($arr[$row]['teacher_training'] == "Select") echo "selected"; ?> >Select</option>
			<option value = "B.Ed" <?php if($arr[$row]['teacher_training'] == "B.Ed") echo "selected"; ?> >B.Ed</option>
			<option value = "M.Ed" <?php if($arr[$row]['teacher_training'] == "M.Ed") echo "selected"; ?> >M.Ed</option>
			<option value = "TTC" <?php if($arr[$row]['teacher_training'] == "TTC") echo "selected"; ?> >TTC</option>
			</select>
</td>
<td style="height: 34px">
<input id="teacher<?php echo $row; ?>" type = "text" value= "<?php echo $arr[$row]['teaching_exp_years']; ?>" name = "teacher[teaching_exp_year]" onblur="return validat_numeric('#teacher<?php echo $row; ?>');" >

</td>
<td style="height: 34px">
<input type = "text" value= "<?php echo $arr[$row]['years_in_current_school'] ; ?>" name = "teacher[years_in_current_school]">

</td>
<td style="height: 34px; width: 100px;">
<select name = "teacher[class_segment_taught] style="width: 102px">
			<option value = "Select" <?php if($arr[$row]['class_segment_taught'] == "Select") echo "selected"; ?> >Select</option>
			<option value = "PP" <?php if($arr[$row]['class_segment_taught'] == "PP") echo "selected"; ?> >PP</option>
			<option value = "PP" <?php if($arr[$row]['class_segment_taught'] == "P") echo "selected"; ?> >P</option>
			<option value = "S" <?php if($arr[$row]['class_segment_taught'] == "S") echo "selected"; ?> >S</option>
			</select>

</td>
<td style="height: 34px">
<input type = "text" value= "<?php echo $arr[$row]['subject_taught']; ?>" name = "teacher[subject_taught]">

</td>
<td style="height: 34px">
<select name = "teacher[specific_subject]" style="width: 102px">
<option value = "Select" <?php if($arr[$row]['specific_subject'] == "Select") echo "selected"; ?> >Select</option>
			<option value = "YES" <?php if($arr[$row]['specific_subject'] == "YES") echo "selected"; ?> >YES</option>
			<option value = "NO" <?php if($arr[$row]['specific_subject'] == "NO") echo "selected"; ?> >NO</option>
			</select>
</td>
<td style="height: 34px">
<input type = "text" value= "<?php echo $arr[$row]['monthly_salary'];  ?>" name = "teacher[monthly_salary]">

</td>
<td style="height: 34px">
<input type = "hidden" value= "<?php echo $arr[$row]['teacher_id'] ; ?>" name = "teacher[teacher_id]">
</td>
<td style="height: 34px">
<input type = "submit" value ="Save" />
</td>
</tr>
</form>
<?php }
}?>
	</table>
</td>

</tr>

<td  style="width: 118%" align="center">

<!--input id = "teacher" name="Submit1" type="submit" value="submit" style="width: 92px" /-->

<div><span id="error" style = "display:none;color:red;" > Only Numeric Values are Allowed </span> <span id ="errmark" style = "display:none;color:red;" > All Red mark field is required </span></div>
</td>
</tr>
</table>				 
		
		<?php echo $this->pagination->create_links(); ?>			 
				   		

		</div>
		
		
	</div>
	
	<!-- End Content -->
</div>
<!-- End Shell -->
<?php    $this->load->view('header'); ?>

