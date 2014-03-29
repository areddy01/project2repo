// JavaScript Document
function validate_tenth()
{
 var EnrClassX =        $('#NoStuEnrInClassX').val();
 var FirDivisionPass =  $('#NoStuInFirDiv').val();
 var SecDivisionPass =  $('#NoStuInSecDiv').val();
 var ThiDivisionPass=   $('#NoStuInThiDiv').val();
 var FailedStu=         $('#NoStuFailed').val();
 var errcount=0;

 
 if(EnrClassX =='')
	{
	    $('#NoStuEnrInClassX').addClass("focuson");
	    $('#Nullerror').text('Required Field');
		errcount=errcount+1;
	}
	else {
		
		$('#NoStuEnrInClassX').removeClass("focuson");
	    $('#Nullerror').text();
		}
		//alert(isNaN(EnrClassX));
		if(isNaN(EnrClassX))
	{
		$('#NoStuEnrInClassX').addClass("focuson");
		$('#Nullerror').text('Please enter a numeric value');
		errcount=errcount+1;
	}
	else
	{
		$('#NoStuEnrInClassX').removeClass("focuson");
		$('#Nullerror').text();
	}
	if(FirDivisionPass=='')
	{
	  $('#NoStuInFirDiv').addClass("focuson");
	  $('#firdiverror').text('Required Field');
	  errcount=errcount+1;
	}
		else if(Number(FirDivisionPass) > Number(EnrClassX))
		{
		  $('#NoStuInFirDiv').addClass("focuson");
		  $('#firdivcalerror').text('Check the Figures');
		  errcount=errcount+1;
		}
		else
		{
		$('#NoStuInFirDiv').removeClass("focuson");
	    $('#firdivcalerror').text();
	}
	if(isNaN(FirDivisionPass))
	{
		$('#NoStuInFirDiv').addClass("focuson");
		$('#firdiverror').text('Please enter a numeric value');
		errcount=errcount+1;
	}
	else
	{
		$('NoStuInFirDiv').removeClass("focuson");
		$('#firdiverror').text();
	}
	if(SecDivisionPass=='')
	{
	  $('#NoStuInSecDiv').addClass("focuson");
	  $('#secdiverror').text('Required Field');
	  errcount=errcount+1;
	}
		else
		{
		$('#NoStuInSecDiv').removeClass("focuson");
	    $('#secdivcalerror').text();
	}
	if(Number(EnrClassX) < Number(SecDivisionPass) )
		{ 
		  $('#NoStuInSecDiv').addClass("focuson");
		  $('#secdivcalerror').text('Check the Figures');
		  errcount=errcount+1;
		}
		
		else {
			$('#NoStuInSecDiv').removeClass("focuson");
		  $('#secdivcalerror').text('');
		}
		if(isNaN(SecDivisionPass))
	{
		$('#NoStuInSecDiv').addClass("focuson");
		$('#secdiverror').text('Please enter a numeric value');
		errcount=errcount+1;
	}
	else
	{
		$('#NoStuInSecDiv').removeClass("focuson");
		$('#secdiverror').text();
	}
		if(Number(ThiDivisionPass)=='')
	{
	  $('#NoStuInThiDiv').addClass("focuson");
	  $('#Thidiverror').text('Required Field');
	  errcount=errcount+1;
	}
		else
		{
		$('#NoStuInThiDiv').removeClass("focuson");
	    $('#Thidivcalerror').text();
	}
	 if(Number(EnrClassX) < Number(ThiDivisionPass))
		{ //alert(EnrClassX); alert(ThiDivisionPass);
		  $('#NoStuInThiDiv').addClass("focuson");
		  $('#Thidivcalerror').text('Check the Figures');
		  errcount=errcount+1;
		}
		else {
			$('#NoStuInThiDiv').removeClass("focuson");
		  $('#Thidivcalerror').text();
		}
		if(isNaN(ThiDivisionPass))
	{
		$('#NoStuInThiDiv').addClass("focuson");
		$('#Thidiverror').text('Please enter a numeric value');
		errcount=errcount+1;
	}
	else
	{
		$('#NoStuInThiDiv').removeClass("focuson");
		$('#Thidiverror').text();
	}
		if(Number(FailedStu)=='')
	{
	  $('#NoStuFailed').addClass("focuson");
	  $('#Stufailerror').text('Required Field');
	  errcount=errcount+1;
	}
		else
		{
		$('#NoStuFailed').removeClass("focuson");
	    $('#Stufailcalerror').text();
	}
	
	 if( Number(FailedStu) > Number(EnrClassX) )
		{
		  $('#NoStuFailed').addClass("focuson");
		  $('#Stufailcalerror').text('Check the Figures');
		  errcount=errcount+1;
		}
		else{
			 $('#NoStuFailed').removeClass("focuson");
		  $('#Stufailcalerror').text();
		}
		if(isNaN(FailedStu))
	{
		$('#NoStuFailed').addClass("focuson");
		$('#Stufailerror').text('Please enter a numeric value');
		errcount=errcount+1;
	}
	else
	{
		$('#NoStuFailed').removeClass("focuson");
		$('#Stufailerror').text();
	}
		
		var tt=Number(FirDivisionPass)+Number(SecDivisionPass)+Number(ThiDivisionPass)+Number(FailedStu);
	if(Number(EnrClassX) != Number(tt) )
	{ //alert(tt);
		$('#NoStuEnrInClassX').addClass("focuson");
		$('#Calerror').text('value should equal tosum of all 4 fields');
		errcount=errcount+1;
	}
	
	else
	{
		$('NoStuEnrInClassX').removeClass("focuson");
		$('#Calerror').text();
	}
	
	
	if(errcount>0)
	{
		return false;
	}
	else
	{
		$('#formTenth').submit();
	}
}