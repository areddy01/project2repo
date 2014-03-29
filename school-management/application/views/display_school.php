<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
 <?php    $this->load->view('header'); ?>
<script>
$(document).ready(function(){

 $("#searchschool").autocomplete("/school_control/select_school", {  //we have set data with source here
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
				$("#submitbtn").removeAttr('disabled');
            }
    });

});
</script>
  </head>
 <div id="container">
 <header>
	<h2>School Ratings System</h2>
	<!--<form method="post" action="" id="search">
		<span class="wlcmuser">Welcome <strong>&nbsp;<?php echo $username ; ?></strong></span>
			<ul class="topLinks">
				<li><a href="#">Help</a>|</li>
				<li><a href="">Profile Setting</a>|</li>
				<li><a href="/home/logout">Log Out</a></li>

			
			</ul>
	</form>-->
	
	<nav id="mainMenu">
			<div id="breadcrumb">
				<?php    $this->load->view('menu', $id, $username); ?>	
			</div>
			
	</nav>
</header>
<div id="shell">
	
	<div id="content" align="center">
	<section id="wrap">
	</br>
 <form id = "showschool"  action = "/outside_controller/get_school"  method="post">
 
				<label>Search school:</label>
				<input name="school" type="text" id="searchschool" size="50"/>
				<input id = "submitdisplay" type = "submit" class="btnbg addform" value = "Submit" />	
				&nbsp; <a href = "/outside_controller/display_school" >Show All School </a>			
				
				</form>
		
				</br></br></br></br>
					<table style="width: 90%;border: groove;">
					<tr>
					<td style="border: groove;">School Name</td>
					<td style="border:groove;">School ID</td>
					<td style="border:groove;">Status</td></tr>
					<?php for ($school = 0; $school < count($results); $school++){?>
					<tr style="width: 100%;border:solid;">
					<td><?php echo $results[$school]['school_name']; ?></td>
					<td><?php echo $results[$school]['school_code']; ?></td>	
					<td><?php if ($results[$school]['assessment_status'] == 1){
						echo "Active";
					}
						else
						echo "Inactive"; ?></td>
					</tr>
					<?php }?>
		</table>
<?php if (!isset($_REQUEST['school'])):?>
  <p><?php echo $links; ?></p>
  <?php endif ; ?>
			
			    
			   
			</p>
				
	


	</section>
	</div>
	<!-- End Content -->
</div>
<!-- End Shell -->
</div>

