<?php
error_reporting(0);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
 <?php    $this->load->view('header'); ?>

<SCRIPT LANGUAGE="JavaScript">
<!-- Original:  Nannette Thacker -->
<!-- http://www.shiningstar.net -->
<!-- Begin
function checkNumeric(objName,minval, maxval,comma,period,hyphen)
{
	var numberfield = objName;
	if (chkNumeric(objName,minval,maxval,comma,period,hyphen) == false)
	{
		numberfield.select();
		numberfield.focus();
		return false;
	}
	else
	{
		return true;
	}
}

function chkNumeric(objName,minval,maxval,comma,period,hyphen)
{
// only allow 0-9 be entered, plus any values passed
// (can be in any order, and don't have to be comma, period, or hyphen)
// if all numbers allow commas, periods, hyphens or whatever,
// just hard code it here and take out the passed parameters
alert("prasanth");
var checkOK = "0123456789" + comma + period + hyphen;
var checkStr = objName;
var allValid = true;
var decPoints = 0;
var allNum = "";

for (i = 0;  i < checkStr.value.length;  i++)
{
ch = checkStr.value.charAt(i);
for (j = 0;  j < checkOK.length;  j++)
if (ch == checkOK.charAt(j))
break;
if (j == checkOK.length)
{
allValid = false;
break;
}
if (ch != ",")
allNum += ch;
}
if (!allValid)
{	
alertsay = "Please enter only these values \""
alertsay = alertsay + checkOK + "\" in the \"" + checkStr.name + "\" field."
alert(alertsay);
return (false);
}

// set the minimum and maximum
var chkVal = allNum;
var prsVal = parseInt(allNum);
if (chkVal != "" && !(prsVal >= minval && prsVal <= maxval))
{
alertsay = "Please enter a value greater than or "
alertsay = alertsay + "equal to \"" + minval + "\" and less than or "
alertsay = alertsay + "equal to \"" + maxval + "\" in the \"" + checkStr.name + "\" field."
alert(alertsay);
return (false);
}
}
//  End -->
</script>

  <style type="text/css">
  .auto-style1 {
	  text-align: CENTER;
	
  }
  .auto-style5 {
	  font-size: large;
	  text-transform: uppercase;
  }

  .auto-style6 {
	  color: #FFFFFF;
	  background-color: #808080;
  }
  .auto-style7 {
	  text-align: CENTER;
	  color: #FFFFFF;
	  background-color: #808080;
  }
  <!-- input.address:-ms-input-placeholder /* placeholder only style */  --> 
  
  .auto-style8
  {    
      text-align: CENTER;   
    background-color:yellow;
    color:Red;
  }
    
  .auto-style8 {
	  margin-right: 282px;
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
	
		<?php $this->load->view('dashboard',$info); ?>

		<div class="message thank-message">
			<div class="auto-style1">
			
			<br/>
				</div>		
			 
			
			<div align="left">
				<div class="auto-style1" align="left">
			<label><b><span class="auto-style5">Expenses Details</span> <br />
					<br />
					</b></label>
				</div>

<form method = "post" id ="" action = "/admin/addoverdue/?info=<?php echo $info; ?>" >

<table style="width:100%;" id="mytable" class="auto-style8">
		<tr>
		<td class="auto-style7" style="width: 90px" >CURRENT TEAR</td>
		<td class="auto-style7" style="width: 91px">Pre-Primary</td>
		<td class="auto-style7" style="width: 86px">Primary</td>
		<td class="auto-style7" style="width: 78px">Secondary</td>
	    <td class="auto-style7" style="width: 87px">Total</td>
	    <td class="auto-style7" style="width: 110px">Basis of Divisions</td>
	
	</tr>
	
	
	
<?php 
/* logic for adding values*/
$pre =($arr['enrollment'][0]['total_enrollment_boys']+$arr['enrollment'][0]['total_enrollment_girls']+
$arr['enrollment'][1]['total_enrollment_boys']+$arr['enrollment'][1]['total_enrollment_girls']+
$arr['enrollment'][2]['total_enrollment_boys']+$arr['enrollment'][2]['total_enrollment_girls']);
//echo '<br>';
 $prime = ($arr['enrollment'][3]['total_enrollment_boys']+$arr['enrollment'][3]['total_enrollment_girls']+
$arr['enrollment'][4]['total_enrollment_boys']+$arr['enrollment'][4]['total_enrollment_girls']+
$arr['enrollment'][5]['total_enrollment_boys']+$arr['enrollment'][5]['total_enrollment_girls']+
$arr['enrollment'][6]['total_enrollment_boys']+$arr['enrollment'][6]['total_enrollment_girls']+
$arr['enrollment'][7]['total_enrollment_boys']+$arr['enrollment'][7]['total_enrollment_girls']);
//echo '<br>';
 $second= ($arr['enrollment'][8]['total_enrollment_boys']+$arr['enrollment'][8]['total_enrollment_girls']+$arr['enrollment'][9]['total_enrollment_boys']+$arr['enrollment'][9]['total_enrollment_girls']+
$arr['enrollment'][10]['total_enrollment_boys']+$arr['enrollment'][10]['total_enrollment_girls']+$arr['enrollment'][11]['total_enrollment_boys']+$arr['enrollment'][11]['total_enrollment_girls']+
$arr['enrollment'][12]['total_enrollment_boys']+$arr['enrollment'][12]['total_enrollment_girls']);
//echo '<br>';
$total=$pre+$prime+$second;
 $prefin=$pre/$total; //echo '<br>';
 $primefin=$prime/$total; //echo '<br>';
  $secondfin=$second/$total;
//exit;
for($i=0;$i < count($arr['class_name']);$i++){
?>	 
	 

        
	<tr style="border-bottom: inherit">
		<td class="auto-style6" style="width: 90px; height: 26px;" ><?php echo $arr['class_name'][$i]['expense_sub_cat_name'] ; ?></td> 
		
		<td style="width: 91px; height: 26px;" class="auto-style1">
					<?php echo round($arr['cost'][$i]['total']*$prefin,3); ?></td>
		<td style="width: 86px; height: 26px;" class="auto-style1">
					<?php echo round($arr['cost'][$i]['total']*$primefin,3); ?></td>

       <td style="width: 78px; height: 26px;" class="auto-style1">
					<?php echo round($arr['cost'][$i]['total']*$secondfin,3); ?></td>
	  <td style="width: 87px; height: 26px;" class="auto-style1">
					<?php echo round($arr['cost'][$i]['total']*$prefin,3)+round($arr['cost'][$i]['total']*$primefin,3)+round($arr['cost'][$i]['total']*$secondfin,3); ?></td>

		<td style="width: 110px; height: 26px;" class="auto-style1">
					&nbsp;</td>
					
				<!--	<td style="width: 116px; height: 26px;" class="auto-style7"></td> --></tr><?php } ?>
				
	
	</table>
	</form>
			
			 
<div id="disp" style="width: 497px;display: none;">If data is not available class wise- divide proportionally into 3 segments: Pre-primary, Primary & Secondary and input into any class in the Class Segment</div>				 
				   
			    
			    
	

		</div>
		
		
	</div>
	
	<!-- End Content -->
</div>
<!-- End Shell -->
<?php    $this->load->view('header'); ?>

