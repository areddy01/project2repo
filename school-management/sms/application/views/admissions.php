<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
 <?php    $this->load->view('header'); ?>
  <style type="text/css">
  .auto-style1 {
	  text-align: CENTER;
  }
  
  .auto-style3 {
	  font-size: large;
	  font-weight: bold;
	  text-transform: uppercase;
  }
  .auto-style4 {
	  color: #FFFFFF;
	  background-color: #808080;
  }
  .auto-style5 {
	  text-align: CENTER;
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
			<p class="small-nav"><a href="#">Help</a> / <a href="">Profile Settings</a> / <a href="/home/logout">Log Out</a></p>
		</div>
	</div>
	<!-- End Header -->
	
	<!-- Navigation -->
	 <?php    $this->load->view('menu'); ?>
	<!-- End Navigation -->
	
	<!-- Content -->
	<div id="content">
	<?php $this->load->view('dashboard',$info); ?>
		<div class="message thank-message">
			<div class="auto-style1">

			<br/>
				</div>		
			 
			
			<div align="left">
				<div class="auto-style1">
			<label><span class="auto-style3">Admissions Details <br />
					<br />
					</span></label>
				</div>
<form method = "post" id ="" action = "/admin/addadmissions/?info=<?php echo $info; ?>"  value = ""  style="width:90%" >
<table>
<tr>
<td><table style="width: 100%">
	<tr>
		<td rowspan="2"  class="auto-style4"><strong>CURRENT YEAR</strong></td>
		<td  class="auto-style5" colspan="4"><strong>Total Enrollment </strong> </td>
		<td class="auto-style5" colspan="3" ><strong>New Admissions</strong></td>
		<td class="auto-style4"  rowspan="2" style="width: 74px"><strong>Free Students</strong></td>
	</tr>
	<tr>
		<td class="auto-style4" style="width: 67px"><strong>No. of Sections</strong></td>
		<td class="auto-style4" ><strong>Boys</strong></td>
		<td class="auto-style4" ><strong>Girls</strong></td>
		<td class="auto-style4" ><strong>Total</strong></td>
		<td class="auto-style4" ><strong>Boys</strong></td>
		<td class="auto-style4" ><strong>Girls</strong></td>
		<td class="auto-style4" style="width: 78px" ><strong>Total</strong></td>
	</tr>
	<?php for ($row = 0; $row < count($arr) ;  $row++) {  ?>
	<tr>
		<td class="auto-style4" ><?php echo $arr[$row]['class_name'] ; ?> </td>

		<td style="width: 67px" >
			<input id ="section<?php echo $row;?>" name="enrollment[<?php echo $row;?>][1]" value = "<?php if(isset($arr[$row]['no_of_sections']))echo $arr[$row]['no_of_sections']; ?>" type="text" onblur="return validat_numeric('#section<?php echo $row;?>');" style="width: 72px" /></td>
		<td >
					<input id ="boys<?php echo $row;?>" name="enrollment[<?php echo $row;?>][2]"  value =  "<?php if(isset($arr[$row]['total_enrollment_boys']))echo $arr[$row]['total_enrollment_boys']; ?>" type="text" onblur="return validat_numeric('#boys<?php echo $row;?>');" style="width: 72px" /></td>
		<td >
					<input id ="girls<?php echo $row;?>" name="enrollment[<?php echo $row;?>][3]"  value =  "<?php if(isset($arr[$row]['total_enrollment_girls'])) echo $arr[$row]['total_enrollment_girls']; ?>"type="text" onblur="return validat_numeric('#girls<?php echo $row;?>');" style="width: 72px" /></td>
		<td >
					<input id ="total<?php echo $row;?>" name="" type="text" disabled="disabled" style="width: 72px"  value =  "<?php if(isset($arr[$row]['total_enrollment_boys'])||isset($arr[$row]['total_enrollment_girls'])){
					$B1 = $arr[$row]['total_enrollment_boys'];
					$G1 = $arr[$row]['total_enrollment_girls'];
					echo $data = $B1+ $G1;
		}
		 ?>" /></td>
		<td >
					<input id ="newboys<?php echo $row;?>" name="enrollment[<?php echo $row;?>][4]"  value =  "<?php if(isset($arr[$row]['total_new_admission_boys']))echo $arr[$row]['total_new_admission_boys']; ?>" type="text" onblur="return validat_numeric('#newboys<?php echo $row;?>');" style="width: 72px" /></td> 
		<td >
					<input id ="newgirls<?php echo $row;?>" name="enrollment[<?php echo $row;?>][5]"  value =  "<?php if(isset($arr[$row]['total_new_admissions_girls']))echo $arr[$row]['total_new_admissions_girls']; ?>" type="text" onblur="return validat_numeric('#newgirls<?php echo $row;?>');" style="width: 72px" /></td>
		<td style="width: 78px" >
					<input id ="newtotal<?php echo $row;?>" name="" type="text" style="width: 72px" disabled="disabled" value =  "<?php if(isset($arr[$row]['total_new_admission_boys'])||isset($arr[$row]['total_new_admissions_girls'])){
					$B1 = $arr[$row]['total_new_admission_boys'];
					$G1 = $arr[$row]['total_new_admissions_girls'];
					echo $data = $B1 + $G1;
		}
		 ?>" /></td>
		<td style="width: 74px" >
					<input id ="freestudent<?php echo $row;?>" name="enrollment[<?php echo $row;?>][6]" type="text" style="width: 72px"  value =  "<?php if(isset($arr[$row]['total_free_admissions_students']))echo $arr[$row]['total_free_admissions_students']; ?>" onblur="return validat_numeric('#freestudent<?php echo $row;?>');" /></td>
		<td style="width: 74px" ><input id ="admissions8" name="enrollment[<?php echo $row;?>][7]" type="hidden" style="width: 72px"value = "<?php if(isset($arr[$row]['class_id']))echo $arr[$row]['class_id'] ; ?>" /></td>
	</tr>
	<?php 
	 }?>


