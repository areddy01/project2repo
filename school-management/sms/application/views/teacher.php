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
  </style>
  </head>
<div id="shell">
	
	<!-- Header -->
	<div id="header">
		<h1><a href="#">School Managment System</a></h1>
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
<td ><table style="width: 30%">
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
<div id = "addnew" style="color: #0000FF; width: 437px;" ><u>Add new teachers Record</u>&nbsp;&nbsp;&nbsp;<a href = "/admin/edit_teacher/display/?info=<?php echo $info ; ?>">Edit teachers Record</a></div>

<div id = "addnewteach" style = "display:none;"> 
	<form method="post" >
	<table>
<tr><td >No of&nbsp; Teachers </td><td colspan="2">
<select name="not">
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
<!--	<input type="text" name="not" style="width: 126px" /> -->
	<input name="Submit2" type="submit" value="submit" /></td></tr>
	
</table>
</form>
</div>
<form method = "post" id ="" action = "/admin/addteacher/?info=<?php echo $info ; ?>"  value = ""  style="width:24%" >


<table style="width: 100%">
	<?php if (isset($_REQUEST['not'])) {?>
	<tr><td class="auto-style2" style="height: 41px; width: 62px" ><strong>Name</strong></td>
	<td class="auto-style2" style="width: 94px; height: 41px" ><strong>Full time /<br/>
	Part time</strong></td>
	<td class="auto-style2" style="width: 55px; height: 41px" ><strong>Gender</strong></td>
	<td class="auto-style2" style="width: 71px; height: 41px" ><strong>Age</strong></td>
	<td class="auto-style2" style="width: 79px; height: 41px" ><strong>Qualifications</strong></td>
	<td class="auto-style2" style="width: 174px; height: 41px" ><strong>Teacher Training(B.Ed,M.Ed,TTC)</strong></td>
	<td class="auto-style2" style="width: 97px; height: 41px" ><strong>Years of Teaching Exp.</strong></td>
	<td class="auto-style2" style="width: 108px; height: 41px" ><strong>Years in Cuurent School</strong></td>
	<td class="auto-style2" style="width: 102px; height: 41px" ><strong>Class Sections Taught(PP,P,S)</strong></td>
	<td class="auto-style2" style="height: 41px; width: 76px" ><strong>Subject(s) taught</strong></td>
	<td class="auto-style2" style="height: 41px; width: 92px" ><strong>Subject 
	<br />
	Specific(Y/N)</strong></td>
	<td class="auto-style2" style="height: 41px; width: 90px" ><strong>Monthly 
	<br />
	Salary(Rs.)</strong></td>
	<td class="auto-style2" style="height: 41px; width: 97px" ><strong>Designation</strong></td>
	
	
	</tr>
	<?php for($row=0;$row<$_REQUEST['not'];$row++) { ?>
	<tr>
				<td style="width: 62px" >
			
		<input name="teacher[<?php echo $row; ?>][0]" value=""type="text" style="width: 82px" /></td>
		
		<td style="width: 94px; height: 26px;" >
		
			<select id="teacher<?php echo $row; ?>[1]" name="teacher[<?php echo $row; ?>][1]" style="width: 85px">
			<option>Select</option>
			<option>Full time</option>
			<option>Part time</option>
			</select></td>
		
		
		<td style="width: 55px">
		
			<select id="teacher2" name="teacher[<?php echo $row; ?>][2]" style="width: 84px" class="auto-style7">
			<option>Select</option>
			<option>Male</option>
			<option>Female</option>
			</select></td>
		
		<td style="width: 71px" >
		<input id="teacher3" name="teacher[<?php echo $row; ?>][3]" type="text" style="width: 69px" /></td>
		
		<td style="width: 79px; height: 30px;" >
		
			<select id="teacher4" name="teacher[<?php echo $row; ?>][4]" style="width: 89px">
			<option>Select</option>
			<option>Graduate</option>
			<option>HSC</option>
			<option>SSC</option>
			<option>PG</option>
			</select>
		</td>
		
		<td style="width: 174px" >
		
			<select id="teacher5" name="teacher[<?php echo $row; ?>][5]" style="width: 125px">
			<option>Select</option>
			<option>B.Ed</option>
			<option>M.Ed</option>
			<option>TTC</option>
			</select></td>
		
		<td style="width: 97px">
		<input id="teacher6" name="teacher[<?php echo $row; ?>][6]" type="text" style="width: 99px" onblur="return validat_numeric('#teacher6');" /></td>
		
		<td style="width: 108px" >
		<input id="teacher7" name="teacher[<?php echo $row; ?>][7]" type="text" style="width: 106px" /></td>
		
		<td style="width: 102px" >
		
			<select id="teacher8" name="teacher[<?php echo $row; ?>][8]" style="width: 102px">
			<option>Select</option>
			<option>PP</option>
			<option>P</option>
			<option>S</option>
			</select></td>
		
				<td style="width: 76px" >
				<input id="teacher9" name="teacher[<?php echo $row; ?>][9]" type="text" style="width: 96px" /></td>
		
		<td style="width: 92px" >
		
			<select id="teacher10" name="teacher[<?php echo $row; ?>][10]" style="width: 91px">
			<option>Select</option>
			<option>YES</option>
			<option>NO</option>
			</select></td>
		
		<td style="width: 90px; height: 27px" >
		<input id="teacher11" name="teacher[<?php echo $row; ?>][11]" type="text" style="width: 92px" /></td>
		
		<td style="width: 97px">
		<input id="teacher12" name="teacher[<?php echo $row; ?>][12]" type="text" style="width: 88px" /></td>
	</tr>
	
<td  style="width: 118%" align="center">


<div><span id="error" style = "display:none;color:red;" > Only Numeric Values are Allowed </span> <span id ="errmark" style = "display:none;color:red;" > All Red mark field is required </span></div>
</td>
	<?php }} ?>
	<tr><td>
	<input id = "teacher" name="Submit1" type="submit" value="submit" style="width: 92px" />
	</td></tr>
	</table>
</td>

</tr>

</tr>
</table>				 
		
		<?php echo $this->pagination->create_links(); ?>			 
				   
			    
			    </form>
			
			

		</div>
		
		
	</div>
	
	<!-- End Content -->
</div>
<!-- End Shell -->
<?php    $this->load->view('header'); ?>

