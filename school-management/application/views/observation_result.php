<?php $this->load->view('main_header');?>	
		<article id="formDetail">
			<div align="observation">
				<div class="auto-style4" align="center">
				<br />
				<label><b><span class="auto-style6">OBSERVATIONS</span> <br />
					<br />
					</b></label>
 </div>
<form method = "post" id ="" action = "/admin/editobservation/?info=<?php echo $info; ?>&page=11"  >
	<?php //echo "<pre>"; print_r($arr['getvalue']); echo ' <br/>';
	$resp = count($arr['getvalue']) ;	
	?>
	<div id="observation">
	<div class="selection"> 
<!--<?php if(count($arr['getvalue'])>0){ ?>
<div>
<strong>Update Teacher</strong>
<select name="res" onchange= "/admin/editobservation/?info=<?php echo $info; ?>&page=11">
<option value="" >Select</option>
<?php  $row1=1; 
// $observ_cat_id =$arr['setvalues'][0]['observ_cat_id'];
for ($row = 0; $row < count($arr['getvalue']) ;  $row++) { //echo "<pre>"; print_r($arr['getvalue']); 
?>
<option value="<?php echo $arr['getvalue'][$row][response]; ?>" ><?php echo $arr['getvalue'][$row][response]; ?></option>
<?php } ?>
</select>
</div>
<?php } ?>-->
<div>
<strong>Teacher Name</strong>
<input type="text" name="name" value="<?php if(isset($teacher_name))  {echo "$teacher_name";}  ?>"  />         
</div>
<div>
<strong>Class Taught</strong>
<input type="text" name="class_taught" />
</div>
<div>
<strong>Subject Taught</strong>
<input type="text" name="subject_taught" />
</div>
<div>
<strong>Indicators </strong>
<input type = "text" readonly = "readonly" cursur = "disabled" value = "<?php $value=1; $value =$resp+$value; echo("T$value") ;?>" name = "response[]" /> 
</div>
</div>
<table class="tableLayout">
<?php  $row1=1; 
$observ_cat_id =$arr['setvalues'][0]['observ_cat_id'];
for ($row = 0; $row < count($arr['setvalues']) ;  $row++) { 
if($arr['setvalues'][$row]['observ_cat_id'] == $observ_cat_id) {
$observ_cat_id++ ; 
?>
<tr><!-- Row 1 -->
<th colspan="3" class="border0" ><?php echo $arr['setvalues'][$row]['observ_cat_name']; ?></th>
<!-- Col 1 -->
</tr>
<?php }?>
<tr><!-- Row 1 -->
<td class="sno" style="width: 38px"><?php echo $row1++; ?></td>
<td ><?php echo $arr['setvalues'][$row]['observ_sub_cat_name']; ?></td>
<td style="width: 126px">
<select name="teacher_response[<?php echo $row; ?>]" style="width: 108px">
<?php if (isset($arr['getvalue'][$row]['teacher_response'])){ ?>
<option value="Yes" <?php if ($arr['getvalue'][$row]['teacher_response']  == 'Yes'){ ?> selected  = "selected" <?php } ?>>Yes</option>
<option value="No" <?php if ($arr['getvalue'][$row]['teacher_response']  == 'No'){ ?> selected  = "selected" <?php } ?>>No</option>
<option value="NA" <?php if ($arr['getvalue'][$row]['teacher_response']  == 'NA'){ ?> selected  = "selected" <?php } ?>>NA</option>
<option value="Ineffective" <?php if ($arr['getvalue'][$row]['teacher_response']  == 'Ineffective'){ ?> selected  = "selected" <?php } ?>>Ineffective</option>
<?php }else{?>
<option value="Yes">Yes</option>
<option value="No">No</option>
<option value="NA">NA</option>
<option value="Ineffective">Ineffective</option>
<?php }?>
</select>
</td>
<!-- Col 1 -->
<input type = "hidden" value = "<?php echo $arr['setvalues'][$row]['observ_sub_cat_id']; ?>" name = "observ_sub_cat_id[]"/>
<input type = "hidden" value = "<?php echo $arr['setvalues'][$row]['observ_cat_id']; ?>" name = "observ_cat_id[]"/>
<?php } ?>
</tr>
<tr>
<td colspan="3" align="center" >
<input name="Submit1" type="submit" class="btnbg addform" value="submit"  /></td>
</tr>
<br/>
</table>				 
</div>			   
</form>
		

		
		
	</div>
	
	<!-- End Content -->
</article>
</section>
<!-- End Shell -->


