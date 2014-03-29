
function attendence_validate() {
var countattenerr=0; 
var count=13; 
for (var a=0; a<count; a++){

var workingdays0 =$('#workingdays0'+a).val();
var numberofstudents0 = $('#numberofstudents0'+a).val();
var cumulativeattendance0 = $('#cumulativeattendance0'+a).val();
var workingdays1 =$('#workingdays1'+a).val();
var numberofstudents1 = $('#numberofstudents1'+a).val();
var cumulativeattendance1 = $('#cumulativeattendance1'+a).val();
var workingdays2 =$('#workingdays2'+a).val();
var numberofstudents2 = $('#noofstudents2'+a).val();
var cumulativeattendance2 = $('#cumulativeattendance2'+a).val();
var workingdays3 = $('#workingdays3'+a).val();
var noofteachers3 = $('#noofteachers3'+a).val();
var cumulativeattendance3 = $('#cumulativeattendance3'+a).val();
 //alert(numberofstudents2); alert(workingdays2);
if(workingdays0==''){
$('#workingdays0'+a).addClass("focuson");
$('#attendanceerror').text('Feilds with red are Required');
countattenerr=countattenerr+1;
}else {
$('#workingdays0'+a).removeClass();
$('#attendanceerror').text();
}
if(numberofstudents0==''){
$('#numberofstudents0'+a).addClass("focuson");
$('#attendanceerror').text('Feilds with red are Required');
countattenerr=countattenerr+1;
}else {
$('#numberofstudents0'+a).removeClass();
$('#attendanceerror').text();

}
if(cumulativeattendance0==''){
$('#cumulativeattendance0'+a).addClass("focuson");
$('#attendanceerror').text('Feilds with red are Required');
countattenerr=countattenerr+1;
}else {
$('#cumulativeattendance0'+a).removeClass();
$('#attendanceerror').text();

}
if(workingdays1==''){
$('#workingdays1'+a).addClass("focuson");
$('#attendanceerror').text('Feilds with red are Required');
countattenerr=countattenerr+1;
}else {
$('#workingdays1'+a).removeClass();
$('#attendanceerror').text();
}
if(numberofstudents1==''){
$('#numberofstudents1'+a).addClass("focuson");
$('#attendanceerror').text('Feilds with red are Required');
countattenerr=countattenerr+1;
}else {
$('#numberofstudents1'+a).removeClass();
$('#attendanceerror').text();

}
if(cumulativeattendance1==''){
$('#cumulativeattendance1'+a).addClass("focuson");
$('#attendanceerror').text('Feilds with red are Required');
countattenerr=countattenerr+1;
}else {
$('#cumulativeattendance1'+a).removeClass();
$('#attendanceerror').text();

}
if(workingdays2==''){
$('#workingdays2'+a).addClass("focuson");
$('#attendanceerror').text('Feilds with red are Required');
countattenerr=countattenerr+1;
}else {
$('#workingdays2'+a).removeClass();
$('#attendanceerror').text();
}
if(numberofstudents2==''){ 
$('#noofstudents2'+a).addClass("focuson");
$('#attendanceerror').text('Feilds with red are Required');
countattenerr=countattenerr+1;
}else { 
$('#noofstudents2'+a).removeClass();
$('#attendanceerror').text();

}
if(cumulativeattendance2==''){
$('#cumulativeattendance2'+a).addClass("focuson");
$('#attendanceerror').text('Feilds with red are Required');
countattenerr=countattenerr+1;
}else {
$('#cumulativeattendance2'+a).removeClass();
$('#attendanceerror').text();

}
if(workingdays3==''){
$('#workingdays3'+a).addClass("focuson");
$('#attendanceerror').text('Feilds with red are Required');
countattenerr=countattenerr+1;
}else {
$('#workingdays3'+a).removeClass();
$('#attendanceerror').text();

}
if(noofteachers3==''){
$('#noofteachers3'+a).addClass("focuson");
$('#attendanceerror').text('Feilds with red are Required');
countattenerr=countattenerr+1;
}else {
$('#noofteachers3'+a).removeClass();
$('#attendanceerror').text();

}
if(cumulativeattendance3==''){
$('#cumulativeattendance3'+a).addClass("focuson");
$('#attendanceerror').text('Feilds with red are Required');
countattenerr=countattenerr+1;
}else {
$('#cumulativeattendance3'+a).removeClass();
$('#attendanceerror').text();

}

}

if(countattenerr>0){
return false;
} else {
$('#attendance').submit();
}
}



$(document).ready(function(){
 
$('#attendance0').blur(function(event) 
{
$('#errmark').hide();
$('#error').hide();	

 	var data=$('#attendance0').val();
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
        $('#attendance0').addClass("focuson");
        event.preventDefault();
        return false;
      }
      else
      {
       $('#attendance0').removeClass("focuson");
       $('#error').hide();
       return true;      
      }
    }
 
      if ($('#attendance0').val() == '')
      {
		$('#attendance0').addClass("focuson");
		$("#errmark").show();
		return false;

      }
      else
      
      {
      $('#attendance0').removeClass("focuson");
        $('#errmark').hide();
        return true;
      }
    
});
 
});




function validate_school()
{
$('#errmark').hide();
$('#error').hide();		

	var data=$('#attendance0').val();
    var len=data.length;
    var c;
    for(var i=0;i<len;i++)
    {
      c=data.charAt(i).charCodeAt(0);
      if(c <48 || c >57)
      {
        $('#error').show();
        $('#attendance0').addClass("focuson");
        return false;
      }
      else
      
      {
      $('#attendance0').removeClass("focuson");
        $('#error').hide();
        return true;
      }
    }
      if ($('#attendance0').val() == '')
      {
		$('#attendance0').addClass("focuson");
		$("#errmark").show();
		return false;

      }
      else
      
      {
      $('#attendance0').removeClass("focuson");
        $('#errmark').hide();
        return true;
      }

}
