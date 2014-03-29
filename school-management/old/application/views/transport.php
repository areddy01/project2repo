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
  }
  }
  .auto-style5 {
	  color: #FFFFFF;
  }
  .auto-style6 {
	  text-align: CENTER;
	  color: #FFFFFF;
	  background-color: #808080;
  }
  .auto-style7 {
	  color: #FFFFFF;
	  background-color: #808080;
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
	<?php    $this->load->view('dashboard', $info ); ?>
		<div class="message thank-message">
			<div class="auto-style1">
			<br/>
				</div>		
			 
			
			<div align="left">
				<div class="auto-style2">
			<label><strong>TRANSPORT DETAILS<br />
					<br />
					</strong></label></div>
			
<form method = "post" id ="" action = "/sms/admin/addtransport/"  value = ""  style="width:70%;margin-left:150px" >
<table>
<tr>
<td><table style="width: 100%" "padding:0 0px 0 50px">
	<tr>
		<td class="auto-style6" style="width: 115px"><strong>CURRENT YEAR</strong></td>
		<td class="auto-style6"><strong>Fees charged for transport per month</strong></td>
		<td class="auto-style6"><strong>No. of students availing transport facility</strong></td>
		<td class="auto-style6"><strong>Total Income</strong></td>
	</tr>
	 <tr>
		<td class="auto-style7" style="width: 115px"><strong>Nursery</strong></td>
		<td>
		<input id ="nurfee" name="transport[nur_transport_fee]" style="width: 156px" type="text" /></td>
		<td><input name="transport[nur_no_of_students]" style="width: 156px" type="text" /></td>
		<td><input name="transport[nur_total_income]" disabled="disabled" style="width: 156px" type="text" /></td>
	</tr>
	<tr>
		<td class="auto-style7" style="width: 115px" ><strong>LKG</strong></td>
		<td>
		<input name="transport[lkg_transport_fee]" style="width: 156px" type="text" /></td>
		<td><input name="transport[lkg_no_of_students]" style="width: 156px" type="text" /></td>
		<td><input name="transport[lkg_total_income]" disabled="disabled"  style="width: 156px" type="text" /></td>
	</tr>
	<tr>
		<td class="auto-style7" style="width: 115px"><strong>UKG</strong></td>
	
		<td><input name="transport[ukg_transport_fee]" style="width: 156px" type="text" /></td>
		<td><input name="transport[ukg_no_of_students]" style="width: 156px" type="text" /></td>
		<td><input name="transport[ukg_total_income]" disabled="disabled" style="width: 156px" type="text" /></td>
	</tr>
	<tr>
		<td class="auto-style7" style="width: 115px" ><strong>Class 1</strong></td>
		
		<td><input name="transport[cls1_transport_fee]" style="width: 156px" type="text" /></td>
		<td><input name="transport[cls1_no_of_students]" style="width: 156px" type="text" /></td>
		<td><input name="transport[cls1_total_income]" disabled="disabled" style="width: 156px" type="text" /></td>
	</tr>
	<tr>
		<td class="auto-style7" style="width: 115px"><strong>Class 2</strong></td>
		<td><input name="transport[cls2_transport_fee]" style="width: 156px" type="text" /></td>
		<td><input name="transport[cls2_no_of_students]" style="width: 156px" type="text" /></td>
		<td><input name="transport[cls2_total_income]" disabled="disabled" style="width: 156px" type="text" /></td>
	</tr>
	<tr>
		<td class="auto-style7" style="width: 115px" ><strong>Class 3</strong></td>
		<td><input name="transport[cls3_transport_fee]" style="width: 156px" type="text" /></td>
		<td><input name="transport[cls3_no_of_students]" style="width: 156px" type="text" /></td>
		<td><input name="transport[cls3_total_income]" disabled="disabled" style="width: 156px" type="text" /></td>
	</tr>
	<tr>
		<td class="auto-style7" style="width: 115px" ><strong>Class 4</strong></td>
		<td><input name="transport[cls4_transport_fee]" style="width: 156px" type="text" /></td>
		<td><input name="transport[cls4_no_of_students]" style="width: 156px" type="text" /></td>
		<td><input name="transport[cls4_total_income]" disabled="disabled"  style="width: 156px" type="text" /></td>
	</tr>
	<tr>
		<td class="auto-style7" style="width: 115px" ><strong>Class 5</strong></td>
		<td><input name="transport[cls5_transport_fee]" style="width: 156px" type="text" /></td>
		<td><input name="transport[cls5_no_of_students]" style="width: 156px" type="text" /></td>
		<td><input name="transport[cls5_total_income]" disabled="disabled" style="width: 156px" type="text" /></td>
	</tr>
	<tr>
		<td class="auto-style7" style="width: 115px"><strong>Class 6</strong></td>
		<td><input name="transport[cls6_transport_fee]" style="width: 156px" type="text" /></td>
		<td><input name="transport[cls6_no_of_students]" style="width: 156px" type="text" /></td>
		<td><input name="transport[cls6_total_income]" disabled="disabled" style="width: 156px" type="text" /></td>
	</tr>
	<tr>
		<td class="auto-style7" style="width: 115px"><strong>Class 7</strong></td>
		<td><input name="transport[cls7_transport_fee]" style="width: 156px" type="text" /></td>
		<td><input name="transport[cls7_no_of_students]" style="width: 156px" type="text" /></td>
		<td><input name="transport[cls7_total_income]" disabled="disabled" style="width: 156px" type="text" /></td>

	</tr>
	<tr>
		<td class="auto-style7" style="width: 115px"><strong>Class 8</strong></td>
		<td><input name="transport[cls8_transport_fee]" style="width: 156px" type="text" /></td>
		<td><input name="transport[cls8_no_of_students]" style="width: 156px" type="text" /></td>
		<td><input name="transport[cls8_total_income]" disabled="disabled" style="width: 156px" type="text" /></td>
	</tr>
	<tr>
		<td class="auto-style7" style="height: 33px; width: 115px;"><strong>Class 9</strong></td>
		<td style="height: 33px"><input name="transport[cls9_transport_fee]" style="width: 150px" type="text" /></td>
		<td style="height: 33px"><input name="transport[cls9_no_of_students]" style="width: 156px" type="text" /></td>
		<td style="height: 33px"><input name="transport[cls9_total_income]" disabled="disabled" style="width: 156px" type="text" /></td>

	</tr>
	<tr>
		<td class="auto-style7" style=" width: 156px;" "height:42px"><strong>Class10</strong></td>
		<td><input name="transport[cls10_transport_fee]" style="width: 156px" type="text" /></td>
		<td><input name="transport[cls10_no_of_students]" style="width: 156px" type="text" /></td>
		<td><input name="transport[cls10_total_income]" disabled="disabled" style="width: 156px" type="text" /></td>
	</tr> 
	?php $tot_no_of_students=0;$tot_fee_overdue=0; for ($row = 0; $row < count($arr) ;  $row++) {  ?>
        
	<!-- <tr>
		<td class="auto-style6" style="width: 146px; height: 26px;" ><?php echo $arr[$row]['class_name'] ; ?></td>
		</tr> -->
	
	<tr>
		<td style="width: 115px; height: 26px;"></td>
		<td style="height: 26px"></td>
		<td class="auto-style6" style="height: 26px"><strong>Total <span class="auto-style5">Income</span> from Transport</strong></td>
		<td style="height: 26px"><input name="transport[total_income]" style="width: 156px" type="text" /></td>
	</tr>
	
</table>
</td>

</tr>
<tr>
<td align="right">
<input id = "send" name="Submit1" type="submit" value="submit" style="width: 116px" />
<div><span id="error" style = "display:none;color:red;" > Only Numeric Values are Allowed </span> <span id ="errmark" style = "display:none;color:red;" > All Red mark field is required </span></div>
</td>
</tr>
</table>				 
				 
				   
			    
			    </form>


		</div>
		
		
	</div>
	
	<!-- End Content -->
</div>
<!-- End Shell -->
<?php    $this->load->view('footer'); ?>

