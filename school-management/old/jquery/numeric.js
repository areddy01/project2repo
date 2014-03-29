function validate_numeric(validateval){


$('#errmark').hide();
$('#error').hide(); 

  var data=trim($(validateval).val());
  alert(data);
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



function validate_nulls(validval)
{

$('#errmark').hide();
$('#error').hide(); 

var data=$(validateval).val();
alert(data);

if (data == '')
      {
	$(validval).addClass("focuson");
	$("#errmark").show();
	return false;

      }
      else
      
      {
	$(validval).removeClass("focuson");
        $('#errmark').hide();
        return true;
      }
}


function mul_value(validateval1,validateval2,validateval3){
$('#errmark').hide();
$('#error').hide(); 

  var data1=$(validateval1).val();
  var data2=$(validateval2).val();
  var data3 = $(validateval3).val();
  var adding =  parseInt(data1) * parseInt(data2) ;
	

	var len=data2.length;
    var c=0;
    var age=0;
    var flag=0;
    for(var i=0;i<len;i++)
    {
 
      c = data1.charAt(i).charCodeAt(0);
	  d = data2.charAt(i).charCodeAt(0);
			if((c <48 || c >57) && (d <48 || d >57) ) 
		    {
        	$('#error').show();
			
	        $(validateval2).addClass("focuson");
        	return false;
      		}
     		 else
      		{
			
       		$(validateval2).removeClass("focuson");
			$('#error').hide();
            
      		}
    		}

	$(validateval3).val(adding);
		
	if ($(validateval3).val() == 'NaN') 
	{
	$(validateval1).addClass("focuson");
	$("#error").show();
	return false;
	}
	 else
  	{
 		$(validateval1).removeClass("focuson");
		$('#error').hide();
	}	 	
	return true;
    }
    
    
 
function add_sum(validateval1,validateval2,validateval3){
$('#errmark').hide();
$('#error').hide(); 

  var data1 = $(validateval1).val();
  var data2 = $(validateval2).val();
  var data3 = $(validateval3).val();

  var adding =  parseInt(data1) * parseInt(data2) * 12 ;
 	

	var len=data2.length;
    var c=0;
    var age=0;
    var flag=0;
    for(var i=0;i<len;i++)
    {
 
      c = data1.charAt(i).charCodeAt(0);
	  d = data2.charAt(i).charCodeAt(0);
			if((c <48 || c >57) && (d <48 || d >57) ) 
		    {
        	$('#error').show();
			
	        $(validateval2).addClass("focuson");
        	return false;
      		}
     		 else
      		{
			
       		$(validateval2).removeClass("focuson");
			$('#error').hide();
            
      		}
    		}

	$(validateval3).val(adding);
		
	if ($(validateval3).val() == 'NaN') 
	{
	$(validateval1).addClass("focuson");
	$("#error").show();
	return false;
	}
	 else
  	{
 		$(validateval1).removeClass("focuson");
		$('#error').hide();
	}	 	
	return true;

    }   
    
  
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

function add_res(val1,val2)
{
var data1=$(val1).val();
var data2=$(val2).val();

var dateval=right(data1,4);
$(val2).val(dateval);
alert(dateval);
}

function check_date(validval)
{
$('#err').hide();
var data1=$(validval).val();

var a = new Date();
var b = a.toISOString().split("T")[0].split("-");
var ca = b[1] + "/" + b[2] + "/" + b[0];
alert(ca);

}
    
function validate_city(validateval) {
$('#errmark').hide();
$('#error').hide();

var data =trim($(validateval).val());
alert(data);
var len = data.length;
 var n=0;
    for(var j=0;j<len;j++)
    {
 
      n = data.charAt(j).charCodeAt(0);
 if(n < 65 || n > 90 ) {
$('#error').show();
$(validateval).addClass("focusOn");
return false;
}
else 
{

$(validateval).removeClass("focusOn");
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
