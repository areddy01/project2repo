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
				<div class="auto-style1">
			<label><b><span class="auto-style5">Overdue Details</span> <br />
					<br />
					</b></label>
				</div>
				
<form method="post" style="width: 446px"   >
<table>
<tr><td colspan="2" >Does Fees Overdue Available per classwise :</td>
	<td style="width: 114px"><select id="select_ddval" name="sel_ddval" onchange="onsel()" >
<option value=""></option>
<option value="yes">Yes</option>
<option value="no">No</option>
</select> </td>
</tr>

</table>
<div id="addseltxt" style="display: none;">
<tr><td >Enter Total Value : </td><td style="width: 155px">
	<input id="tot_val" type="text" name="tol_value" style="width: 144px"/></td>
<td style="width: 114px"><input type="submit" value="submit2" onclick="getval('#tot_val')"/></td></tr>
</div>
</form>








<form method = "post" id ="" action = "/admin/addoverdue/?info=<?php echo $info; ?>" >
<table style="width: 510px" >

<td style="width: 273px; height: 104px;" ><table style="width: 461px" id="mytable">
	<tr>
		<td colspan="2" ><strong>Previous Year :&nbsp;<?php echo date("Y") - 1; ?></strong></td>
		
	</tr>
	<tr>
		<td class="auto-style7" style="width: 146px" ><strong>Classes</strong></td>
		<td class="auto-style7" style="width: 114px"><strong>No. of&nbsp; 
		Students</strong> </td>
		<td class="auto-style7" style="width: 116px"><strong>Fees Overdue</strong></td>
		<td></td>
	</tr>
	 
	 
	<?php $tot_no_of_students=0;$tot_fee_overdue=0; for ($row = 0; $row < count($arr) ;  $row++) {  ?>
        
	<tr>
		<td class="auto-style6" style="width: 146px; height: 26px;" ><?php echo $arr[$row]['class_name'] ; ?></td> 
		<!-- <td class="auto-style4" style="height: 26px" ><?php echo $arr[$row]['class_name'] ; ?> </td> -->

		<td style="width: 114px; height: 26px;" class="auto-style1">
					<input id ="nos<?php echo $row;?>" name="overdue[<?php echo $row;?>][1]" value =  "<?php if(isset($arr[$row]['no_of_students']))echo $arr[$row]['no_of_students']; ?>" onblur="return validat_numeric('#nos<?php echo $row;?>');" type="text" style="width: 113px" /></td>
		<td style="width: 116px; height: 26px;" class="auto-style1">
					<input id ="fo<?php echo $row;?>" name="overdue[<?php echo $row;?>][2]"  value =  "<?php if(isset($arr[$row]['fee_overdue']))echo $arr[$row]['fee_overdue']; ?>" onblur="return validat_numeric('#fo<?php echo $row;?>');" type="text" style="width: 113px" /></td>
					<td style="width: 116px;  height: 26px;" class="auto-style8">
					&nbsp;
				<!--	<td style="width: 116px; height: 26px;" class="auto-style7"></td> -->

	
	
	<?php if(isset($arr[$row]['fee_overdue'])) $tot_fee_overdue=$tot_fee_overdue + $arr[$row]['fee_overdue']; ?>
	<?php if(isset($arr[$row]['no_of_students'])) $tot_no_of_students = $tot_no_of_students + $arr[$row]['no_of_students']; ?>
	
			<input id ="overdue3" name="overdue[<?php echo $row;?>][3]" type="hidden" style="width: 113px" value = "<?php if(isset($arr[$row]['class_id']))echo $arr[$row]['class_id'] ; ?>" />
			</tr>
	<?php } ?>
	
	
	<tr>
		<td class="auto-style6" style="width: 146px" ><strong>Total</strong></td>
		<td style="width: 114px" class="auto-style1">
					<input name="overdue[]" type="text" disabled="disabled" value="<?php echo $tot_no_of_students; ?> "  style="width: 113px" /></td>
		<td style="width: 116px" class="auto-style1">
					<input name="overdue[]" type="text"  disabled="disabled" value="<?php echo $tot_fee_overdue; ?>" style="width: 113px" /></td>
	</tr>
</table>
</td>

</tr>
<tr>
<td colspan="1" align="center" style="width: 273px; height: 34px;">
  
<input id="overdue" name="Submit1" title="only allowed 1-9 values" pattern="[0-9]" type="submit" value="submit" style="width: 98px" onclick="return validate_overdue_button(<?php echo count($arr); ?>);"/>
<div style="width:491px" ><span id="error" style = "display:none;color:red;" > Only Numeric Values are Allowed </span> <span id ="errmark" style = "display:none;color:red;" > All Red mark field is required </span></div>

</td>
</tr>
<tr>
<td align="center" style="width: 273px">
&nbsp;</td>
</tr>
</table>				 
<div id="disp" style="width: 497px;display: none;">If data is not available class wise- divide proportionally into 3 segments: Pre-primary, Primary & Secondary and input into any class in the Class Segment</div>				 
				   
			    
			    </form>
			
	

		</div>
		
		
	</div>
	
	<!-- End Content -->
</div>
<!-- End Shell -->
<?php    $this->load->view('header'); ?>