<tr>
		<td class="auto-style4">Pre-Primary</td>
		
		<?php 
		$tot_pp=0;  
		$tot_boys=0;$tot_new_boys=0;$tot_new_girls=0;
		$tot_girls=0;$tot_free_stud=0;$total_new_admin=0;
		$total=0;
		for ($val=0;$val<3;$val++) {
		if (isset($arr[$val]['no_of_sections'])) {

		$tot_pp=$tot_pp + $arr[$val]['no_of_sections'];
		$tot_boys=$tot_boys + $arr[$val]['total_enrollment_boys'];
		$tot_girls=$tot_girls + $arr[$val]['total_enrollment_girls'];
		$total = $tot_boys + $tot_girls ;
		$tot_new_boys = $tot_new_boys + $arr[$val]['total_new_admission_boys'];
		$tot_new_girls = $tot_new_girls + $arr[$val]['total_new_admissions_girls'];
		$total_new_admin = $tot_new_boys + $tot_new_girls;
		$tot_free_stud = $tot_free_stud + $arr[$val]['total_free_admissions_students'];
		}
		}
		?><td>
					<input id ="admissions217" name="Text30" type="text" disabled="disabled" style="width: 72px" value="<?php echo $tot_pp;  ?>" />
					
		</td>
		<td>
					<input id ="admissions217" name="Text30" type="text" disabled="disabled" style="width: 72px" value="<?php echo $tot_boys;  ?>"/>
					
		</td><td>
					<input id ="admissions217" name="Text30" type="text" disabled="disabled" style="width: 72px" value="<?php echo $tot_girls;  ?>"/>
					
		</td><td>
					<input id ="admissions217" name="Text30" type="text" style="width: 72px" disabled="disabled" value="<?php echo $total; ?>"/>
					
		</td><td>
					<input id ="admissions217" name="Text30" type="text" style="width: 72px" disabled="disabled" value="<?php echo $tot_new_boys; ?>" />
					
		</td><td>
					<input id ="admissions217" name="Text30" type="text" style="width: 72px" disabled="disabled" value="<?php echo $tot_new_girls; ?>" />
					
		</td><td>
					<input id ="admissions217" name="Text30" type="text" style="width: 72px" disabled="disabled" value="<?php echo $total_new_admin; ?>" />
					
		</td><td>
					<input id ="admissions217" name="Text30" type="text" style="width: 72px" disabled="disabled" value="<?php echo $tot_free_stud; ?>" />
					
		</td>

	</tr>
	<tr>
		<td  class="auto-style4">Primary</td>
			<?php 
		$tot_pp=0;  
		$tot_boys=0;$tot_new_boys=0;$tot_new_girls=0;
		$tot_girls=0;$tot_free_stud=0;$total_new_admin=0;
		$total=0;
		for ($val=3;$val<8;$val++) {
		if (isset($arr[$val]['no_of_sections'])) {

		$tot_pp=$tot_pp + $arr[$val]['no_of_sections'];
		$tot_boys=$tot_boys + $arr[$val]['total_enrollment_boys'];
		$tot_girls=$tot_girls + $arr[$val]['total_enrollment_girls'];
		$total = $tot_boys + $tot_girls ;
		$tot_new_boys = $tot_new_boys + $arr[$val]['total_new_admission_boys'];
		$tot_new_girls = $tot_new_girls + $arr[$val]['total_new_admissions_girls'];
		$total_new_admin = $tot_new_boys + $tot_new_girls;
		$tot_free_stud = $tot_free_stud + $arr[$val]['total_free_admissions_students'];
		}
		}
		?>

		<td>
					<input id ="admissions217" name="Text30" type="text" disabled="disabled" style="width: 72px" value="<?php echo $tot_pp;  ?>" />
					
		</td>
		<td>
					<input id ="admissions217" name="Text30" type="text" disabled="disabled" style="width: 72px" value="<?php echo $tot_boys;  ?>"/>
					
		</td><td>
					<input id ="admissions217" name="Text30" type="text" disabled="disabled" style="width: 72px" value="<?php echo $tot_girls;  ?>"/>
					
		</td><td>
					<input id ="admissions217" name="Text30" type="text" style="width: 72px" disabled="disabled" value="<?php echo $total; ?>"/>
					
		</td><td>
					<input id ="admissions217" name="Text30" type="text" style="width: 72px" disabled="disabled" value="<?php echo $tot_new_boys; ?>" />
					
		</td><td>
					<input id ="admissions217" name="Text30" type="text" style="width: 72px" disabled="disabled" value="<?php echo $tot_new_girls; ?>" />
					
		</td><td>
					<input id ="admissions217" name="Text30" type="text" style="width: 72px" disabled="disabled" value="<?php echo $total_new_admin; ?>" />
					
		</td><td>
					<input id ="admissions217" name="Text30" type="text" style="width: 72px" disabled="disabled" value="<?php echo $tot_free_stud; ?>" />
					
		</td>

	</tr>
	<tr>
		<td  class="auto-style4">Secondary</td>
		<?php 
		$tot_pp=0;  
		$tot_boys=0;$tot_new_boys=0;$tot_new_girls=0;
		$tot_girls=0;$tot_free_stud=0;$total_new_admin=0;
		$total=0;
		for ($val=8;$val<13;$val++) {
		if (isset($arr[$val]['no_of_sections'])) {

		$tot_pp=$tot_pp + $arr[$val]['no_of_sections'];
		$tot_boys=$tot_boys + $arr[$val]['total_enrollment_boys'];
		$tot_girls=$tot_girls + $arr[$val]['total_enrollment_girls'];
		$total = $tot_boys + $tot_girls ;
		$tot_new_boys = $tot_new_boys + $arr[$val]['total_new_admission_boys'];
		$tot_new_girls = $tot_new_girls + $arr[$val]['total_new_admissions_girls'];
		$total_new_admin = $tot_new_boys + $tot_new_girls;
		$tot_free_stud = $tot_free_stud + $arr[$val]['total_free_admissions_students'];
		}
		}
		?>

		<td>
					<input id ="admissions217" name="Text30" type="text" disabled="disabled" style="width: 72px" value="<?php echo $tot_pp;  ?>" />
					
		</td>
		<td>
					<input id ="admissions217" name="Text30" type="text" disabled="disabled" style="width: 72px" value="<?php echo $tot_boys;  ?>"/>
					
		</td><td>
					<input id ="admissions217" name="Text30" type="text" disabled="disabled" style="width: 72px" value="<?php echo $tot_girls;  ?>"/>
					
		</td><td>
					<input id ="admissions217" name="Text30" type="text" style="width: 72px" disabled="disabled" value="<?php echo $total; ?>"/>
					
		</td><td>
					<input id ="admissions217" name="Text30" type="text" style="width: 72px" disabled="disabled" value="<?php echo $tot_new_boys; ?>" />
					
		</td><td>
					<input id ="admissions217" name="Text30" type="text" style="width: 72px" disabled="disabled" value="<?php echo $tot_new_girls; ?>" />
					
		</td><td>
					<input id ="admissions217" name="Text30" type="text" style="width: 72px" disabled="disabled" value="<?php echo $total_new_admin; ?>" />
					
		</td><td>
					<input id ="admissions217" name="Text30" type="text" style="width: 72px" disabled="disabled" value="<?php echo $tot_free_stud; ?>" />
					
		</td>
	</tr>
	<tr>
		<td  class="auto-style4">School Total</td>
		<?php 
		$tot_pp=0;  
		$tot_boys=0;$tot_new_boys=0;$tot_new_girls=0;
		$tot_girls=0;$tot_free_stud=0;$total_new_admin=0;
		$total=0;
		for ($val=0;$val<13;$val++) {
		if (isset($arr[$val]['no_of_sections'])) {
		$tot_pp=$tot_pp + $arr[$val]['no_of_sections'];
		$tot_boys=$tot_boys + $arr[$val]['total_enrollment_boys'];
		$tot_girls=$tot_girls + $arr[$val]['total_enrollment_girls'];
		$total = $tot_boys + $tot_girls ;
		$tot_new_boys = $tot_new_boys + $arr[$val]['total_new_admission_boys'];
		$tot_new_girls = $tot_new_girls + $arr[$val]['total_new_admissions_girls'];
		$total_new_admin = $tot_new_boys + $tot_new_girls;
		$tot_free_stud = $tot_free_stud + $arr[$val]['total_free_admissions_students'];
		}
		}
		?>

		<td>
					<input id ="admissions217" name="Text30" type="text" disabled="disabled" style="width: 72px" value="<?php echo $tot_pp;  ?>" />
					
		</td>
		<td>
					<input id ="admissions217" name="Text30" type="text" disabled="disabled" style="width: 72px" value="<?php echo $tot_boys;  ?>"/>
					
		</td><td>
					<input id ="admissions217" name="Text30" type="text" disabled="disabled" style="width: 72px" value="<?php echo $tot_girls;  ?>"/>
					
		</td><td>
					<input id ="admissions217" name="Text30" type="text" style="width: 72px" disabled="disabled" value="<?php echo $total; ?>"/>
					
		</td><td>
					<input id ="admissions217" name="Text30" type="text" style="width: 72px" disabled="disabled" value="<?php echo $tot_new_boys; ?>" />
					
		</td><td>
					<input id ="admissions217" name="Text30" type="text" style="width: 72px" disabled="disabled" value="<?php echo $tot_new_girls; ?>" />
					
		</td><td>
					<input id ="admissions217" name="Text30" type="text" style="width: 72px" disabled="disabled" value="<?php echo $total_new_admin; ?>" />
					
		</td><td>
					<input id ="admissions217" name="Text30" type="text" style="width: 72px" disabled="disabled" value="<?php echo $tot_free_stud; ?>" />
					
		</td>
	</tr>
</table>

<br/>

</td>

</tr>
<tr>
<td align="center">
<input id = "admissions" name="Submit1" type="submit" value="submit" style="width: 111px" />
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
<?php    $this->load->view('header'); ?>

