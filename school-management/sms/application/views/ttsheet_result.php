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
<?php //echo '<pre>';
//print_r($arr); ?>
	<!-- Content -->
	<div id="content">
	<?php    $this->load->view('dashboard', $info ); ?>

		<div class="message thank-message">
			<div class="auto-style1">
		
			<br/>
				</div>		
			 
			
			<div align="left">
				<div class="auto-style2">
			<label>TEACHER TEST DETAILS<br />
	</label></div>
<div id = "leftPolicy" onclick = "calling(1);" style = "text-decoration:underline;cursor:pointer;" >Enter New Teacher Detail</div>
&nbsp;&nbsp; &nbsp;<div id = "leftPolicy2"  onclick = "calling(0);"  style = "text-decoration:underline;cursor:pointer;" > Edit existing detail
</div>
<form method = "post" id ="" action = "/teacher_test/form/action/?info=<?php echo $info ;?>"  value = ""  style="width:100%; ">
<div id = "newteachertest" style = "display:none;" >
Select&nbsp;Teacher&nbsp;Test&nbsp;

<Select name = "requesttest" style="width: 111px">
<?php for ($row = 0; $row < count($setvalues) ;  $row++) {?>
<option value= "<?php echo $setvalues[$row]['test_cat_name']; ?>"><?php echo $setvalues[$row]['test_cat_name']; ?></option>
<?php }?>
</Select>
Enter the number of rows
<input id = "numbofrow1" type = "text" value = "" name = "numbofrow" ></td>
<input name="Submit2" type="submit" value="submit" style="width: 113px" />
</div>
</form>
 </div>

<form method = "post" id ="" action = "/teacher_test/getdata/update/?info=<?php echo $info ;?>"  value = ""  style="width:100%; ">
<div id = "newteachertest2" style = "display:none;" >
Select&nbsp;Teacher&nbsp;Test&nbsp;
<Select name = "requesttest" style="width: 111px">
<?php for ($row = 0; $row < count($setvalues) ;  $row++) {?>
<option value= "<?php echo $setvalues[$row]['test_cat_name']; ?>"><?php echo $setvalues[$row]['test_cat_name']; ?></option>
<?php }?>
</Select>
<input name="Submit1" type="submit" value="submit" style="width: 113px" />
</form>
  </div>
<table border="0" style="width: 100%">
<?php if (isset($_REQUEST['Submit1'])){?>
<form method = "post" id ="" action = "/teacher_test/update/?info=<?php echo $info ;?>"  value = ""  style="width:100%; ">
<?php

$entervalue = 0;
if(isset($arr['getvalue'])){
$minusone = count($arr['setvalue']);
$rowsavailabel = count($arr['getvalue'])/($minusone);
$rowsavailabel = $rowsavailabel + 1;
}

$minusone = count($arr['setvalue']);
//}
for($i=0; $i < $rowsavailabel ; $i++)
{?>
<tr>
<?php if( $i=='0'){?>
<td class="auto-style3" style="width: 100px">
Teacher name
</td>
<td class="auto-style3" style="width: 100px">
Primary/ Secondary
</td>
<td class="auto-style3" style="width: 100px">
Qualification
</td>
<?php }else {?>
<td class="auto-style3" style="width: 100px">
<input type ="text" name = "teachername[]" value = "<?php echo $arr['getvalue'][$entervalue]['teacher_name'] ; ?>" />
<input type = "hidden" name = "requesttest" value = "<?php echo $arr['getvalue'][$entervalue]['test_cat_name'] ; ?>" />
</td>

<td class="auto-style3" style="width: 100px">

<select id="teacher4" name="teacher[]" style="width: 89px">
			<option value ="Select" <?php if($arr['getvalue'][$entervalue]['class_category'] == 'Primary'){
echo "Selected";
}?>    >Select</option>
			<option value ="Secondary"
			<?php if($arr['getvalue'][$entervalue]['class_category'] == 'Secondary'){
echo "Selected";
}?> >Secondary</option>
			<option value ="PP&P"  <?php if($arr['getvalue'][$entervalue]['class_category'] == 'PP&P'){
echo "Selected";
}?> >PP&P</option>
			<option value ="P&S"  <?php if($arr['getvalue'][$entervalue]['class_category'] == 'P&S'){
echo "Selected";
}?> >P&S</option>
			<option value ="All" <?php if($arr['getvalue'][$entervalue]['class_category'] == 'All'){
echo "Selected";
}?>  >All</option>
</select>
</td>
<td class="auto-style3" style="width: 100px">
<select id="teacher4" name="teacher1[]" style="width: 89px">
			<option value ="Select" <?php if($arr['getvalue'][$entervalue]['qualification'] == 'Select'){
echo "Selected";
}?> >Select</option>
			<option value ="Graduate" <?php if($arr['getvalue'][$entervalue]['qualification'] == 'Graduate'){
echo "Selected";
}?> >Graduate</option>
			<option value ="HSC" <?php if($arr['getvalue'][$entervalue]['qualification'] == 'HSC'){
echo "Selected";
}?> >HSC</option>
			<option value ="SSC" <?php if($arr['getvalue'][$entervalue]['qualification'] == 'SSC'){
echo "Selected";
}?> >SSC</option>
			<option value ="PG" <?php if($arr['getvalue'][$entervalue]['qualification'] == 'PG'){
echo "Selected";
}?> >PG</option>
</select>
</td>
<?php
}?>

<?php for($j=0; $j< $minusone; $j++){
 $i;?>
<?php if($i=='0'){?>
<td class="auto-style3" style="width: 100px">
<label><?php echo $arr['setvalue'][$j]['test_sub_cat_name'];?></label>
<input type = "hidden" value ="<?php echo $arr['setvalue'][$j]['test_sub_cat_name'];?>" name = "questionid[<?php echo $j; ?>]"?>

</td>
<?php
}
else 
{
if($arr['setvalue'][$j]['test_sub_cat_type'] == 'dropdown')
{
 $option = explode("," , $arr['setvalue'][$j]['test_sub_cat_value']);
 ?>
 <td class="auto-style3" style="width: 100px">

 <select name = "Teachertest[<?php echo $i?>][<?php echo $j;?>]" >

<?php 
for($opt = 0; $opt <count($option); $opt++)
{
?>
<option value = "<?php echo $option[$opt]; ?>"
<?php if($arr['getvalue'][$entervalue]['response'] == $option[$opt]){
echo "Selected";
}?>

><?php echo $option[$opt]; ?>
</option>
<?php	
} 
?>
</select>
</td>

<?php 
}
else
{
?>
<td>
<input type = "text" value = ""  name="Teachertest[<?php echo $i?>][<?php echo $j;?>]" >
</td>
<?php 
}
?>
<input type = "hidden" value = "<?php echo $arr['getvalue'][$entervalue]['teacher_test_id'] ; ?>"  name = "teacher_test_id[<?php echo $entervalue; ?>]" />
<?php
 $entervalue++;
}
?>

<?php }?>

</tr>
<?php


}?>
<?php 
}?>
<tr>
<td>
<input name="Submit1" type="submit" value="submit" style="width: 113px" />
</td>
</tr>
 </form>
</div>
<?php    $this->load->view('footer'); ?>

