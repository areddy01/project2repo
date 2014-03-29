function add_cost(validateval1,validateval2,validateval3){
$('#errmark').hide();
$('#error').hide(); 

  var data1=$(validateval1).val();
  var data2=$(validateval2).val();
  var data3=$(validateval3).val();
  var adding =  parseInt(data1) + parseInt(data2)  ;
	

	var len=data2.length;
    var c=0;
    var age=0;
    var flag=0;
    for(var i=0;i<len;i++)
    {
 
      c = data1.charAt(i).charCodeAt(0);

			if(c <48 || c >57 ) 
		    {
        	$('#error').show();
			
	        $(validateval1).addClass("focuson");
        	return false;
      		}
     		 else
      		{
			
       		$(validateval1).removeClass("focuson");
			$('#error').hide();
            
      		}
    		}

	$(validateval3).val(adding);
			
	return true;
    }   
