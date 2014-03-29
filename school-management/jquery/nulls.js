function validat_nulls(validval)
{

$('#errmark').hide();
$('#error').hide(); 

var data=$(validval).val();

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
