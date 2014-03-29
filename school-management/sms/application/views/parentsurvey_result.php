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
		<h1><a href="#">School Managment System</a></h1>
		<div class="right">
			<p>Welcome <a href="#"><strong>Administrator</strong></a></p>
			<p class="small-nav"><a href="#">Help</a> / <a href="">Profile Settings</a> / <a href="/sms/home/logout">Log Out</a></p>
		</div>
	</div>

<a href ="/admin/parentsurvey/?info=<?php echo $info; ?>">  Observations main</option>
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
	<form name ="" action = "/admin/displayparentsurvey/?info=<?php echo $info ; ?>"  method = "POST" >
	<?php $resp = count($arr['getvalue']) ;
	?>
<select id="teachersur"  name="response[]">
<?php  for ($drop = 1; $drop <= $_REQUEST['getresponse'] ; $drop++){?>
<option value="<?php echo "R$drop"; ?>" ><?php echo "R$drop"; ?></option>
<?php }?>
</select>
<input type = "hidden" name ="getresponse"  value ="<?php echo $_REQUEST['getresponse']; ?>" >
<input type = "submit" name ="Submit"  value ="submit" >
</form>
			
			<div align="left">
				<div class="auto-style4">
			<label><strong>PARENT SURVEY DETAILS<br />
					<br />
					</strong></label></div>
<form method = "post" id ="" action = "/admin/editparentsurvey/?info=<?php echo $info; ?>"    style="width:100%">
<table>
<tr>
<td><table border="0"  width="100%">
  <tr ><!-- Row 1 -->
     <td class="auto-style3" colspan="2">
	 <div align="right" class="auto-style5"><strong>Respondent   --->   &nbsp&nbsp</strong></div></td><!-- Col 1 -->
      <!-- Col 2 -->
     <td class="auto-style5" >
	 <div align="center" class="auto-style3"><strong><input type = "text" value ="<?php echo $_REQUEST['response'][0]; ?>" name = "response[]" readonly ="readonly" ></strong></div></td>
	   </tr>
  <tr ><!-- Row 1 -->
     <td class="auto-style3" colspan="2">
	 <div align="right" class="auto-style5"><strong>Class of the student &nbsp&nbsp</strong></div></td><!-- Col 1 -->
      <!-- Col 2 -->
     <td class="auto-style3" >
	 <div align="center" class="auto-style5"><strong>Pri</strong></div></td><!-- Col 3 -->
  </tr>
 
   <?php $survey_cat_id =1; $row1=1;
	  for ($row = 0; $row < count($arr['setvalues']) ;  $row++) { 
	if($arr['setvalues'][$row]['survey_cat_id'] == $survey_cat_id) {
	$survey_cat_id++ ; 
		?>
  <tr style="background-color:#008000"><!-- Row 1 -->
	 <td class="auto-style8" colspan="2"><?php echo $arr['setvalues'][$row]['survey_cat_type']; ?></td>
	  <!-- Col 1 -->
   </tr>
   <?php }?>
   <tr><!-- Row 1 -->
   <td class="auto-style9"><?php echo $row1++; ?></td>
     <td ><?php echo $arr['setvalues'][$row]['survey_sub_cat_name']; ?></td>
	 <td ><div>
	 <?php if($arr['setvalues'][$row]['survey_sub_cat_type'] == 'dropdown') {
	   $compare =$arr['getvalue'][$row]['parent_response']; ?> 
	     <input type = "hidden" value = "<?php echo $arr['setvalues'][$row]['survey_sub_cat_id']; ?>" name = "survey_sub_cat_id[]">
		  <input type = "hidden" value = "<?php echo $arr['setvalues'][$row]['survey_cat_id']; ?>" name = "survey_cat_id[]"> 
		 <select id="parentsur<?php echo($row);?>" value  = "<?php echo $arr['setvalues'][$row]['survey_sub_cat_id']; ?>" name="parent_response[]">
			<option value="Select" <?php if ($compare == 'Select') echo "selected" ; ?> >Select</option>
			<option value="0" <?php if ($compare == '0') echo "selected" ; ?> >0</option>
			<option value="1" <?php if ($compare == '1') echo "selected" ; ?>  >1</option>
			<option  value="2" <?php if ($compare == '2') echo "selected" ; ?>  >2</option>
</select></div></td><!-- Col 1 -->
<?php } elseif($arr['setvalues'][$row]['survey_sub_cat_type'] == 'text') { ?>
<input type = "text" value = "<?php echo $arr['getvalue'][$row]['parent_response']; ?>" name = "parent_response[]">
 <input type = "hidden" value = "<?php echo $arr['setvalues'][$row]['survey_sub_cat_id']; ?>" name = "survey_sub_cat_id[]">
<input type = "hidden" value = "<?php echo $arr['setvalues'][$row]['survey_cat_id']; ?>" name = "survey_cat_id[]">
<?php } ?>
   </tr>
  <?php }?>
<tr>
<td align="center">
<input type = "hidden" name ="getresponse"  value ="<?php echo $_REQUEST['getresponse']; ?>" >
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

