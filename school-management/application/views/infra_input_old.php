<?php    $this->load->view('main_header'); ?>	


<div id="shell">
	
	<!-- Header -->
	
	<!-- End Navigation -->
	
	<!-- Content -->
	<div id="content">
	
		<div class="message thank-message">
			<div class="auto-style1">
			<br/>
				</div>			 
			<div align="left">
				<div class="auto-style3">
			<label><strong>INFRA DETAILS</strong></label>
				</div>

<form method = "post"  action = "/infra/input/?info=<?php echo $info; ?>" >
<table class="auto-style4" style="width: 813px; height: 629px; padding:0px 30px 0 10px">
<tr>
<td style="width: 904px; height: 687px;">
<table border="0" bordercolor="#FF9933" cellpadding="1" style="width: 102%; height: 431px;" >


	<tr>
		<td width="499" style="width: 255px; height: 23px">Name of the School (Full Name)</td>
		<td colspan="3" style="height: 23px">
		<?php if(isset($this->arr['school_name'])) echo $this->arr['school_name']; ?>
 		<!--<input id = "schoolname" name="school_profile[school_name]" style="width: 539px" type="text" value = "<?php if(isset($this->arr['school_name'])) echo $this->arr['school_name']; ?> "/> --></td>
	</tr>
	<tr>
		<td style="width: 255px; height: 18px;">School Name for Graphs</td>
		<td width="142" style="width: 112px; height: 18px;">
		<input id = "schoolgraph" style="width:100px;" name="school_profile[school_desc]" type="text" onblur="return validat_nulls('#schoolgraph')" maxlength="8"  value = "<?php  if(isset($school_desc)) echo $school_desc ; ?>" /></td>
		<td width="449" style="width: 279px; height: 18px;">APS average</td>
		<td width="245" style="width: 130px; height: 18px;">		</td>
	</tr>
	<tr>
		<td style="width: 255px; height: 7px;">Location</td>
		<td style="width: 112px"><?php if(isset($this->arr['school_code'])) echo substr($this->arr['school_code'],0,3); ?></td>
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
		<td style="height: 7px; width: 279px;"></td>
		<td style="height: 7px; width: 130px;"></td>
	</tr>
	<tr>
		<td style="width: 255px">Year Of Establishment</td>
		<td style="width: 112px"><?php if(isset($arr[count($arr)-1]['academic_year'])) echo $arr[count($arr)-1]['academic_year'] ; ?>
		<!--<input id = "year_of_estd" name="school_profile[year_of_estblished]" type="text" onblur="return validat_numeric('#year_of_estd')" value = "<?php  if(isset($year_of_estblished)) echo trim($year_of_estblished); ?> "/>-->
		</td>
		<td rowspan="2" style="width: 279px">School assessed by ( initials only)</td>
		<td rowspan="2" style="width: 130px"><!--<?php if(isset($school_assessed_by)) echo $school_assessed_by ; ?>-->
		<?php if(isset($arr[count($arr)-1]['school_assessed_by'])) echo $arr[count($arr)-1]['school_assessed_by'] ; ?></td>
	</tr>
	<tr>
		<td style="width: 255px">Recognition</td>
		<td style="width: 112px"><select name="school_profile[recognition]" style="width: 100px;" value = "<?php echo $recognition ; ?>">
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
		<td style="width: 255px; height: 24px">Recognition Upto Class(Enter Class)</td>
		<td style="height: 24px; width: 112px;"><strong>
		<select name="school_profile[recognition_upto_class]" style="width: 100px;">
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
		</select></strong></td>
		<td style="height: 24px; width: 279px;">Date of assessment(format: July 2,2012)</td>
		<td style="height: 24px; width: 130px;"><?php if(isset($arr[count($arr)-1]['assessment_date'])) echo $arr[count($arr)-1]['assessment_date']; ?> </td>
	</tr>
	
	<tr>
		<td style="width: 255px; height: 23px;">Accreditation</td>
		<td style="width: 112px; height: 23px;">
		<select name="school_profile[accredition]" style="width:100px;">
		<?php if (isset($accredition)) { ?>
		<option value="SSLC"  <?php if ($accredition  == 'SSLC'){ ?> selected = "selected" <?php } ?>>SSLC</option>
		<option value="CBSE" <?php if ($accredition  == 'CBSE'){ ?> selected = "selected" <?php } ?>>CBSE</option>
		<option value="ICSE" <?php if ($accredition  == 'ICSE'){ ?> selected = "selected" <?php } ?>>ICSE</option>
		<option value="MCD" <?php if ($accredition  == 'MCD'){ ?> selected = "selected" <?php } ?>>MCD</option>
		<option value="SSC" <?php if ($accredition  == 'SSC'){ ?> selected = "selected" <?php } ?>>SSC</option>
		<option value="Dept 0f Edu" <?php if ($accredition  == 'Dept of Edu'){ ?> selected = "selected" <?php } ?>>Dept of Edu</option>
		<option value="NCERT" <?php if ($accredition  == 'NCERT'){ ?> selected = "selected" <?php } ?>>NCERT</option>
		<?php } else { ?>
		<option value="SSLC">SSLC</option>
		<option value="CBSE">CBSE</option>
		<option value="ICSE">ICSE</option>
		<option value="MCD">MCD</option>
		<option value="SSC">SSC</option>
		<option value="Dept Of Edu">Dept of Edu</option>
		<option value="NCERT">NCERT</option>
		<?php } ?>
		</select>
			</td>
		<td style="width: 279px; height: 23px;">Is the School assessed again in the same year?<br />
		</td>
		<td style="height: 23px; width: 130px;"><?php if (isset($arr[count($arr)-1]['school_assessed_again_same_year'])) echo ($arr[count($arr)-1]['school_assessed_again_same_year']); ?></td>
	</tr>
	<tr>
		<!-- <td style="width: 255px">Qualification</td>
		<td style="width: 112px">
		
			<input id="qualification" name="school_profile[qualification]" type="text" onblur="return validat_nulls('#qualification')" value = "<?php if(isset($qualification)) echo $qualification ; ?>"/></td> -->
			
		<td style="width: 255px; height: 23px;">Qualification</td>
		<td style="width: 112px; height: 23px;">
		<select style="width:100px;" name="school_profile[accredition]">
		<?php if (isset($qualification)) { ?>
		<!--<option value="LOV"  <?php if ($accredition  == 'LOV'){ ?> selected = "selected" <?php } ?>>LOV</option>-->
		<option value="HSC" <?php if ($accredition  == 'HSC'){ ?> selected = "selected" <?php } ?>>HSC</option>
		<option value="SSC" <?php if ($accredition  == 'SSC'){ ?> selected = "selected" <?php } ?>>SSC</option>
		<option value="DIPLOMA" <?php if ($accredition  == 'DIPLOMA'){ ?> selected = "selected" <?php } ?>>DIPLOMA</option>
		<option value="GRADUATE" <?php if ($accredition  == 'GRADUATE'){ ?> selected = "selected" <?php } ?>>GRADUATE</option>
		<option value="PG" <?php if ($accredition  == 'PG'){ ?> selected = "selected" <?php } ?>>PG</option>
		<!-- //<option value="NCERT" <?php if ($accredition  == 'NCERT'){ ?> selected = "selected" <?php } ?>>NCERT</option> -->
		<?php } else { ?>
		<!--<option value="LOV">LOV</option>-->
		<option value="HSC">HSC</option>
		<option value="SSC">SSC</option>
		<option value="DIPLOMA">DIPLOMA</option>
		<option value="GRADUATE">GRADUATE</option>
		<option value="PG">PG</option>
		<!-- <option value="NCERT">NCERT</option> -->
		<?php } ?>
		</select>
			</td>

			<td style="width: 279px" >If yes, mention assessment </td>
		<td  style="width: 130px"><?php if (isset($arr[count($arr)-1]['assessment_type_if_re_assessed'])) echo ($arr[count($arr)-1]['assessment_type_if_re_assessed']); ?></td>
	</tr>
	<tr>
		<td style="width: 255px">Correspondent Name ( Include salutation)</td>
		<td style="width: 112px">
		
			<input  style="width:100px;" required="required" id = "corrname" name="school_profile[correspondent_name]" type="text" maxlength="50" onblur="return validate_alphadot('#corrname')" value = "<?php if(isset($correspondent_name)) echo $correspondent_name ; ?>"/></td>
		<td style="width: 279px">School Code</td>
		<td style="width: 130px">
		<?php if(isset($this->arr['school_code'])) echo $this->arr['school_code'];  ?>
		 	<!--<input id = "Sch_code" name="school_profile[school_code]" style="width: 88px" type="text" onblur="return validat_nulls('#Sch_code')"  value = "<?php if(isset($this->arr['school_code'])) echo $this->arr['school_code'];  ?>" maxlength="3"/>-->
		</td>
	</tr>
	<tr>
		<td style="width: 255px; height: 26px;">Phone No</td>
		<td style="width: 112px; height: 26px;">
		
			<input id = "ph_no" style="width:100px;" required="required" name="school_profile[phone_no]"  type="text" onblur="return validat_numeric('#ph_no')" value ="<?php if(isset($phone_no)) echo $phone_no ; ?>" maxlength="12"/>
			<div id = "phonenum" style = "display:none;color:red;">Type a valid phone numebr please</div></td>
		<td style="width: 279px; height: 26px;">Co-education</td>
		<td style="width: 130px; height: 26px;">
		
			<select name="school_profile[co_education]" style="width:100px;">
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
		<td style="width: 255px">
		<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;width:122pt">
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
		
			<input id = "sch_mail_add" name="school_profile[school_mailing_address]" style="width:100px;" type="text" onblur="return validat_nulls('#sch_mail_add')" value = "<?php if(isset($school_mailing_address)) echo $school_mailing_address ; ?>" maxlength="50"/><div id = "emailinfo" style = "display:none;color:red;">Type a valid e-mail please</div></td>
	</tr>
	<tr>
		<td style="width: 255px">
		<table border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse;width:120pt">
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
		
			<input id = "city" style="width:100px;" name="school_profile[city]" required type="text"  onblur="return validat_city('#city')"  value = "<?php if(isset($city))  echo $city ; ?>" maxlength="30"/>
			<!-- <input id="city" name="school_profile[city]" type="text" onblur="return validat_nulls('#city')"  value = "<?php if(isset($city))  echo "accept only alphabets "; ?>"/> -->
             
			</td>
	</tr>
	<tr><td style="width: 255px">Pincode:</td> <td style="width: 112px"><input style="width:100px;"required="required" id = "city_pincode" name="school_profile[pincode]" type="text" onblur="return validat_numeric('#city_pincode')" value = "<?php if(isset($pincode)) echo trim($pincode); ?>" maxlength="6" /></td></tr>
	<tr><td colspan="4" style="height: 22px"><br />
		<strong>FACILITIES</strong></td></tr>
