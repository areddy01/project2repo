function admission_validate() {
var counterr=0; 
var count=$('#tenthcount').val(); 
for (var a=0; a<count; a++){

	var boys =$('#boys'+a).val();
	var girls =$('#girls'+a).val();
	var newboys=$('#newboys'+a).val;
	var newgirls=$('#newgirls'+a).val;
    var freestudents=$('#freestudent'+a).val;
			if(boys==''){
				$('#boys'+a).addClass("focuson");
				$('#addmissionerror').text('Feilds with red are Required');
				counterr=counterr+1;
			}else {
				$('#boys'+a).removeClass();
				$('#addmissionerror').text();
			}

			if(girls==''){
				$('#girls'+a).addClass("focuson");
				$('#addmissionerror').text('Feilds with red are Required');
				counterr=counterr+1;
			}else {
				$('#girls'+a).removeClass();
				$('#addmissionerror').text();
			}

			/* if(newboys==''){
				$('#newboys'+a).addClass("focuson");
				$('#addmissionerror').text('Fields with red are Required');
				counterr=counterr+1;;
			}else{
				$('#newboys'+a).removeClass("focuson");
				$('#addmissionerror').text('');
			}

			if(newgirls==''){
				$('#newgirls'+a).addClass("focuson");
				$('#addmissionerror').text('Fields with red are Required');
				counterr=counterr+1;
			}else{
				$('#newgirls'+a).removeClass("focuson");
				$('#addmissionerror').text('');
			}
			if(freestudents==''){
				$('#freestudent'+a).addClass("focuson");
				$('#addmissionerror').text('Fields with red are Required');
				counterr=counterr+1;
			}else{
				$('#freestudent'+a).removeClass("focuson");
				$('#addmissionerror').text('');
			} */
}

			if(counterr>0){
				return false;
			}else{
				$('#admission').submit();
			}
}

function admission_validate1() {
			var counterrs=0; 
			var counts=13;
for (var b=0; b<counts; b++){

			var girlsprevious =$('#girlsprevious'+b).val();
			var boysprevious = $('#boysprevious'+b).val();

			if(boysprevious==''){
				$('#boysprevious'+b).addClass("focuson");
				$('#addmissionerror1').text('Feilds with red are Required');
				counterrs=counterrs+1;
			}else {
				$('#boysprevious'+b).removeClass();
				$('#addmissionerror1').text('');
			}
			if(girlsprevious==''){
				$('#girlsprevious'+b).addClass("focuson");
				$('#addmissionerror1').text('Feilds with red are Required');
				counterrs=counterrs+1;
			}else {
				$('#girlsprevious'+b).removeClass();
				$('#addmissionerror1').text('');
			}

}

if(counterrs>0){
return false;
} else {
$('#admission1').submit();
}
}

function admission_validate2() {
var counterrss=0; 
var countss=13;
for (var c=0; c<countss; c++){

var total2 =$('#total2'+c).val();

if(total2==''){
$('#total2'+c).addClass("focuson");
$('#addmissionerror2').text('Feilds with red are Required');
counterrss=counterrss+1;
}else {
$('#total2'+c).removeClass();
$('#addmissionerror2').text();
}


}

if(counterrss>0){
return false;
} else {
$('#admission2').submit();
}
}




$(document).ready(function(){
 
$('#admissions0').blur(function(event) 
{
$('#errmark').hide();
$('#error').hide();	

 	var data=$('#admissions0').val();
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
        $('#admissions0').addClass("focuson");
        event.preventDefault();
        return false;
      }
      else
      {
       $('#admissions0').removeClass("focuson");
       $('#error').hide();
       return true;      
      }
    }
 
      if ($('#admissions0').val() == '')
      {
		$('#admissions0').addClass("focuson");
		$("#errmark").show();
		return false;

      }
      else
      
      {
      $('#admissions0').removeClass("focuson");
        $('#errmark').hide();
        return true;
      }
    
});
 
});




function validate_school()
{
$('#errmark').hide();
$('#error').hide();		

	var data=$('#admissions0').val();
    var len=data.length;
    var c;
    for(var i=0;i<len;i++)
    {
      c=data.charAt(i).charCodeAt(0);
      if(c <48 || c >57)
      {
        $('#error').show();
        $('#admissions0').addClass("focuson");
        return false;
      }
      else
      
      {
      $('#admissions0').removeClass("focuson");
        $('#error').hide();
        return true;
      }
    }
      if ($('#admissions0').val() == '')
      {
		$('#admissions0').addClass("focuson");
		$("#errmark").show();
		return false;

      }
      else
      
      {
      $('#admissions0').removeClass("focuson");
        $('#errmark').hide();
        return true;
      }

}

function trimalpha(id){
var idvalue=$(id).val();
if(isNaN(idvalue)){
$(id).val('');
}
}




function add_cost(validateval1,validateval2,validateval3){
$('#errmark').hide();
$('#error').hide(); 

  var data1=$(validateval1).val();
  var data2=$(validateval2).val();
  var data3=$(validateval3).val();
  
 
  var adding =  parseInt(data1) + parseInt(data2);
	

	var len=data2.length;
    var c=0;
    var age=0;
    var flag=0;
    for(var i=0;i<len;i++)
    {
 
      c = data1.charAt(i).charCodeAt(0);

			if(c <48 || c >57 ) 
		    {
        	$('#error').show();
			
	        $(validateval1).addClass("focuson");
        	return false;
      		}
     		 else
      		{
			
       		$(validateval1).removeClass("focuson");
			$('#error').hide();
            
      		}
    		}

	$(validateval3).val(adding);
			
	return true;
    }   

function add_secondarycosts(validateval1,validateval2,validateval3){
$('#errmark').hide();
$('#error').hide(); 

  var data1=$(validateval1).val();
  var data2=$(validateval2).val();
  var data3=$(validateval3).val();
   var data4=$(newtotal).val();
 // alert();
  var adding =  parseInt(data1) + parseInt(data2) +  parseInt(data4);
	

	var len=data2.length;
    var c=0;
    var age=0;
    var flag=0;
    for(var i=0;i<len;i++)
    {
 
      c = data1.charAt(i).charCodeAt(0);

			if(c <48 || c >57 ) 
		    {
        	$('#error').show();
			
	        $(validateval1).addClass("focuson");
        	return false;
      		}
     		 else
      		{
			
       		$(validateval1).removeClass("focuson");
			$('#error').hide();
            
      		}
    		}

	$(validateval3).val(adding);
			
	return true;
    }   


function validate_freestudents(total,freestudent)
{ //alert('cgg');
	var totalenr=$(total).val();
	//alert(totalenr);
	var freestudents=$(freestudent).val();
	//$('#freestudenterror').text('');
	//alert(freestudent);
	if(freestudents > totalenr)
	{ //alert();
		$(freestudent).addClass("focuson");
		$(totalenr).addClass("focuson");
		//document.getElementById('freestudent').value=0;
		$('#freestudenterror').text('Free students  should be less than Total students');
		//document.getElementById('freestudent').focus()
		
		
		errorcount=erorcount + 1;
	}
	else
	{ 
		$(freestudent).removeClass("focuson");
		$(totalenr).removeClass("focuson");
		
		$('#freestudenterror').text('');
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



