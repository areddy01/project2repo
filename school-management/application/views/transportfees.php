<?php $this->load->view('main_header');?>
	<article id="formDetail">
		
		
	<h2>Transport<span class="crdate"></span></h2>
<div id="transport">
  
  <form method = "post" id ="Transportdetails" action = "/admin/addtransportfees/?info=<?php echo $info; ?>" style="width:100%" >
  
 <table class="tableLayout">
 <p id="transfeeerror" style="color:red;"></p>
  
    <thead>
      <th ></th>
				
	<?php for ($row = 0; $row <1 ;  $row++) {  ?>
     <th ><strong><?php echo $arr['fee_name'][$row]['fee_name'] ; ?></strong></th>
	  <input type = "hidden"  name = "transport_fees[<?php echo $row; ?>][fee_id]" value = "<?php echo $arr['fee_name'][$row]['fee_id'] ; ?>"/>
	 <input type = "hidden"  name = "transport_fees[<?php echo $row; ?>][fee_category]" value = "<?php echo $arr['fee_name'][$row]['fee_category'] ; ?>"/>
	<?php } ?>
	 <th ><strong>No of Sudents Availing Transport Facility</strong></th>
	 <th ><strong>Total Amount</strong></th>
	
	 </tr>
	 
	 
	 	  <tr><th class="noborder nobg"></th></tr>
    </thead>
 <tbody>
      <?php $getval=0; $data=0;?>
	  <input id="transportfee" name="" type="hidden" value="<?php echo count($arr['class_name']);?>" /> 

			 <?php for($row = 0; $row < count($arr['class_name']) ;  $row++) {  ?>
   <tr>
  	<input type = "hidden" id="transport_fees[<?php echo $row; ?>]"  name = "transport_fees[<?php echo $row; ?>][class_id]" value = "<?php echo $arr['class_name'][$row]['class_id'] ; ?>" />  
	 <td><strong><?php echo $arr['class_name'][$row]['class_name'] ; ?></strong></td>
		
		
	<?php for($row1 = 0; $row1 < count($arr['fee_name']) ;  $row1++) {  ?>
	
	<td><strong>
	<input  maxlength="4"type = "text" id="transport_fee_value0<?php echo $row; ?>" name ="transport_fees_values[<?php echo $row; ?>][<?php echo $row1; ?>][fee_amount]" value = "<?php if (isset($arr['getvalue'][$getval]['fee_amount'])) echo $arr['getvalue'][$getval]['fee_amount']; ?>"  onblur="return multi_value('#transport_fee_value0<?php echo $row; ?>','#transport_fee_value1<?php echo $row; ?>','#tot_amount<?php echo $row; ?>');" onkeyup="javascript: trimalpha('#transport_fee_value0<?php echo $row; ?>')"  /></strong></td>
	<td><strong>
	<input maxlength="4" type = "text" id="transport_fee_value1<?php echo $row; ?>"name ="transport_fees_values[<?php echo $row; ?>][<?php echo $row1; ?>][quantity]" value = "<?php if (isset($arr['getvalue'][$getval]['quantity'])) echo $arr['getvalue'][$getval]['quantity']; ?>"  onblur="return multi_value('#transport_fee_value0<?php echo $row; ?>','#transport_fee_value1<?php echo $row; ?>','#tot_amount<?php echo $row; ?>');"onkeyup="javascript: trimalpha('#transport_fee_value1<?php echo $row; ?>')"  /></strong></td>
	<td><strong>
	
 <input id="tot_amount<?php echo $row; ?>" type ="text"  name ="tot_amount[<?php echo $row; ?>][<?php echo $row1; ?>][total]" readonly="readonly" value ="<?php if (isset($arr['getvalue'][$getval]['fee_amount'])||isset($arr['getvalue'][$getval]['quantity'])) echo (($arr['getvalue'][$getval]['fee_amount'])*($arr['getvalue'][$getval]['quantity'])*12); ?>" /></strong></td>
	
	<!--<?php  if ((isset($arr['getvalue'][$getval]['fee_amount'])) or (isset($arr['getvalue'][$getval]['quantity']))) {$data=$data + (($arr['getvalue'][$getval]['fee_amount'])*($arr['getvalue'][$getval]['quantity'])*12); $getval++; }?>-->
	
	<?php  } ?>
	</tr>
	
	 <?php } ?>
	 
	
	 
	 
	 
	 
   <tr>
        <td colspan=2>&nbsp;</td>
     
     <td ><strong>Total Income</strong></td>
     <td><input id="tot_income<?php echo $row; ?>" type = "text"  name ="" readonly="readonly" value = "<?php echo $data;  ?>" /></td>
      </tr>
	  <tr><td colspan=4><p><strong>Note:</strong> Leave blank if the school doesnt have transport facility. In case school provides transport, but it doesnt have breakup of students using transport facility by classes.</p></td></tr>
	  <tr><td colspan=3><input  class="btnbg addform" name="submit" type="button" value="submit" style="width: 111px" 
	  onclick="javascript: validate_transport();" /></td></tr>
    </tbody>
  </table>

</form>
</div>
 </article>
	
</section>
</div>
</body>
</html>