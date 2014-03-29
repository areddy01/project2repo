<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
 <?php    $this->load->view('header'); ?>
  <style type="text/css">
  .auto-style1 {
	  text-align: CENTER;
	
  }
  
  .auto-style2 {
	  background-color: #008000;
  }
  .auto-style3 {
	  color: #FFFFFF;
  }
  .auto-style4 {
	  color: #FFFFFF;
	  text-align: center;
	  background-color: #008000;
  }
  .auto-style6 {
	  color: #FFFFFF;
	  background-color: #808080;
  }
  .auto-style7 {
	  text-align: CENTER;
	  color: #FFFFFF;
	  background-color: #808080;
  }
  .auto-style8 {
	  color: #000000;
	  text-align: center;
	  background-color: #00FFFF;
  }
  .auto-style9 {
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
	<?php    $this->load->view('dashboard', $info ); ?>
	<!-- End Navigation -->
	
	<!-- Content -->
	<div id="content">
		<div class="message thank-message">
			<div class="auto-style1">
			
			<br/>
				</div>		
			 
			
			<div align="left">
				<div class="auto-style1">
			<label><span class="auto-style9">Overdue Details <br />
					<br />
					</span></label>
				</div>
<form method = "post" id ="" action = "/sms/admin/addoverdue/"  value = ""  style="width:55%;margin-left:250px">
<table >
<tr>
<td style="width: 427px" ><table >
	<tr>
		<td colspan="3" class="auto-style7" ><strong>Previous year</strong></td>
		<td rowspan="2">&nbsp;</td>
	</tr>
	<tr>
		<td class="auto-style7" style="width: 78px" ><strong>Classes</strong></td>
		<td class="auto-style7" style="width: 126px"><strong>No. of&nbsp; 
		Students</strong> </td>
		<td class="auto-style7" style="width: 101px"><strong>Fees Overdue</strong></td>
	</tr>
	<tr>
		<td class="auto-style6" style="width: 78px" >Nursery</td>
		<td style="width: 126px" class="auto-style1">
					<input id="overdue0" name="overdue[]" type="text" style="width: 72px" />
					
					</td>
		<td style="width: 101px" class="auto-style1">
					<input name="overdue[]" type="text" style="width: 72px" /></td>
		<td rowspan="3" class="auto-style4"><span class="auto-style3">PRE-</span><span class="auto-style2">PRIMARY</span></td>
	</tr>
	<tr>
		<td class="auto-style6" style="width: 78px">LKG</td>
		<td style="width: 126px" class="auto-style1">
					<input name="overdue[]" type="text" style="width: 72px" /></td>
		<td style="width: 101px" class="auto-style1">
					<input name="overdue[]" type="text" style="width: 72px" /></td>
	</tr>
	<tr>
		<td class="auto-style6" style="width: 78px">UKG</td>
		<td style="width: 126px" class="auto-style1">
					<input name="overdue[]" type="text" style="width: 72px" /></td>
		<td style="width: 101px" class="auto-style1">
					<input name="overdue[]" type="text" style="width: 72px" /></td>
	</tr>
	<tr>
		<td class="auto-style6" style="width: 78px" >Class 1</td>
		<td style="width: 126px" class="auto-style1">
					<input name="overdue[]" type="text" style="width: 72px" /></td>
		<td style="width: 101px" class="auto-style1">
					<input name="overdue[]" type="text" style="width: 72px" /></td>
		<td rowspan="5" class="auto-style8">PRIMARY</td>
	</tr>
	<tr>
		<td class="auto-style6" style="width: 78px" >Class 2</td>
		<td style="width: 126px" class="auto-style1">
					<input name="overdue[]" type="text" style="width: 72px" /></td>
		<td style="width: 101px" class="auto-style1">
					<input name="overdue[]" type="text" style="width: 72px" /></td>
	</tr>
	<tr>
		<td class="auto-style6" style="width: 78px" >Class 3</td>
		<td style="width: 126px" class="auto-style1">
					<input name="overdue[]" type="text" style="width: 72px" /></td>
		<td style="width: 101px" class="auto-style1">
					<input name="overdue[]" type="text" style="width: 72px" /></td>
	</tr>
	<tr>
		<td class="auto-style6" style="width: 78px" >Class 4</td>
		<td style="width: 126px" class="auto-style1">
					<input name="overdue[]" type="text" style="width: 72px" /></td>
		<td style="width: 101px" class="auto-style1">
					<input name="overdue[]" type="text" style="width: 72px" /></td>
	</tr>
	<tr>
		<td class="auto-style6" style="width: 78px" >Class 5</td>
		<td style="width: 126px" class="auto-style1">
					<input name="overdue[]" type="text" style="width: 72px" /></td>
		<td style="width: 101px" class="auto-style1">
					<input name="overdue[]" type="text" style="width: 72px" /></td>
	</tr>
	<tr>
		<td class="auto-style6" style="width: 78px" >Class 6</td>
		<td style="width: 126px" class="auto-style1">
					<input name="overdue[]" type="text" style="width: 72px" /></td>
		<td style="width: 101px" class="auto-style1">
					<input name="overdue[]" type="text" style="width: 72px" /></td>
		<td rowspan="5" class="auto-style4">SECONDARY</td>
	</tr>
	<tr>
		<td class="auto-style6" style="width: 78px" >Class 7</td>
		<td style="width: 126px" class="auto-style1">
					<input name="overdue[]" type="text" style="width: 72px" /></td>
		<td style="width: 101px" class="auto-style1">
					<input name="overdue[]" type="text" style="width: 72px" /></td>
	</tr>
	<tr>
		<td class="auto-style6" style="width: 78px" >Class 8</td>
		<td style="width: 126px" class="auto-style1">
					<input name="overdue[]" type="text" style="width: 72px" /></td>
		<td style="width: 101px" class="auto-style1">
					<input name="overdue[]" type="text" style="width: 72px" /></td>
	</tr>
	<tr>
		<td class="auto-style6" style="width: 78px" >Class 9</td>
		<td style="width: 126px" class="auto-style1">
					<input name="overdue[]" type="text" style="width: 72px" /></td>
		<td style="width: 101px" class="auto-style1">
					<input name="overdue[]" type="text" style="width: 72px" /></td>
	</tr>
	<tr>
		<td class="auto-style6" style="width: 78px" >Class 10</td>
		<td style="width: 126px" class="auto-style1">
					<input name="overdue[]" type="text" style="width: 72px" /></td>
		<td style="width: 101px" class="auto-style1">
					<input name="overdue[]" type="text" style="width: 72px" /></td>
	</tr>
	<tr>
		<td class="auto-style6" style="width: 78px" ><strong>Total</strong></td>
		<td style="width: 126px" class="auto-style1">
					<input name="overdue[]" type="text" style="width: 72px" /></td>
		<td style="width: 101px" class="auto-style1">
					<input name="overdue[]" type="text" style="width: 72px" /></td>
		<td class="auto-style1">&nbsp;</td>
	</tr>
</table>
</td>

</tr>
<tr>
<td align="center" style="width: 427px">
<input name="Submit1" type="submit" value="submit" style="width: 98px" /></td>
</tr>
</table>				 
				 
				   
			    
			    </form>
			
		
		</div>
		
		
	</div>
	
	<!-- End Content -->
</div>
<!-- End Shell -->
<?php    $this->load->view('header'); ?>

