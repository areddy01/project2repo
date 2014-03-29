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
	  text-align: center;
	  background-color: #808080;
  }
  .auto-style4 {
	  color: #FFFFFF;
	  background-color: #808080;
  }
  .auto-style5 {
	  font-size: large;
	  text-transform: uppercase;
  }
  .disabled{
	   	   visibility: hidden ;	
	}
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
				<div class="auto-style1">
			<label><b><span class="auto-style5">School Fee Details</span> <br />
					</b></label>
				</div>
				<form method = "post" id ="" action = "/admin/addschoolfee/?info=<?php echo $info ;?>" class = "SchfeeForm">

				<table>
<tr>
<td>
<div>
<table><tr><td>
<!-- End of FORM -->
	<table border="0"  width="100%">
	<tr><td colspan="5" ><strong>Current Academic Year : &nbsp;<?php echo date("Y"); ?></strong> </td>

	</tr>
	<tr>
	<td style="width:134px"></td>
	<!-- Row 1 -->
	
  <?php for ($row = 0; $row < count($arr) ;  $row++) {  ?>
    <?php if (isset($arr[$row]['fee_name'])){?>
     <td  class="auto-style2"><strong><?php echo $arr[$row]['fee_name'] ; ?></strong><input type = "hidden"  name = "school_fees[<?php echo $row; ?>][fee_id]" value = "<?php echo $arr[$row]['fee_id'] ; ?>"/>
	 <input type = "hidden"  name = "school_fees[<?php echo $row; ?>][fee_category]" value = "<?php echo $arr[$row]['fee_category'] ; ?>"/></td><!-- Col 1 -->
	 <?php }?>
	 <?php } ?>
	 </tr>
<tr>
  <td class="auto-style4" style="width: 134px"><strong>Frequency</strong></td>
	<?php for ($row = 0; $row < count($arr) ;  $row++) { 
    if (isset($arr['getvalue'][$row]['class_id']) && $arr['getvalue'][$row]['class_id'] ==1){
		 if ($arr['getvalue'][$row]['class_id'] ==1)
		$indevalue =$arr['getvalue'][$row]['fee_term_type'];
	?>
     <td><strong>
	 <select id="schoolfee<?php echo $row ?>" name="school_fees[<?php echo $row ; ?>][fee_term_type]" onchange="return validate_selection('#schoolfee<?php echo $row; ?>','<?php echo count($arr); ?>');" style="width: 145px">
			
			<option>Select</option>
			
			<?php if ($indevalue == "Monthly"){ ?>
			<option selected="selected" value="Monthly" >Monthly</option>
			<?php 
				} 
			else{?>
			<option  value="Monthly" >Monthly</option>
			<?php }?>

			<?php if ($indevalue == "Quarterly"){ ?>
			<option selected="selected" value="Quarterly" >Quarterly</option>
			<?php } 
			else
				{?>
			<option  value="Quarterly" >Quarterly</option>
			<?php 
				}?>
			<?php if ($indevalue == "Thrice"){ ?>
			<option selected="selected" value="Thrice" >Thrice</option>
			<?php 
				}
			else{?>
			<option  value="Thrice" >Thrice</option>
			<?php }?>
			
			<?php if ($indevalue == "Semi Annually"){ ?>
			<option selected="selected" value="Monthly" >Semi Annually</option>
			<?php 
				}
			else{?>
			<option  value="Semi Annually" >Semi Annually</option>
			<?php }?>

			<?php if ($indevalue == "Annually"){ ?>
			<option selected="selected" value="Annually" >Annually</option>
			<?php 
				} 
			else{?>
			<option  value="Annually" >Annually</option>
			<?php }?>

			
	</select></strong>
	 <?php } else if(isset($arr[$row]['fee_id'])){?>
	 <td>
	 <strong><select id="schoolfee<?php echo $row; ?>" name="school_fees[<?php echo $row ; ?>][fee_term_type]" onchange="return validate_selection('#schoolfee<?php echo $row; ?>','<?php echo count($arr); ?>');" style="width: 145px">
		<option>Select</option>
		<option value="Monthly">Monthly</option>
		<option value="Quarterly">Quarterly</option>
		<option value="Thrice">Thrice</option>
		 <option value="Semi Annually">Semi Annually</option>
		<option value="Annually">Annually</option>

		</select></strong>
	 <?php }?>
	 <?php } ?>
	 </td>
	 
	  <?php	$getvalue = 0 ; ?>
	  <?php $loop = count($arr)-1 ; ?>
   <?php for($row = 0; $row < $loop ;  $row++) {  ?>
   <tr>
    <?php if (isset($arr[$row]['class_name'])){?>
	<input type = "hidden"  name = "school_fees[<?php echo $row; ?>][class_id]" value = "<?php echo $arr[$row]['class_id'] ; ?>"  />
	<td class="auto-style4" style="width: 134px"><strong><?php echo $arr[$row]['class_name'] ; ?></strong></td>
	<?php }?>
	<?php for($row1 = 0; $row1 <=count($arr) ;  $row1++) {  ?>
	 <?php if (isset($arr[$row1]['fee_name'])){?>
	<td ><input type = "text" id="school_fees_val<?php echo $row; ?><?php echo $row1; ?>" name = "school_fees_value[<?php echo $row; ?>][<?php echo $row1; ?>]" value = "<?php if (isset($arr['getvalue'][$getvalue]['fee_amount'])) echo $arr['getvalue'][$getvalue]['fee_amount'] ; ?>" onblur="return validat_numeric('#school_fees_value<?php echo $row; ?><?php echo $row1; ?>');" /></strong></td>
	<?php $getvalue++; ?>
	<?php } ?>
	
	<?php  } ?>
	</tr>
	
	 <?php } ?>
 </tr>

