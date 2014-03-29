function validate_attendance_button(value){

		for(i=0; i< value ;i++){
		for(j=0; j<3 ; j++){
		texbox1 = $("#section"+j+i).val();
		texbox2 = $("#workingdays"+j+i).val();
		texbox3 = $("#numberofstudents"+j+i).val();
		texbox4 = $("#cumulativeattendance"+j+i).val();
		
				alert(texbox1);
				alert(texbox2);
				alert(texbox3);
				alert(texbox4);
		
		
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
			
		if ((texbox3 < 0)){
		$('#error').show();
		return	false ;
		}
		else if(isNaN(texbox3)){
		$('#error').show();
		return	false ;
		}

		if ((texbox4 < 0)){
		$('#error').show();
		return	false ;
		}

		else if (isNaN(texbox4)){
			$('#error').show();
			return	false ;
			}
	
		}
		}
		return  true ;
		}