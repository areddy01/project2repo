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
 
  .auto-style8 {
	  text-align: CENTER;
	  color: #FFFFFF;
	  background-color: #808080;
  }
  .auto-style9 {
	  color: #FFFFFF;
	  background-color: #808080;
  }
  </style>
  </head>
<div id="shell">
	
	<!-- Header -->
	<div id="header">
		<h1><a href="">School Management System</a></h1>
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
<?php $this->load->view('dashboard',$info);?>
		<div class="message thank-message">
			<div class="auto-style1">
			
			<br/>
				</div>		
			 
			
			<div align="left">
				<div class="auto-style2">
			<label><strong>Transport Fees<br />
					<br />
					</strong></label></div>
			
<form method = "post" id ="" action = "/admin/addtransportfees/?info=<?php echo $info; ?>"    style="width:100%" >
<table>
<tr><td></td></tr>

<tr>
<td><table style="width: 71%">
			<tr>
			<td colspan="5"><strong>Current Academic Year :&nbsp;<?php echo date("Y"); ?></strong></td>
			</tr>
			<tr>
			
				<td ></td>
				
				 <?php for ($row = 0; $row < count($arr['fee_name']) ;  $row++) {  ?>
  
     <td  class="auto-style8" style="width: 161px; height: 61px;"><strong><?php echo $arr['fee_name'][$row]['fee_name'] ; ?></strong>
	
   		<input type = "hidden"  name = "transport_fees[<?php echo $row; ?>][fee_id]" value = "<?php echo $arr['fee_name'][$row]['fee_id'] ; ?>"/>
	 <input type = "hidden"  name = "transport_fees[<?php echo $row; ?>][fee_category]" value = "<?php echo $arr['fee_name'][$row]['fee_category'] ; ?>"/>
	 
	 </td>
	 <td  class="auto-style8" style="width: 162px; height: 61px;"><strong>No. of students availing transport facility </strong>
	 </td>
				
				<td  class="auto-style8" style="width: 128px; height: 61px;"><strong>Total Amount</strong></td>

	
	 <?php } ?>

							
				
				
	  <?php $getval=0; $data=0;?>

			 <?php for($row = 0; $row < count($arr['class_name']) ;  $row++) {  ?>
   <tr>
  	<input type = "hidden"  name = "transport_fees[<?php echo $row; ?>][class_id]" value = "<?php echo $arr['class_name'][$row]['class_id'] ; ?>" />  
	 <td style="width: 200px;"><strong><?php echo $arr['class_name'][$row]['class_name'] ; ?></strong></td>
		
		
	<?php for($row1 = 0; $row1 < count($arr['fee_name']) ;  $row1++) {  ?>
	
	<td style="width: 161px; height: 26px;"><strong>
	<input type = "text" id="transport_fee_value0<?php echo $row; ?>" name = "transport_fees_values[<?php echo $row; ?>][<?php echo $row1; ?>][fee_amount]" value = "<?php if (isset($arr['getvalue'][$getval]['fee_amount'])) echo $arr['getvalue'][$getval]['fee_amount']; ?>" style="width: 158px" onblur="return add_sum('#transport_fee_value0<?php echo $row; ?>','#transport_fee_value1<?php echo $row; ?>','#tot_amount<?php echo $row; ?>');"  /></strong></td>
	<td style="height: 26px; width: 162px;"><strong>
	<input type = "text" id="transport_fee_value1<?php echo $row; ?>"name = "transport_fees_values[<?php echo $row; ?>][<?php echo $row1; ?>][quantity]" value = "<?php if (isset($arr['getvalue'][$getval]['quantity'])) echo $arr['getvalue'][$getval]['quantity']; ?>" style="width: 158px" onblur="return add_sum('#transport_fee_value0<?php echo $row; ?>','#transport_fee_value1<?php echo $row; ?>','#tot_amount<?php echo $row; ?>');" /></strong></td>
	<td style="height: 26px; width: 158px;"><strong>
	
 <input id="tot_amount<?php echo $row; ?>" type = "text"  name = "tot_amt[<?php echo $getval; ?>]" readonly="readonly" value = "<?php if (isset($arr['getvalue'][$getval]['fee_amount'])||isset($arr['getvalue'][$getval]['quantity'])) echo (($arr['getvalue'][$getval]['fee_amount'])*($arr['getvalue'][$getval]['quantity'])*12); ?>" style="width: 158px"/></strong></td>"
	
	<?php  if ((isset($arr['getvalue'][$getval]['fee_amount'])) or (isset($arr['getvalue'][$getval]['quantity']))) {$data=$data + (($arr['getvalue'][$getval]['fee_amount'])*($arr['getvalue'][$getval]['quantity'])*12); $getval++; }?>
	
	<?php  } ?>
	</tr>
	
	 <?php } ?>
	 
			<tr>
				<td style="width: 118px; height: 26px;"  ></td>
				<td style="width: 161px; height: 26px;" ></td>
				
				
				<td class="auto-style9" style="width: 162px; height: 26px;" ><strong>Total Income</strong></td>
				<td style="width: 128px; height: 26px;" ><input id="tot_income<?php echo $row; ?>" type = "text"  name = "tot_income" readonly="readonly" value = "<?php if (isset($arr['getvalue'][$getval]['fee_amount'])||isset($arr['getvalue'][$getval]['quantity'])) echo (($arr['getvalue'][$getval]['fee_amount'])*($arr['getvalue'][$getval]['quantity'])*12); ?>" style="width: 158px"/></td>
				
			</tr>
	</table>
</td>

</tr>
<tr>
<td ><p style="width: 497px; height: 65px"><strong>Note: </strong>
Leave blank if the school doesnt have transport facility. <br/>
In case school provides transport, but it doesnt have breakup of students using transport facility by classes.</p></td></tr>
<tr><td align="right"><input id = "transportfees" name="Submit1" type="submit" value="submit" style="width: 111px"  onclick = "return validate_transport_button(<?php echo count($arr['class_name']);?>);" /></td></tr>
<tr><td align="right"><?php if(isset($message)) echo "$message"; ?></td></tr>
<div><span id="error" style = "display:none;color:red;" > Only Numeric Values are Allowed </span> <span id ="errmark" style = "display:none;color:red;" > All Red mark field is required </span></div>

</table>				 
				 
				   
			    
			    </form>
			
		

		</div>
		
		
	</div>
	
	<!-- End Content -->
</div>
<!-- End Shell -->
<?php    $this->load->view('footer'); ?>

