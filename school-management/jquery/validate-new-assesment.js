// JavaScript Document
function validate_new_assesment(){
	var tag=$('#tag').val();
	var assesment =$('#schoolassess').val();
	var errcount=0;
	var title=$('#title').val();
	
	if(tag==''){
		$('#tag').addClass("focuson");
		$('#tagerror').text('Required Field');
		errcount=errcount+1;
	}
	else{
		$('#tagerror').removeClass("focuson");
		 $('#tagerror').text('');
	}
	
	if(title==''){
		$('#title').addClass("focuson");
		 
		errcount=errcount+1;
	}
	else{
		$('#tagerror').removeClass("focuson");
		 
	}
	
	if(assesment==''){
		$('#schoolassess').addClass("focuson");
		$('#schoolassesserror').text('Should Contain Mr. or Ms.');
		errcount=errcount+1;
	}
		else{
			var data=$('#schoolassess').val(); 
			
			//alert(isNaN(data));
			
			if(isNaN(data)==true ){
					
							$('#schoolassess').removeClass("focuson");
								$('#schoolassesserror').text();
				
			}else{
							$('#schoolassesserror').addClass("focuson");
							$('#schoolassesserror').text('Should contain mr or ms');
							 errcount=errcount+1;    	
			}
		/*var c=0;
		var data=$('#schoolassess').val(); alert(data);
		var len=data.length;
		for(var i=0;i<=data.len;i++)
		{ 
		  c =data.charAt(i).charCodeAt(0);
		alert(c);
		       
					if(c < 65 || c > 90 && c < 97 || c > 122  )
					{
								
							$('#schoolassesserror').removeClass("focuson");
								$('#schoolassesserror').text();
					  
					 }else{
							alert(c);
							$('#schoolassesserror').addClass("focuson");
							$('#schoolassesserror').text('Should contain mr or ms');
							 errcount=errcount+1;    
							
							}
				}*/
		}
		
		
	
		if(errcount>0){
		return false;
		
	}else{ 
		$('#assesment').submit();
		
	}
	
	
}