// JavaScript Document
function validate_freestudents(total,freestudent)
{// alert($(total).val());
//alert($(freestudent).val());
	var totalenr=$(total).val();
	//alert(totalenr);
	var freestudent=$(freestudent).val();
	
	if(freestudent>= totalenr)
	{
		$(freestudent).addClass("focuson");
		$('#freestudenterror').text('Freestudents input should be less than Total enrollment input');
		errorcount=erorcount + 1;
	}
	else
	{
		$(freestudent).removeClass("focuson");
		$('#freestudenterror').text();
	}
	if(errorcount > 0)
	{
		return false;
	}
	else
	{
	return true;
	}
}