function validate_attendance_button(){

		for(i=0; i< value ;i++){
		for(j=0; j<3 ; j++){
                
		texbox1 = $("#section"+j+i).val();
		texbox2 = $("#workingdays"+j+i).val();
		texbox3 = $("#numberofstudents"+j+i).val();
		texbox4 = $("#cumulativeattendance"+j+i).val();
		
		
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



function validate_numeric(validateval){



$('#errmark').hide();
$('#error').hide(); 

  var data=$(validateval).val();

  var len=data.length;
 
    var c=0;
    var age=0;
    var flag=0;
    for(var i=0;i<len;i++)
    {
 
      c = data.charAt(i).charCodeAt(0);

	      if(c <48 || c >57 ) 

	      {
        	$('#error').show();
			
	        $(validateval).addClass("focuson");
        	return false;
      		}
     		 else
      		{
			
       		$(validateval).removeClass("focuson");
			$('#error').hide();
            
      		}
    		}
			


	


		return true;


     	}
