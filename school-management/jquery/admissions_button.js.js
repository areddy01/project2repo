function validate_admissions_button(value1,value2){
		for(i=0; i< value1 ;i++){
                for(j=0; j< value2 ;j++)
		textbox1 = $('#admissions'+i).val();
                textbox2 = $('#admissions'+j).val();
		
		if ((texbox1 < 0)){
		$('#error').show();
		return	false ;
		}
		else if(isNaN(texbox1)){
		$('#error').show();
		return	false;
		}
                if ((textbox2 < 0)){
                $('#error').show();
                return false;
                }
                else if(isNaN(textbox2)){
                 $('#error').show();
                 return false;

		}
		return  true ;
		}