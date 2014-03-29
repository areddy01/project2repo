function infra_validate(){ 
var schoolgraph= $('#schoolgraph').val();
var classs= $('#class').val();
var accreditation= $('#accreditation').val();
var qualification= $('#qualification').val();
var corrname= $('#corrname').val();
var ph_no= $('#ph_no').val();
var sch_mail_add= $('#sch_mail_add').val();
var city= $('#city').val();
var city_pincode= $('#city_pincode').val();

var reqcount=0;

if(schoolgraph==''){
$('#schoolgraph').addClass("focuson");
$('#schoolgrapherr').text('Feilds with red are Required ');
reqcount=reqcount+1;
}else{
$('#schoolgraph').removeClass("focuson");
$('#schoolgrapherr').text('');
}

if(classs==''){
$('#class').addClass("focuson");
$('#schoolgrapherr').text('Feilds with red are Required ');
reqcount=reqcount+1;
}else{
$('#class').removeClass("focuson");
$('#classerr').text('');
}

if(accreditation==''){
$('#accreditation').addClass("focuson");
$('#schoolgrapherr').text('Feilds with red are Required ');
reqcount=reqcount+1;
}else{
$('#accreditation').removeClass("focuson");
$('#accreditationerr').text('');
}

if(qualification==''){
$('#qualification').addClass("focuson");
$('#schoolgrapherr').text('Feilds with red are Required ');
reqcount=reqcount+1;
}else{
$('#qualification').removeClass("focuson");
$('#qualificationerr').text('');
}

if(corrname==''){
$('#corrname').addClass("focuson");
$('#schoolgrapherr').text('Feilds with red are Required ');
reqcount=reqcount+1;
}else{
$('#corrname').removeClass("focuson");
$('#corrnameerr').text('');
}
/*
if(corrname!=''){
var corrnamepattern = /^\d[^.]$/;
alert(corrnamepattern.test(corrname));
if (corrnamepattern.test(corrname)) {
           $('#phoneerr').text('');
            
        }  else {
		$('#phoneerr').text('It is not valid mobile number.input 10 digits number!');
         reqcount=reqcount+1; 
      }

$('#corrname').addClass("focuson");
$('#schoolgrapherr').text('Feilds with red are Required ');
reqcount=reqcount+1;
}else{
$('#corrname').removeClass("focuson");
$('#corrnameerr').text('');
} */

if(ph_no==''){
$('#ph_no').addClass("focuson");
$('#schoolgrapherr').text('Feilds with red are Required ');
reqcount=reqcount+1;
}else{
$('#ph_no').removeClass("focuson");
$('#ph_noerr').text('');
}

if(ph_no!=''){
//var mobile = document.getElementById("mobile").value;
        var pattern = /^\d{10}$/;
        if (pattern.test(ph_no)) {
           $('#phoneerr').text('');
            
        }  else {
		$('#phoneerr').text('It is not valid mobile number.input 10 digits number!');
         reqcount=reqcount+1; 
      }
}


if(sch_mail_add==''){
$('#sch_mail_add').addClass("focuson");
$('#schoolgrapherr').text('Feilds with red are Required ');
reqcount=reqcount+1;
}else{
$('#sch_mail_add').removeClass("focuson");
$('#sch_mail_adderr').text('');
}

if(city==''){
$('#city').addClass("focuson");
$('#schoolgrapherr').text('Feilds with red are Required ');
reqcount=reqcount+1;
}else{
$('#city').removeClass("focuson");
$('#cityerr').text('');
}

if(city_pincode==''){
$('#city_pincode').addClass("focuson");
$('#schoolgrapherr').text('Feilds with red are Required ');
reqcount=reqcount+1;
}else{
$('#city_pincode').removeClass("focuson");
$('#city_pincodeerr').text('');
}

if(city_pincode!=''){
//var mobile = document.getElementById("mobile").value;
        //alert(isNaN(city_pincode));
        if (isNaN(city_pincode)) {
           $('#city_pincodeerr').text('Should be Numbers');
		           //reqcount=reqcount+1; 
         
        }  else {
		$('#city_pincodeerr').text('');
 
      }
}

var cnt=$('#counts').val(); 
var k=0;
for(var k=0; k<=cnt; k++){
var values=$('#school_facility'+k).val();
	if(values=='')
	{
		 $('#school_facility'+k).addClass("focuson");
		$('#schoolgrapherr').text('Feilds with red are Required ');
		reqcount=reqcount+1;
		}else{
		$('#school_facility'+k).removeClass("focuson");
		$('#schoolgrapherr').text('');
	}

}
//alert(reqcount);
if(reqcount>0){ //alert('ger');
return false;
} else{ 
$('#infra').submit();
}

}