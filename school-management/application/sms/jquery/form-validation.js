$(document).ready(function(){
var currentTime = new Date();
var getmonth =currentTime.getMonth();
	$(function() {
	
		$( "#date_of_assessment" ).datepicker({
			showOn: "button",
			buttonImage: "/jquery/calendar.gif",
			buttonImageOnly: true,
			dateFormat: "MM d,yy",
			minDate: "-27Y", maxDate: "+10Y"
		});
});

$(function() {
		$( "#add_user" ).datepicker({
			
			showOn: "button",
			buttonImage: "/jquery/calendar.gif",
			buttonImageOnly: true,
			dateFormat: "MM d,yy",
			minDate: "-27Y", maxDate: "+10Y"
		});
});


var form 		= $(".customForm");
var schoolinfo 		= $("#schoolname");
var schoolgraph 	= $("#schoolgraph");
var year_of_estd	= $("#year_of_estd");
var sch_assessed_by  	= $("#sch_assessed_by");
var accreditation 	= $("#accreditation");
var qualification	= $("#qualification");
var corrname		= $("#corrname");
var date_of_assessment  = $("#date_of_assessment");
var Sch_code 		= $("#Sch_code");
var ph_no 		= $("#ph_no");
var sch_mail_add 	= $("#sch_mail_add");
var city_pincode 	= $("#city_pincode");		
var ownership 		= $("#ownership");
var no_of_classrooms 	= $("#no_of_classrooms");
var area 		= $("#area");
var no_of_comps 	= $("#no_of_comps");
var emailinfo 		= $("#emailInfo");

form.submit(function(){

if(schoolinfo.val() == ''){
schoolinfo.addClass("focuson");
$(".er").show();
}
else{
schoolinfo.removeClass("focuson");
}
if(schoolgraph.val()  ==  ''){
schoolgraph.addClass("focuson");
}
else{
schoolinfo.removeClass("focuson");
}
if(year_of_estd.val()  ==  '') {
year_of_estd.addClass("focuson");
}
else{
schoolinfo.removeClass("focuson");
}
if(date_of_assessment.val() == ''){
date_of_assessment.addClass("focuson");
}
else{
schoolinfo.removeClass("focuson");
}
if(sch_assessed_by.val() == ''){
sch_assessed_by.addClass("focuson");
}
else{
schoolinfo.removeClass("focuson");
}
if(accreditation.val() == ''){
accreditation.addClass("focuson");
}
else{
schoolinfo.removeClass("focuson");
}
if(qualification.val() ==  ''){
qualification.addClass("focuson");
}
else{
schoolinfo.removeClass("focuson");
}
if(corrname.val() ==  ''){
corrname.addClass("focuson");
}
else{
schoolinfo.removeClass("focuson");
}
if(Sch_code.val() ==  ''){
Sch_code.addClass("focuson");
}
else{
schoolinfo.removeClass("focuson");
}
if(ph_no.val() ==  ''){
ph_no.addClass("focuson");
}
else{
schoolinfo.removeClass("focuson");
}
if(sch_mail_add.val() ==  ''){ 
sch_mail_add.addClass("focuson");
 }
else{
schoolinfo.removeClass("focuson");
}
if(city_pincode.val() ==  ''){ 
city_pincode.addClass("focuson");
		
}
else{
schoolinfo.removeClass("focuson");
}
if(ownership.val() ==  '') {
ownership.addClass("focuson");
}
else{
schoolinfo.removeClass("focuson");
}
if(no_of_classrooms.val() ==  '') {
no_of_classrooms.addClass("focuson");
}
else{
schoolinfo.removeClass("focuson");
}
if(area.val() == ''){
area.addClass("focuson");
}
else{
schoolinfo.removeClass("focuson");
}
if(no_of_comps.val() ==  ''){
no_of_comps.addClass("focuson");
return false;
}
if(schoolinfo.val()!= '' && schoolgraph.val()  != '' && year_of_estd.val()  != '' && date_of_assessment.val() != '' && sch_assessed_by.val() != '' && accreditation.val()!='' && qualification.val()!=  '' && corrname.val() !=  '' && Sch_code.val() !=  '' && ph_no.val() !=  '' && sch_mail_add.val() !=  '' && city_pincode.val() !=  '' && ownership.val() !=  '' && no_of_classrooms.val() !=  '' && area.val() != '' && no_of_comps.val() != ''){
var email = sch_mail_add.val();
var phone = ph_no.val();
if(validateEmail(email) && validatephone(phone)){
return false;
}
else 
{
return true;
}

}

$('#addschool').submit(function() {
  alert('Handler for .submit() called.');
  return false;
});
});
function validateEmail(email){
		//testing regular expression
		var a = email ;
		var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
		//if it's valid email
		if(filter.test(a)){
			$("#emailinfo").hide();
			return false;
		}
		//if it's NOT valid
		else{
			$("#emailinfo").show();
			return true;
		}
	}

function validatephone(phonenumber){
     //var b = phno;
     //var filter = /[0-9]/;
     
	if(isNaN(phonenumber)){
	$("#phonenum").show();
          return true;
          }else{
	   $("#phonenum").hide();            
           return false;
         }

}
	
});

