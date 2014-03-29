// JavaScript Document
function validate_overdue()
{
	var overdue=$('#overdue').val();
	for(var i=0;i<overdue;i++)
	{
	var Numofstud=$('#numstud'+i).val();
	var Feesoverdue=$('#foverdue'+i).val();
	var counterror=0;
	
	//alert(Numofstud);
	if(Numofstud=='')
	{
		$('#numstud'+i).addClass("focuson");
		$('#numstuderror').text('Fields with Red are Required');
		counterror=counterror+1;
	}
	
	else
	{
		$('#numstud'+i).removeClass("focuson");
		$('#numstuderror').text();
	}
	if(Feesoverdue=='')
	{
		$('#foverdue'+i).addClass("focuson");
		$('#numstuderror').text('Fields with Red are Required');
		counterror=counterror+1;
	}
	else
	{
		$('#foverdue'+i).removeClass("focuson");
		$('#numstuderror').text();
	}
	}
	if(counterror>0)
	{
		return false;
	}
	else
	{
		$('#overduedetails').val();
	
}
}