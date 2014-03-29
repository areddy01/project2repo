/*
$(document).ready(function(){
 
$('#nuradmin0').blur(function(event) 
{
$('#errmark').hide();
$('#error').hide();	

 	var data=$('#nuradmin0').val();
 	alert(data);
    var len=data.length;
    var c=0;
    var age=0;
    var flag=0;
    for(var i=0;i<len;i++)
    {
      c=data.charAt(i).charCodeAt(0);
      if(c <48 || c >57)
      {
        $('#error').show();
        $('#nuradmin0').addClass("focuson");
        event.preventDefault();
        return false;
      }
      else
      {
       $('#nuradmin0').removeClass("focuson");
       $('#error').hide();
       return true;      
      }
    }
 
  	 


/*

	var data=$('#nuradmin0').val();
    var len=data.length;
    var c;
    for(var i=0;i<len;i++)
    {
      c=data.charAt(i).charCodeAt(0);
      if(c <48 || c >57)
      {
        $('#error').show();
        $('#nuradmin0').addClass("focuson");
        return false;
      }
      else
      
      {
      $('#nuradmin0').removeClass("focuson");
        $('#error').hide();
        return true;
      }
    }//
      if ($('#nuradmin0').val() == '')
      {
		$('#nuradmin0').addClass("focuson");
		$("#errmark").show();
		return false;

      }
      else
      
      {
      $('#nuradmin0').removeClass("focuson");
        $('#errmark').hide();
        return true;
      }
    
});
 
});

*/



function validat_nulls(validateval){

$('#errmark').hide();
$('#error').hide();	

 	var data=$(validateval).val();
 	var len=data.length;
    var c=0;
    var age=0;
    var flag=0;
        for(var i=0;i<len;i++)
   		 {
   	    c=data.charAt(i).charCodeAt(0);
     	if(c <48 || c >57)
     
      {
        $('#error').show();
        $(validateval).addClass("focuson");
        return false;
      }
      else
      {
       $(validateval).removeClass("focuson");
       $('#error').hide();
       return true;      
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
        return true;
      }

}



function validate_school()
{
$('#errmark').hide();
$('#error').hide();		



	var data=$('#nuradmin0').val();
    var len=data.length;
    var c;
    for(var i=0;i<len;i++)
    {
      c=data.charAt(i).charCodeAt(0);
      if(c <48 || c >57)
      {
        $('#error').show();
        $('#nuradmin0').addClass("focuson");
        return false;
      }
      else
      
      {
      $('#nuradmin0').removeClass("focuson");
        $('#error').hide();
        return true;
      }
    }
      if ($('#nuradmin0').val() == '')
      {
		$('#nuradmin0').addClass("focuson");
		$("#errmark").show();
		return false;

      }
      else
      
      {
      $('#nuradmin0').removeClass("focuson");
        $('#errmark').hide();
        return true;
      }

}
