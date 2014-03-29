<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
 <?php    $this->load->view('header'); ?>
<script>
$(document).ready(function(){

 $("#tag").autocomplete("admin/select_school", {  //we have set data with source here
        formatItem: function(rowdata) { //This function is called right before the item is displayed on the dropdown, so we splitted and returned what we show in the selection box
            var info = rowdata[0].split(":");
            return info[1];
        },
        formatResult: function (rowdata) { // This function is called when any item selected, here also we returned that what we wanted to show our customerName field.
            var info = rowdata[0].split(":");
            return info[1];
        }
    }).result(function(event, data, formatted){ //Here we do our most important task :)
            if(!data) { //If no data selected set the customer_id field value as 0
                $("#customerId").val('0');
            } else { // Set the value for the customer id
                var info = formatted.split(":");
                $("#customerId").val(info[0]);
            }
    });

});
</script>
  
	<title>Cost Details</title>
	<meta charset="utf-8">
	<link media="all" type="text/css" href="css/style.css" rel="stylesheet">	
	<script src="<?php echo base_url();?>js/jquery-1.7.2.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>js/jQueryCommon.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
	<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
</head>
<body>
<div id="container">
 <header>
	<h2>School Ratings System</h2>
	<form method="post" action="" id="search">
		<span class="wlcmuser">Welcome <strong>&nbsp;<?php echo $username ; ?></strong></span>
			<ul class="topLinks">
				<li><a href="#">Help</a>|</li>
				<li><a href="">Profile Setting</a>|</li>
				<li><a href="home/logout">Log Out</a></li>

			
			</ul>
	</form>
	
	<nav id="mainMenu">
			<div id="breadcrumb" style="width:100%">
				
			
					<?php    $this->load->view('menu', $id, $username); ?>	
			</div>
			
		</nav>
</header>
	
<section id="wrap">
	
	<article>
		
				
				<?php $this->load->view('dashboard', $info);?>	

		
	</article>
	<article id="formDetail">
		
		
	<h2>Welcome to  <?php if(isset($school_name)) echo $school_name ; else  echo $school_code ; ?></h2>
<!--<div id="costDetails">


</div>-->
 </article>
	
</section>
</div>
</body>
</html>