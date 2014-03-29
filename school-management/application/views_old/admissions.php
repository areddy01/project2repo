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
<form method = "post" id ="" action = "/admin/addadmissions/?info=<?php echo $info; ?>"  style="width:90%; height:629px;" >
<table>
<tr>
<td style="height: 259px"><table style="width: 100%; padding:0 0px 0 50px">
<tr>
<div id='freestudenterror' style='color:red'></div>
<td colspan="5" ><strong>Current Academic Year: &nbsp;<?php echo date("Y"); ?></strong> </td>
</tr>
	<tr>
		<td rowspan="2" ></td>
		<td  class="auto-style5" colspan="4"><strong>Total Enrollment </strong> </td>
		<td class="auto-style5" colspan="3" ><strong>New Admissions</strong></td>
		<td class="auto-style4"  rowspan="2" style="width: 74px"><strong>Free Students</strong></td>
	</tr>
	<tr>
		<td class="auto-style4" style="width: 67px"><strong>No. of Sections</strong></td>
		<td class="auto-style4" ><strong>Boys<div id='freestudenterror' style='color:red'></div></strong></td>
		<td class="auto-style4" ><strong>Girls</strong></td>
		<td class="auto-style4" ><strong>Total</strong></td>
		<td class="auto-style4" ><strong>Boys</strong></td>
		<td class="auto-style4" ><strong>Girls</strong></td>
		<td class="auto-style4" style="width: 78px" ><strong>Total</strong></td>
	</tr>
	
		<?php for ($row = 0; $row < count($arr) ;  $row++) {  ?>
	<tr>
<input type = "hidden"  name = "enrollment[<?php echo $row;?>][class_id]" value = "<?php echo $arr[$row]['class_id'] ; ?>" />
	
		<td class="auto-style4" style="height: 26px" ><?php echo $arr[$row]['class_name'] ; ?> </td>

		<td style="width: 67px; height: 26px;" >
			<input id ="section<?php echo $row;?>" name="enrollment[<?php echo $row;?>][1]" maxlength="4" value = "<?php if(isset($arr[$row]['no_of_sections']))echo $arr[$row]['no_of_sections']; ?>" type="number" onkeyup="javascript: trimalpha(section<?php echo $row;?>);" onblur="return validate_numeric('#section<?php echo $row;?>');" style="width: 72px" /></td>
		<td style="height: 26px" >
					<input id ="boys<?php echo $row;?>" name="enrollment[<?php echo $row;?>][2]" maxlength="5" value =  "<?php if(isset($arr[$row]['total_enrollment_boys']))echo $arr[$row]['total_enrollment_boys']; ?>" type="number" onkeyup="javascript: trimalpha(boys<?php echo $row;?>);" onblur="return add_cost('#boys<?php echo $row;?>','#girls<?php echo $row;?>','#total<?php echo $row;?>');" style="width: 72px;" /></td>
		<td style="height: 26px" >
					<input id ="girls<?php echo $row;?>" onkeyup="javascript: trimalpha(girls<?php echo $row;?>);" name="enrollment[<?php echo $row;?>][3]" maxlength="5" value =  "<?php if(isset($arr[$row]['total_enrollment_girls'])) echo $arr[$row]['total_enrollment_girls']; ?>"type="number" onblur="return add_cost('#boys<?php echo $row;?>','#girls<?php echo $row;?>','#total<?php echo $row;?>');" style="width: 72px" /></td>
		<td style="height: 26px" >
					<input id ="total<?php echo $row;?>" name="enrollment22[<?php echo $row;?>]" type="number"  style="width: 72px" disabled="disabled"  value =  "<?php if(isset($arr[$row]['total_enrollment_boys'])||isset($arr[$row]['total_enrollment_girls'])){
					$B1 = $arr[$row]['total_enrollment_boys'];
					$G1 = $arr[$row]['total_enrollment_girls'];
					echo $data = $B1+ $G1;
		}
		 ?>" /></td>
		<td style="height: 26px" >
					<input id ="newboys<?php echo $row;?>"  onkeyup="javascript: trimalpha(newboys<?php echo $row;?>);"name="enrollment[<?php echo $row;?>][4]" maxlength="5" value =  "<?php if(isset($arr[$row]['total_new_admission_boys']))echo $arr[$row]['total_new_admission_boys']; ?>" type="number" onblur="return add_cost('#newboys<?php echo $row;?>','#newgirls<?php echo $row;?>','#newtotal<?php echo $row;?>');" style="width: 72px" /></td> 
		<td style="height: 26px" >
					<input id ="newgirls<?php echo $row;?>" onkeyup="javascript: trimalpha(newgirls<?php echo $row;?>);" name="enrollment[<?php echo $row;?>][5]" maxlength="5" value =  "<?php if(isset($arr[$row]['total_new_admissions_girls']))echo $arr[$row]['total_new_admissions_girls']; ?>" type="number" onblur="return add_cost('#newboys<?php echo $row;?>','#newgirls<?php echo $row;?>','#newtotal<?php echo $row;?>');" style="width: 72px" /></td>
		<td style="width: 78px; height: 26px;" >
					<input id ="newtotal<?php echo $row;?>" name="" type="number" style="width: 72px" maxlength="5" disabled="disabled" value =  "<?php if(isset($arr[$row]['total_new_admission_boys'])||isset($arr[$row]['total_new_admissions_girls'])){
					$B1 = $arr[$row]['total_new_admission_boys'];
					$G1 = $arr[$row]['total_new_admissions_girls'];
					echo $data = $B1 + $G1;
		}
		 ?>" /></td>
		<td style="width: 74px; height: 26px;" >
					<input id ="freestudent<?php echo $row;?>" onkeyup="javascript: trimalpha(freestudent<?php echo $row;?>);" name="enrollment[<?php echo $row;?>][6]" maxlength="5" type="number" style="width: 72px"  value =  "<?php if(isset($arr[$row]['total_free_admissions_students']))echo $arr[$row]['total_free_admissions_students']; ?>" onblur="return validate_freestudents('#total<?php echo $row;?>','#freestudent<?php echo $row;?>');" /></td>
	
	</tr>
	<?php 
	 }?>


