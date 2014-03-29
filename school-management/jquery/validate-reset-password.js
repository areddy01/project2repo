function validate_reset_password(){
var password=$('#password').val();
var newpassword=$('#newpassword').val();
var newpassword1=$('#newpassword1').val();
var errcount=0;
if(password=='')
      {
       //$('#password').addClass("focuson");
       $('#errmsg').text("*fields required");
       errcount=errcount+1;
       }
if(newpassword==''){
       //$('#errmsg').removeClass("focuson");
       $('#errmsg').text("*fields required");
       errcount=errcount+1;
       }

if(newpassword1==''){
       //$('#errmsg').removeClass("focuson");
       $('#errmsg').text("*fields required");
       errcount=errcount+1;
       }

if(errcount>0)
       { 
       return false;   
       }else{ 
       $('#resetpass').submit();
       }
}
