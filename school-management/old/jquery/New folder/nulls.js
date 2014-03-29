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

