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
			<label><strong>Other Fees<br />
					<br />
					</strong></label></div>
			
<form method = "post" id ="" action = "/admin/addotherfees/?info=<?php echo $info; ?>"    style="width:100%" >
<table>
<tr>
<td><table style="width: 100%">
			<tr>
			
				<td class="auto-style8" style="width: 118px; height: 61px;" ><strong>Current Year</strong></td>
				 <?php for ($row = 0; $row < count($arr) ;  $row++) {  ?>
    <?php if (isset($arr[$row]['fee_name'])){?>
     <td  class="auto-style8" style="width: 118px; height: 61px;"><strong><?php echo $arr[$row]['fee_name'] ; ?></strong>
     <input type = "hidden"  name = "other_fees[<?php echo $row; ?>][fee_id]" value = "<?php echo $arr[$row]['fee_id'] ; ?>"/>
	 <input type = "hidden"  name = "other_fees[<?php echo $row; ?>][fee_category]" value = "<?php echo $arr[$row]['fee_category'] ; ?>"/></td><!-- Col 1 -->
	 <td  class="auto-style8" style="width: 118px; height: 61px;"><strong>No of Student buying </strong>	</td>
				
				<td  class="auto-style8" style="width: 118px; height: 61px;"><strong>Total Amount</strong></td>

	 <?php }?>
	 <?php } ?>
			<?php print_r($arr); ?>
				<?php  $variable = count($arr)- 1; ?>		 
	<?php for($row = 0; $row < $variable ;  $row++) {  ?>
   <tr>
    <?php if (isset($arr[$row]['class_name'])){?>
	<input type = "hidden"  name = "other_fees[<?php echo $row; ?>][class_id]" value = "<?php echo $arr[$row]['class_id'] ; ?>" />
	<td class="auto-style4" style="width: 118px; height: 26px;"><strong><?php echo $arr[$row]['class_name'] ; ?></strong></td>
	<?php }?>

	<?php for($row1 = 0; $row1 <=count($arr) ;  $row1++) {  ?>
		<?php if (isset($arr[$row1]['fee_name'])){?>
	<td style="width: 76px; height: 26px;"><strong><input type = "text" name = "" value = ""/></strong></td>
	<td style="height: 26px"><strong><input type = "text"  name = "" value = ""/></strong></td>
	<td style="height: 26px"><strong><input type = "text" disabled="disabled" name = "" value = ""/></strong></td>
	<?php } ?>
	
	<?php  } ?>
	</tr>
	
	 <?php } ?>
	
		<tr>
				<td style="width: 118px"  >&nbsp;</td>
				<td style="width: 76px" >&nbsp;</td>
				
				
				<td class="auto-style9" style="width: 121px" ><strong>Total Income</strong></td>
				<td style="width: 87px" ><input name="Text191" id="otherfees78"  onblur="return validat_nulls('#otherfees78')" type="text" style="width: 83px" /></td>
				<td style="width: 88px">&nbsp;</td>
				<td class="auto-style9" style="width: 85px"><strong>Total Income</strong></td>
				<td style="width: 84px"><input name="Text194" id="otherfees79"  onblur="return validat_nulls('#otherfees79')" type="text" style="width: 83px" /></td>
			</tr>
			<tr>
				<td style="width: 118px"  >&nbsp;</td>
				<td style="width: 76px" >&nbsp;</td>
				<td class="auto-style9" style="width: 121px" ><strong>Margin (%)</strong></td>
				<td style="width: 87px" ><input name="Text192" id="otherfees80"  onblur="return validat_nulls('#otherfees80')" type="text" style="width: 83px" /></td>
				<td style="width: 88px">&nbsp;</td>
				<td class="auto-style9" style="width: 85px"><strong>Margin (%)</strong></td>
				<td style="width: 84px"><input name="Text195" id="otherfees81"  onblur="return validat_nulls('#otherfees81')" type="text" style="width: 83px" /></td>
			</tr>
			<tr>
				<td style="width: 118px"  >&nbsp;</td>
				<td style="width: 76px" >&nbsp;</td>
				<td class="auto-style9" style="width: 121px" ><strong>Net Income</strong></td>
				<td style="width: 87px" ><input name="Text193" id="otherfees82"  onblur="return validat_nulls('#otherfees82')" type="text" style="width: 83px" /></td>
				<td style="width: 88px">&nbsp;</td>
				<td class="auto-style9" style="width: 85px"><strong>Net Income</strong></td>
				<td style="width: 84px"><input name="Text196" id="otherfees83"  onblur="return validat_nulls('#otherfees83')" type="text" style="width: 83px" /></td>
			</tr>
		</table>
</td>

</tr>
<tr>
<td align="center"><p style="width: 703px; height: 65px"><strong>Note: </strong>The profit and loss statement only takes the income from sale of books and  uniform, tie etc. Therefore it is important to know the margin schools makes on such sales. If the school has provided only the profit it makes from such sales, add it directly in E18 and H18 respectively. If the lumpsum amount is also not known, an average margin based on data for other schools cna be assumed and can be mentioned in the notes in Financial Performance Module</p>
<br/><br/><input id = "otherfees" name="Submit1" type="submit" value="submit" onclick ="return validate_otherfees()" style="width: 111px"  />
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

