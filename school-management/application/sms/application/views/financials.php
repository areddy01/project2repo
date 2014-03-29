<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
 <?php    $this->load->view('header'); ?>
  <style type="text/css">
  .auto-style1 {
	  text-align: CENTER;
  }
  .auto-style2 {
	  margin-left: 0px;
  }
  .auto-style3 {
	  text-align: CENTER;
	  color: #FFFFFF;
	  background-color: #808080;
  }
  .auto-style4 {
	  color: #FFFFFF;
	  background-color: #808080;
  }
  .auto-style5 {
	  background-color: #808080;
  }
  .auto-style6 {
	  text-align: CENTER;
	  font-size: large;
	  font-weight: bold;
	  text-transform: uppercase;
  }
  </style>
  </head>
<div id="shell">
	
	<!-- Header -->
	<div id="header">
		<h1><a href="#">School Management System</a></h1>
		<div class="right">
			<p>Welcome <a href="#"><strong>Administrator</strong></a></p>
			<p class="small-nav"><a href="#">Help</a> / <a href="">Profile Settings</a> / <a href="/home/logout">Log Out</a></p>
		</div>
	</div>
	<!-- End Header -->
	
	<!-- Navigation -->
	 <?php    $this->load->view('menu'); ?>
	<!-- End Navigation -->
	
	<!-- Content -->
	<div id="content">
		<?php    $this->load->view('dashboard'); ?>
		<div class="message thank-message">
			<div class="auto-style1">
			<br/>
				</div>		
			 
			
			<div align="left">
				<div class="auto-style6">
			<label>Financial Details <br />
					<br />
					</label>
				</div>
