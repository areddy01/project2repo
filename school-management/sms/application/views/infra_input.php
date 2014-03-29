<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
 <?php    $this->load->view('header'); ?>
  <style type="text/css">
  .auto-style1 {
	  text-align: CENTER;
  }
  .auto-style2 {
	  margin-right: 75px;
  }
  .auto-style5 {
	  font-size: large;
	  text-transform: uppercase;
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
			<div class="auto-style1">
			<label><b><span class="auto-style5">Infra Details</span> <br />
					<br />
					</b></label>
				</div>
<form method = "post" id ="" action = "/infra/input/?info=<?php echo $info; ?>"  value = ""  style="width:40%" class = "auto-style2">
<table>
<tr>
<td style="width: 672px">
<table border="0" cellpadding="1" style="width: 122%; height: 707px;" >


	<tr>
		<td style="width: 293px; height: 23px">Name of the School (Full Name)</td>
		<td colspan="3" style="height: 23px">
		<?php if(isset($this->arr['school_name'])) echo $this->arr['school_name']; ?>
 		<!--<input id = "schoolname" name="school_profile[school_name]" style="width: 539px" type="text" value = "<?php if(isset($this->arr['school_name'])) echo $this->arr['school_name']; ?> "/> --></td>
	</tr>
	<tr>
		<td style="width: 293px">School Name for Graphs</td>
		<td style="width: 179px">
		<input id = "schoolgraph" name="school_profile[school_desc]" type="text" onblur="return validat_nulls('#schoolgraph')" value = "<?php  if(isset($school_desc)) echo $school_desc ; ?>" /></td>
		<td style="width: 464px">APS average</td>
		<td style="width: 101px">&nbsp;</td>
	</tr>
	<tr>
		<td style="width: 293px; height: 7px;">Location</td>
		<td><?php if(isset($this->arr['school_code'])) echo substr($this->arr['school_code'],0,3); ?></td>
<!--		<td style="width: 179px; height: 7px;">

		<select name="school_profile[location]" style="width: 67px">	
		<?php if (isset($location)){?>	
		<option value="HYD" <?php if ($location  == 'HYD'){ ?> selected  = "selected" <?php } ?> >HYD</option>
		<option value="BLR" <?php if ($location  == 'BLR'){ ?> selected  = "selected" <?php } ?>>BLR</option>
		<option value="DEL" <?php if ($location  == 'DEL'){ ?> selected  = "selected" <?php } ?> >DEL</option>
		<?php }else{?>
		<option value="HYD" >HYD</option>
		<option value="HYD" >BLR</option>
		<option value="HYD" >DEL</option>
	<?php }?>



		</select></td> -->
		<td style="height: 7px; width: 464px;"></td>
		<td style="height: 7px; width: 101px;"></td>
	</tr>
	<tr>
		<td style="width: 293px">Year Of Establishment</td>
		<td style="width: 179px">
		<input id = "year_of_estd" name="school_profile[year_of_estblished]" type="text" onblur="return validat_numeric('#year_of_estd')" value = "<?php  if(isset($year_of_estblished)) echo $year_of_estblished ; ?> "/></td>
		<td rowspan="2" style="width: 464px">School assessed by ( initials only)</td>
		<td rowspan="2" style="width: 101px">
		<input id = "sch_assessed_by" name="assessment[school_assessed_by]" type="text" onblur="return validat_nulls('#sch_assessed_by')" value = "<?php if(isset($school_assessed_by)) echo $school_assessed_by ; ?>" style="width: 128px"/></td>
	</tr>
	<tr>
		<td style="width: 293px">Recognition</td>
		<td style="width: 179px"><select name="school_profile[recognition]" style="width: 64px" value = "<?php echo $recognition ; ?>">
		<?php if (isset($recognition)){?>
		<option value="Yes" <?php if ($recognition  == 'Yes'){ ?> selected  = "selected" <?php } ?>>Yes</option>
		<option value="No" <?php if ($recognition  == 'No'){ ?> selected  = "selected" <?php } ?> >No</option>
		<?php }else{?>
		<option value="YES" >YES</option>
		<option value="NO" >NO</option>
		<?php }?>

		</select></td>
		
	</tr>
	<tr>
		<td style="width: 293px; height: 24px">Recognition Upto Class(Enter Class)</td>
		<td style="height: 24px; width: 179px;">
		<select name="school_profile[recognition_upto_class]" style="width: 92px">
		<?php if (isset($recognition_upto_class)){?>
		<option value="Class 1" <?php if ($recognition_upto_class  == 'Class 1'){ ?> selected  = "selected" <?php } ?>>Class 1</option>
		<option value="Class 2" <?php if ($recognition_upto_class  == 'Class 2'){ ?> selected  = "selected" <?php } ?>>Class 2</option>
		<option value="Class 3" <?php if ($recognition_upto_class  == 'Class 3'){ ?> selected  = "selected" <?php } ?>>Class 3</option>
		<option value="Class 4" <?php if ($recognition_upto_class  == 'Class 4'){ ?> selected  = "selected" <?php } ?>>Class 4</option>
		<option value="Class 5" <?php if ($recognition_upto_class  == 'Class 5'){ ?> selected  = "selected" <?php } ?>>Class 5</option>
		<option value="Class 6" <?php if ($recognition_upto_class  == 'Class 6'){ ?> selected  = "selected" <?php } ?>>Class 6</option>
		<option value="Class 7" <?php if ($recognition_upto_class  == 'Class 7'){ ?> selected  = "selected" <?php } ?>>Class 7</option>
		<option value="Class 8" <?php if ($recognition_upto_class  == 'Class 8'){ ?> selected  = "selected" <?php } ?>>Class 8</option>
		<option value="Class 9" <?php if ($recognition_upto_class  == 'Class 9'){ ?> selected  = "selected" <?php } ?> >Class 9</option>
		<option value="Class 10" <?php if ($recognition_upto_class  == 'Class 10'){ ?> selected  = "selected" <?php } ?>>Class 10</option>
		<?php }else{?>
		<option value="Class 1" >Class 1</option>
		<option value="Class 2" >Class 2</option>
		<option value="Class 3" >Class 3</option>
		<option value="Class 4" >Class 4</option>
		<option value="Class 5" >Class 5</option>
		<option value="Class 6" >Class 6</option>
		<option value="Class 7" >Class 7</option>
		<option value="Class 8" >Class 8</option>
		<option value="Class 9" >Class 9</option>
		<option value="Class 10" >Class 10</option>
		<?php }?>
		</select></td>
		<td style="height: 24px; width: 464px;">Date of assessment(format: July 2,2012)</td>
		<td style="height: 24px; width: 101px;">
		<input id = "date_of_assessment" name="assessment[assessment_date]" type="text" readonly="readonly" style="color:#000000; margin:-2px 0px 0px 0px;vertical-align:top; width: 128px;" onblur="return validat_nulls('#date_of_assessment')" value = "<?php if(isset($assessment_date)) echo $assessment_date ; ?> "/></td>
	</tr>
	
	<tr>
		<td style="width: 293px">Accreditation</td>
		<td style="width: 179px">
			<input id="accreditation" name="school_profile[accredition]" type="text" onblur="return validat_nulls('#accreditation')"   value = "<?php if(isset($accredition)) echo $accredition; ?>"/></td>
		<td style="width: 464px">Is the School assessed again in the same year?<br />
		</td>
		<td style="height: 23px; width: 101px;">
		<select name="assessment[school_assessed_again_same_year]" style="width: 89px">
		<?php if (isset($school_assessed_again_same_year)){?>
			<option value="Yes" <?php if ($school_assessed_again_same_year  == 'Yes'){ ?> selected  = "selected" <?php } ?> >Yes</option>
			<option value="No" <?php if ($school_assessed_again_same_year  == 'No'){ ?> selected  = "selected" <?php } ?> >No</option>
		<?php }else{?>
		<option value="YES" >YES</option>
		<option value="NO" >NO</option>
		<?php }?>

		</select></td>
	</tr>
	<tr>
		<td style="width: 293px">Qualification</td>
		<td style="width: 179px">
		
			<input id="qualification" name="school_profile[qualification]" type="text" onblur="return validat_nulls('#qualification')" value = "<?php if(isset($qualification)) echo $qualification ; ?>"/></td>
			<td style="width: 464px" >If yes, mention assessment </td>
		<td  style="width: 101px"><select name="assessment[assessment_type_if_re_assessed]" style="width: 88px">
		<?php if (isset($assessment_type_if_re_assessed)){?>
		<option value="Baseline" <?php if ($assessment_type_if_re_assessed  == 'Baseline'){ ?> selected  = "selected" <?php } ?>>Baseline</option>
		<option value="Endline" <?php if ($assessment_type_if_re_assessed  == 'Endline'){ ?> selected  = "selected" <?php } ?>>Endline</option>
		<?php }else{?>
		<option value="Baseline" >Baseline</option>
		<option value="Endline" >Endline</option>
		<?php }?>

		</select></td>
	</tr>
	<tr>
		<td style="width: 293px">Correspondant Name ( Include salutation)</td>
		<td style="width: 179px">
		
			<input id = "corrname" name="school_profile[correspondent_name]" type="text" onblur="return validat_nulls('#corrname')" value = "<?php if(isset($correspondent_name)) echo $correspondent_name ; ?>"/></td>
		<td style="width: 464px">School Code</td>
		<td style="width: 101px">
		<?php if(isset($this->arr['school_code'])) echo $this->arr['school_code'];  ?>
		<!-- 	<input id = "Sch_code" name="school_profile[school_code]" style="width: 88px" type="text" onblur="return validat_nulls('#Sch_code')"  value = "<?php if(isset($this->arr['school_code'])) echo $this->arr['school_code'];  ?>"/>-->
		</td>
	</tr>
	<tr>
		<td style="width: 293px">Phone No.</td>
		<td style="width: 179px">
		
			<input id = "ph_no" name="school_profile[phone_no]" type="text" onblur="return validat_numeric('#ph_no')" value ="<?php if(isset($phone_no)) echo $phone_no ; ?>"/><div id = "phonenum" style = "display:none;color:red;">Type a valid phone numebr please</div></td>
		<td style="width: 464px">Co-education</td>
		<td style="width: 101px">
		
			<select name="school_profile[co_education]">
			<?php if (isset($assessment_type_if_re_assessed)){?>
			<option value="Yes" <?php if ($co_education  == 'Yes'){ ?> selected  = "selected" <?php } ?>>Yes</option>
			<option value="No"  <?php if ($co_education  == 'No'){ ?> selected  = "selected" <?php } ?> >No</option>
			<?php }else{?>
			<option value="YES" >YES</option>
			<option value="NO" >NO</option>
			<?php }?>

			</select></td>
	</tr>
	<tr>
		<td style="width: 293px">
		<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;width:248pt" width="331">
			<colgroup>
				<col style="mso-width-source:userset;mso-width-alt:8009;width:164pt" width="219" />
				<col style="mso-width-source:userset;mso-width-alt:4096;width:84pt" width="112" />
			</colgroup>
			<tr height="19" style="height:14.25pt">
				<td bgcolor="#FFFFFF"  colspan="2" height="19" style="height: 14.25pt; width: 248pt" width="331">
				School Mailing Address:</td>
			</tr>
		</table>
		</td>
		<td colspan="3">
		
			<input id = "sch_mail_add" name="school_profile[school_mailing_address]" type="text" onblur="return validat_nulls('#sch_mail_add')" value = "<?php if(isset($school_mailing_address)) echo $school_mailing_address ; ?>"/><div id = "emailinfo" style = "display:none;color:red;">Type a valid e-mail please</div></td>
	</tr>
	<tr>
		<td style="width: 293px">
		<table border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse;width:248pt" width="331">
			<colgroup>
				<col style="mso-width-source:userset;mso-width-alt:8009;width:164pt" width="219" />
				<col style="mso-width-source:userset;mso-width-alt:4096;width:84pt" width="112" />
			</colgroup>
			<tr height="20" style="height:15.0pt">
				<td colspan="2" height="20" style="height: 15.0pt; width: 248pt" width="331">
				City </td>
			</tr>
		</table>
		</td>
		<td colspan="3">
		
			<input id = "city" name="school_profile[city]" type="text" onblur="return validat_nulls('#city')"  value = "<?php if(isset($city))  echo $city ; ?>"/></td>
	</tr>
	<tr><td>Pincode:</td> <td><input id = "city_pincode" name="school_profile[pincode]" type="text" onblur="return validat_numeric('#city_pincode')" value = "<?php if(isset($pincode)) echo $pincode; ?> "/></td></tr>
	<tr><td colspan="4"><br />
		<strong>FACILITIES</strong></td></tr>
<?php $facility_cat_id = 1 ;
for ($row = 0; $row < count($arr) ;  $row++) { 
	if($arr[$row]['facility_cat_id']== $facility_cat_id){
	$facility_cat_id ++; ?>
	<tr><td colspan="4"><strong><em><?php echo $arr[$row]['facility_cat_name'];?></em></strong></td></tr>
	<?php }?>
	<tr><td><?php echo $arr[$row]['facility_sub_cat_name'];?></td><td colspan="3">
	<?php if ($arr[$row]['facility_sub_cat_type'] =='textbox'){ ?>

	<?php $facility_sub_cat_name =  $arr[$row]['facility_sub_cat_name'] ; ?>

		<input name="school_facility[]" type="text" value = "<?php if(isset($arr[$row]['facility_sub_cat_value']))echo $arr[$row]['facility_sub_cat_value']; ?>"/>

	<input name="school_cat_id[]" type="hidden" value = "<?php echo $arr[$row]['facility_cat_id'];?>"/>

	<input name="school_sub_cat_id[]" type="hidden" value = "<?php echo $arr[$row]['facility_sub_cat_id'];?>"/>

	<?php }
	
	else if ($arr[$row]['facility_sub_cat_type'] =='dropdown'){
		$options = $arr[$row]['facility_sub_cat_type_field'];
	$parts = explode(",", $options);
	?>	
	<select name = "school_facility[]" id = "">
	<?php for ($options  = 0; $options < count($parts); $options++){?>
	
	<?php if (isset($arr[$row]['facility_sub_cat_value'])){?>
	<?php if ($arr[$row]['facility_sub_cat_value'] == $parts[$options] ) {?>
	<option name = "<?php echo $parts[$options]; ?>" selected  = "selected"  ><?php echo $parts[$options]; ?></option>
	<?php }
	else{?>
	<option name = "<?php echo $parts[$options]; ?>"  ><?php echo $parts[$options]; ?></option>
	<?php }?>
	<?php }
	else{?>
	<option name = "<?php echo $parts[$options]; ?>"  ><?php echo $parts[$options]; ?></option>
	<?php }?>
	<?php }?>
	</select> 
	<input name="school_cat_id[]" type="hidden" value = "<?php echo $arr[$row]['facility_cat_id'];?>"/>
	<input name="school_sub_cat_id[]" type="hidden" value = "<?php echo $arr[$row]['facility_sub_cat_id'];?>"/>

<?php }
	?>	
	</td></tr>
<?php }?>


</table>
</td>

</tr>
<tr>
<td align="center" style="width: 672px"><input id = "send" name="Submit1" type="submit" value="submit" />
<span id="error" style = "display:none;color:red;" > Only Numeric Values are Allowed </span> <span id ="errmark" style = "display:none;color:red;" > All Red mark field is required </span></td>
</tr>
</table>				 
</form>


	</div>
	</div>
	
	<!-- End Content -->
</div>
<!-- End Shell -->
<?php    $this->load->view('header'); ?>

