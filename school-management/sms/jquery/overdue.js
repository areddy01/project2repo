function validate_overdue_button(value){
		for(i=0; i< value ;i++){
		texbox1 = $("#nos"+i).val();
		texbox2 = $("#fo"+i).val();
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