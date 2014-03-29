<?php $this->load->view('main_header') ?>
	<article id="formDetail">
		
		
	<h2>School Fee <span class="crdate"></span></h2>
<div id="schoolfee">
  <form method = "post" id ="" action = "/admin/addschoolfee/?info=<?php echo $info ;?>&page=4" class = "SchfeeForm" style="overflow:auto;">
  <table class="tableLayout">
    
     
   <thead style="overflow:auto;">
   <tr>
        <th  class="border0"></th><!-- Row 1 -->
      <?php for ($row = 0; $row < count($arr);  $row++) {  ?>
    <?php if (isset($arr[$row]['fee_name'])){?>
     <th><strong><?php echo $arr[$row]['fee_name'] ; ?></strong><input type = "hidden"  name = "school_fees[<?php echo $row; ?>][fee_id]" value = "<?php echo $arr[$row]['fee_id'] ; ?>"/>
	 <input type = "hidden"  name = "school_fees[<?php echo $row; ?>][fee_category]" value = "<?php echo $arr[$row]['fee_category'] ; ?>"/></th><!-- Col 1 -->
	 <?php }?>
	 <?php } ?>
 </tr>
	  </thead>
   <tbody>
   
   <tr>
   
        <td class="classNo"><strong>Frequency</strong></td> 
     <?php // echo "<pre>";print_r($arr['getvalue']);
//echo count($arr['setvalue']);	 
	    for ($row = 0; $row < count($arr);  $row++) {  
    if (isset($arr['getvalue'][$row]['class_id']) && $arr['getvalue'][$row]['class_id'] ==1 && isset($arr[$row]['fee_name'])){
		 if ($arr['getvalue'][$row]['class_id'] ==1)
		$indevalue =$arr['getvalue'][$row]['fee_term_type'];
	?>
     <td><strong>
	 <select id="schoolfee<?php echo $row ?>" name="school_fees[<?php echo $row ; ?>][fee_term_type]"  >
			
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
	 <strong><select id="schoolfee<?php echo $row; ?>" name="school_fees[<?php echo $row ; ?>][fee_term_type]" >
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
	 <?php }?>
	 <?php } ?>
	 </td>
	 </tr>
	 
	 
	 <?php $getvalue = 0 ; 	?>
	  <?php $loop = count($arr)-1 ; ?>
   <?php $id=0; for($row = 0; $row < $loop ;  $row++) {  $id=$id+1;?>
   <tr>
   <?php if (isset($arr[$row]['class_name'])){?>
    
	<input type = "hidden"  name = "school_fees[<?php echo $row; ?>][class_id]" value = "<?php echo $arr[$row]['class_id'] ; ?>"  />
	<td class="classNo" ><strong><?php echo $arr[$row]['class_name'] ; ?></strong></td>
	<?php }  //echo "<pre>"; print_r($arr);?>
	<?php $getvalues=0; 
	 $getvalues = $this->db->query("SELECT a.fee_amount, a.fee_term_type,a.fee_id,ref_fee.fee_name,a.class_id FROM school_fees a JOIN assessment b ON b.assessment_id = a.assessment_id RIGHT JOIN ref_fee ON ref_fee.fee_id = a.fee_id WHERE a.school_fee_category = 'school_fee' AND a.school_code = '".$this->arr['school_code']."' AND a.assessment_id = b.assessment_id AND b.assessment_status= 1 and a.class_id='".$id."'");
	$formarray21['getvalues'] =($getvalues->result_array());	
	$ab=0;
	for($row1 = 0; $row1 <=count($arr) ;  $row1++) { ?>
	 <?php  if (isset($arr[$row1]['fee_name'])){ //echo $arr[$row1]['fee_name'].'=='.$arr['getvalue'][$getvalue]['fee_name'].'<br>';
	//echo "<pre>"; print_r($formarray21['getvalues'][$ab]);
	 ?>
	<td><input type = "text" id="school_fees_val<?php echo $row; ?><?php echo $row1; ?>" name = "school_fees_value[<?php echo $row; ?>][<?php echo $row1; ?>]" value = "<?php echo $formarray21['getvalues'][$ab]['fee_amount'] ;?>" onkeyup="javascript: trimalpha('#school_fees_val<?php echo $row; ?><?php echo $row1; ?>');"/></td>
	<?php $getvalue++; $ab=$ab+1;?>
	<?php } ?>
	
	<?php  } ?>	
	<?php // }else{break;} ?>	
		
	</tr>
	 <?php } ?>
	<tr><td colspan=5 ><input class="btnbg addform" type="submit" value="submit"</td></br></tr>
	<tr><td colspan=5><input type="checkbox" name="" />&nbsp;Income from other Source (per annum)</td></tr>
	
    </tbody>
  </table>
  </form>


	</div>
 </article>
	
</section>
</div>
</body>
</html>