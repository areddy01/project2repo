function validat_numeric(validateval){


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
/*
 	if (c == 43 || c == 45) 
	{

  	     $(validateval).removeClass("focuson");
       	     $('#error').hide();
	}else	
	{  */

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
	/*	}
  	
	if ($(validateval).val() == '')
      	{
   	$(validateval).addClass("focuson");
   	$("#errmark").show();
   	return false;

	      }
      	else
      
      	{
      	$(validateval).removeClass("focuson");
      	$('#errmark').hide();
      
     	 }
		*/      
		
	return true;
	$("#transportfees").removeAttr('disabled');
	
     	}