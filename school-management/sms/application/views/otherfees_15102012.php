<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
 <?php    $this->load->view('header'); ?>
  <style type="text/css">
  .auto-style1 {
	  text-align: CENTER;
  }
  .auto-style5 {
	  font-size: large;
	  text-transform: uppercase;
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
<?php $this->load->view('dashboard', $school_code, $school_name,$assessment_id);?>
		<div class="message thank-message">
			<div class="auto-style1">
			
			<br/>
				</div>		
			 
			
			<div align="left">
				<div class="auto-style1">
			<label><b><span class="auto-style5">other fees Details</span> <br />
					<br />
					</b></label>
				</div>
<form method = "post" id ="" action = "/admin/addotherfees/?info=<?php echo $info; ?>"    style="width:100%" >
<table>
<tr>
<td><table style="width: 99%">
			<tr>
			
				<td class="auto-style8" style="width: 118px; height: 61px;" ><strong>Current Year</strong></td>
				
			
				
				 <?php for ($row = 0; $row < count($arr['fee_name']) ;  $row++) {  ?>
  
     <td  class="auto-style8" style="width: 118px; height: 61px;"><strong><?php echo $arr['fee_name'][$row]['fee_name'] ; ?></strong>
	
   <input type = "hidden"  name = "other_fees[<?php echo $row; ?>][fee_id]" value = "<?php echo $arr['fee_name'][$row]['fee_id'] ; ?>"/>
	 <input type = "hidden"  name = "other_fees[<?php echo $row; ?>][fee_category]" value = "<?php echo $arr['fee_name'][$row]['fee_category'] ; ?>"/>
	 
	 </td>
	 <td  class="auto-style8" style="width: 118px; height: 61px;"><strong>No of Student buying </strong>	</td>
				
				<td  class="auto-style8" style="width: 118px; height: 61px;"><strong>Total Amount</strong></td>

	
	 <?php } ?>

							
				
				<?php $getval=0;$getval1=0;$data=0;?>	
	  

			 <?php for($row = 0; $row < count($arr['class_name']) ;  $row++) {  ?>
   <tr>

  	<input type = "hidden"  name = "other_fees[<?php echo $row; ?>][class_id]" value = "<?php echo $arr['class_name'][$row]['class_id'] ; ?>" />  
	 <td class="auto-style4" style="width: 118px; height: 26px;"><strong><?php echo $arr['class_name'][$row]['class_name'] ; ?></strong></td>
	
		
	<?php for($row1 = 0; $row1 < count($arr['fee_name']) ;  $row1++) {  ?>
	

	
		
	<td style="width: 76px; height: 26px;"><strong>
	<input type = "text" id="other_fees_values0<?php echo $row; ?><?php echo $row1; ?>" name = "other_fees_values[<?php echo $row; ?>][<?php echo $row1; ?>][fee_amount]" value = "<?php if (isset($arr['getvalue'][$getval]['fee_amount'])) echo $arr['getvalue'][$getval]['fee_amount']; ?>" onblur="return validat_numeric('#other_fees_values0<?php echo $row; ?><?php echo $row1; ?>');"/></strong></td>
	<td style="height: 26px"><strong>
	<input type = "text" id="other_fees_values1<?php echo $row; ?><?php echo $row1; ?>" name = "other_fees_values[<?php echo $row; ?>][<?php echo $row1; ?>][quantity]" value = "<?php if (isset($arr['getvalue'][$getval]['quantity'])) echo $arr['getvalue'][$getval]['quantity']; ?>" onblur="return validat_numeric('#other_fees_values1<?php echo $row; ?><?php echo $row1; ?>');" /></strong></td>
	

	<td style="height: 26px"><strong><input type = "text" disabled="disabled" name = "" value = "<?php if (isset($arr['getvalue'][$getval]['fee_amount'])||isset($arr['getvalue'][$getval]['quantity'])) echo (($arr['getvalue'][$getval]['fee_amount'])*($arr['getvalue'][$getval]['quantity']));?>"/></strong></td>
	
	<?php 
	
	$getval++; ?>

	
	<?php  } ?>
	</tr>
		
	 <?php } ?>
	 
	 <tr></tr>
	  <?php for ($row = 0; $row < count($arr['fee_name']) ;  $row++) {  ?>
  	<?php if ($row == 0){ ?>
		<td></td>
		<?php } ?>

     <td>	 </td>
	 <td class="auto-style9" ><strong>Total Income</strong>	</td>
							<td><input name="Text191" id="otherfees78"  disabled="disabled" type="text" style="width: 128px" value="<?php echo $data; ?>"/>
						</td>
						<?php } ?>
		</tr>
		<tr>
	  <?php for ($row = 0; $row < count($arr['fee_name']) ;  $row++) {  ?>
		<?php if ($row == 0){ ?>
		<td></td>
		<?php } ?>
		     <td>	 </td>
			 <td class="auto-style9"  ><strong>Margin (%)</strong>	</td>
									<td><input name="Text191" id="otherfees78"  type="text" style="width: 128px" value=""/>
						</td>
						<?php } ?>
		</tr>
			<tr>
	  <?php for ($row = 0; $row < count($arr['fee_name']) ;  $row++) {  ?>

			<?php if ($row == 0){ ?>
		<td></td>
		<?php } ?>

		     <td>	 </td>
			 <td class="auto-style9" ><strong>Net Income</strong>	</td>
									<td><input name="Text191" id="otherfees78"  type="text" style="width: 128px" value=""/>
						</td>
	<?php } ?>

		

	 
		
	</tr>
	 	<!--tr>
				<td style="width: 118px; height: 26px;"  ></td>
				<td style="width: 76px; height: 26px;" ></td>
				
				
				<td ><strong>Total Income</strong></td>
				<td style="width: 87px; height: 26px;" >
				&nbsp;</td>
				<td style="width: 61px; height: 26px;"></td>
				<td class="auto-style9" style="width: 105px; height: 26px;"><strong>Total Income</strong></td>
				<td style="width: 84px; height: 26px;"><input name="Text194" id="otherfees79"  onblur="return validat_nulls('#otherfees79')" type="text" style="width: 128px"  /></td>
			</tr>
			<tr>
				<td style="width: 118px"  >&nbsp;</td>
				<td style="width: 76px" >&nbsp;</td>
				<td class="auto-style9" style="width: 121px" ><strong>Margin (%)</strong></td>
				<td style="width: 87px" >
				<input name="Text192" id="otherfees80"  onblur="return validat_nulls('#otherfees80')" type="text" style="width: 128px" /></td>
				<td style="width: 61px">&nbsp;</td>
				<td class="auto-style9" style="width: 105px"><strong>Margin (%)</strong></td>
				<td style="width: 84px"><input name="Text195" id="otherfees81"  onblur="return validat_nulls('#otherfees81')" type="text" style="width: 128px" /></td>
			</tr>
			<tr>
				<td style="width: 118px; height: 26px;"  ></td>
				<td style="width: 76px; height: 26px;" ></td>
				<td class="auto-style9" style="width: 121px; height: 26px;" ><strong>Net Income</strong></td>
				<td style="width: 87px; height: 26px;" >
				<input name="Text193" id="otherfees82"  onblur="return validat_nulls('#otherfees82')" type="text" style="width: 128px" /></td>
				<td style="width: 61px; height: 26px;"></td>
				<td class="auto-style9" style="width: 105px; height: 26px;"><strong>Net Income</strong></td>
				<td style="width: 84px; height: 26px;"><input name="Text196" id="otherfees83"  onblur="return validat_nulls('#otherfees83')" type="text" style="width: 128px" /></td>
			</tr-->
			
			
			
		</table>
</td>

</tr>
<tr>
<td align="center"><p style="width: 703px; height: 65px"><strong>Note: </strong>The profit and loss statement only takes the income from sale of books and  uniform, tie etc. Therefore it is important to know the margin schools makes on such sales. If the school has provided only the profit it makes from such sales. If the lumpsum amount is also not known, an average margin based on data for other schools can be assumed and can be mentioned in the notes in Financial Performance Module</p>
<br/><br/><input id = "otherfees" name="Submit1" type="submit" value="submit" style="width: 111px" onclick="return validate_otherfees_button(<?php echo count($arr['class_name']); ?> ,<?php echo count($arr['fee_name']) ; ?>);"  />
<div><span id="error" style = "display:none;color:red;" > Only Numeric Values are Allowed </span> <span id ="errmark" style = "display:none;color:red;" > All Red mark field is required </span></div></td>
</tr>
</table>				 
				 
				   
			    
			    </form>
			
		

		</div>
		
		
	</div>
	
	<!-- End Content -->
</div>
<!-- End Shell -->
<?php    $this->load->view('footer'); ?>

