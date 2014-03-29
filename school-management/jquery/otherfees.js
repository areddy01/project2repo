	function validate_otherfees_button(value1,value2){
		for(i=0; i< value1 ;i++){
		for(j=0; j<value2;j++){
		
		texbox1 = $("#other_fees_values0"+i+j).val();
		texbox2 = $("#other_fees_values1"+i+j).val();
		
		if ((texbox1 < 0)){
		$('#error').show();
		return	false ;
		}
		else if(isNaN(texbox1)){
		$('#error').show();
		return	false ;
		}

		if ((texbox2 < 0)){
		$('#error').show();
		return	false ;
		}

		else if (isNaN(texbox2)){
			$('#error').show();
			return	false ;
			}
		}
		}
	
	return  true ;
		}