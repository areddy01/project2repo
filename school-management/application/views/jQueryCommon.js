
$(document).ready(function(){

	jQuery("#submitform").click(function(){
		jQuery('.mainWrapper').fadeOut();
		jQuery('.questionair, #addnew').show();
	
	})
	
	jQuery('#student_table li a').live("click",function(){
		jQuery('#student_table li .grid:visible').slideUp(200)
		jQuery('#student_table li a').removeClass("active");
		jQuery(this).addClass("active");
		jQuery(this).next('.grid').slideDown(200);
	
	});
	
	jQuery('.addbtn').click(function(){
	count = parseInt(jQuery('#student_table li').size())+1;
	$("#student_table li:last").clone().appendTo($("#student_table"));
	var myString = jQuery('#student_table li:last').html();
	
	jQuery('#student_table li:last a:first').html("Student "+count)
	});
	
	jQuery('.tabs li').click(function(){
		tabIndex = jQuery('.tabs li').index(this);
		jQuery('.tabs li').removeClass('btnbg');
		jQuery(this).addClass('btnbg');
		jQuery('#tabsContents li.content').hide();
		jQuery('#tabsContents li.content').eq(tabIndex).show();
	
	});
	
	
});

