function validate_admission(){
		var errcount=0; 
		var countnew=$('#tenthcount').val;
	for(a=0;a<countnew;a++){
		var newboys=$('#newboys'+a).val;
		var newgirls=$('newgirls'+a).val;
			if(newboys==""){
				$('#newboys'+a).addClass("focuson");
				$('#newboyserror').text("Fields with red are Required");
				errorcount=errorcount+1;;
			}else{
				$('#newboys'+a).removeClass("focuson");
				$('#newboyserror').text("");
			}
			if(newgirls==''){
				$('#newgirls').addClass("focuson");
				$('#newgirlserror').text('Fields with red are Required');
				errorcount=errorcount+1;
			}else{
				$('#newgirls').addClass("focuson");
				$('#newgirlserror').text('');
			}
	}
			if(errorcount>0){
				return false;
			}else{
				$('#admission').submit;
			}
}