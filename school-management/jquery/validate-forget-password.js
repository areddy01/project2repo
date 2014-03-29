function validate_forget_password(){
var email=$('#email').val();
var count=0;

if(email==''){
$('#email').addClass('focuson');
$('#errmrk').text('Field Required');
count=count+1;
}
if(count>0){
return false;
}
else{
$('#form').submit();
}

}