<tr>
		<td class="auto-style4">Pre-Primary </td>
		
		<?php 
		$tot_pp1=0;  
		$tot_boys1=0;$tot_new_boys1=0;$tot_new_girls1=0;
		$tot_girls1=0;$tot_free_stud1=0;$total_new_admin1=0;
		$total1=0;
		for ($val=0;$val<3;$val++) {
		if (isset($arr[$val]['no_of_sections'])) {

		$tot_pp1=$tot_pp1 + $arr[$val]['no_of_sections'];
		$tot_boys1=$tot_boys1 + $arr[$val]['total_enrollment_boys'];
		$tot_girls1=$tot_girls1+ $arr[$val]['total_enrollment_girls'];
		$total1 = $tot_boys1 + $tot_girls1 ;
		$tot_new_boys1 = $tot_new_boys1 + $arr[$val]['total_new_admission_boys'];
		$tot_new_girls1 = $tot_new_girls1 + $arr[$val]['total_new_admissions_girls'];
		$total_new_admin1 = $tot_new_boys1 + $tot_new_girls1;
		$tot_free_stud1 = $tot_free_stud1 + $arr[$val]['total_free_admissions_students'];
		}
		}
		?>
		<td><input id ="admissions217" name="Text30" type="number" disabled="disabled" style="width: 72px" value="<?php echo $tot_pp1;  ?>" /></td>
		<td><input id ="admissions217" name="Text30" type="number" disabled="disabled" style="width: 72px" value="<?php echo $tot_boys1;  ?>"/></td>
		<td><input id ="admissions217" name="Text30" type="number" disabled="disabled" style="width: 72px" value="<?php echo $tot_girls1;  ?>"/></td>
		<td><input id ="admissipree" name="total_pre" type="number" style="width: 72px" disabled="disabled" value="<?php echo $total1; ?>" /></td>
		<td><input id ="admissions217" name="Text30" type="number" style="width: 72px" disabled="disabled" value="<?php echo $tot_new_boys1; ?>" /></td>
		<td><input id ="admissions217" name="Text30" type="number" style="width: 72px" disabled="disabled" value="<?php echo $tot_new_girls1; ?>" /></td>
		<td><input id ="admissions217" name="Text30" type="number" style="width: 72px" disabled="disabled" value="<?php echo $total_new_admin1; ?>" /></td>
		<td><input id ="admissions217" name="Text30" type="number" style="width: 72px" disabled="disabled" value="<?php echo $tot_free_stud1; ?>" /></td>

	</tr>
	<tr>
		<td  class="auto-style4">Primary</td>
			<?php 
		$tot_pp2=0;  
		$tot_boys2=0;$tot_new_boys2=0;$tot_new_girls2=0;
		$tot_girls2=0;$tot_free_stud2=0;$total_new_admin2=0;
		$total2=0;
		for ($val=3;$val<8;$val++) {
		if (isset($arr[$val]['no_of_sections'])) {

		$tot_pp2=$tot_pp2 + $arr[$val]['no_of_sections'];
		$tot_boys2=$tot_boys2 + $arr[$val]['total_enrollment_boys'];
		$tot_girls2=$tot_girls2 + $arr[$val]['total_enrollment_girls'];
		$total2 = $tot_boys2 + $tot_girls2 ;
		$tot_new_boys2 = $tot_new_boys2 + $arr[$val]['total_new_admission_boys'];
		$tot_new_girls2 = $tot_new_girls2 + $arr[$val]['total_new_admissions_girls'];
		$total_new_admin2 = $tot_new_boys2 + $tot_new_girls2;
		$tot_free_stud2 = $tot_free_stud2 + $arr[$val]['total_free_admissions_students'];
		}
		}
		?>

		<td><input id ="admissions217" name="Text30" type="number" disabled="disabled" style="width: 72px" value="<?php echo $tot_pp2;  ?>" /></td>
		<td><input id ="admissions217" name="Text30" type="number" disabled="disabled" style="width: 72px" value="<?php echo $tot_boys2;  ?>"/></td>
		<td><input id ="admissions217" name="Text30" type="number" disabled="disabled" style="width: 72px; height: 22px;" value="<?php echo $tot_girls2;  ?>"/></td>
		<td><input id ="admissions217" name="total_prime" type="number" style="width: 72px" disabled="disabled" value="<?php echo $total2; ?>"/></td>
		<td><input id ="admissions217" name="Text30" type="number" style="width: 72px" disabled="disabled" value="<?php echo $tot_new_boys2; ?>" /></td>
		<td><input id ="admissions217" name="Text30" type="number" style="width: 72px" disabled="disabled" value="<?php echo $tot_new_girls2; ?>" /></td>
		<td><input id ="admissions217" name="Text30" type="number" style="width: 72px" disabled="disabled" value="<?php echo $total_new_admin2; ?>" /></td>
		<td><input id ="admissions217" name="Text30" type="number" style="width: 72px" disabled="disabled" value="<?php echo $tot_free_stud2; ?>" /></td>

	</tr>
	<tr>
		<td  class="auto-style4">Secondary</td>
		<?php 
		$tot_pp3=0;  
		$tot_boys3=0;$tot_new_boys3=0;$tot_new_girls3=0;
		$tot_girls3=0;$tot_free_stud3=0;$total_new_admin3=0;
		$total3=0;
		for ($val=8;$val<13;$val++) {
		if (isset($arr[$val]['no_of_sections'])) {
        $tot_pp3=$tot_pp3 + $arr[$val]['no_of_sections'];
		$tot_boys3=$tot_boys3 + $arr[$val]['total_enrollment_boys'];
		$tot_girls3=$tot_girls3 + $arr[$val]['total_enrollment_girls'];
		$total3 = $tot_boys3 + $tot_girls3 ;
		$tot_new_boys3 = $tot_new_boys3 + $arr[$val]['total_new_admission_boys'];
		$tot_new_girls3 = $tot_new_girls3 + $arr[$val]['total_new_admissions_girls'];
		$total_new_admin3 = $tot_new_boys3 + $tot_new_girls3;
		$tot_free_stud3 = $tot_free_stud3 + $arr[$val]['total_free_admissions_students'];
		}
		}
		?>

		<td><input id ="admissions217" name="" type="number" disabled="disabled" style="width: 72px" value="<?php echo $tot_pp3;  ?>" /></td>
		<td><input id ="admissions217" name="" type="number" disabled="disabled" style="width: 72px" value="<?php echo $tot_boys3;  ?>"/></td>
		<td><input id ="admissions217" name="" type="number" disabled="disabled" style="width: 72px" value="<?php echo $tot_girls3;  ?>"/></td>
		<td><input id ="admissions217" name="" type="number" style="width: 72px" disabled="disabled" value="<?php echo $total3; ?>"/></td>
		<td><input id ="admissions217" name="" type="number" style="width: 72px" disabled="disabled" value="<?php echo $tot_new_boys3; ?>" /></td>
		<td><input id ="admissions217" name="" type="number" style="width: 72px" disabled="disabled" value="<?php echo $tot_new_girls3; ?>" /></td>
		<td><input id ="admissions217" name="" type="number" style="width: 72px" disabled="disabled" value="<?php echo $total_new_admin3; ?>" /></td>
		<td><input id ="admissions217" name="" type="number" style="width: 72px" disabled="disabled" value="<?php echo $tot_free_stud3; ?>" />
					
		</td>
	</tr>
	<tr>
		<td  class="auto-style4">School Total</td> 
		
		<?php 
		$tot_pp4=0;  
		$tot_boys4=0;$tot_new_boys4=0;$tot_new_girls4=0;
		$tot_girls4=0;$tot_free_stud4=0;$total_new_admin4=0;
		$total4=0;
		for ($val=0;$val<13;$val++) {
		if (isset($arr[$val]['no_of_sections'])) {
		$tot_pp4=$tot_pp4 + $arr[$val]['no_of_sections'];
		$tot_boys4=$tot_boys4 + $arr[$val]['total_enrollment_boys'];
		$tot_girls4=$tot_girls4 + $arr[$val]['total_enrollment_girls'];
		$total4 = $tot_boys4 + $tot_girls4 ;
		$tot_new_boys4 = $tot_new_boys4 + $arr[$val]['total_new_admission_boys'];
		$tot_new_girls4 = $tot_new_girls4 + $arr[$val]['total_new_admissions_girls'];
		$total_new_admin4 = $tot_new_boys4 + $tot_new_girls4;
		$tot_free_stud4 = $tot_free_stud4 + $arr[$val]['total_free_admissions_students'];
		}
		}
		?>

		<td><input id ="" name="" type="number" disabled="disabled" style="width: 72px" value="<?php echo $tot_pp4;  ?>" /></td>
		<td><input id ="" name="" type="number" disabled="disabled" style="width: 72px" value="<?php echo $tot_boys4;  ?>"/></td>
		<td><input id ="" name="" type="number" disabled="disabled" style="width: 72px" value="<?php echo $tot_girls4;  ?>"/></td>
		<td><input id ="" name="" type="number" style="width: 72px" disabled="disabled" value="<?php echo $total4; ?>"/></td>
		<td><input id ="" name="" type="number" style="width: 72px" disabled="disabled" value="<?php echo $tot_new_boys4; ?>" /></td>
		<td><input id ="" name="" type="number" style="width: 72px" disabled="disabled" value="<?php echo $tot_new_girls4; ?>" /></td>
		<td><input id ="" name="" type="number" style="width: 72px" disabled="disabled" value="<?php echo $total_new_admin4; ?>" /></td>
		<td><input id ="" name="" type="number"  style="width: 72px" disabled="disabled" value="<?php echo $tot_free_stud4; ?>" /></td>
	</tr>
