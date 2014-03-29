
function validate_alphabets(validateval)
{
$('#errmark').hide();
$('#error').hide();		

	var data=$('#validateval').val();
    var len=data.length;
    var c = 0;
    for(var i=0;i<len;i++)
    {
      c=data.charAt(i).charCodeAt(0);
      if(c <65 || c >90 && c <97 || c >122)
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
return true;
      }