<form method = "post" id ="" action = "/sms/admin/addfinancial/"  value = ""  style="width:90%">
<table>
<tr>
<td>
<table style="width: 110%">
	<tr>
		<td style="width: 550px" class="auto-style3"><strong>Expenses</strong></td>
		<td style="width: 111px" class="auto-style3"><strong>Amount</strong></td>
		<td style="width: 97px" class="auto-style3"><strong>X Times</strong></td>
		<td style="width: 111px" class="auto-style3"><strong>Total</strong></td>
		<td class="auto-style3" style="width: 183px"><strong>Comments</strong></td>
	</tr>
	<tr>
		<td style="width: 550px" class="auto-style4">Rent/Lease</td>
		<td style="width: 111px">
		<input id="financials0" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 97px"><input name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 111px"><input id="financials0" name="financials[]" type="text" style="width: 70px" /></td>
		<td style=" width: 183px;"><input id="financials0" name="financials[]" type="text" style="width: 70px" /></td>
	</tr>
	<tr>
		<td style="width: 550px" class="auto-style4">Other Operating Expenses</td>
		<td style="width: 111px">
		<input id="financials1" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 97px">
		<input id="financials2" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 111px">
		<input id="financials3" name="financials[]" type="text" style="width: 70px" /></td>
		<td style=" width: 183px;">
		<input id="financials4" name="financials[]" type="text" style="width: 70px" /></td>
		</tr>
	<tr>
		<td style="width: 550px" class="auto-style4">&nbsp; Building Maintenance&nbsp;</td>
		<td style="width: 111px">
		<input id="financials5" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 97px">
		<input id="financials6" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 111px">
		<input id="financials7" name="financials[]" type="text" style="width: 70px" /></td>
		<td style=" width: 183px;">
		<input id="financials8" name="financials[]" type="text" style="width: 70px" /></td>	</tr>
	<tr>
		<td style="width: 550px" class="auto-style4">&nbsp; Electricity Bills&nbsp;</td>
		<td style="width: 111px"><input id="financials9" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 97px"><input id="financials10" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 111px"><input id="financials11" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 183px"><input id="financials12" name="financials[]" type="text" style="width: 70px" /></td>
	</tr>
	<tr>
		<td style="width: 550px" class="auto-style4">&nbsp; Water Charges&nbsp;</td>
		<td style="width: 111px"><input id="financials13" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 97px"><input id="financials14" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 111px"><input id="financials15" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 183px"><input id="financials16" name="financials[]" type="text" style="width: 70px" /></td>
	</tr>
	<tr>
		<td style="width: 550px" class="auto-style4">&nbsp; Stationary&nbsp;</td>
		<td style="width: 111px"><input id="financials17" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 97px"><input id="financials18" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 111px"><input id="financials19" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 183px"><input id="financials20" name="financials[]" type="text" style="width: 70px" /></td>
	</tr>
	<tr>
		<td style="width: 550px" class="auto-style4">&nbsp; Printing and Xerox&nbsp;</td>
		<td style="width: 111px"><input id="financials21" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 97px"><input id="financials22" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 111px"><input id="financials23" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 183px"><input id="financials24" name="financials[]" type="text" style="width: 70px" /></td>
	</tr>
	<tr>
		<td style="width: 550px" class="auto-style4">&nbsp; Telephone and postage&nbsp;</td>
		<td style="width: 111px"><input id="financials25" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 97px"><input id="financials26" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 111px"><input id="financials27" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 183px"><input id="financials28" name="financials[]" type="text" style="width: 70px" /></td>
	</tr>
	<tr>
		<td style="width: 550px" class="auto-style4">&nbsp; Miscellaneous&nbsp;</td>
		<td style="width: 111px"><input id="financials29" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 97px"><input id="financials30" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 111px"><input id="financials31" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 183px"><input id="financials32" name="financials[]" type="text" style="width: 70px" /></td>
	</tr>
	<tr>
		<td style="width: 550px" class="auto-style4">Marketing/Ads Expenses</td>
		<td style="width: 111px"><input id="financials33" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 97px"><input id="financials34" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 111px"><input id="financials35" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 183px"><input id="financials36" name="financials[]" type="text" style="width: 70px" /></td>
	</tr>
	<tr>
		<td style="width: 550px" class="auto-style4">Scholarships</td>
		<td style="width: 111px"><input id="financials37" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 97px"><input id="financials38" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 111px"><input id="financials39" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 183px"><input id="financials40" name="financials[]" type="text" style="width: 70px" /></td>
	</tr>
	<tr>
		<td style="width: 550px" class="auto-style4">Programs, Functions and Events </td>
		<td style="width: 111px"><input id="financials41" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 97px"><input id="financials42" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 111px"><input id="financials43" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 183px"><input id="financials44" name="financials[]" type="text" style="width: 70px" /></td>
	</tr>
	<tr>
		<td style="width: 550px" class="auto-style4">Transportation Costs</td>
		<td style="width: 111px"><input id="financials45" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 97px"><input id="financials46" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 111px"><input id="financials47" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 183px"><input id="financials48" name="financials[]" type="text" style="width: 70px" /></td>
	</tr>
	<tr>
		<td style="width: 550px" class="auto-style4">Management Salary - 
		Principal/Correspondent/Head</td>
		<td style="width: 111px"><input id="financials49" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 97px"><input id="financials50" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 111px"><input id="financials51" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 183px"><input id="financials52" name="financials[]" type="text" style="width: 70px" /></td>
	</tr>
	<tr>
		<td style="width: 550px" class="auto-style4">Owner&#39;s Salary</td>
		<td style="width: 111px"><input id="financials53" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 97px"><input id="financials54" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 111px"><input id="financials55" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 183px"><input id="financials56" name="financials[]" type="text" style="width: 70px" /></td>
	</tr>
	<tr>
		<td style="width: 550px" class="auto-style4">Depreciation</td>
		<td style="width: 111px"><input id="financials57" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 97px"><input id="financials58" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 111px"><input id="financials59" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 183px"><input id="financials60" name="financials[]" type="text" style="width: 70px" /></td>
	</tr>
	<tr>
		<td style="width: 550px" class="auto-style4">Academic Interventions&amp; Trainings</td>
		<td style="width: 111px"><input id="financials61" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 97px"><input id="financials62" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 111px"><input id="financials63" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 183px"><input id="financials64" name="financials[]" type="text" style="width: 70px" /></td>
	</tr>
	<tr>
		<td style="width: 550px" class="auto-style4">Non Teaching Staff Salaries</td>
		<td style="width: 111px"><input id="financials65" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 97px"><input id="financials66" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 111px"><input id="financials67" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 183px"><input id="financials68" name="financials[]" type="text" style="width: 70px" /></td>
	</tr>
</table><br/><br/>

<table style="width: 37%">
	<tr>
		<td style="width: 126px" class="auto-style5"><strong>Investments on:&nbsp;</strong></td>
		<td style=" width: 6px;">
		<input id="financials69"  name="financials[]" type="text" style="width: 114px" class="auto-style2"/></td>
	</tr>
	<tr>
		<td style="width: 126px" class="auto-style4">Land</td>
		<td style=" width: 6px;">
		<input id="financials70" name="financials[]0" type="text" style="width: 114px" class="auto-style2"/></td>
	</tr>
	<tr>
		<td style="width: 126px" class="auto-style4">Construction</td>
		<td style="width: 6px">
		<input id="financials71" name="financials[]5" type="text" style="width: 114px" class="auto-style2"/></td>
	</tr>
	<tr>
		<td style="width: 126px" class="auto-style4">Furniture</td>
		<td style="width: 6px">
		<input id="financials72" name="financials[]1" type="text" style="width: 114px" class="auto-style2"/></td>
	</tr>
	<tr>
		<td style="width: 126px; height: 26px;" class="auto-style4">Vehicle </td>
		<td style="width: 6px; height: 26px;">
		<input id="financials73" name="financials[]2" type="text" style="width: 114px" class="auto-style2"/></td>
	</tr>
	<tr>
		<td style="width: 126px" class="auto-style4">Computers</td>
		<td style="width: 6px">
		<input id="financials73" name="financials[]3" type="text" style="width: 114px" class="auto-style2"/></td>
	</tr>
	<tr>
		<td style="width: 126px" class="auto-style4">Others</td>
		<td style="width: 6px">
		<input id="financials74" name="financials[]4" type="text" style="width: 114px" class="auto-style2"/></td>
	</tr>