</table>

<br/>

</td>

</tr>
<div> 
<table><tr><td><table>
<tr>
<td>





<table style="width: 100%; padding:0 0px 0 50px">
<tr>
<td colspan="5" ><strong>PREVIOUS ACADEMIC YEAR:&nbsp;<?php echo date("Y")-1; ?></strong> </td>
</tr>
	<tr>
		<td rowspan="2" ></td>
		<td  class="auto-style5" colspan="4" style="height: 23px"><strong>Total Enrollment </strong> </td>
		<!-- <td class="auto-style5" colspan="3" ><strong>New Admissions</strong></td>
		  <td class="auto-style4"  rowspan="2" style="width: 74px"><strong>Free Students</strong></td> -->
	</tr>
	<tr>
		<td class="auto-style4" style="width: 67px"><strong>No. of Sections</strong></td>
		<td class="auto-style4" ><strong>Boys</strong></td>
		<td class="auto-style4" ><strong>Girls</strong></td>
		<td class="auto-style4" ><strong>Total</strong></td>
		<!-- <td class="auto-style4" ><strong>Boys</strong></td>
		<td class="auto-style4" ><strong>Girls</strong></td>
		<td class="auto-style4" style="width: 78px" ><strong>Total</strong></td> -->

	</tr>
	<?php for ($row = 0; $row < count($arr) ;  $row++) {  ?>
	<tr>
		<td class="auto-style4" style="height: 26px" ><?php echo $arr[$row]['class_name'] ; ?> </td>

		<td style="width: 67px; height: 26px;" >
			<input id ="sectionprevious<?php echo $row;?>" onkeyup="javascript: trimalpha(sectionprevious<?php echo $row;?>);" name="enrollment[<?php echo $row;?>][7]" maxlength="4" readonly="readonly" value = "<?php if(isset($arr[$row]['no_of_sectionsprevious']))echo $arr[$row]['no_of_sectionsprevious']; ?>" type="number" onblur="return validate_numeric('#sectionprevious<?php echo $row;?>');" style="width: 72px" /></td>
		<td style="height: 26px" >
					<input id ="boysprevious<?php echo $row;?>" onkeyup="javascript: trimalpha(boysprevious<?php echo $row;?>);" name="enrollment[<?php echo $row;?>][8]" maxlength="5" readonly="readonly"  value =  "<?php if(isset($arr[$row]['total_enrollment_boysprevious']))echo $arr[$row]['total_enrollment_boysprevious']; ?>" type="number" onblur="return add_cost('#boysprevious<?php echo $row;?>','#girls<?php echo $row;?>','#total<?php echo $row;?>');"  style="width: 72px;" /></td>
		<td style="height: 26px" >
					<input id ="girlsprevious<?php echo $row;?>" onkeyup="javascript: trimalpha(girlsprevious<?php echo $row;?>);" name="enrollment[<?php echo $row;?>][9]" maxlength="5" readonly="readonly" value =  "<?php if(isset($arr[$row]['total_enrollment_girlsprevious'])) echo $arr[$row]['total_enrollment_girlsprevious']; ?>"type="number" onblur="return add_cost('#boysprevious<?php echo $row;?>','#girlsprevious<?php echo $row;?>','#totalprevious<?php echo $row;?>');"  style="width: 72px" /></td>
		<td style="height: 26px" >
					<input id ="totalprevious<?php echo $row;?>" name="" type="number" disabled="disabled" style="width: 72px"  value =  "<?php if(isset($arr[$row]['total_enrollment_boysprevious'])||isset($arr[$row]['total_enrollment_girlsprevious'])){
					$BP1 = $arr[$row]['total_enrollment_boysprevious'];
					$GP1 = $arr[$row]['total_enrollment_girlsprevious'];
					echo $data = $BP1+ $GP1;
		}
		 ?>" />
						
		</td>
	</tr>
	<?php 
	 }?>


