	function validate_transport_button(value){
		for(i=0; i< value ;i++){
		texbox1 = $("#transport_fee_value0"+i).val();
		texbox2 = $("#transport_fee_value1"+i).val();
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
	
	return  true ;
		}