
function validat_nulls(validateval){


$('#errmark').hide();
$('#error').hide();	


 	var data=$(validateval).val();
 	
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
        $(validateval).addClass("focuson");
        $(validateval).focus();
        return false;
      }
      else
      {
       $(validateval).removeClass("focuson");
       $('#error').hide();
       return true;      
      }
   }
		if ($(validateval).val() == '')
      {
      	
		$(validateval).addClass("focuson");
		$("#er").show();
		$(validateval).focus();
		return false;

      }
      else
      
      {
      $(validateval).removeClass("focuson");
      $('#er').hide();
        return true;
      }
      
      
      

}

function validat_vals(validateval){


$('#errmark').hide();
$('#error').hide();	

	if ($(validateval).val() == '')
      {
      	
		$(validateval).addClass("focuson");
		$("#errmark").show();
		$(validateval).focus();
		
		return false;

      }
      else
      
      {
      $(validateval).removeClass("focuson");
        $('#errmark').hide();
        return true;
      }
      
      
      

}




function validate_school()
{
$('#errmark').hide();
$('#error').hide();		

for (var k=0;k<6;k++)
{
var dat="#schoolfee"+k;
var dat1="#schoolfee"+k;
dat=$(dat).val();
if (dat == '')
      {
		$(dat1).addClass("focuson");
		
		$("#errmark").show();
		$(dat1).focus();
		
		return false;

      }
      else
      
      {
      $(dat1).removeClass("focuson");
      $('#errmark').hide();
        //return true;
      }

  }   
     


for (var j=0;j<86;j++)
{
var tes="#nuradmin"+j;
var tes1="#nuradmin"+j;
tes=$(tes).val();

	if (tes == '')
      {
		$(tes1).addClass("focuson");
		
		$("#errmark").show();
		$(tes1).focus();
		
		return false;

      }
      else
      
      {
      $(tes1).removeClass("focuson");
      $('#errmark').hide();
        //return true;
      }
      
     var len=tes.length;
   	 var c;
    for(var i=1;i<len;i++)
    {
      c=tes.charAt(i).charCodeAt(0);
      if(c <48 || c >57)
      {
        $('#error').show();
        $(tes1).addClass("focuson");
		$(tes1).focus();
        return false;
      }
      else
      
      {
      $(tes1).removeClass("focuson");
      $('#error').hide();
        //return true;
      }
    }

 
 
}
}




function validate_admissions()
{
$('#errmark').hide();
$('#error').hide();		
/*
for (var k=0;k<6;k++)
{
var dat="#schoolfee"+k;
var dat1="#schoolfee"+k;
dat=$(dat).val();
if (dat == '')
      {
		$(dat1).addClass("focuson");
		
		$("#errmark").show();
		$(dat1).focus();
		
		return false;

      }
      else
      
      {
      $(dat1).removeClass("focuson");
      $('#errmark').hide();
        //return true;
      }

  }   
     */


for (var j=0;j<221;j++)
{
var tes="#admissions"+j;
var tes1="#admissions"+j;
tes=$(tes).val();

	if (tes == '')
      {
		$(tes1).addClass("focuson");
		
		$("#errmark").show();
		$(tes1).focus();
		
		return false;

      }
      else
      
      {
      $(tes1).removeClass("focuson");
      $('#errmark').hide();
        //return true;
      }
      
     var len=tes.length;
   	 var c;
    for(var i=1;i<len;i++)
    {
      c=tes.charAt(i).charCodeAt(0);
      if(c <48 || c >57)
      {
        $('#error').show();
        $(tes1).addClass("focuson");
		$(tes1).focus();
        return false;
      }
      else
      
      {
      $(tes1).removeClass("focuson");
      $('#error').hide();
        //return true;
      }
    }

 
 
}
}



function validate_tenth()
{
$('#errmark').hide();
$('#error').hide();		

for (var j=0;j<=9;j++)
{
var tes="#tenth"+j;
var tes1="#tenth"+j;
tes=$(tes).val();

		if (tes == '')
	      {
			$(tes1).addClass("focuson");
			
			$("#errmark").show();
			$(tes1).focus();
			
			return false;
	
	      }
	      else
	      
	      {
	      $(tes1).removeClass("focuson");
	      $('#errmark').hide();
	        //return true;
	      }
      
     var len=tes.length;
   	 var c;
	    for(var i=1;i<len;i++)
	    {
	      c=tes.charAt(i).charCodeAt(0);
	      if(c <48 || c >57)
	      {
	        $('#error').show();
	        $(tes1).addClass("focuson");
			$(tes1).focus();
	        return false;
	      }
	      else
	      
	      {
	      $(tes1).removeClass("focuson");
	      $('#error').hide();
	        //return true;
	      }
	    }

 
 
}
}


