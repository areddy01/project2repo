$(document).ready(function(){
 
$('#teacherfb0').blur(function(event) 
{
$('#errmark').hide();
$('#error').hide();	

 	var data=$('#teacherfb0').val();
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
        $('#teacherfb0').addClass("focuson");
        event.preventDefault();
        return false;
      }
      else
      {
       $('#teacherfb0').removeClass("focuson");
       $('#error').hide();
       return true;      
      }
    }
 
      if ($('#teacherfb0').val() == '')
      {
		$('#teacherfb0').addClass("focuson");
		$("#errmark").show();
		return false;

      }
      else
      
      {
      $('#teacherfb0').removeClass("focuson");
        $('#errmark').hide();
        return true;
      }
    
});
 
});




function validate_school()
{
$('#errmark').hide();
$('#error').hide();		

	var data=$('#teacherfb0').val();
    var len=data.length;
    var c;
    for(var i=0;i<len;i++)
    {
      c=data.charAt(i).charCodeAt(0);
      if(c <48 || c >57)
      {
        $('#error').show();
        $('#teacherfb0').addClass("focuson");
        return false;
      }
      else
      
      {
      $('#teacherfb0').removeClass("focuson");
        $('#error').hide();
        return true;
      }
    }
      if ($('#teacherfb0').val() == '')
      {
		$('#teacherfb0').addClass("focuson");
		$("#errmark").show();
		return false;

      }
      else
      
      {
      $('#teacherfb0').removeClass("focuson");
        $('#errmark').hide();
        return true;
      }

}