</table>
<div></div><div></div><br/><br/>

<table style="width: 85%">
	<tr>
		<td style="width: 227px" class="auto-style3"><strong>Financial Expenses</strong></td>
		<td style="width: 73px" class="auto-style3"><strong>Loan 1</strong></td>
		<td style="width: 69px" class="auto-style3"><strong>Loan 2</strong></td>
		<td style="width: 67px" class="auto-style3"><strong>Loan 3</strong></td>
		<td style="width: 72px" class="auto-style3"><strong>Loan 4</strong></td>
		<td class="auto-style3" style="width: 55px"><strong>Loan 5</strong></td>
	</tr>
	<tr>
		<td style="width: 227px" class="auto-style4"><strong>Loan Taken</strong></td>
		<td style="width: 73px" class="auto-style1"><input id="financials75" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 69px" class="auto-style1"><input id="financials76" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 67px" class="auto-style1"><input id="financials77" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 72px" class="auto-style1">
		<input name="Text105" type="text"  style="width: 70px" /></td>
		<td style="width: 55px" class="auto-style1"><input id="financials78" name="financials[]" type="text" style="width: 70px" /></td>
	</tr>
	<tr>
		<td style="width: 227px" class="auto-style4"><strong>Interest Rate (P.A)</strong></td>
		<td style="width: 73px" class="auto-style1"><input id="financials79" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 69px" class="auto-style1"><input id="financials80" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 67px" class="auto-style1"><input id="financials81" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 72px" class="auto-style1">
		<input name="financials[]" type="text"  style="width: 70px" /></td>
		<td style="width: 55px" class="auto-style1"><input id="financials82" name="financials[]" type="text"  style="width: 70px"
/></td>
	</tr>
	<tr>
		<td style="width: 227px" class="auto-style4"><strong>Years</strong></td>
		<td style="width: 73px" class="auto-style1"><input id="financials83" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 69px" class="auto-style1"><input id="financials84" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 67px" class="auto-style1"><input id="financials85" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 72px" class="auto-style1"><input id="financials86" name="financials[]" type="text"  style="width: 70px" /></td>
		<td style="width: 55px" class="auto-style1"><input id="financials87" name="financials[]" type="text" style="width: 70px" /></td>
	</tr>
	<tr>
		<td style="width: 227px" class="auto-style4"><strong>No.of Yearly Payments</strong></td>
		<td style="width: 73px" class="auto-style1"><input id="financials88" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 69px" class="auto-style1"><input id="financials89" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 67px" class="auto-style1"><input id="financials0" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 72px" class="auto-style1">
		<input name="financials[]" type="text"  style="width: 70px" /></td>
		<td style="width: 55px" class="auto-style1"><input id="financials0" name="financials[]" type="text" style="width: 70px" /></td>
	</tr>
	<tr>
		<td style="width: 227px" class="auto-style4"><strong>Current Year</strong></td>
		<td style="width: 73px" class="auto-style1"><input id="financials0" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 69px" class="auto-style1"><input id="financials0" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 67px" class="auto-style1"><input id="financials0" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 72px" class="auto-style1">
		<input name="financials[]" type="text"  style="width: 70px" /></td>
		<td style="width: 55px" class="auto-style1"><input id="financials0" name="financials[]" type="text" style="width: 70px" /></td>
	</tr>
	<tr>
		<td style="width: 227px" class="auto-style4"><strong>EMI</strong></td>
		<td style="width: 73px" class="auto-style1"><input id="financials0" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 69px" class="auto-style1"><input id="financials0" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 67px" class="auto-style1"><input id="financials0" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 72px" class="auto-style1">
		<input name="financials[]" type="text"  style="width: 70px" /></td>
		<td style="width: 55px" class="auto-style1"><input id="financials0" name="financials[]" type="text" style="width: 70px" /></td>
	</tr>
	<tr>
		<td style="width: 227px" class="auto-style4"><strong>Bank Charges</strong></td>
		<td style="width: 73px" class="auto-style1"><input id="financials0" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 69px" class="auto-style1"><input id="financials0" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 67px" class="auto-style1"><input id="financials0" name="financials[]" type="text" style="width: 70px" /></td>
		<td style="width: 72px" class="auto-style1">
		<input name="financials[]" type="text"  style="width: 70px" /></td>
		<td style="width: 55px" class="auto-style1"><input id="financials0" name="financials[]" type="text" style="width: 70px" /></td>
	</tr>
</table>

</td>

</tr>
<tr>
<td align="center">
<input name="Submit1" type="submit" value="submit" style="width: 114px" /></td>
</tr>
</table>				 
				 
				   
			    
			    </form>


		</div>
		
		
	</div>
	
	<!-- End Content -->
</div>
<!-- End Shell -->
<?php    $this->load->view('header'); ?>

