function validate_admission_button(value){
		for(i=0; i< value ;i++){
		texbox1 = $("#section"+i).val();
		texbox2 = $("#boys"+i).val();
		texbox3 = $("#girls"+i).val();
		texbox4 = $("#newboys"+i).val();
		texbox5 = $("#newgirls"+i).val();
		texbox6 = $("#freestudent"+i).val();



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
	
		if ((texbox5 < 0)){
		$('#error').show();
		return	false ;
		}
		else if(isNaN(texbox5)){
		$('#error').show();
		return	false ;
		}

		if ((texbox6 < 0)){
		$('#error').show();
		return	false ;
		}

		else if (isNaN(texbox6)){
			$('#error').show();
			return	false ;
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