</table>
<table border="0"  width="71%">
  <tr><!-- Row 1 -->
     <td class="auto-style4"><strong>Income from other Sources (per annum)</strong></td><!-- Col 1 -->
     <td class="auto-style4"><strong>Current Year</strong></td><!-- Col 2 -->
     <td class="auto-style4"><strong>Previous Year</strong></td><!-- Col 3 -->
  </tr>
  <tr><!-- Row 1 -->
     <td class="auto-style4"><strong>Evening College/Tuitions</strong></td><!-- Col 1 -->
     <td style="width:100px"><input id="nuradmin3" type="text" name="schfee[coll_tut_curr]" value="" style="width: 100px"/></td> <!-- Col 2 -->
   <!-- <td style="width:100px"><input id="nuradmin3" type="text" name="" value="schfee[coll_tut_curr]" style="width: 100px"/></td> --><!-- Col 2 -->
    
     <td style="width:100px"><input id="nuradmin3" type="text" name="schfee[coll_tut_prev]"  value="" style="width: 100px"/></td><!-- Col 3 -->
  </tr>
  <tr><!-- Row 1 -->
     <td class="auto-style4"><strong>Rent from School building</strong></td><!-- Col 1 -->
     <td><input id="nuradmin3" type="text" name="schfee[rent_curr]" value="" style="width: 100px"/></td><!-- Col 2 -->
     <td><input id="nuradmin3" type="text" name="schfee[rent_prev]" value="" style="width: 100px"/></td><!-- Col 3 -->
  </tr>
  <tr><!-- Row 1 -->
     <td class="auto-style4"><strong>Others(1)</strong></td><!-- Col 1 -->
     <td><input id="nuradmin3" type="text" name="schfee[others_curr]" value="" style="width: 100px"/></td><!-- Col 2 -->
     <td><input id="nuradmin3" type="text" name="schfee[others_prev]" value="" style="width: 100px"/></td><!-- Col 3 -->
  </tr>
  <tr><!-- Row 1 -->
     <td class="auto-style4"><strong>Donations</strong></td><!-- Col 1 -->
     <td><input id="nuradmin3" type="text" name="schfee[donations_curr]" value="" style="width: 100px"/></td><!-- Col 2 -->
     <td><input id="nuradmin3" type="text" name="schfee[donations_prev]" value="" style="width: 100px"/></td><!-- Col 3 -->
  </tr>
</table>


</div>
</td>

</tr>
<tr>
<td align="right">
<input id = "submit" name="Submit1" type="submit" value="submit" onclick ="return validate_schfee_school(<?php echo count($arr);?>);" />
<span id="error" style = "display:none;color:red;" > Only Numeric Values are Allowed </span> <span id ="errmark" style = "display:none;color:red;" > All Red mark field is required </span>
<?php 
if(isset($_POST['submit'])){
?>
<?php $message="School fee details are added success" ?>
<div class="confirmation_message">
<?php $message; ?>
</div>
<?php }?>
 </tr>
 </td>
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