function validate_ttsheet()
{
$('#errmark').hide();
$('#error').hide();		



for (var j=0;j<14;j++)
{
var tes="#ttsheet"+j;
var tes1="#ttsheet"+j;
tes=$(tes).val();

	if (tes == '')
      {
		$(tes1).addClass("focuson");
		
		$("#errmark").show();
		$(tes1).focus();
		
		return false;

      }
      else
      
      {
      $(tes1).removeClass("focuson");
      $('#errmark').hide();
        //return true;
      }
      
     var len=tes.length;
   	 var c;
    for(var i=1;i<len;i++)
    {
      c=tes.charAt(i).charCodeAt(0);
      if(c <48 || c >57)
      {
        $('#error').show();
        $(tes1).addClass("focuson");
		$(tes1).focus();
        return false;
      }
      else
      
      {
      $(tes1).removeClass("focuson");
      $('#error').hide();
        //return true;
      }
    }
    
for (var k=1;k<=2;k++)
{
var dat="#ttsheete"+k;
var dat1="#ttsheete"+k;
dat=$(dat).val();
if (dat == '')
      {
		$(dat1).addClass("focuson");
		
		$("#errmark").show();
		$(dat1).focus();
		
		return false;

      }
      else
      
      {
      $(dat1).removeClass("focuson");
      $('#errmark').hide();
        //return true;
      }

  }   
    


 
 
}
}



function validate_observations()
{
$('#errmark').hide();
$('#error').hide();		

for (var j=0;j<=27;j++)
{
var tes="#observations"+j;
var tes1="#observations"+j;

tes=$(tes).val();

		if (tes == '')
	      {
			$(tes1).addClass("focuson");
			
			$("#errmark").show();
			$(tes1).focus();
			
			return false;
	
	      }
	      else
	      
	      {
	      $(tes1).removeClass("focuson");
	      $('#errmark').hide();
	        //return true;
	      }
      
 
 
}
}


function validate_parentsur()
{
$('#errmark').hide();
$('#error').hide();		

for (var j=0;j<=26;j++)
{
var tes="#parentsur"+j;
var tes1="#parentsur"+j;

tes=$(tes).val();

		if (tes == '')
	      {
			$(tes1).addClass("focuson");
			
			$("#errmark").show();
			$(tes1).focus();
			
			return false;
	
	      }
	      else
	      
	      {
	      $(tes1).removeClass("focuson");
	      $('#errmark').hide();
	        //return true;
	      }
      
 
 
}
}


function validate_teacherfb()
{
$('#errmark').hide();
$('#error').hide();		

for (var j=0;j<=27;j++)
{
var tes="#teacherfb"+j;
var tes1="#teacherfb"+j;

tes=$(tes).val();

		if (tes == '')
	      {
			$(tes1).addClass("focuson");
			
			$("#errmark").show();
			$(tes1).focus();
			return false;
			
	
	      }
	      else
	      
	      {
	      $(tes1).removeClass("focuson");
	      $('#errmark').hide();
	        //return true;
	      }
      
 
 
}
}


function validate_teacher()
{
$('#errmark').hide();
$('#error').hide();		

for (var j=0;j<=16;j++)
{
var tes="#teacher"+j;
var tes1="#teacher"+j;

tes=$(tes).val();

		if (tes == '')
	      {
			$(tes1).addClass("focuson");
			
			$("#errmark").show();
			$(tes1).focus();
			return false;
			
	
	      }
	      else
	      
	      {
	      $(tes1).removeClass("focuson");
	      $('#errmark').hide();
	        //return true;
	      }
      
 
 
}
}

function validate_attendance()
{
$('#errmark').hide();
$('#error').hide();		

for (var j=0;j<=133;j++)
{
var tes="#attendance"+j;
var tes1="#attendance"+j;

tes=$(tes).val();

		if (tes == '')
	      {
			$(tes1).addClass("focuson");
			
			$("#errmark").show();
			$(tes1).focus();
			return false;
			
	
	      }
	      else
	      
	      {
	      $(tes1).removeClass("focuson");
	      $('#errmark').hide();
	        //return true;
	      }
}
}



