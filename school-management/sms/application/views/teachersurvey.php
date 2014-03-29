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
  
  .auto-style10 {
	  font-family: "Microsoft Sans Serif";
	  font-size: x-small;
  }
  
  </style>
  </head>
<div id="shell">
	
	<!-- Header -->
	<div id="header">
		<h1><a href="#">School Managment System</a></h1>
		<div class="right">
			<p>Welcome <a href="#"><strong>Administrator</strong></a></p>
			<p class="small-nav"><a href="">Help</a> / <a href="">Profile Settings</a> / <a href="/home/logout">Log Out</a></p>
		</div>
	</div>
	
	<!-- End Header -->
	
	<!-- Navigation -->
	<?php    $this->load->view('menu'); ?>
	<!-- End Navigation -->
	<?php //echo "<pre>"; print_r($arr['getvalue']); ?>
	<!-- Content -->
	<div id="content">
		<?php    $this->load->view('dashboard', $info); ?>
		<br/>

		<div class="message thank-message">
		<form name ="" action = "/admin/displayteachersurvey/?info=<?php echo $info ; ?>"  method = "POST" >
	<?php $resp = count($arr['getvalue']) ;
	?>
<select id="teachersur"  name="response[]">
<option value="" >-----</option>
<?php if ($resp != 0){
$compare = '0';  ?>
<?php  for ($drop = 0; $drop < $resp ; $drop++){?>
<?php if ($arr['getvalue'][$drop]['teacher_code_name'] != $compare){?>
<?php $compare = $arr['getvalue'][$drop]['teacher_code_name'] ; 
$T1++ ;  ?>
<option value="<?php echo $arr['getvalue'][$drop]['teacher_code_name']; ?>" ><?php echo $arr['getvalue'][$drop]['teacher_code_name']; ?></option>
<?php }?>
<?php }?>

<input type = "hidden" name ="getresponse"  value ="<?php echo $T1 ; ?>" >
<?php }?>
</select>
<input type = "submit" name ="Submit"  value ="submit" >
</form>
			<div class="auto-style1">
			<br/>
				</div>		
			 
			
			<div align="left">
				<div class="auto-style4">
			<label><strong>TEACHER SURVEY DETAILS<br />
					<br />
					</strong></label></div>
<form method = "post" id ="" action = "/admin/addteachersurvey/?info=<?php echo $info ; ?>"    style="width:79%; height: 167px;">
	<table border="0" style="width: 97%">
  <tr ><!-- Row 1 -->
     <td class="auto-style3" colspan="2">
	 <div align="right" class="auto-style5"><strong>Respondent   --->   </strong></div></td><!-- Col 1 -->
      <!-- Col 2 -->
	   
     <td class="auto-style10" ><strong>SL RESPONSE</strong></td>
	 <td >
		 <strong>
		 <input type = "text" readonly = "readonly" cursur = "disabled" value = "<?php if(isset($T1)){ $T = $T1+1; echo("T$T"); }else echo "T1"; ?>" name = "response[]" size="20" style="width: 92px" class="auto-style10" />
		</strong></td>
	   </tr><!-- Row 1 --> 
  
 
 <?php  $row1=1; //echo "<pre>" ; 
// print_r($arr);
    $survey_cat_id =$arr['setvalues'][0]['survey_cat_id'];
	for ($row = 0; $row < count($arr['setvalues']) ;  $row++) { 
	if($arr['setvalues'][$row]['survey_cat_id'] == $survey_cat_id) {
	$survey_cat_id++ ; 
		?>
  <tr style="background-color:#008000"><!-- Row 1 -->
	 <td class="auto-style8" colspan="4"><?php echo $arr['setvalues'][$row]['survey_cat_type']; ?></td>
  </tr>	  <!-- Col 1 -->
   <?php }?>
   <tr><!-- Row 1 -->
   <td class="auto-style9" style="width: 28px"><?php echo $row1++; ?></td>
     <td style="width: 692px" ><?php echo $arr['setvalues'][$row]['survey_sub_cat_name']; ?></td>
     <td> 
		 <select id="teachersur<?php echo($row);?>0" name="teacher_response[0][<?php echo($row);?>]" style="width: 87px" >
			<option value="NULL" >Select</option>
			<option value="0" >0</option>
			<option value="1" >1</option>
			<option  value="2" >2</option>
</select>
 <input type = "hidden" value = "<?php echo $arr['setvalues'][$row]['survey_sub_cat_id']; ?>" name = "survey_sub_cat_id[]">
 <input type = "hidden" value = "<?php echo $arr['setvalues'][$row]['survey_cat_id']; ?>" name = "survey_cat_id[]"> 
</td>
	 <td style="width: 101px" ><div>
	 <?php if($arr['setvalues'][$row]['survey_sub_cat_type'] == 'dropdown') {
	    //if ($resp != 0){
	  // $compare =$arr['getvalue'][$row]['teacher_response']; 
	  // } ?> 
		 <select id="teachersur<?php echo($row);?>" name="teacher_response[1][<?php echo($row);?>]" value = "<?php echo $arr['setvalues'][$row]['survey_sub_cat_id']; ?>" style="width: 87px" >
			<option value="NULL" >Select</option>
			<option value="0" >0</option>
			<option value="1" >1</option>
			<option  value="2" >2</option>
</select></div></td><!-- Col 1 -->
<?php } elseif($arr['setvalues'][$row]['survey_sub_cat_type'] == 'text') { ?>
<input type = "text" value = "" name="teacher_response[1][<?php echo($row);?>]" >
 <?php } ?>
  
  <?php }?>
   </tr>
<tr>
<td colspan="4" align="center">
<input name="Submit1" type="submit" value="submit" style="width: 101px" /></td>
</tr>
</table>				 
				</form>

<?php $this->load->view('header'); ?>