<?php $facility_cat_id = 1 ;
for ($row = 0; $row < count($arr);  $row++) { 
    if(isset($arr[$row]['facility_cat_id'])) {
	if ($arr[$row]['facility_cat_id'] == $facility_cat_id){
	 $facility_cat_id ++; 
	 //echo $facility_cat_id;
	?>
	<tr><td colspan="4"><strong><em>
	<?php //if($arr[$row]['facility_cat_id'] == 1){ echo $value="A."; }
	//else if($arr[$row]['facility_cat_id'] == 2){ echo $value="B."; }
	//else if($arr[$row]['facility_cat_id'] == 3){ echo $value="C."; }
	//else if($arr[$row]['facility_cat_id'] ==4){ echo $value="D.";}?>
	<?php echo $arr[$row]['facility_cat_name'];?>
	</em></strong></td></tr>
	<?php } ?>
	<tr><td style="width: 255px">
	<?php if (isset($arr[$row]['facility_sub_cat_name'])) echo $arr[$row]['facility_sub_cat_name'];?></td>
		<td colspan="3">
	<?php if (isset($arr[$row]['facility_sub_cat_type'])) if ($arr[$row]['facility_sub_cat_type'] =='textbox'){ ?>

	<?php $facility_sub_cat_name =  $arr[$row]['facility_sub_cat_name'] ; ?>

		<input name="school_facility[]"  style="width:100px;" type="text" value = "<?php if(isset($arr[$row]['facility_sub_cat_value']))echo $arr[$row]['facility_sub_cat_value']; ?>" maxlength="4"/>

	<input name="school_cat_id[]" type="hidden" value = "<?php echo $arr[$row]['facility_cat_id'];?>"/>

	<input name="school_sub_cat_id[]" type="hidden" value = "<?php echo $arr[$row]['facility_sub_cat_id'];?>"/>

	<?php }	else if ($arr[$row]['facility_sub_cat_type'] =='dropdown'){
		$options = $arr[$row]['facility_sub_cat_type_field'];
	$parts = explode(",", $options);
	?>	
	<select name = "school_facility[]" id = "" style="width:100px;">
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

<?php }	 ?>	<?php }   }?>
	</td></tr>


<tr>
<td colspan="3" style="padding-right:200px" align="right" >
<input  class="btnbg addform" id = "send" name="Submit1" type="submit" value="submit" style="width: 91px" />
<span id="error" style = "display:none;color:red;" > Only Numeric Values are Allowed </span>
<div><?php if(isset($confirm))echo($confirm) ?></div> 
<!--<span id ="errmark" style = "display:none;color:red;" > All Red mark field is required </span>--></td>
</tr>

	</table>				 
</form>


	</div>
	</div>
	
	<!-- End Content -->
</div>
<!-- End Shell -->
<?php    $this->load->view('header'); ?>

