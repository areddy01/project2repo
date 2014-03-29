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
	  font-size: large;
	  font-weight: bold;
  }
  .auto-style3 {
	  color: #FFFFFF;
	  background-color: #808080;
  }
  .auto-style4 {
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
				<div class="auto-style2">
			<label>TEACHER TEST DETAILS<br />
					<br />
					</label></div>
<form method = "post" id ="" action = "/sms/admin/addttsheet/"  value = ""  style="width:58%; margin-left:250px">
<table>

<tr>
<td style="width: 678px"><table style="width: 77%" >
	<tr>
		<td class="auto-style3" ><strong>No. of teachers tested</strong></td>
		<td  class="auto-style8" colspan="2"><input name="ttsheet[avg_maths]12"  type="text" style="width: 90px" class="infobox" /></td>
	</tr>
	<tr>
		<td style="width: 514px" class="auto-style3">&nbsp;</td>
		<td style="width: 126px" class="auto-style5">
		<select name="Select1" class="auto-style5" style="width: 94px">
				<option>Select</option>
				<option>English</option>
				<option>Maths</option>
			</select></td>
		<td class="auto-style11" style="width: 94px"><select name="Select21" style="width: 94px">
				<option>Select</option>
				<option>English</option>
				<option>Maths</option>
			</select></td>
	</tr>
	<tr>
		<td style="width: 514px" class="auto-style3"><strong>Average Test Scores</strong></td>
		<td class="auto-style9" style="width: 126px">
		
			<input name="ttsheet[avg_maths]" type="text" style="width: 90px" class="auto-style4" /></td>
		<td class="auto-style12" style=" width: 94px;">
		
			<input name="ttsheet[avg_english]" type="text" style="width: 90px" /></td>
	</tr>
	
	<tr>
		<td style="width: 514px" class="auto-style3"><strong>Primary Teachers</strong></td>
		<td style=" width: 126px">
			<input name="ttsheet[avg_maths]2" type="text" style="width: 90px" /></td>
		<td style="width: 94px">
			<input name="ttsheet[avg_maths]3" type="text" style="width: 90px" /></td>
			
			</tr>
	<tr>
		<td style="width: 514px" class="auto-style3"><strong>Secondary Teachers</strong></td>
		<td style="width: 126px">
			<input name="ttsheet[avg_maths]4" type="text" style="width: 90px" /></td>
		<td style="width: 94px">
			<input name="ttsheet[avg_maths]5" type="text" style="width: 90px" /></td>	</tr>
	
	<tr>
		<td style="width: 514px" class="auto-style3"><strong>12th or Less &amp; Diploma</strong></td>
		<td style="width: 126px">
			<input name="ttsheet[avg_maths]6" type="text" style="width: 90px" /></td>
		<td style="width: 94px">
			<input name="ttsheet[avg_maths]7" type="text" style="width: 90px" /></td>
		
	</tr>
	<tr>
		<td style="width: 514px" class="auto-style3"><strong>Graduate</strong></td>
				<td style="width: 126px">
			<input name="ttsheet[avg_maths]8" type="text" style="width: 90px" /></td>
		<td style="width: 94px">
			<input name="ttsheet[avg_maths]9" type="text" style="width: 90px" /></td>	</tr>
	<tr>
		<td style="width: 514px" class="auto-style3"><strong>Post Graduate</strong></td>
				<td style="width: 126px">
			<input name="ttsheet[avg_maths]10" type="text" style="width: 90px" /></td>
		<td style="width: 94px">
			<input name="ttsheet[avg_maths]11" type="text" style="width: 90px" /></td>	</tr>
			
			</table>
</td>

</tr>
<tr>
<td align="center" style="height: 29px; width: 200px;">
<input name="Submit1" type="submit" value="submit" style="width: 113px" /></td>
</tr>
</table>				 
				 
				   
			    
			    </form>
		

		</div>
		
		
	</div>
	
	<!-- End Content -->
</div>
<!-- End Shell -->
<?php    $this->load->view('footer'); ?>