<tr>
		<td class="auto-style4">Pre-Primary</td>
		
		<?php 
		$tot_pp5=0;  
		$tot_boysprevious5=0;/*$tot_new_boys=0;$tot_new_girls=0;*/
		$tot_girlsprevious5=0;/*$tot_free_stud=0;$total_new_admin=0;*/
		$total5=0;
		for ($val=0;$val<3;$val++) {
		if (isset($arr[$val]['no_of_sectionsprevious'])) {

		$tot_pp5=$tot_pp5 + $arr[$val]['no_of_sectionsprevious'];
		$tot_boysprevious5=$tot_boysprevious5 + $arr[$val]['total_enrollment_boysprevious'];
		$tot_girlsprevious5=$tot_girlsprevious5 + $arr[$val]['total_enrollment_girlsprevious'];
		$total5 = $tot_boysprevious5 + $tot_girlsprevious5 ;
		/*$tot_new_boys = $tot_new_boys + $arr[$val]['total_new_admission_boys'];
		$tot_new_girls = $tot_new_girls + $arr[$val]['total_new_admissions_girls'];
		$total_new_admin = $tot_new_boys + $tot_new_girls;
		$tot_free_stud = $tot_free_stud + $arr[$val]['total_free_admissions_students'];*/
		}
		}
		?>
		<td><input id ="admissions217" name="Text30" type="number" disabled="disabled" style="width: 72px" value="<?php echo $tot_pp5;  ?>" /></td>
		<td><input id ="admissions217" name="Text30" type="number" disabled="disabled" style="width: 72px" value="<?php echo $tot_boysprevious5;  ?>"/></td>
		<td><input id ="admissions217" name="Text30" type="number" disabled="disabled" style="width: 72px" value="<?php echo $tot_girlsprevious5;  ?>"/></td>
		<td><input id ="admissions217" name="Text30" type="number" style="width: 72px" disabled="disabled" value="<?php echo $total5; ?>"/></td>
		
									

	
       </tr>
       <tr>
		<td  class="auto-style4" style="height: 30px">Primary</td>
			<?php 
		$tot_pp6=0;  
		$tot_boys6=0;
		$tot_girls6=0;
		$total6=0;
		for ($val=3;$val<8;$val++) {
		if (isset($arr[$val]['no_of_sectionsprevious'])) {

		$tot_pp6=$tot_pp6 + $arr[$val]['no_of_sectionsprevious'];
		$tot_boys6=$tot_boys6 + $arr[$val]['total_enrollment_boysprevious'];
		$tot_girls6=$tot_girls6 + $arr[$val]['total_enrollment_girlsprevious'];
		$total6 = $tot_boys6 + $tot_girls6 ;
		//$tot_new_boys6 = $tot_new_boys6 + $arr[$val]['total_new_admission_boys'];
		//$tot_new_girls6 = $tot_new_girls6 + $arr[$val]['total_new_admissions_girls'];
		//$total_new_admin6 = $tot_new_boys6 + $tot_new_girls;
		//$tot_free_stud = $tot_free_stud + $arr[$val]['total_free_admissions_students'];
		}
		}
		?>

		<td style="height: 30px"><input id ="admissions217" name="Text30" type="number" disabled="disabled" style="width: 72px" value="<?php echo $tot_pp6;  ?>" /></td>
		<td style="height: 30px"><input id ="admissions217" name="Text30" type="number" disabled="disabled" style="width: 72px" value="<?php echo $tot_boys6;  ?>"/></td>
		<td style="height: 30px"><input id ="admissions217" name="Text30" type="number" disabled="disabled" style="width: 72px" value="<?php echo $tot_girls6;  ?>"/></td>
		<td style="height: 30px"><input id ="admissions217" name="Text30" type="number" style="width: 72px" disabled="disabled" value="<?php echo $total6; ?>"/></td>
		
		</tr>
	
	<tr>
		<td  class="auto-style4">Secondary</td>
		<?php 
		$tot_pp7=0;  
		$tot_boys7=0;
		$tot_girls7=0;
		$total7=0;
		for ($val=8;$val<13;$val++) {
		if (isset($arr[$val]['no_of_sectionsprevious'])) {

		$tot_pp7=$tot_pp7 + $arr[$val]['no_of_sectionsprevious'];
		$tot_boys7=$tot_boys7 + $arr[$val]['total_enrollment_boysprevious'];
		$tot_girls7=$tot_girls7 + $arr[$val]['total_enrollment_girlsprevious'];
		$total7 = $tot_boys7 + $tot_girls7 ;
		//$tot_new_boys = $tot_new_boys + $arr[$val]['total_new_admission_boys'];
		//$tot_new_girls = $tot_new_girls + $arr[$val]['total_new_admissions_girls'];
		//$total_new_admin = $tot_new_boys + $tot_new_girls;
		//$tot_free_stud = $tot_free_stud + $arr[$val]['total_free_admissions_students'];
		}
		}
		?>

		<td><input id ="admissions217" name="Text30" type="number" disabled="disabled" style="width: 72px" value="<?php echo $tot_pp7;  ?>" /></td>
		<td><input id ="admissions217" name="Text30" type="number" disabled="disabled" style="width: 72px" value="<?php echo $tot_boys7;  ?>"/></td>
		<td><input id ="admissions217" name="Text30" type="number" disabled="disabled" style="width: 72px" value="<?php echo $tot_girls7;  ?>"/></td>
		<td><input id ="admissions217" name="Text30" type="number" style="width: 72px" disabled="disabled" value="<?php echo $total7; ?>"/></td>
					
	</tr>
	<tr>
		<td  class="auto-style4" style="height: 30px">School Total</td>
		<?php 
		$tot_pp8=0;  
		$tot_boys8=0;
		$tot_girls8=0;
		$total8=0;
		for ($val=0;$val<13;$val++) {
		if (isset($arr[$val]['no_of_sectionsprevious'])) {
		$tot_pp8=$tot_pp8 + $arr[$val]['no_of_sectionsprevious'];
		$tot_boys8=$tot_boys8 + $arr[$val]['total_enrollment_boysprevious'];
		$tot_girls8=$tot_girls8 + $arr[$val]['total_enrollment_girlsprevious'];
		$total8 = $tot_boys8 + $tot_girls8 ;
		//$tot_new_boys = $tot_new_boys + $arr[$val]['total_new_admission_boys'];
		//$tot_new_girls = $tot_new_girls + $arr[$val]['total_new_admissions_girls'];
		//$total_new_admin = $tot_new_boys + $tot_new_girls;
		//$tot_free_stud = $tot_free_stud + $arr[$val]['total_free_admissions_students'];
		}
		}
		?>

		<td style="height: 30px"><input id ="admissions217" name="Text30" type="number" disabled="disabled" style="width: 72px" value="<?php echo $tot_pp8;  ?>" /></td>
		<td style="height: 30px"><input id ="admissions217" name="Text30" type="number" disabled="disabled" style="width: 72px" value="<?php echo $tot_boys8;  ?>"/></td>
		<td style="height: 30px"><input id ="admissions217" name="Text30" type="number" disabled="disabled" style="width: 72px" value="<?php echo $tot_girls8;  ?>"/></td>
		<td style="height: 30px"><input id ="admissions217" name="Text30" type="number" disabled="disabled" style="width: 72px"  value="<?php echo $total8; ?>"/></td>				
					
	</tr>