function add_school()
{
	if($("#schoolname").val() ==  ''){
		$("#schoolname").addClass("focuson");
		$("#adderr").show();		
	}
	else{
	$("#schoolname").removeClass("focuson");

	}
	if($("#schoolid").val() ==  ''){
	$("#schoolid").addClass("focuson");
	$("#adderr").show();
	}
	else{
	$("#schoolid").removeClass("focuson");
	}
	if($("#desgine").val() ==  ''){
	$("#desgine").addClass("focuson");
	$("#adderr").show();
	}
	else{
	$("#desgine").removeClass("focuson");
	}
    if($("#schoolname").val() !=  '' && $("#schoolid").val() !=  '' && $("#desgine").val() !=  ''){
		$("#adderr").hide();
	    return true;
	}


	else {
      return false;
	}
}

$("#addnew").click(function(){
	$("#addnewteach").show("slow");
});

function calling(value){
	if (value == 1)
	{
		$("#newteachertest").show("slow");
		$("#newteachertest2").hide("slow");

		
	}
	else if(value == 0)
	{
		$("#newteachertest").hide("slow");
		$("#newteachertest2").show("slow");
	}
	
}


$("#addnew").click(function(){
	$("#addnewstud").show("slow");
});

function calling_stud(value){
	if (value == 1)
	{
		$("#newstudenttest").show("slow");
		$("#newstudenttest2").hide("slow");

		
	}
	else if(value == 0)
	{
		$("#newstudenttest").hide("slow");
		$("#newstudenttest2").show("slow");
	}
	
}



function infr_form(opt){


if (opt == 1)
{		$("#message").hide();
		$("#addcat1").hide("slow");
		$("#addnewfield").show("slow")
		
}
if (opt == 2)
	{	$("#addnewfield").hide("slow")
		$("#addcat1").show("slow");
		$("#message").hide();		
		
	}

}

function sur_form(opt){


if (opt == 1)
{		$("#addcat1").hide("slow");
		$("#message").hide();
		$("#addnewfield").show("slow")
		
}
if (opt == 2)
	{	$("#addnewfield").hide("slow")
		$("#addcat1").show("slow");
		$("#message").hide();
		
	}

}

function expense_form(opt){



if (opt == 1)
{		$("#message").hide();
		$("#addcat1").hide("slow");
		$("#addnewfield").show("slow")
		
}
if (opt == 2)
	{	$("#addnewfield").hide("slow")
		$("#addcat1").show("slow");
		$("#message").hide();
		
	}

}	


function obsrv_form(opt){


if (opt == 1)
{		$("#addcat1").hide("slow");
		$("#addnewfield").show("slow")
		$("#message").hide();
}
if (opt == 2)
	{	$("#addnewfield").hide("slow")
		$("#addcat1").show("slow");
		$("#message").hide();		
		
	}

}	


function desgn_form(opt){


if (opt == 1)
{		$("#addcat1").hide("slow");
		$("#addnewfield").show("slow")
		$("#message").hide();		
}
if (opt == 2)
	{	$("#addnewfield").hide("slow")
		$("#addcat1").show("slow");
		$("#message").hide();
				
	}

}	

function enrol_form(opt){


if (opt == 1)
{		$("#addcat1").hide("slow");
		$("#addnewfield").show("slow")
		$("#message").hide();		
}
if (opt == 2)
	{	$("#addnewfield").hide("slow")
		$("#addcat1").show("slow");
		$("#message").hide();		
		
	}

}	


function addsub_form(opt){


if (opt == 1)
{		$("#addcat1").hide("slow");
		$("#addnewfield").show("slow")
		$("#message").hide();		
}
if (opt == 2)
	{	$("#addnewfield").hide("slow")
		$("#addcat1").show("slow");
		$("#message").hide();		
		
	}

}	



function fee_form(opt){


if (opt == 1)
{		$("#addcat1").hide("slow");
		$("#addnewfield").show("slow")
		$("#message").hide();		
}
if (opt == 2)
	{	$("#addnewfield").hide("slow")
		$("#addcat1").show("slow");
		$("#message").hide();		
		
	}

}	


function qual_form(opt){


if (opt == 1)
{		$("#addcat1").hide("slow");
		$("#addnewfield").show("slow")
		$("#message").hide();		
}
if (opt == 2)
	{	$("#addnewfield").hide("slow")
		$("#addcat1").show("slow");
		$("#message").hide();
				
	}

}	

function onsel()
{
var data=document.getElementById("select_ddval");
if (data.value == "yes"){
$("#addseltxt").show("slow");
$("#disp").show("slow");
}
else
{
$("#addseltxt").hide("slow");
$("#disp").hide("slow");
}

}

function getval(validval)
{
var data=$(validval).val();


}


