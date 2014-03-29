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

		<div class="message thank-message">
		<form name ="" action = "/admin/displayobservation/?info=<?php echo $info ; ?>"  method = "POST" >
	
	<?php $resp = count($arr['getvalue']) ;
	?>
<select id="observ"  name="response[]">
<option value="" ></option>
<?php if ($resp!=0){ $compare = '14'; ?>
<?php  for ($drop = 0; $drop < $resp ; $drop++){?>
<?php if ($arr['getvalue'][$drop]['observ_sub_cat_id'] ==''){?>
<option value="<?php echo $arr['getvalue'][$drop]['response'][0]; ?>" ><?php echo $arr['getvalue'][$drop]['response']; ?></option>
<?php }?>
<?php }?>
<?php }?>
</select>
<input type = "submit" name ="Submit"  value ="submit" />
</form>
			<div class="auto-style1">
			<br/>
				</div>		
			 
			
			<div align="left">
				<div class="auto-style4">
			<label><strong>OBSERVATIONS<br />
					<br />
					</strong></label></div>
<form method = "post" id ="" action = "/admin/addobservation/?info=<?php echo $info ; ?>"    style="width:100%">
<table>
<tr>
<td><table border="0"  width="100%">
 
  <tr ><!-- Row 1 -->
     <td class="auto-style3" colspan="2">
     <div align="right" class="auto-style5"><strong>Name &nbsp&nbsp</strong></div></td>
     <td  ><input id="Name" type="text" name="Name"  maxlength="30" readonly="readonly"  value="<?php $_REQUEST['Name']; { echo "$name"; } ?>" onblur="return validate_observ_name('#Name');"  /></td></tr>
    <tr></tr> <td class="auto-style3" colspan="2">
	 <div align="right" class="auto-style5"><strong>Subject Taught &nbsp&nbsp</strong></div></td>
     <td  ><input id="subject_taught" type="text" name="subject_taught" onblur="return validate_observ_subjecttaught('#subject_taught')" value=""  maxlength="20" /></td></tr><!-- Col 3 -->
     <td class="auto-style3" colspan="2">
	 <div align="right" class="auto-style5"><strong>Class Taught &nbsp&nbsp</strong></div></td> 
      <td  ><input id="class_taught" type="text" name="class_taught" maxlength="2" value="" onblur="return validate_observ_classtaught('#class_taught')"  /></td><!-- Col 2 --></tr><tr>
     
       </tr>
        <tr ><!-- Row 1 -->
     <td class="auto-style3" colspan="2" style="height: 30px">
	 <div align="center" class="auto-style5"><strong>Indicators   &nbsp&nbsp</strong></div></td> <!-- Col 1 -->
      <!-- Col 2 -->
     <td class="auto-style5" style="height: 30px" ><!-- Col 3 -->
	 <div align="center" ><input type = "text" readonly = "readonly" cursur = "disabled" value = "<?php $value =($resp/25)+1 ;echo("T$value") ;?>" name = "response[]" /> 
	 </div></td>
	   </tr>
 
   <?php  $row1=1; 
   $observ_cat_id =$arr['setvalues'][0]['observ_cat_id'];
$observ_cat_id=1;
	for ($row = 0; $row < count($arr['setvalues']) ;  $row++) { 
	if($arr['setvalues'][$row]['observ_cat_id'] == $observ_cat_id) {
	$observ_cat_id++ ; 
		?>
  <tr style="background-color:#008000"><!-- Row 1 -->
	 <td class="auto-style8" colspan="3"><?php echo $arr['setvalues'][$row]['observ_cat_name']; ?></td>
	  <!-- Col 1 -->
   </tr>
   <?php }?>
   <tr><!-- Row 1 -->
   <td class="auto-style9"><?php echo $row1++; ?> </td>
     <td ><?php  echo $arr['setvalues'][$row]['observ_sub_cat_name']; ?>
     
	 <td>

		 <select id="teacher_response[<?php echo $row; ?>]0" name="teacher_response[<?php echo $row; ?>]0" style="width: 108px">
		 
		 <option>Yes</option>
		 <option>Ineffective</option>
		 <option>No</option>
		 <option>NA</option>
		

		 </select>
	   </td>

<input type = "hidden" value = "<?php echo $arr['setvalues'][$row]['observ_sub_cat_id']; ?>" name = "observ_sub_cat_id[]" />
<input type = "hidden" value = "<?php echo $arr['setvalues'][$row]['observ_cat_id']; ?>" name = "observ_cat_id[]" />
<?php } ?>
</td>

   </tr>

<tr>
<td align="right" width="">
<input name="Submit1" type="submit" value="submit" style="width: 101px" /></td></tr>
<tr><td align="right"><?php if(isset($confirm)) echo "$confirm"; ?>
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