</table>
</td>
<td>
<table>
<tr>
<td style="height: 250px; width: 249px">
<table style="width: 100%; padding:20px 0px 0 50px">
<tr>
<td colspan="5" ><strong>PREVIOUS ACADEMIC YEAR:&nbsp;<?php echo date("Y")-2; ?></strong> </td>
</tr>
	<tr>
		<td rowspan="2" ></td>
		<td  class="auto-style5" colspan="2"><strong>Total Enrollment </strong> </td>
		<!-- <td class="auto-style5" colspan="3" ><strong>New Admissions</strong></td>
		  <td class="auto-style4"  rowspan="2" style="width: 74px"><strong>Free Students</strong></td> -->
	</tr>
	<tr>
		<td class="auto-style4" style="width: 67px"><strong>No. of Sections</strong></td>
		<!-- <td class="auto-style4" ><strong>Boys</strong></td> 
		<td class="auto-style4" ><strong>Girls</strong></td> -->
		<td class="auto-style4" style="width: 35px" ><strong>Total</strong></td>
		<!-- <td class="auto-style4" ><strong>Boys</strong></td>
		<td class="auto-style4" ><strong>Girls</strong></td>
		<td class="auto-style4" style="width: 78px" ><strong>Total</strong></td> -->

	</tr>
	<?php for ($row = 0; $row < count($arr) ;  $row++) {  ?>
	<tr>
		<td class="auto-style4" style="height: 26px" ><?php echo $arr[$row]['class_name'] ; ?> </td>

		<td style="width: 67px; height: 26px;" >
			<input id ="sectionpreviousyear2<?php echo $row;?>" onkeyup="javascript: trimalpha(sectionpreviousyear2<?php echo $row;?>);" name="enrollment[<?php echo $row;?>][10]" readonly="readonly" maxlength="5" value = "<?php if(isset($arr[$row]['no_of_sectionsprevious2']))echo $arr[$row]['no_of_sectionsprevious2']; ?>" type="text" onblur="return validate_numeric('#sectionpreviousyear2<?php echo $row;?>');" style="width: 72px" /></td>
		<td style="height: 26px; width: 35px;" >

		
		
					<input id ="total<?php echo $row;?>" onkeyup="javascript: trimalpha(total<?php echo $row;?>);" name="enrollment[<?php echo $row;?>][11]" type="text" readonly="readonly"  style="width: 72px"  value =  "<?php if(isset($arr[$row]['total_enrollments'])){
					echo $arr[$row]['total_enrollments'];
					//$G1 = $arr[$row]['total_enrollment_girls'];
					//echo $B1;
		}
		 ?>" />
						
		</td>
	</tr>
	<?php 
	 }?>


