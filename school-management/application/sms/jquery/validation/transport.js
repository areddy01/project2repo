$(document).ready(function(){
 
$('#transport0').blur(function(event) 
{
$('#errmark').hide();
$('#error').hide();	

 	var data=$('#transport0').val();
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
        $('#transport0').addClass("focuson");
        event.preventDefault();
        return false;
      }
      else
      {
       $('#transport0').removeClass("focuson");
       $('#error').hide();
       return true;      
      }
    }
 
      if ($('#transport0').val() == '')
      {
		$('#transport0').addClass("focuson");
		$("#errmark").show();
		return false;

      }
      else
      
      {
      $('#transport0').removeClass("focuson");
        $('#errmark').hide();
        return true;
      }
    
});
 
});




function validate_tenth()
{
$('#errmark').hide();
$('#error').hide();		

	var data=$('#transport0').val();
    var len=data.length;
    var c;
    for(var i=0;i<len;i++)
    {
      c=data.charAt(i).charCodeAt(0);
      if(c <48 || c >57)
      {
        $('#error').show();
        $('#transport0').addClass("focuson");
        return false;
      }
      else
      
      {
      $('#transport0').removeClass("focuson");
        $('#error').hide();
        return true;
      }
    }
      if ($('#transport0').val() == '')
      {
		$('#transport0').addClass("focuson");
		$("#errmark").show();
		return false;

      }
      else
      
      {
      $('#transport0').removeClass("focuson");
        $('#errmark').hide();
        return true;
      }

}
