function validate_schfee_school(value){
			
		
				for($i=0; $i< value - 1 ;$i++){
				for($j=0;$j< 6 ; $j++) {
				
					texbox1 = $("#school_fees_val"+$i+$j).val();
					
					if ((texbox1 < 0)){
					$('#error').show();
					return	false ;
					}
					else if(isNaN(texbox1)){
					$('#error').show();
					return	false ;
					}
					}
				
		}
		$("#message").hide();
		return  true ;
}



function validate_selection(validateval,$row){

	$("#message").hide();	
	var data=$(validateval).val();
	
	for($i=0; $i< $row ;$i++){
		
	if ($('#schoolfee0').val() == 'Select'){
	
		document.getElementById('school_fees_val'+$i+0).value = '';
		$('#school_fees_val'+$i+0).attr('disabled', 'disabled');
		}
		else
		{
		$("#school_fees_val"+$i+0).removeAttr("disabled","disabled");

		}
		
			
		if (($('#schoolfee1').val()) == 'Select'){							
		document.getElementById('school_fees_val'+$i+1).value = '';	
		$('#school_fees_val'+$i+1).attr('disabled', 'disabled');	
		}
		else
		{
		$("#school_fees_val"+$i+1).removeAttr("disabled","disabled");
		}
	
		
		if (($('#schoolfee2').val()) == 'Select'){							
		document.getElementById('school_fees_val'+$i+2).value = '';	
		$('#school_fees_val'+$i+2).attr('disabled', 'disabled');	
		}
		else
		{
		$("#school_fees_val"+$i+2).removeAttr("disabled","disabled");
		
		}
	
			
		if (($('#schoolfee3').val()) == 'Select'){							
		document.getElementById('school_fees_val'+$i+3).value = '';	
		$('#school_fees_val'+$i+3).attr('disabled', 'disabled');	
		}
		else
		{
		$("#school_fees_val"+$i+3).removeAttr("disabled","disabled");
		}
	
			
		if (($('#schoolfee4').val()) == 'Select'){							
		document.getElementById('school_fees_val'+$i+4).value = '';
		$('#school_fees_val'+$i+4).attr('disabled', 'disabled');		}
		
		else
		{
		$("#school_fees_val"+$i+4).removeAttr("disabled","disabled");		}
	
		if (($('#schoolfee5').val()) == 'Select'){							
		document.getElementById('school_fees_val'+$i+5).value = '';	
		$('#school_fees_val'+$i+5).attr('disabled', 'disabled');	
		}
	
		else
		{
		$("#school_fees_val"+$i+5).removeAttr("disabled","disabled");
		}
				

	}
	return true;
	}

	