function validat_city(validateval){


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
  
      if(c <65 || c >90 && c <97 || c >122) 

	      {
			$(validateval).addClass("focuson");       	
         	$("#error").show();
            return false;

      	  }
     	  else
      	  {
  	     $(validateval).removeClass("focuson");
        	$('#error').hide();
      	  }
    }
    
  	
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
		
	return true;
     	}

