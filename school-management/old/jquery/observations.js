/*$(document).ready(function(){
 
$('#observations0').blur(function(event) 
{
$('#errmark').hide();
$('#error').hide();	

 	var data=$('#observations0').val();
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
        $('#observations0').addClass("focuson");
        event.preventDefault();
        return false;
      }
      else
      {
       $('#observations0').removeClass("focuson");
       $('#error').hide();
       return true;      
      }
    }
 
      if ($('#observations0').val() == '')
      {
		$('#observations0').addClass("focuson");
		$("#errmark").show();
		return false;

      }
      else
      
      {
      $('#observations0').removeClass("focuson");
        $('#errmark').hide();
        return true;
      }
    
});
 
});*/




function validate_observ_classtaught(validateval)
{
$('#errmark').hide();
$('#error').hide();		

	var data=$(validateval).val();
    var len=data.length;
    var c;
    for(var i=0;i<len;i++)
    {
      c=data.charAt(i).charCodeAt(0);
      if(c <48 || c >57)
      {
        $('#error').show();
        $('#validateval').addClass("focuson");
        return false;
      }
      else
      
      {
      $('#validateval').removeClass("focuson");
        $('#error').hide();
        return true;
      }
    }
   

function validat_observ_subjecttaught(validateval)
{
$('#errmark').hide();
$('error').hide();

var data1=$(validateval).val();
var len = data1.length;
var d;
for(var j=0; j<len;j++)
{
d=data1.charAt(j).charCodeAt(0);
if(c < 65 || c > 90 || c < 97 || c > 122 )
{
$('#error').show();
$('#validateval').addClass("focuson");
return false;
}
else 
{
$('#validateval').removeClass("focuson");
$('#error').hide();
return true;
}
}
   