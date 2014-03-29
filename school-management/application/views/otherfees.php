<?php $this->load->view('main_header'); ?>
	<article id="formDetail">
<?php error_reporting(0); ?>		
		
	<h2>Fee: Other Fee<span class="crdate">December 2012</span></h2>
<div id="otherfee">
  <form method = "post" id ="" action = "/admin/addotherfees/?info=<?php echo $info; ?>&page=7"    style="width:100%; overflow:auto; " >

   <table class="tableLayout" style="overflow:auto;">
    <thead style="overflow:auto;">
      <tr>
     <th><strong>Current Year</strong></th>
      <?php for ($row = 0; $row < count($arr['fee_name']) ;  $row++) {  ?>
  
     <th><strong><?php echo $arr['fee_name'][$row]['fee_name'] ; ?></strong>
			
		   <input type = "hidden"  name = "other_fees[<?php echo $row; ?>][fee_id]" value = "<?php echo $arr['fee_name'][$row]['fee_id'] ; ?>"/>
		   <input type = "hidden"  name = "other_fees[<?php echo $row; ?>][fee_category]" value = "<?php echo $arr['fee_name'][$row]['fee_category'] ; ?>"/>
				 
	 </th>
	 <th><strong>No of Students buying </strong></th>
				
	 <th><strong>Total Amount</strong></th>

	
	 <?php } ?>  
      </tr>
	  <tr> 
	  <th class="noborder nobg"><strong></strong></th></tr>
    </thead>
 <tbody>
     <?php $getval=0;$getval1=0;$data1=0;$data2=0;?>	
	  

			 <?php for($row = 0; $row < count($arr['class_name']) ;  $row++) {  ?>
   <tr>

  	<input type = "hidden"  name = "other_fees[<?php echo $row; ?>][class_id]" value = "<?php echo $arr['class_name'][$row]['class_id'] ; ?>" />  
	 <td><strong><?php echo $arr['class_name'][$row]['class_name'] ; ?></strong></td> 
	
		
	<?php for($row1 = 0; $row1 < count($arr['fee_name']) ;  $row1++) {  ?>
	<td>
	<strong><input type = "text" id="other_fees_values0<?php echo $row; ?><?php echo $row1; ?>" name = "other_fees_values[<?php echo $row; ?>][<?php echo $row1; ?>][fee_amount]" value = "<?php if (isset($arr['getvalue'][$getval]['fee_amount'])) echo $arr['getvalue'][$getval]['fee_amount']; ?>" onblur="return mul_value('#other_fees_values0<?php echo $row; ?><?php echo $row1; ?>','#other_fees_values1<?php echo $row; ?><?php echo $row1; ?>','#other<?php echo $row; ?><?php echo $row1; ?>');"  onkeyup="javascript: trimalpha('#other_fees_values0<?php echo $row; ?><?php echo $row1; ?>')"/></strong></td>
	<td>
	<strong><input type = "text" id="other_fees_values1<?php echo $row; ?><?php echo $row1; ?>" name = "other_fees_values[<?php echo $row; ?>][<?php echo $row1; ?>][quantity]" value = "<?php if (isset($arr['getvalue'][$getval]['quantity'])) echo $arr['getvalue'][$getval]['quantity']; ?>" onblur="return mul_value('#other_fees_values1<?php echo $row; ?><?php echo $row1; ?><?php echo $row1; ?>','#other_fees_values0<?php echo $row; ?><?php echo $row1; ?>','#other<?php echo $row; ?><?php echo $row1; ?>');" onkeyup="javascript: trimalpha('#other_fees_values1<?php echo $row; ?>')" /></strong></td>
	<td>
	<input type = "text" id = "other<?php echo $row; ?><?php echo $row1; ?>" disabled="disabled" value ="<?php if (isset($arr['getvalue'][$getval]['fee_amount'])||isset($arr['getvalue'][$getval]['quantity'])) echo (($arr['getvalue'][$getval]['fee_amount'])*($arr['getvalue'][$getval]['quantity']));?>" >
	
    <?php if ((isset($arr['getvalue'][$getval]['fee_amount'])||isset($arr['getvalue'][$getval]['quantity']))&&$row1==0){$data1=$data1+($arr['getvalue'][$getval]['fee_amount'])*($arr['getvalue'][$getval]['quantity']);}?>
	
	<?php if ((isset($arr['getvalue'][$getval]['fee_amount'])||isset($arr['getvalue'][$getval]['quantity']))&&$row1==1){$data2=$data2+($arr['getvalue'][$getval]['fee_amount'])*($arr['getvalue'][$getval]['quantity']);}?>
	<!--<strong>
	<input id = "#other_add1<?php echo $row; ?><?php echo $row1; ?>" type = "text" disabled="disabled" name = "" value = "<?php if (isset($arr['getvalue'][$getval]['fee_amount'])||isset($arr['getvalue'][$getval]['quantity'])) 	echo (($arr['getvalue'][$getval]['fee_amount'])*($arr['getvalue'][$getval]['quantity']));?>"/>
	</strong>-->
	</td>

	<?php 
	
	$getval++; ?>
	
	<?php  } ?>
	</tr>
		
	 <?php } ?>
	 
	
   <tr>
		<?php for ($row = 0; $row < count($arr['fee_name']) ;  $row++) {  ?>
  	      <?php if ($row == 0){ ?>
		     <td></td>
		
             <td style="width: 99px"></td>
	         <td class="auto-style9" ><strong>Total Income</strong></td>
		     <td><input name="" id="otherfees78" readonly="readonly"   type="text"  value="<?php echo $data1; ?>"/></td>
		     <?php }else{ ?>
		    
		     <td style="width: 99px"></td>
	         <td class="auto-style9" ><strong>Total Income</strong></td>
		     <td><input name="" id="otherfees78" readonly="readonly"  type="text"  value="<?php echo $data2; ?>"/></td>
		
		 <?php }?>
	<?php }?>
	</tr>
   <tr>
		 <?php for ($row = 0; $row < count($arr['fee_name']) ;  $row++) {  ?>
  	      <?php if ($row == 0){ ?>
		     <td></td>
		
             <td style="width: 99px"></td>
	         <td class="auto-style9" ><strong>Margin(%)</strong></td>
		     <td><input name="margin_books" id="otherfees78"    type="text" value="<?php echo $arr['getvalue'][0]['margin_books']; ?>"/></td>
		     <?php }else{ ?>
		    
		     <td style="width: 99px"></td>
	         <td class="auto-style9" ><strong>Margin(%)</strong></td>
		     <td><input name="margin_etc" id="otherfees78"   type="text"  value="<?php echo $arr['getvalue'][1]['margin_etc']; ?>"/></td>
		
		 <?php }?>
	<?php }?>
   </tr>
   <tr>
		<?php for ($row = 0; $row < count($arr['fee_name']) ;  $row++) {  ?>
  	      <?php if ($row == 0){ ?>
		     <td></td>
		
             <td style="width: 99px"></td>
	         <td class="auto-style9" ><strong>Net Income</strong></td>
		     <td><input name="" id="otherfees78"    type="text"  value="<?php echo $data1*($arr['getvalue'][0]['margin_books']/100); ?>"/></td>
		     <?php }else{ ?>
		    
		     <td style="width: 99px"></td>
	         <td class="auto-style9" ><strong>Net Income</strong></td>
		     <td><input name="" id="otherfees78"   type="text"  value="<?php echo $data2*($arr['getvalue'][1]['margin_etc']/100); ?>"/></td>
		
		 <?php }?>
	<?php }?>
	   </tr>
   <tr>
		<td colspan=7><p><strong>Note:</strong> The profit and loss statement only takes the income from sale of books and uniform, tie etc. Therefore it is important to know the margin schools makes on such sales. If the school has provided only the profit it makes from such sales. If the lumpsum amount is also not known, an average margin based on data for other schools can be assumed and can be mentioned in the notes in Financial Performance Module
</p></td>
   </tr>
	<tr>
		<td colspan=7><input type="submit" value="Submit" class="btnbg addform" /></td>
	</tr>
    </tbody>
  </table>
  </form>
</div>
 </article>
	
</section>
</div>
</body>
</html>