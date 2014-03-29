<?php $this->load->view('main_header');?>
<script type="text/javascript">
  
function multiplication(validateval1,validateval2,validateval3){
$('#errmark').hide();
$('#error').hide(); 

  var data1=$(validateval1).val();
  var data2=$(validateval2).val();
  var data3 = $(validateval3).val();
  var adding =  parseInt(data1) * parseInt(data2) ;
	

	var len=data2.length;
    var c=0;
    var age=0;
    var flag=0;
    for(var i=0;i<len;i++)
    {
 
      c = data1.charAt(i).charCodeAt(0);
	  d = data2.charAt(i).charCodeAt(0);
			if((c <48 || c >57) && (d <48 || d >57) ) 
		    {
        	$('#error').show();
			
	        $(validateval2).addClass("focuson");
        	return false;
      		}
     		 else
      		{
			
       		$(validateval2).removeClass("focuson");
			$('#error').hide();
            
      		}
    		}

	$(validateval3).val(adding);
		
	if ($(validateval3).val() == 'NaN') 
	{
	$(validateval1).addClass("focuson");
	$("#error").show();
	return false;
	}
	 else
  	{
 		$(validateval1).removeClass("focuson");
		$('#error').hide();
	}	 	
	return true;
    }
  
  </script>
  
	<article id="formDetail">
		
		
	<h2>Cost Details<span class="crdate">December 2012</span></h2>
<div id="costDetails">
  
   
 <form method="post" action="/admin/addcost/?info=<?php echo $info;?>&page=8" enctype="multipart/form-data">

<table class="tableLayout">
 <!--	<?php			echo "<pre>";
 print_r($arr); ?> -->
   <?php  $row1=1; $countval=0;