function validate_overdue()
{
$('#errmark').hide();
$('#error').hide();		

for (var j=0;j<=27;j++)
{
var tes="#overdue"+j;
var tes1="#overdue"+j;
tes=$(tes).val();

		if (tes == '')
	      {
			$(tes1).addClass("focuson");
			
			$("#er").show();
			$(tes1).focus();
			
			return false;
	
	      }
	      else
	      
	      {
	      $(tes1).removeClass("focuson");
	      $('#er').hide();
	        //return true;
	      }
      
     var len=tes.length;
   	 var c;
	    for(var i=1;i<len;i++)
	    {
	      c=tes.charAt(i).charCodeAt(0);
	      if(c <48 || c >57)
	      {
	        $('#error').show();
	        $(tes1).addClass("focuson");
			$(tes1).focus();
	        return false;
	      }
	      else
	      
	      {
	      $(tes1).removeClass("focuson");
	      $('#error').hide();
	        //return true;
	      }
	    }

 
 
}
}




function validate_financials()
{
$('#errmark').hide();
$('#error').hide();		



for (var j=0;j<=95;j++)
{
var tes="#financials"+j;
var tes1="#financials"+j;
tes=$(tes).val();

	if (tes == '')
      {
		$(tes1).addClass("focuson");
		
		$("#errmark").show();
		$(tes1).focus();
		
		return false;

      }
      else
      
      {
      $(tes1).removeClass("focuson");
      $('#errmark').hide();
        //return true;
      }
      
     var len=tes.length;
   	 var c;
    for(var i=1;i<len;i++)
    {
      c=tes.charAt(i).charCodeAt(0);
      if(c <48 || c >57)
      {
        $('#error').show();
        $(tes1).addClass("focuson");
		$(tes1).focus();
        return false;
      }
      else
      
      {
      $(tes1).removeClass("focuson");
      $('#error').hide();
        //return true;
      }
    }
/*    
for (var k=0;k<=17;k++)
{
var dat="#financialsc"+k;
var dat1="#financialsc"+k;
dat=$(dat).val();
if (dat == '')
      {
		$(dat1).addClass("focuson");
		
		$("#errmark").show();
		$(dat1).focus();
		
		return false;

      }
      else
      
      {
      $(dat1).removeClass("focuson");
      $('#errmark').hide();
        //return true;
      }

  }   

*/
}

}


function validate_transport()
{
$('#errmark').hide();
$('#error').hide();		



for (var j=0;j<=39;j++)
{
var tes="#nurfee"+j;
var tes1="#nurfee"+j;
tes=$(tes).val();

	if (tes == '')
      {
		$(tes1).addClass("focuson");
		
		$("#errmark").show();
		$(tes1).focus();
		
		return false;

      }
      else
      
      {
      $(tes1).removeClass("focuson");
      $('#errmark').hide();
        //return true;
      }
      
     var len=tes.length;
   	 var c;
    for(var i=1;i<len;i++)
    {
      c=tes.charAt(i).charCodeAt(0);
      if(c <48 || c >57)
      {
        $('#error').show();
        $(tes1).addClass("focuson");
		$(tes1).focus();
        return false;
      }
      else
      
      {
      $(tes1).removeClass("focuson");
      $('#error').hide();
        //return true;
      }
    }
}

}

function validate_otherfees()
{
$('#errmark').hide();
$('#error').hide();		

for (var j=0;j<=83;j++)
{
var tes="#otherfees"+j;
var tes1="#otherfees"+j;
tes=$(tes).val();

	if (tes == '')
      {
		$(tes1).addClass("focuson");
		$("#errmark").show();
		$(tes1).focus();
		return false;
		
      }
      else
      
      {
      $(tes1).removeClass("focuson");
      $('#errmark').hide();
        //return true;
      }
      
     var len=tes.length;
   	 var c;
    for(var i=1;i<len;i++)
    {
      c=tes.charAt(i).charCodeAt(0);
      if(c <48 || c >57)
      {
        $('#error').show();
        $(tes1).addClass("focuson");
        $(tes1).focus();
		return false;
		
      }
      else
      
      {
      $(tes1).removeClass("focuson");
      $('#error').hide();
        //return true;
      }
    }
}

}