<tr>
		<td class="auto-style4" style="height: 29px">Pre-Primary</td>
		
		<?php 
		$tot_pp9=0;  
		$total_enrollments9=0;
		for ($val=0;$val<3;$val++) {
		if (isset($arr[$val]['no_of_sectionsprevious2'])) {

		$tot_pp9=$tot_pp9 + $arr[$val]['no_of_sectionsprevious2'];
		$total_enrollments9 = $total_enrollments9 + $arr[$val]['total_enrollments'];
		//$tot_girls=$tot_girls + $arr[$val]['total_enrollment_girls'];
		//$total = $tot_boys + $tot_girls ;
		//$tot_new_boys = $tot_new_boys + $arr[$val]['total_new_admission_boys'];
		//$tot_new_girls = $tot_new_girls + $arr[$val]['total_new_admissions_girls'];
		//$total_new_admin = $tot_new_boys + $tot_new_girls;
		//$tot_free_stud = $tot_free_stud + $arr[$val]['total_free_admissions_students'];
		}
		}
		?>
		<td style="height: 29px"><input id ="admissions217" name="Text30" type="text" disabled="disabled" style="width: 72px" value="<?php echo $tot_pp9;  ?>" /></td>
		<td style="width: 35px; height: 29px;"><input id ="admissions217" name="Text30" type="text" style="width: 72px" disabled="disabled" value="<?php echo $total_enrollments9; ?>"/></td>
		
		
		</tr>							

		<td  class="auto-style4">Primary</td>
			<?php 
		$tot_pp10=0;  
		$total_enrollments10=0;
		for ($val=3;$val<8;$val++) {
		if (isset($arr[$val]['no_of_sectionsprevious2'])) {

		$tot_pp10=$tot_pp10 + $arr[$val]['no_of_sectionsprevious2'];
		$total_enrollments10=$total_enrollments10 + $arr[$val]['total_enrollments'];
		//$tot_girls=$tot_girls + $arr[$val]['total_enrollment_girls'];
		//$total = $tot_boys + $tot_girls ;
		//$tot_new_boys = $tot_new_boys + $arr[$val]['total_new_admission_boys'];
		//$tot_new_girls = $tot_new_girls + $arr[$val]['total_new_admissions_girls'];
		//$total_new_admin = $tot_new_boys + $tot_new_girls;
		//$tot_free_stud = $tot_free_stud + $arr[$val]['total_free_admissions_students'];
		}
		}
		?>

		<td>
					<input id ="admissions217" name="Text30" type="text" disabled="disabled" style="width: 72px" value="<?php echo $tot_pp10;  ?>" />
					
		</td>
		<td style="width: 35px">
										
					<input id ="admissions217" name="Text30" type="text" style="width: 72px" disabled="disabled" value="<?php echo $total_enrollments10; ?>"/>
					
		</td>
		
		</tr>
	
	<tr>
		<td  class="auto-style4">Secondary</td>
		<?php 
		$tot_pp11=0;  
		$totalenrollments11=0;
		for ($val=8;$val<13;$val++) {
		if (isset($arr[$val]['no_of_sectionsprevious2'])) {

		$tot_pp11=$tot_pp11 + $arr[$val]['no_of_sectionsprevious2'];
		$totalenrollments11=$totalenrollments11 + $arr[$val]['total_enrollments'];
		//$tot_girls=$tot_girls + $arr[$val]['total_enrollment_girls'];
		//$total = $tot_boys + $tot_girls ;
		//$tot_new_boys = $tot_new_boys + $arr[$val]['total_new_admission_boys'];
		//$tot_new_girls = $tot_new_girls + $arr[$val]['total_new_admissions_girls'];
		//$total_new_admin = $tot_new_boys + $tot_new_girls;
		//$tot_free_stud = $tot_free_stud + $arr[$val]['total_free_admissions_students'];
		}
		}
		?>

		<td>
					<input id ="admissions217" name="Text30" type="text" disabled="disabled" style="width: 72px" value="<?php echo $tot_pp11;  ?>" />
					
		</td>
		<td style="width: 35px">
				
					
					<input id ="admissions217" name="Text30" type="text" style="width: 72px" disabled="disabled" value="<?php echo $totalenrollments11; ?>"/>
					
		</td><td>
		</tr>			
					
	
	<tr>
		<td  class="auto-style4">School Total</td>
		<?php 
		$tot_pp12=0;  
		$totalenrollments12=0;
		for ($val=0;$val<13;$val++) {
		if (isset($arr[$val]['no_of_sectionsprevious2'])) {
		$tot_pp12=$tot_pp12 + $arr[$val]['no_of_sectionsprevious2'];
		$totalenrollments12=$totalenrollments12 + $arr[$val]['total_enrollments'];
		//$tot_girls=$tot_girls + $arr[$val]['total_enrollment_girls'];
		//$total = $tot_boys + $tot_girls ;
		//$tot_new_boys = $tot_new_boys + $arr[$val]['total_new_admission_boys'];
		//$tot_new_girls = $tot_new_girls + $arr[$val]['total_new_admissions_girls'];
		//$total_new_admin = $tot_new_boys + $tot_new_girls;
		//$tot_free_stud = $tot_free_stud + $arr[$val]['total_free_admissions_students'];
		}
		}
		?>

		<td><input id ="admissions217" name="Text30" type="text" disabled="disabled" style="width: 72px" value="<?php echo $tot_pp12;  ?>" /></td>
		<td style="width: 35px"><input id ="admissions217" name="Text30" type="text" style="width: 72px" disabled="disabled" value="<?php echo $totalenrollments12; ?>"/></td>				
					
	</tr>
</table>

<br/>

</td>

</tr>
</td>
</tr>
</table>
<tr>
<td align="right" style="padding-right:-300px">
<input id = "admissions" name="Submit1" type="submit" value="submit" onclick="return validate_admission_button(<?php //echo count($arr['class_id']); ?>);" style="width: 111px" />
<tr><td align="right" sty><?php if(isset($message)) echo "$message"; ?></td></tr>
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

