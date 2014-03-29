<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
 <?php    $this->load->view('header'); ?>
  <style type="text/css">
  .auto-style1 {
	  text-align: CENTER;
	
  }
  .auto-style2 {
	  text-align: CENTER;
	  color: #FFFFFF;
	  background-color: #808080;
  }
  .auto-style3 {
	  text-align: left;
  }
  .auto-style4 {
	  font-size: large;
	  font-weight: bold;
  }
  
  </style>
  </head>
  
<div id="shell">
	
	<!-- Header -->
	<div id="header">
		<h1><a href="#">School Managment System</a></h1>
		<div class="right">
			<p>Welcome <a href="#"><strong>Administrator</strong></a></p>
			<p class="small-nav"><a href="#">Help</a> / <a href="">Profile Settings</a> / <a href="/sms/home/logout">Log Out</a></p>
			
		
		</div>
	</div>
	<!-- End Header -->
	
	<!-- Navigation -->
	<?php    $this->load->view('menu'); ?>
	<!-- End Navigation -->
	
	<!-- Content -->
	<div id="content">
	
<?php $this->load->view('dashboard',$info); ?>

		<div class="message thank-message">
			<div class="auto-style1" style="height: 19px">
			<br/>
				</div>		
					
			<div >
				<div class="auto-style1">
			<label><span class="auto-style4">TENTH DETAILS</span></label> <br />
					<br />
				
		 </div>		
<!--form method = "post" id ="" action = "/sms/admin/addtenth/"  style="width:49%; margin-left:250px" -->
<form method = "POST" action = "/tenth/input/?info=<?php echo $info; ?>"  style="width:55%">
<table border="0"  width="100%">
<tr>
<td><table style="width: 100%">
	<tr>
		<td class="auto-style2" style="width: 480px; height: 42px;"><strong>Indicators</strong></td>
		<td class="auto-style2" style="height: 42px; width: 138px"><strong><?php echo $school_name; ?>
		<br />
		</strong></td>
	</tr>
	<tr>
		<td class="auto-style3" style="width: 480px">Number of students enrolled in the class X</td>
		<td class="auto-style1" style="width: 138px">
		
			<input id="tenth0"  name="tenth[nos_class_ten]" type="text" style="width: 100px" value = "<?php if(isset($nos_class_ten)) echo $nos_class_ten; ?>" onblur="return validat_tenth('#tenth0');"  /></td>
	</tr>	
	<tr>
		<td class="auto-style3" style="width: 480px">No. of students in first divison (above 6 GPA)</td>
		<td class="auto-style1" style="width: 138px">
		
			<input id="tenth1" name="tenth[nos_first_div_6gpa]" type="text"  style="width: 100px" value = "<?php if(isset($nos_first_div_6gpa)) echo $nos_first_div_6gpa ; ?>" onblur="return validat_tenth('#tenth1');" /></td>
	</tr>
	<tr>
		<td class="auto-style3" style="width: 480px">No. of students in second division (above 5 GPA)</td>
		<td class="auto-style1" style="width: 138px">
		
			<input id="tenth2" name="tenth[nos_sec_div_5gpa]" type="text"  style="width: 100px" value = "<?php if(isset($nos_sec_div_5gpa)) echo $nos_sec_div_5gpa ; ?>" onblur="return validat_tenth('#tenth2');" /></td>
	</tr>
	<tr>
		<td class="auto-style3" style="width: 480px">No. of students in third division (above 4 GPA)</td>
		<td class="auto-style1" style="width: 138px">
		
			<input id="tenth3" name="tenth[nos_third_div_4gpa]"  type="text"  style="width: 100px" value = "<?php if(isset($nos_third_div_4gpa)) echo $nos_third_div_4gpa; ?>" onblur="return validat_tenth('#tenth3');" /></td>
	</tr>
	<tr>
		<td class="auto-style3" style="width: 480px; height: 26px;">No. of students who failed (below 3 GPA)</td>
		<td class="auto-style1" style="width: 138px; height: 26px;">
		
			<input id="tenth4" name="tenth[nos_failed_below_3gpa]"  type="text"  style="width: 100px" value = "<?php if(isset($nos_failed_below_3gpa)) echo $nos_failed_below_3gpa; ?>" onblur="return validat_tenth('#tenth4');" /></td>
	</tr>

	<tr><td>
	
	</td>
	</tr>
	

<tr>
<td align="center">
<input id ="tenth" name="Submit1" type="submit" value="submit" style="width: 87px" />
<div><span id="error" style = "display:none;color:red;" > Only Numeric Values are Allowed </span> <span id ="errmark" style = "display:none;color:red;" > All Red mark field is required </span></div></td>
</tr>
</table>				 
				 
				   
			   
			    </form>
	
		</div>
		
		
	</div>
	
	<!-- End Content -->
</div>
<!-- End Shell -->
<?php    $this->load->view('footer'); ?>

