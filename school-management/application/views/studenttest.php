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
	  font-size: large;
	  font-weight: bold;
  }
  .auto-style3 {
	  color: #FFFFFF;
	  background-color: #808080;
  }
    
  </style>
  </head>
<div id="shell">
	
	<!-- Header -->
	<div id="header">
		<h1><a href="#">School Management System</a></h1>
		<div class="right">
			<p>Welcome <a href="#"><strong>Administrator</strong></a></p>
			<p class="small-nav"><a href="#">Help</a> / <a href="">Profile Settings</a> / 
			<a href="/home/logout">Log Out</a></p>
		</div>
	</div>
	<!-- End Header -->
	
	<!-- Navigation -->
	<?php    $this->load->view('menu'); ?>
	<!-- End Navigation -->
	
	<!-- Content -->
	<div id="content">
	<?php    $this->load->view('dashboard', $info ); ?>


		<div class="message thank-message">
			<div class="auto-style1">
		
			<br/>
				</div>		
			 
			
			<div align="left">
				<div class="auto-style2">
			<label>STUDENT TEST DETAILS<br />
					<br />
					</label></div>
<form method = "post" id ="" action = "/student_test/form/action?info=<?php echo $info ;?>"  value = ""  style="width:100%; ">
<table>
<tr>
<td>Select&nbsp;Student&nbsp;Test&nbsp;</td>
<td>
<?php echo "<pre>";
print_r($arr); ?>

<select class="requesttest" style="width: 111px">
<?php for ($row = 0; $row < count($arr['setvalues']['dropdown']) ;  $row++) {?>
<option value= "<?php echo $arr['setvalues']['dropdown'][$row]['test_cat_name']; ?>"><?php echo $arr['setvalues']['dropdown'][$row]['test_cat_name']; ?></option>
<?php }?>
</Select>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td>Enter the number of rows</td><td>
<input id="numbofrows" name = "numbofrows" onblur="return validate_nulls('#numbofrows');" value="<?php if(isset($numbofrows)) echo $numbofrows ; ?>" /></td>
</tr>
</td>
</tr>
 </form>
 </table>
<table border="0" style="width: 97%">
<form>
<?php
echo $minusone = count($arr)-1;
$value =1;
 
$numofrow;
if(isset($numofrow))
$value = $numofrow + 1;
for($i=0; $i < $value ; $i++)
{?>
<tr style="background-color:#008000">
<?php if( $i=='0'){?>
<td class="auto-style3" style="width: 100px">
Student Name
</td>
<td class="auto-style3" style="width: 100px">
Roll No
</td>
<?php }else {?>
<td class="auto-style3" style="width: 100px">
<input type = "text" value = ""  name="student[name]" >
</td>
<td class="auto-style3" style="width: 100px"><input type="text" value="" name="" >
</td>
<?php
} 	
for($j=0; $j< $minusone ; $j++){
 $i;?>
<?php if( $i=='0'){?>
<td class="auto-style3" style="width: 100px">
<?php echo $arr[$j]['test_sub_cat_name'];?> 
</td>
<?php }
else {?>
<td class="auto-style3" style="width: 100px">
<?php if($arr[$j]['test_sub_cat_type'] == 'dropdown'){
 $option = explode("," , $arr[$j]['test_sub_cat_value']);?>
 <select name = "<?php echo $arr[$j]['[test_sub_cat_id]'];?>" >
<?php for($opt = 0; $opt <count($option); $opt++){?>
<option value = ""><?php echo $option[$opt]; ?></option>
<?php
	} ?>
</select>
<?php }
else { 
?>
<input type = "text" value = ""  name="marks[]" >
<?php }?>
</td>
<?php 
}?>

<?php }?>

</tr>
<?php 
}?>
 </form>
<tr>
<!--<?php //for ($row = 0; $row < count($arr['setvalues']) ;  $row++) {?>-->
<td class="auto-style3" style="width: 111px">
<!--<?php //echo $arr['setvalues'][$row]['test_sub_cat_name']; ?>
</td>		
<?php// } ?>-->
</td>

</tr>
<tr>
<td align="center" style="height: 29px; width: 200px;">
<input name="Submit1" type="submit" value="submit" style="width: 113px" /></td>
</tr>
</table>				 
				 
	
		

		</div>
		
		
	</div>
	
	<!-- End Content -->
</div>
<!-- End Shell -->
<?php    $this->load->view('footer'); ?>

