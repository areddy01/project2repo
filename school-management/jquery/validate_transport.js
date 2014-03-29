function validate_transport()
{
	var transport=$('#transportfee').val();
	for (var m=0;m<transport;m++)
{	
    var transportfeevalue    =$('#transport_fee_value0'+m).val();
	var Numofstudentsavail   =$('#transport_fee_value1'+m).val();
	var COUNTe=0;
    
if(transportfeevalue=='')
{
     $('#transport_fee_value0'+m).addClass("focuson");
	 $('#transfeeerror').text('Fields with Red are Required');
	 COUNTe=COUNTe+1;
}
else
{
	$('#transport_fee_value0'+m).removeClass("focuson");
	$('#transfeeerror').text();
}
if(Numofstudentsavail=='')
{
     $('#transport_fee_value1'+m).addClass("focuson");
	 $('#transfeeerror').text('Fields with Red are Required');
	 COUNTe=COUNTe+1;
}
else
{
	$('#transport_fee_value1'+m).removeClass("focuson");
	$('#transfeeerror').text();
}
}
if(COUNTe>0)
{
	return false;
}
else
{
	$('#Transportdetails').submit();
}
}