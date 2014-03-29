<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
 <?php    $this->load->view('header'); ?>
  <style type="text/css">
  .auto-style1 {
	  text-align: CENTER;
	
  }
  
  .auto-style3 {
	  background-color: #808080;
  }
  
  .auto-style4 {
	  text-align: CENTER;
	  font-size: large;
  }
  .auto-style5 {
	  color: #FFFFFF;
  }
  
  .auto-style6 {
	  font-weight: bold;
	  background-color: #808080;
	  color: #FFFFFF;
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
  
  </style>
  </head>
<div id="shell">
	
	<!-- Header -->
	<div id="header">
		<h1><a href="">School Managment System</a></h1>
		<div class="right">
			<p>Welcome <a href="#"><strong>Administrator</strong></a></p>
			<p class="small-nav"><a href="#">Help</a> / <a href="">Profile Settings</a> / <a href="/home/logout">Log Out</a></p>
		</div>
	</div>

<a href ="/admin/observations/?info=<?php echo $info; ?>">  Observations main
	<!-- End Header -->
	
	<!-- Navigation -->
	<?php    $this->load->view('menu'); ?>
	<!-- End Navigation -->
	
	<!-- Content -->
	<div id="content">
		<?php    $this->load->view('dashboard',$info); ?>
		<div class="message thank-message">
			<div class="auto-style1">
			<br/>
				</div>		
			 
			
			<div align="left">
				<div class="auto-style4">
			<label><strong>OBSERVATION<br />
					<br />
					</strong></label></div>
<form method = "post" id ="" action = "/admin/editobservation/?info=<?php echo $info; ?>"    style="width:100%">
<?php $resp = count($arr['getvalue']) ;	?>

<table>
<tr>
<td><table border="0"  width="100%">
  <tr ><!-- Row 1 -->
    <td class="auto-style3" colspan="2">
	 <div align="right" class="auto-style5"><strong>Class Taught &nbsp&nbsp</strong></div></td><!-- Col 1 -->
      <!-- Col 2 -->
     <td class="auto-style3" ><input type="text" name="class_taught" /></td><!-- Col 3 --></tr><tr>
     <td class="auto-style3" colspan="2">
	 <div align="right" class="auto-style5"><strong>Subject Taught &nbsp&nbsp</strong></div></td>
     <td class="auto-style3" ><input type="text" name="subject_taught" /></td>
       </tr>
        <tr ><!-- Row 1 -->
     <td class="auto-style3" colspan="2" style="height: 30px">
	 <div align="right" class="auto-style5"><strong>Indicators   --->   &nbsp&nbsp</strong></div></td><!-- Col 1 -->
      <!-- Col 2 -->
     <td class="auto-style5" style="height: 30px" >
	 <div align="center" class="auto-style3"><input type = "text" readonly = "readonly" cursur = "disabled" value = "<?php $value =($resp/25)+1 ;echo("T$value") ;?>" name = "response[]" > </div></td>
	   </tr>
 
 <?php  $row1=1; //print_r($arr['setvalues']);
   $observ_cat_id =$arr['setvalues'][0]['observ_cat_id'];
	for ($row = 0; $row < count($arr['setvalues']) ;  $row++) { 
	if($arr['setvalues'][$row]['observ_cat_id'] == $observ_cat_id) {
	$observ_cat_id++ ; 
		?>
  <tr style="background-color:#008000"><!-- Row 1 -->
	 <td class="auto-style8" colspan="2"><?php echo $arr['setvalues'][$row]['observ_cat_name']; ?></td>
	  <!-- Col 1 -->
   </tr>
   <?php }?>
   <tr><!-- Row 1 -->
   <td class="auto-style9"><?php echo $row1++; ?></td>
     <td ><?php echo $arr['setvalues'][$row]['observ_sub_cat_name']; ?></td>
     <td>

		 <select name="teacher_response[<?php echo $row; ?>]" style="width: 108px">
		 <?php if (isset($arr['getvalue'][$row]['teacher_response'])){ ?>
		 		
		 <option value="Yes" <?php if ($arr['getvalue'][$row]['teacher_response']  == 'Yes'){ ?> selected  = "selected" <?php } ?>>Yes</option>
		 <option value="No" <?php if ($arr['getvalue'][$row]['teacher_response']  == 'No'){ ?> selected  = "selected" <?php } ?>>No</option>
		 <option value="NA" <?php if ($arr['getvalue'][$row]['teacher_response']  == 'NA'){ ?> selected  = "selected" <?php } ?>>NA</option>
		 <option value="Ineffective" <?php if ($arr['getvalue'][$row]['teacher_response']  == 'Ineffective'){ ?> selected  = "selected" <?php } ?>>Ineffective</option>
		 <?php }else{?>
		 <option>Yes</option>
	  	 <option>No</option>
		 <option>NA</option>
		 <option>Ineffective</option>
		 <?php }?>

		 </select>
	   </td>

	 <!-- Col 1 -->
 <input type = "hidden" value = "<?php echo $arr['setvalues'][$row]['observ_sub_cat_id']; ?>" name = "observ_sub_cat_id[]">
<input type = "hidden" value = "<?php echo $arr['setvalues'][$row]['observ_cat_id']; ?>" name = "observ_cat_id[]">
<?php } ?>
   </tr>
  
<tr>
<td align="center">
<input name="Submit1" type="submit" value="submit" style="width: 101px" /></td>
</tr>
</table>				 
				 
				   
			    
			    </form>
		
		</div>
		
		
	</div>
	
	<!-- End Content -->
</div>
<!-- End Shell -->
<?php    $this->load->view('header'); ?>