$expense_cat_id =$arr['setvalues'][0]['expense_cat_id'];
//$expense_cat_id=1;
	for ($row = 0; $row < count($arr['setvalues']) ;  $row++) { 
	if($arr['setvalues'][$row]['expense_cat_id'] == $expense_cat_id) {
	$expense_cat_id++ ; 
		?>
		     <?php $count = $expense_cat_id - 1; if ($count == 1){  ?>
  <tr>
			<th colspan="2">Expenses</th>
			<th>Amount</th>
			<th>X-times</th>
			<th>Total</th>
			<th class="border0" colspan="2">Comments</th>
		</tr>
   <?php } else if ($count == 2) { ?>
   
   <tr>
			<th colspan="2"><?php echo $arr['setvalues'][$row]['expense_cat_name']; ?></th>
			<th colspan="5" class="border0"><strong>Amount</strong></th>
		</tr>
		

 <!--  <tr class="auto-style8">
   <td colspan="2"class="classNo">
<?php echo $arr['setvalues'][$row]['expense_cat_name']; ?></td>
	 <td>Amount</td>
</tr>-->

<?php } else if ($count == 3) { ?>
<tr>
				<th colspan="2"><?php echo $arr['setvalues'][$row]['expense_cat_name']; ?></th>
				<th>Loan 1</th>
				<th>Loan 2</th>
				<th>Loan 3</th>
				<th>Loan 4</th>
				<th class="border0" style="width: 72px">Loan 5</th>
			</tr>

 <!--<tr class="auto-style8">
   <td  colspan="2"><?php echo $arr['setvalues'][$row]['expense_cat_name']; ?></td>
	 <td>Loan 1</td>
	 <td>Loan 2</td>
	 <td>Loan 3</td>
	 <td>Loan 4</td>
	 <td>Loan 5</td>
</tr>
-->

<?php } ?>
   <?php }?>
   <tr><!-- Row 1 -->
   <td class="auto-style9" style="width: 82px"><?php echo $row1++; ?> </td>
     <td align="left"><?php echo $arr['setvalues'][$row]['expense_sub_cat_name']; ?>
     <?php if ($arr['setvalues'][$row]['expense_cat_id'] == 1) { ?>
	 <td><input id="amt<?php echo $row; ?>" onkeyup="javascript:trimalpha(amt<?php echo $row;?>);" type="text" name="quantity[0][<?php $row ?>]" value="<?php if (isset($arr['getvalue'][$row]['amount']))  echo $arr['getvalue'][$row]['amount']; ?>" onblur="return multiplication('#amt<?php echo $row; ?>','#xtimes<?php echo $row; ?>','#tot<?php echo $row; ?>');" />    </td>
	 <td><select id="xtimes<?php echo $row ;?>" name="quantity[1][<?php $row ?>]" style="width: 89px" onblur="return multiplication('#amt<?php echo $row ?>','#xtimes<?php echo $row; ?>','#tot<?php echo $row; ?>');">
		<?php if (isset($arr['getvalue'][$row]['amount'])){?>
			<option value="1" <?php if ($arr['getvalue'][$row]['quantity']  == '1'){ ?> selected  = "selected" <?php } ?> >1</option>
			<option value="2" <?php if ($arr['getvalue'][$row]['quantity']  == '2'){ ?> selected  = "selected" <?php } ?> >2</option>
			<option value="3" <?php if ($arr['getvalue'][$row]['quantity']  == '3'){ ?> selected  = "selected" <?php } ?> >3</option>
			<option value="4" <?php if ($arr['getvalue'][$row]['quantity']  == '4'){ ?> selected  = "selected" <?php } ?> >4</option>
			<option value="5" <?php if ($arr['getvalue'][$row]['quantity']  == '5'){ ?> selected  = "selected" <?php } ?> >5</option>
			<option value="6" <?php if ($arr['getvalue'][$row]['quantity']  == '6'){ ?> selected  = "selected" <?php } ?> >6</option>
			<option value="7" <?php if ($arr['getvalue'][$row]['quantity']  == '7'){ ?> selected  = "selected" <?php } ?> >7</option>
			<option value="8" <?php if ($arr['getvalue'][$row]['quantity']  == '8'){ ?> selected  = "selected" <?php } ?> >8</option>
			<option value="9" <?php if ($arr['getvalue'][$row]['quantity']  == '9'){ ?> selected  = "selected" <?php } ?> >9</option>
			<option value="10" <?php if ($arr['getvalue'][$row]['quantity']  == '10'){ ?> selected  = "selected" <?php } ?> >10</option>
			<option value="11" <?php if ($arr['getvalue'][$row]['quantity']  == '11'){ ?> selected  = "selected" <?php } ?> >11</option>
			<option value="12" <?php if ($arr['getvalue'][$row]['quantity']  == '12'){ ?> selected  = "selected" <?php } ?> >12</option>

		<?php }else{ ?>
			
			<option value="1" >1</option>
			<option value="2" >2</option>
			<option value="3" >3</option>
			<option value="4" >4</option>
			<option value="5" >5</option>
			<option value="6" >6</option>
			<option value="7" >7</option>
			<option value="8" >8</option>
			<option value="9" >9</option>
			<option value="10" >10</option>
			<option value="11" >11</option>
			<option value="12" >12</option>
	
		<?php }	?>

		 </select>  </td>
		 <td style="width: 128px">
		  
		 <input id="tot<?php echo $row; ?>" type="text" name="quantity[2][<?php $row ?>]" readonly="readonly" value="<?php if (isset($arr['getvalue'][$row]['amount']))  echo $arr['getvalue'][$row]['total'];?>" class="auto-style10" style="width: 116px" />    </td>
		 
		<td> <input type="text" name="quantity[3][<?php $row ?>]" value="<?php if (isset($arr['getvalue'][$row]['comments']))  echo $arr['getvalue'][$row]['comments']; ?>" />    </td>	
		 <?php } elseif ($arr['setvalues'][$row]['expense_cat_id'] == 2) { ?>
		 <td><input type="text" id="iamt<?php echo $row;?>"  onkeyup="javascript:trimalpha(iamt<?php echo $row;?>)"name="quantity[4][<?php $row ?>]" value="<?php if (isset($arr['getvalue'][$row]['amount']))  echo $arr['getvalue'][$row]['amount']; ?> " />   </td>
		 <?php } elseif ($arr['setvalues'][$row]['expense_cat_id'] == 3) { ?>
		 <td> <input type="text" id="loan1<?php echo $row; ?>" onkeyup="javascript:trimalpha(loan1<?php echo $row;?>);"  name="quantity[5][<?php $row ?>]" value=" <?php if (isset($arr['getvalue1'][$countval]['loan1'])) echo $arr['getvalue1'][$countval]['loan1']; ?>" />  </td>
		 <td><input type="text" id="loan2<?php echo $row; ?>" onkeyup="javascript:trimalpha(loan2<?php echo $row;?>);"  name="quantity[6][<?php $row ?>]" value=" <?php if (isset($arr['getvalue1'][$countval]['loan2'])) echo $arr['getvalue1'][$countval]['loan2']; ?>" />    </td>
		 <td><input type="text"  id="loan3<?php echo $row; ?>" onkeyup="javascript:trimalpha(loan3<?php echo $row;?>);" name="quantity[7][<?php $row ?>]" value=" <?php if (isset($arr['getvalue1'][$countval]['loan3'])) echo $arr['getvalue1'][$countval]['loan3']; ?>" />    </td>
		 <td><input type="text" id="loan4<?php echo $row; ?>" onkeyup="javascript:trimalpha(loan4<?php echo $row;?>);"  name="quantity[8][<?php $row ?>]" value=" <?php if (isset($arr['getvalue1'][$countval]['loan4'])) echo $arr['getvalue1'][$countval]['loan4']; ?>" />    </td>	
		 <td><input type="text" id="loan5<?php echo $row; ?>" onkeyup="javascript:trimalpha(loan5<?php echo $row;?>);"  name="quantity[9][<?php $row ?>]" value=" <?php if (isset($arr['getvalue1'][$countval]['loan5'])) echo $arr['getvalue1'][$countval]['loan5']; ?>" />    </td>	
		 
		 <?php $countval++; } ?>
		  
	<input type = "hidden" value = "<?php echo $arr['setvalues'][$row]['expense_sub_cat_id']; ?>" name = "expense_sub_cat_id[]" />
	<input type = "hidden" value = "<?php echo $arr['setvalues'][$row]['expense_cat_id']; ?>" name = "expense_cat_id[]" />
		 <?php } ?>
		 
		</td>
		
		</tr>
		<tr><td colspan="6"></td></tr>
		<tr><td colspan="6"></td></tr>
<tr><td colspan="6"></td></tr>
<tr><td colspan="6"></td></tr>
<tr><td colspan="6"></td></tr>

		<tr>
<td align="center" colspan="7"> 
<input id = "cost" name="Submit1" type="submit" value="submit" onclick="return validate_cost_button('<?php echo count($arr['setvalues']); ?>');" class="btnbg addform" / >

</td>


</tr>
		</table>
</form>

</div>
 </article>