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
	font-weight: bold;
	background-color: #808080;
	color: #FFFFFF;
	text-align: left;
}
  
  .auto-style9 {
	background-color: #808080;
	color: #FFFFFF;
}
  
  .auto-style10 {
	  margin-left: 0px;
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
	<?php $this->load->view('menu'); ?>
	<!-- End Navigation -->
	
	<!-- Content -->
	<div id="content">
		<?php $this->load->view('dashboard',$info); ?>
		<br/>

		
			 
			
			<div align="left">
				<div class="auto-style1">
			<label><b><span class="auto-style5">Cost Details</span> <br />
					</b></label>
				</div>
<table>
<tr>
<td><table border="0"  width="100%">
 <!--	<?php			echo "<pre>";
 print_r($arr); ?> -->
   <?php  $row1=1; $countval=0;
$expense_cat_id =$arr['setvalues'][0]['expense_cat_id'];
//$expense_cat_id=1;
	for ($row = 0; $row < count($arr['setvalues']) ;  $row++) { 
	if($arr['setvalues'][$row]['expense_cat_id'] == $expense_cat_id) {
	$expense_cat_id++ ; 
		?>
		     <?php $count = $expense_cat_id - 1; if ($count == 1){  ?>
  <tr class="auto-style8"><!-- Row 1 -->

	 <td  colspan="2"><?php echo $arr['setvalues'][$row]['expense_cat_name']; ?></td>
	 <td>Amount</td>
	 <td>X-times</td>
	 <td>Total</td>
	 <td>Comments</td>
	  <!-- Col 1 -->
   </tr>
   <?php } else if ($count == 2) { ?>
   <tr class="auto-style8">
   <td colspan="2"><?php echo $arr['setvalues'][$row]['expense_cat_name']; ?></td>
	 <td>Amount</td>
</tr>
<?php } else if ($count == 3) { ?>
 <tr class="auto-style8">
   <td  colspan="2"><?php echo $arr['setvalues'][$row]['expense_cat_name']; ?></td>
	 <td>Loan 1</td>
	 <td>Loan 2</td>
	 <td>Loan 3</td>
	 <td>Loan 4</td>
	 <td>Loan 5</td>
</tr>
<?php } ?>
   <?php }?>
   <tr><!-- Row 1 -->
   <td class="auto-style9" style="width: 82px"><?php echo $row1++; ?> </td>
     <td ><?php echo $arr['setvalues'][$row]['expense_sub_cat_name']; ?>
     <?php if ($arr['setvalues'][$row]['expense_cat_id'] == 1) { ?>
	 <td> <input id="amt<?php echo $row; ?>" type="text" name="quantity[0][<?php $row ?>]" value="<?php if (isset($arr['getvalue'][$row]['amount']))  echo $arr['getvalue'][$row]['amount']; ?>" onblur="return mul_value('#amt<?php echo $row; ?>','#xtimes<?php echo $row; ?>','#tot<?php echo $row; ?>');" />    </td>
	 <td><select id="xtimes<?php echo $row ;?>" name="quantity[1][<?php $row ?>]" style="width: 89px" onblur="return mul_value('#amt<?php echo $row ?>','#xtimes<?php echo $row; ?>','#tot<?php echo $row; ?>');">
		<?php if (isset($arr['getvalue'][$row]['amount'])){?>
		
			<option value="1" <?php if ($arr['getvalue'][$row]['quantity']  == '1'){ ?> selected  = "1" <?php } ?> >1</option>
			<option value="2" <?php if ($arr['getvalue'][$row]['quantity']  == '2'){ ?> selected  = "2" <?php } ?> >2</option>
			<option value="3" <?php if ($arr['getvalue'][$row]['quantity']  == '3'){ ?> selected  = "3" <?php } ?> >3</option>
			<option value="4" <?php if ($arr['getvalue'][$row]['quantity']  == '4'){ ?> selected  = "4" <?php } ?> >4</option>
			<option value="5" <?php if ($arr['getvalue'][$row]['quantity']  == '5'){ ?> selected  = "5" <?php } ?> >5</option>
			<option value="6" <?php if ($arr['getvalue'][$row]['quantity']  == '6'){ ?> selected  = "6" <?php } ?> >6</option>
			<option value="7" <?php if ($arr['getvalue'][$row]['quantity']  == '7'){ ?> selected  = "7" <?php } ?> >7</option>
			<option value="8" <?php if ($arr['getvalue'][$row]['quantity']  == '8'){ ?> selected  = "8" <?php } ?> >8</option>
			<option value="9" <?php if ($arr['getvalue'][$row]['quantity']  == '9'){ ?> selected  = "9" <?php } ?> >9</option>
			<option value="10" <?php if ($arr['getvalue'][$row]['quantity']  == '10'){ ?> selected  = "10" <?php } ?> >10</option>
			<option value="11" <?php if ($arr['getvalue'][$row]['quantity']  == '11'){ ?> selected  = "11" <?php } ?> >11</option>
			<option value="12" <?php if ($arr['getvalue'][$row]['quantity']  == '12'){ ?> selected  = "12" <?php } ?> >12</option>

		<?php }else{ ?>
			
			<option value="1" >1</option>
			<option value="2" >2</option>
			<option value="3" >3</option>
			<option value="4" >4</option>
			<option value="5" >5</option>
			<option value="6" >6</option>
			<option value="7" >7</option>
			<option value="8" >8</option>
			<option value="9" >9</option>
			<option value="10" >10</option>
			<option value="11" >11</option>
			<option value="12" >12</option>
	
		<?php }	?>

		 </select>  </td>
		 <td style="width: 128px"> 
		 <input id="tot<?php echo $row; ?>" type="text" name="quantity[2][<?php $row ?>]" disabled="disabled" value="<?php if (isset($arr['getvalue'][$row]['amount']))  echo $arr['getvalue'][$row]['amount'];?>" class="auto-style10" style="width: 116px"/>    </td>
		 <td> <input type="text" name="quantity[3][<?php $row ?>]" value="<?php if (isset($arr['getvalue'][$row]['comments']))  echo $arr['getvalue'][$row]['comments']; ?>" />    </td>	
		 <?php } elseif ($arr['setvalues'][$row]['expense_cat_id'] == 2) { ?>
		 <td><input type="text" name="quantity[4][<?php $row ?>]" value="<?php if (isset($arr['getvalue'][$row]['amount']))  echo $arr['getvalue'][$row]['amount']; ?> " />    </td>
		 <?php } elseif ($arr['setvalues'][$row]['expense_cat_id'] == 3) { ?>
		 <td><input type="text" name="quantity[5][<?php $row ?>]" value="<?php if (isset($arr['getvalue1'][$countval]['loan1']))  echo $arr['getvalue1'][$countval]['loan1']; ?>" />    </td>
		 <td><input type="text" name="quantity[6][<?php $row ?>]" value=" <?php if (isset($arr['getvalue1'][$countval]['loan2'])) echo $arr['getvalue1'][$countval]['loan2']; ?>" />    </td>
		 <td><input type="text" name="quantity[7][<?php $row ?>]" value=" <?php if (isset($arr['getvalue1'][$countval]['loan3'])) echo $arr['getvalue1'][$countval]['loan3']; ?>" />    </td>
		 <td><input type="text" name="quantity[8][<?php $row ?>]" value=" <?php if (isset($arr['getvalue1'][$countval]['loan4'])) echo $arr['getvalue1'][$countval]['loan4']; ?>" />    </td>	
		 <td><input type="text" name="quantity[9][<?php $row ?>]" value=" <?php if (isset($arr['getvalue1'][$countval]['loan5'])) echo $arr['getvalue1'][$countval]['loan5']; ?>" />    </td>	
		 
		 <?php $countval++; } ?>
		  
		  
		  
	<input type = "hidden" value = "<?php echo $arr['setvalues'][$row]['expense_sub_cat_id']; ?>" name = "expense_sub_cat_id[]" />
	<input type = "hidden" value = "<?php echo $arr['setvalues'][$row]['expense_cat_id']; ?>" name = "expense_cat_id[]" />
		 <?php } ?>
		</td>
		<tr> 
<td align="right"> 
<?php if(isset($message)) echo($message); ?>
<input id = "cost" name="Submit1" type="submit" value="submit" onclick="return validate_cost_button(<?php echo count('cost'); ?>);" style="width: 57px" />

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
	<?php $this->load->view('header'); ?>
	
