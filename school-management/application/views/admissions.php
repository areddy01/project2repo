<?php $this->load->view('main_header');?>
<script type="text/javascript" src="<?php echo base_url(); ?>jquery/numeric.js">

</script>


	<article id="formDetail">
		
		
	<h2>Admissions Details</h2>

							<ul class="tabs">
								<li class="btnbg"><label><?php echo date("Y"); ?></label></li>
								<li style="margin-left: 2px;"><label><?php echo date("Y")-1; ?></label></li>
								<li style="margin-left: 2px;"><label><?php echo date("Y")-2; ?></label></li>
							</ul>
								<div class="tabBg"></div>
								<ul id="tabsContents">
<li class="selection content">
<div id="admission" style="border: medium none; margin: 0px;">
<form action="/admin/addadmissions/?info=<?php echo $info; ?>&page=2" id="admission" method="post">
  <table  style="width: 100%" id="admissionTable">
    <thead>
      <tr>
        <th class="topheading noborder" rowspan="2"></th>
        <th colspan="4" class="topheading"><strong>Total Enrollment</strong></th>
        <th colspan="3" class="topheading"><strong>New Admissions</strong></th>
        <th rowspan="2" class="topheading border0"><strong>Free Students</strong></th>
      </tr>
      <tr class="tophead">
        <th class="top_txtheading"><strong>No. of Sections</strong></th>
        <th class="top_txtheading"><strong>Boys</strong></th>
        <th class="top_txtheading"><strong>Girls</strong></th>
        <th class="top_txtheading txthead_total"><strong>Total</strong></th>
        <th class="top_txtheading"><strong>Boys</strong></th>
        <th class="top_txtheading"><strong>Girls</strong></th>
        <th class="top_txtheading txthead_total"><strong>Total</strong></th>
      </tr>
      <tr>
        <th colspan="7">&nbsp;</th>
      </tr>
    </thead>
    <tbody><input type="hidden" value="<?php echo count($classname); ?>" name="tenthcount" id="tenthcount" />
      <?php for ($row = 0; $row < count($classname) ;  $row++) { //echo count($classname); ?>
	  
      <tr>
      <input type = "hidden"  name = "enrollment[<?php echo $row;?>][class_id]" value = "<?php echo $classname[$row]['class_id'] ; ?>" >
      <input type= "hidden" name="date"  value="<?php echo date("Y"); ?>" >
        <td class="classNo"><?php echo $classname[$row]['class_name'] ; ?></td>
        <td><input  class="input72"id ="section<?php echo $row;?>" name="enrollment[<?php echo $row;?>][1]" maxlength="4" value = "1 <?php //if(isset($current[$row]['no_of_sections']))echo $current[$row]['no_of_sections']; ?> " type="text" onkeyup="javascript: trimalpha(section<?php echo $row;?>);" onBlur="return validate_numeric('#section<?php echo $row;?>');" style="width: 72px" /></td>
        <td><input  class="input72" id ="boys<?php echo $row;?>" onkeyup="javascript: trimalpha(boys<?php echo $row;?>);"name="enrollment[<?php echo $row;?>][2]" maxlength="5" value =  "<?php if(isset($current[$row]['total_enrollment_boys']))echo $current[$row]['total_enrollment_boys']; ?>" type="text" onBlur="return add_cost('#boys<?php echo $row;?>','#girls<?php echo $row;?>','#total<?php echo $row;?>');" style="width: 72px;" /></td>
        <td><input class="input72" id ="girls<?php echo $row;?>" onkeyup="javascript: trimalpha(girls<?php echo $row;?>);"  name="enrollment[<?php echo $row;?>][3]" maxlength="5" value =  "<?php if(isset($current[$row]['total_enrollment_girls'])) echo $current[$row]['total_enrollment_girls']; ?>"type="text" onBlur="return add_cost('#boys<?php echo $row;?>','#girls<?php echo $row;?>','#total<?php echo $row;?>');" style="width: 72px" /></td>
        <td><input class="input72" id ="total<?php echo $row;?>" readonly="readonly" onkeyup="javascript: trimalpha(total<?php echo $row;?>);" name="enrollment22[<?php echo $row;?>]" type="text"  style="width: 72px"  value =  "<?php if(isset($current[$row]['total_enrollment_boys'])||isset($current[$row]['total_enrollment_girls'])){
					$B1 = $current[$row]['total_enrollment_boys'];
					$G1 = $current[$row]['total_enrollment_girls'];
					echo $data = $B1+ $G1;
		}
		 ?>" /></td>
        <td><input  class="input72"id ="newboys<?php echo $row;?>" onkeyup="javascript: trimalpha(newboys<?php echo $row;?>);"  name="enrollment[<?php echo $row;?>][4]" maxlength="5" value =  "<?php if(isset($current[$row]['total_new_admission_boys']))echo $current[$row]['total_new_admission_boys']; ?>" type="text" onBlur="return add_cost('#newboys<?php echo $row;?>','#newgirls<?php echo $row;?>','#newtotal<?php echo $row;?>');" style="width: 72px" /></td>
        <td><input class="input72"id ="newgirls<?php echo $row;?>" onkeyup="javascript: trimalpha(newgirls<?php echo $row;?>);" name="enrollment[<?php echo $row;?>][5]" maxlength="5" value =  "<?php if(isset($current[$row]['total_new_admissions_girls']))echo $current[$row]['total_new_admissions_girls']; ?>" type="text" onBlur="return add_cost('#newboys<?php echo $row;?>','#newgirls<?php echo $row;?>','#newtotal<?php echo $row;?>');" style="width: 72px" /></td>
        <td><input class="input72" id ="newtotal<?php echo $row;?>"  name="" type="text" style="width: 72px" maxlength="5" readonly="readonly" value =  "<?php if(isset($current[$row]['total_new_admission_boys'])||isset($current[$row]['total_new_admissions_girls'])){
					$B1 = $current[$row]['total_new_admission_boys'];
					$G1 = $current[$row]['total_new_admissions_girls'];
					echo $data = $B1 + $G1;
		}
		 ?>" /></td>
        <td><input  class="input72" id ="freestudent<?php echo $row;?>" onkeyup="javascript: trimalpha(freestudent<?php echo $row;?>);" name="enrollment[<?php echo $row;?>][6]" maxlength="5" type="text" style="width: 72px"  value =  "<?php if(isset($current[$row]['total_free_admissions_students']))echo $current[$row]['total_free_admissions_students']; ?>" onblur="return validate_freestudents('#total<?php echo $row;?>','#freestudent<?php echo $row;?>');" /></td>
        <div id='freestudenterror' style='color:red'></div>
      </tr>
      <?php }?>
      <tr>
        <td class="classNo" style="height: 26px">Pre-Primary</td>
        <?php 
		$tot_pp1=0;  
		$tot_boys1=0;$tot_new_boys1=0;$tot_new_girls1=0;
		$tot_girls1=0;$tot_free_stud1=0;$total_new_admin1=0;
		$total1=0;
		for ($val=0;$val<3;$val++) {
		if (isset($current[$val]['no_of_sections'])) {

		$tot_pp1=$tot_pp1 + $current[$val]['no_of_sections'];
		$tot_boys1=$tot_boys1 + $current[$val]['total_enrollment_boys'];
		$tot_girls1=$tot_girls1+ $current[$val]['total_enrollment_girls'];
		$total1 = $tot_boys1 + $tot_girls1 ;
		$tot_new_boys1 = $tot_new_boys1 + $current[$val]['total_new_admission_boys'];
		$tot_new_girls1 = $tot_new_girls1 + $current[$val]['total_new_admissions_girls'];
		$total_new_admin1 = $tot_new_boys1 + $tot_new_girls1;
		$tot_free_stud1 = $tot_free_stud1 + $current[$val]['total_free_admissions_students'];
		}
		}
		?>
        <td style="height: 26px"><input type="text" value="<?php echo $tot_pp1;  ?>" class="input72" disabled="disabled" /></td>
        <td style="height: 26px"><input type="text" value="<?php echo $tot_boys1;  ?>" class="input72" disabled="disabled" /></td>
        <td style="height: 26px"><input type="text" value="<?php echo $tot_girls1;  ?>" class="input72" disabled="disabled" /></td>
        <td style="height: 26px"><input type="text" value="<?php echo $total1; ?>" disabled="disabled" class="input72" /></td>
        <td style="height: 26px"><input type="text" value="<?php echo $tot_new_boys1; ?>" disabled="disabled" class="input72" /></td>
        <td style="height: 26px"><input type="text" value="<?php echo $tot_new_girls1; ?>" disabled="disabled" class="input72" /></td>
        <td style="height: 26px"><input type="text" value="<?php echo $total_new_admin1; ?>" disabled="disabled" class="input72" /></td>
        <td style="height: 26px"><input type="text" value="<?php echo $tot_free_stud1; ?>" disabled="disabled" class="input72" /></td>
      </tr>
      <tr>
        <td class="classNo">Primary</td>
        <?php 
		$tot_pp2=0;  
		$tot_boys2=0;$tot_new_boys2=0;$tot_new_girls2=0;
		$tot_girls2=0;$tot_free_stud2=0;$total_new_admin2=0;
		$total2=0;
		for ($val=3;$val<8;$val++) {
		if (isset($current[$val]['no_of_sections'])) {

		$tot_pp2=$tot_pp2 + $current[$val]['no_of_sections'];
		$tot_boys2=$tot_boys2 + $current[$val]['total_enrollment_boys'];
		$tot_girls2=$tot_girls2 + $current[$val]['total_enrollment_girls'];
		$total2 = $tot_boys2 + $tot_girls2 ;
		$tot_new_boys2 = $tot_new_boys2 + $current[$val]['total_new_admission_boys'];
		$tot_new_girls2 = $tot_new_girls2 + $current[$val]['total_new_admissions_girls'];
		$total_new_admin2 = $tot_new_boys2 + $tot_new_girls2;
		$tot_free_stud2 = $tot_free_stud2 + $current[$val]['total_free_admissions_students'];
		}
		}
		?>
        <td><input type="text" value="<?php echo $tot_pp2;  ?>" class="input72" disabled="disabled" /></td>
        <td><input type="text" value="<?php echo $tot_boys2;  ?>"class="input72" disabled="disabled" /></td>
        <td><input type="text" value="<?php echo $tot_girls2;  ?>" class="input72" disabled="disabled" /></td>
        <td><input type="text" value="<?php echo $total2; ?>" disabled="disabled" class="input72" /></td>
        <td><input type="text" value="<?php echo $tot_new_boys2; ?>" disabled="disabled" class="input72" /></td>
        <td><input type="text" value="<?php echo $tot_new_girls2; ?>" disabled="disabled" class="input72" /></td>
        <td><input type="text" value="<?php echo $total_new_admin2; ?>" disabled="disabled" class="input72" /></td>
        <td><input type="text" value="<?php echo $tot_free_stud2; ?>" disabled="disabled" class="input72" /></td>
      </tr>
      <tr>
        <td class="classNo">Secondary</td>
        <?php 
		$tot_pp3=0;  
		$tot_boys3=0;$tot_new_boys3=0;$tot_new_girls3=0;
		$tot_girls3=0;$tot_free_stud3=0;$total_new_admin3=0;
		$total3=0;
		for ($val=8;$val<13;$val++) {
		if (isset($current[$val]['no_of_sections'])) {
        $tot_pp3=$tot_pp3 + $current[$val]['no_of_sections'];
		$tot_boys3=$tot_boys3 + $current[$val]['total_enrollment_boys'];
		$tot_girls3=$tot_girls3 + $current[$val]['total_enrollment_girls'];
		$total3 = $tot_boys3 + $tot_girls3 ;
		$tot_new_boys3 = $tot_new_boys3 + $current[$val]['total_new_admission_boys'];
		$tot_new_girls3 = $tot_new_girls3 + $current[$val]['total_new_admissions_girls'];
		$total_new_admin3 = $tot_new_boys3 + $tot_new_girls3;
		$tot_free_stud3 = $tot_free_stud3 + $current[$val]['total_free_admissions_students'];
		}
		}
		?>

        <td><input type="text" value="<?php echo $tot_pp3;  ?>" class="input72" disabled="disabled" /></td>
        <td><input type="text" value="<?php echo $tot_boys3;  ?>" class="input72" disabled="disabled" /></td>
        <td><input type="text" value="<?php echo $tot_girls3;  ?>" class="input72" disabled="disabled" /></td>
        <td><input type="text" value="<?php echo $total3; ?>" disabled="disabled" class="input72" /></td>
        <td><input type="text" value="<?php echo $tot_new_boys3; ?>" disabled="disabled" class="input72" /></td>
        <td><input type="text" value="<?php echo $tot_new_girls3; ?>" disabled="disabled" class="input72" /></td>
        <td><input type="text" value="<?php echo $total_new_admin3; ?>" disabled="disabled" class="input72" /></td>
        <td><input type="text" value="<?php echo $tot_free_stud3; ?>" disabled="disabled" class="input72" /></td>
      </tr>
      <tr>
        <td class="classNo">School Total</td>
        <?php 
		$tot_pp4=0;  
		$tot_boys4=0;$tot_new_boys4=0;$tot_new_girls4=0;
		$tot_girls4=0;$tot_free_stud4=0;$total_new_admin4=0;
		$total4=0;
		for ($val=0;$val<13;$val++) {
		if (isset($current[$val]['no_of_sections'])) {
		$tot_pp4=$tot_pp4 + $current[$val]['no_of_sections'];
		$tot_boys4=$tot_boys4 + $current[$val]['total_enrollment_boys'];
		$tot_girls4=$tot_girls4 + $current[$val]['total_enrollment_girls'];
		$total4 = $tot_boys4 + $tot_girls4 ;
		$tot_new_boys4 = $tot_new_boys4 + $current[$val]['total_new_admission_boys'];
		$tot_new_girls4 = $tot_new_girls4 + $current[$val]['total_new_admissions_girls'];
		$total_new_admin4 = $tot_new_boys4 + $tot_new_girls4;
		$tot_free_stud4 = $tot_free_stud4 + $current[$val]['total_free_admissions_students'];
		}
		}
		?>

        <td><input type="text" value="<?php echo $tot_pp4;  ?>" class="input72" disabled="disabled" /></td>
        <td><input type="text" value="<?php echo $tot_boys4;  ?>" class="input72" disabled="disabled" /></td>
        <td><input type="text" value="<?php echo $tot_girls4;  ?>" class="input72" disabled="disabled" /></td>
        <td><input type="text" value="<?php echo $total4; ?>" disabled="disabled" class="input72" /></td>
        <td><input type="text" value="<?php echo $tot_new_boys4; ?>" disabled="disabled" class="input72" /></td>
        <td><input type="text" value="<?php echo $tot_new_girls4; ?>" disabled="disabled" class="input72" /></td>
        <td><input type="text" value="<?php echo $total_new_admin4; ?>" disabled="disabled" class="input72" /></td>
        <td><input type="text" value="<?php echo $tot_free_stud4; ?>" disabled="disabled" class="input72" /></td>
      </tr>
	  <tr>
		<td colspan=9><input type="button" value="Submit" class="btnbg addform" onclick="javascript:admission_validate();" /><p id="para" /></td>
	  </tr>
    </tbody>
  </table>
  </form>
	</div>
</li>

<li class="selection content" style="display:none;">
<?php if($arr[0]['yearofestablish']>date("Y")-1){echo "<strong><br/>school was recently established</strong>";}
else{ ?>
<div id="admission" style="border: medium none; margin: 0px;">
	<form action="/admin/addadmissions/?info=<?php echo $info; ?>" id="admission1" method="post">
  <table style="width: 100%" id="admissionTable"  >
    <thead>
      <tr>
        <th class="topheading noborder" rowspan="2"></th>
        <th colspan="4" class="topheading"><strong>Total Enrollment</strong></th>
        
      </tr>
      <tr class="tophead">
        <th class="top_txtheading"><strong>No. of Sections</strong></th>
        <th class="top_txtheading"><strong>Boys</strong></th>
        <th class="top_txtheading"><strong>Girls</strong></th>
        <th class="top_txtheading txthead_total"><strong>Total</strong></th>
        
      </tr>
      <tr>
        <th colspan="7">&nbsp;</th>
      </tr>
    </thead>
    <tbody>
      <?php for ($row = 0; $row < count($classname) ;  $row++) {  ?>
      <tr>
      <input type = "hidden"  name = "enrollment[<?php echo $row;?>][class_id]" value = "<?php echo $classname[$row]['class_id'] ; ?>" >
      <input type= "hidden" name="date"  value="<?php echo date("Y")-1; ?>" >
        <td class="classNo"><?php echo $classname[$row]['class_name'] ; ?></td>
        <td><input id ="sectionprevious<?php echo $row;?>" onkeyup="javascript: trimalpha(sectionprevious<?php echo $row;?>);"   name="enrollment[<?php echo $row;?>][7]" maxlength="4"  value = "1<?php //if(isset($prev[$row]['no_of_sectionsprevious'])){echo $prev[$row]['no_of_sectionsprevious'];}else{echo $prev[$row]['no_of_sections']; } ?>" type="text" onBlur="return validate_numeric('#sectionprevious<?php echo $row;?>');" style="width: 72px" /></td>
        <td>
					<input id ="boysprevious<?php echo $row;?>" onkeyup="javascript: trimalpha(boysprevious<?php echo $row;?>);" name="enrollment[<?php echo $row;?>][8]" maxlength="5"  value =  "<?php if(isset($prev[$row]['total_enrollment_boysprevious'])){echo $prev[$row]['total_enrollment_boysprevious'];}else{echo ($prev[$row]['total_enrollment_boys']+$prev[$row]['total_new_admission_boys']);} ?>" type="text" onBlur="return add_cost('#boysprevious<?php echo $row;?>','#girls<?php echo $row;?>','#total<?php echo $row;?>');"  style="width: 72px;" /></td>
        <td>
					<input id ="girlsprevious<?php echo $row;?>" onkeyup="javascript: trimalpha(girlsprevious<?php echo $row;?>);" name="enrollment[<?php echo $row;?>][9]" maxlength="5"  value =  "<?php if(isset($prev[$row]['total_enrollment_girlsprevious'])){ echo $prev[$row]['total_enrollment_girlsprevious'];}else{echo $prev[$row]['total_enrollment_girls']+$prev[$row]['total_new_admissions_girls'];} ?>"type="text" onBlur="return add_cost('#boysprevious<?php echo $row;?>','#girlsprevious<?php echo $row;?>','#totalprevious<?php echo $row;?>');"  style="width: 72px" /></td>
        <td>
					<input id ="totalprevious<?php echo $row;?>" name="" type="text" disabled="disabled" style="width: 72px"  value =  "<?php if(isset($prev[$row]['total_enrollment_boysprevious'])||isset($prev[$row]['total_enrollment_girlsprevious'])){
					$BP1 = $prev[$row]['total_enrollment_boysprevious'];
					$GP1 = $prev[$row]['total_enrollment_girlsprevious'];
					echo $data = $BP1+ $GP1;
		}else{
		
		$BP1= $prev[$row]['total_enrollment_boys']+$prev[$row]['total_new_admission_boys'];
        $GP1= $prev[$row]['total_enrollment_girls']+$prev[$row]['total_new_admissions_girls'];
        echo $data = $BP1+ $GP1;

		}
		 ?>" /></td>
        <td></td>
      </tr>
      <?php }?>
      <tr>
        <td class="classNo">Pre-Primary</td>
       
		<?php 
		$tot_pp5=0;  
		$tot_boysprevious5=0;/*$tot_new_boys=0;$tot_new_girls=0;*/
		$tot_girlsprevious5=0;/*$tot_free_stud=0;$total_new_admin=0;*/
		$total5=0;
		for ($val=0;$val<3;$val++) {
		if (isset($prev[$val]['no_of_sectionsprevious'])) {

		$tot_pp5=$tot_pp5 + $prev[$val]['no_of_sectionsprevious'];
		$tot_boysprevious5=$tot_boysprevious5 + $prev[$val]['total_enrollment_boysprevious'];
		$tot_girlsprevious5=$tot_girlsprevious5 + $prev[$val]['total_enrollment_girlsprevious'];
		$total5 = $tot_boysprevious5 + $tot_girlsprevious5 ;
		/*$tot_new_boys = $tot_new_boys + $arr[$val]['total_new_admission_boys'];
		$tot_new_girls = $tot_new_girls + $arr[$val]['total_new_admissions_girls'];
		$total_new_admin = $tot_new_boys + $tot_new_girls;
		$tot_free_stud = $tot_free_stud + $arr[$val]['total_free_admissions_students'];*/
		
		}else{
		$tot_pp5=$tot_pp5 + $prev[$val]['no_of_sections'];
		$tot_boysprevious5=$tot_boysprevious5 + $prev[$val]['total_enrollment_boys']+$prev[$val]['total_new_admission_boys'];
		$tot_girlsprevious5=$tot_girlsprevious5 + $prev[$val]['total_enrollment_girls']+$prev[$val]['total_new_admissions_girls'];
		$total5 = $tot_boysprevious5 + $tot_girlsprevious5 ;
		}
		}
		?>
        <td><input type="text" value="<?php echo $tot_pp5;  ?>" class="input72" disabled="disabled" /></td>
        <td><input type="text" value="<?php echo $tot_boysprevious5;  ?>" class="input72" disabled="disabled" /></td>
        <td><input type="text" value="<?php echo $tot_girlsprevious5;  ?>" class="input72" disabled="disabled" /></td>
        <td><input type="text" value="<?php echo $total5; ?>" disabled="disabled" class="input72" /></td>
        
      </tr>
      <tr>
        <td class="classNo">Primary</td>
        	<?php 
		$tot_pp6=0;  
		$tot_boys6=0;
		$tot_girls6=0;
		$total6=0;
		for ($val=3;$val<8;$val++) {
		if (isset($prev[$val]['no_of_sectionsprevious'])) {

		$tot_pp6=$tot_pp6 + $prev[$val]['no_of_sectionsprevious'];
		$tot_boys6=$tot_boys6 + $prev[$val]['total_enrollment_boysprevious'];
		$tot_girls6=$tot_girls6 + $prev[$val]['total_enrollment_girlsprevious'];
		$total6 = $tot_boys6 + $tot_girls6 ;
		//$tot_new_boys6 = $tot_new_boys6 + $arr[$val]['total_new_admission_boys'];
		//$tot_new_girls6 = $tot_new_girls6 + $arr[$val]['total_new_admissions_girls'];
		//$total_new_admin6 = $tot_new_boys6 + $tot_new_girls;
		//$tot_free_stud = $tot_free_stud + $arr[$val]['total_free_admissions_students'];
		}else{
		$tot_pp6=$tot_pp6 + $prev[$val]['no_of_sections'];
		$tot_boys6=$tot_boys6 + $prev[$val]['total_enrollment_boys']+$prev[$val]['total_new_admission_boys'];
		$tot_girls6=$tot_girls6 + $prev[$val]['total_enrollment_girls']+$prev[$val]['total_new_admissions_girls'];
		$total6 = $tot_boys6 + $tot_girls6 ;
		
		
		
		}
		}
		?>
        <td><input type="text" value="<?php echo $tot_pp6;  ?>" class="input72" disabled="disabled" /></td>
        <td><input type="text" value="<?php echo $tot_boys6;  ?>"class="input72" disabled="disabled" /></td>
        <td><input type="text" value="<?php echo $tot_girls6;  ?>" class="input72" disabled="disabled" /></td>
        <td><input type="text" value="<?php echo $total6; ?>" disabled="disabled" class="input72" /></td>
       </tr>
      <tr>
        <td class="classNo">Secondary</td>
       		<?php 
		$tot_pp7=0;  
		$tot_boys7=0;
		$tot_girls7=0;
		$total7=0;
		for ($val=8;$val<13;$val++) {
		if (isset($prev[$val]['no_of_sectionsprevious'])) {

		$tot_pp7=$tot_pp7 + $prev[$val]['no_of_sectionsprevious'];
		$tot_boys7=$tot_boys7 + $prev[$val]['total_enrollment_boysprevious'];
		$tot_girls7=$tot_girls7 + $prev[$val]['total_enrollment_girlsprevious'];
		$total7 = $tot_boys7 + $tot_girls7 ;
		//$tot_new_boys = $tot_new_boys + $arr[$val]['total_new_admission_boys'];
		//$tot_new_girls = $tot_new_girls + $arr[$val]['total_new_admissions_girls'];
		//$total_new_admin = $tot_new_boys + $tot_new_girls;
		//$tot_free_stud = $tot_free_stud + $arr[$val]['total_free_admissions_students'];
		}else{
		$tot_pp7=$tot_pp7 + $prev[$val]['no_of_sections'];
		$tot_boys7=$tot_boys7 + $prev[$val]['total_enrollment_boys']+$prev[$val]['total_new_admission_boys'];
		$tot_girls7=$tot_girls7 + $prev[$val]['total_enrollment_girls']+$prev[$val]['total_new_admissions_girls'];
		$total7 = $tot_boys7 + $tot_girls7 ;
		
		
		}
		}
		?>

        <td><input type="text" value="<?php echo $tot_pp7;  ?>" class="input72" disabled="disabled" /></td>
        <td><input type="text" value="<?php echo $tot_boys7;  ?>" class="input72" disabled="disabled" /></td>
        <td><input type="text" value="<?php echo $tot_girls7;  ?>" class="input72" disabled="disabled" /></td>
        <td><input type="text" value="<?php echo $total7; ?>" disabled="disabled" class="input72" /></td>
        </tr>
      <tr>
        <td class="classNo">School Total</td>
		<?php 
		$tot_pp8=0;  
		$tot_boys8=0;
		$tot_girls8=0;
		$total8=0;
		for ($val=0;$val<13;$val++) {
		if (isset($prev[$val]['no_of_sectionsprevious'])) {
		$tot_pp8=$tot_pp8 + $prev[$val]['no_of_sectionsprevious'];
		$tot_boys8=$tot_boys8 + $prev[$val]['total_enrollment_boysprevious'];
		$tot_girls8=$tot_girls8 + $prev[$val]['total_enrollment_girlsprevious'];
		$total8 = $tot_boys8 + $tot_girls8 ;
		//$tot_new_boys = $tot_new_boys + $arr[$val]['total_new_admission_boys'];
		//$tot_new_girls = $tot_new_girls + $arr[$val]['total_new_admissions_girls'];
		//$total_new_admin = $tot_new_boys + $tot_new_girls;
		//$tot_free_stud = $tot_free_stud + $arr[$val]['total_free_admissions_students'];
		}else{
		$tot_pp8=$tot_pp8 + $prev[$val]['no_of_sections'];
		$tot_boys8=$tot_boys8 + $prev[$val]['total_enrollment_boys']+$prev[$val]['total_new_admission_boys'];
		$tot_girls8=$tot_girls8 + $prev[$val]['total_enrollment_girls']+$prev[$val]['total_new_admissions_girls'];
		$total8 = $tot_boys8 + $tot_girls8 ;
		}
		}
		?>

        <td><input type="text" value="<?php echo $tot_pp8;  ?>" class="input72" disabled="disabled" /></td>
        <td><input type="text" value="<?php echo $tot_boys8;  ?>" class="input72" disabled="disabled" /></td>
        <td><input type="text" value="<?php echo $tot_girls8  ?>" class="input72" disabled="disabled" /></td>
        <td><input type="text" value="<?php echo $total8 ?>" disabled="disabled" class="input72" /></td>
        </tr>
	  <tr>
		<td colspan=9><input type="button" value="Submit" class="btnbg addform" onclick="javascript:admission_validate1();" /></td>
	  </tr>
    </tbody>
  </table>
  </form>
	</div>
<?php 	}?>
</li>

<li class="selection content" style="display:none;">
<?php if($arr[0]['yearofestablish']>date("Y")-2){echo "<strong><br/>school was recently established</strong>";}else{ ?>

<div id="admission" style="border: medium none; margin: 0px;">
<form action="/admin/addadmissions/?info=<?php echo $info; ?>" id="admission2"  method="post">
  <table style="width: 100%" id="admissionTable"  >
    <thead>
      <tr>
        <th class="topheading noborder" rowspan="2"></th>
        <th colspan="4" class="topheading"><strong>Total Enrollment</strong></th>
        
      </tr>
      <tr class="tophead">
        <th class="top_txtheading"><strong>No. of Sections</strong></th>
        <th class="top_txtheading txthead_total"><strong>Total</strong></th>
        
      </tr>
      <tr>
        <th colspan="7">&nbsp;</th>
      </tr>
    </thead>
    <tbody>
      <?php for ($row = 0; $row < count($classname) ;  $row++) {  ?>
      <tr>
      <input type = "hidden"  name = "enrollment[<?php echo $row;?>][class_id]" value = "<?php echo $classname[$row]['class_id'] ; ?>" >
      <input type= "hidden" name="date"  value="<?php echo date("Y")-2; ?>" >
        <td class="classNo"><?php echo $classname[$row]['class_name'] ; ?></td>
        <td>
		<input id ="sectionpreviousyear2<?php echo $row;?>" onkeyup="javascript: trimalpha(sectionpreviousyear2<?php echo $row;?>);" name="enrollment[<?php echo $row;?>][10]"  maxlength="5" value = "1<?php //if(isset($last_prev[$row]['no_of_sectionsprevious2'])){echo $last_prev[$row]['no_of_sectionsprevious2'];}else{ echo $last_prev[$row]['no_of_sectionsprevious'];} ?>" type="text" onBlur="return validate_numeric('#sectionpreviousyear2<?php echo $row;?>');" style="width: 72px" /></td>
        <td>
		<input id ="total2<?php echo $row;?>" onkeyup="javascript: trimalpha(total2<?php echo $row;?>);" name="enrollment[<?php echo $row;?>][11]" type="text"   style="width: 72px"  value =  "<?php if(isset($last_prev[$row]['total_enrollments'])){
					echo $last_prev[$row]['total_enrollments'];}else{echo ($last_prev[$row]['total_enrollment_boysprevious']+$last_prev[$row]['total_enrollment_girlsprevious']);}
					//$G1 = $arr[$row]['total_enrollment_girls'];
					//echo $B1;
		
		 ?>" /></td>
        <td></td>
      </tr>
      <?php }?>
      <tr>
        <td class="classNo">Pre-Primary</td>
		<?php 
		$tot_pp9=0;  
		$total_enrollments9=0;
		for ($val=0;$val<3;$val++) {
		if (isset($last_prev[$val]['no_of_sectionsprevious2'])) {

		$tot_pp9=$tot_pp9 + $last_prev[$val]['no_of_sectionsprevious2'];
		$total_enrollments9 = $total_enrollments9 + $last_prev[$val]['total_enrollments'];
		//$tot_girls=$tot_girls + $arr[$val]['total_enrollment_girls'];
		//$total = $tot_boys + $tot_girls ;
		//$tot_new_boys = $tot_new_boys + $arr[$val]['total_new_admission_boys'];
		//$tot_new_girls = $tot_new_girls + $arr[$val]['total_new_admissions_girls'];
		//$total_new_admin = $tot_new_boys + $tot_new_girls;
		//$tot_free_stud = $tot_free_stud + $arr[$val]['total_free_admissions_students'];
		}else{
		$tot_pp9=$tot_pp9 + $last_prev[$val]['no_of_sectionsprevious'];
		$total_enrollments9 = $total_enrollments9 + $last_prev[$val]['total_enrollment_boysprevious']+ $last_prev[$val]['total_enrollment_girlsprevious'];}
		}
		?>
        <td><input id ="admissions217" name="Text30" type="text" disabled="disabled" style="width: 72px" value="<?php echo $tot_pp9;  ?>" /></td>
        <td>
		<input id ="admissions218" name="Text31" type="text" style="width: 72px" disabled="disabled" value="<?php echo $total_enrollments9; ?>"/></td>
        
      </tr>
      <tr>
        <td class="classNo">Primary</td>
	<?php 
		$tot_pp10=0;  
		$total_enrollments10=0;
		for ($val=3;$val<8;$val++) {
		if (isset($last_prev[$val]['no_of_sectionsprevious2'])) {

		$tot_pp10=$tot_pp10 + $last_prev[$val]['no_of_sectionsprevious2'];
		$total_enrollments10=$total_enrollments10 + $last_prev[$val]['total_enrollments'];
		//$tot_girls=$tot_girls + $arr[$val]['total_enrollment_girls'];
		//$total = $tot_boys + $tot_girls ;
		//$tot_new_boys = $tot_new_boys + $arr[$val]['total_new_admission_boys'];
		//$tot_new_girls = $tot_new_girls + $arr[$val]['total_new_admissions_girls'];
		//$total_new_admin = $tot_new_boys + $tot_new_girls;
		//$tot_free_stud = $tot_free_stud + $arr[$val]['total_free_admissions_students'];
		}else{
		$tot_pp10=$tot_pp10 + $last_prev[$val]['no_of_sectionsprevious'];
		$total_enrollments10=$total_enrollments10 + $last_prev[$val]['total_enrollment_boysprevious']+ $last_prev[$val]['total_enrollment_girlsprevious'];}
		}
		?>
        <td>
					<input id ="admissions219" name="Text32" type="text" disabled="disabled" style="width: 72px" value="<?php echo $tot_pp10;  ?>" /></td>
        <td>
										
					<input id ="admissions220" name="Text33" type="text" style="width: 72px" disabled="disabled" value="<?php echo $total_enrollments10; ?>"/></td>
       </tr>
      <tr>
        <td class="classNo">Secondary</td>
	<?php 
		$tot_pp11=0;  
		$totalenrollments11=0;
		for ($val=8;$val<13;$val++) {
		if (isset($last_prev[$val]['no_of_sectionsprevious2'])) {

		$tot_pp11=$tot_pp11 + $last_prev[$val]['no_of_sectionsprevious2'];
		$totalenrollments11=$totalenrollments11 + $last_prev[$val]['total_enrollments'];
		//$tot_girls=$tot_girls + $arr[$val]['total_enrollment_girls'];
		//$total = $tot_boys + $tot_girls ;
		//$tot_new_boys = $tot_new_boys + $arr[$val]['total_new_admission_boys'];
		//$tot_new_girls = $tot_new_girls + $arr[$val]['total_new_admissions_girls'];
		//$total_new_admin = $tot_new_boys + $tot_new_girls;
		//$tot_free_stud = $tot_free_stud + $arr[$val]['total_free_admissions_students'];
		}else{
		$tot_pp11=$tot_pp11 + $last_prev[$val]['no_of_sectionsprevious'];
		$totalenrollments11=$totalenrollments11 + $last_prev[$val]['total_enrollment_boysprevious']+ $last_prev[$val]['total_enrollment_girlsprevious'];}
		}
		?>
        <td>
					<input id ="admissions221" name="Text34" type="text" disabled="disabled" style="width: 72px" value="<?php echo $tot_pp11;  ?>" /></td>
        <td>
				
					
					<input id ="admissions222" name="Text35" type="text" style="width: 72px" disabled="disabled" value="<?php echo $totalenrollments11; ?>"/></td>
        </tr>
      <tr>
        <td class="classNo">School Total</td>
<?php 
		$tot_pp12=0;  
		$totalenrollments12=0;
		for ($val=0;$val<13;$val++) {
		if (isset($last_prev[$val]['no_of_sectionsprevious2'])) {
		$tot_pp12=$tot_pp12 + $last_prev[$val]['no_of_sectionsprevious2'];
		$totalenrollments12=$totalenrollments12 + $last_prev[$val]['total_enrollments'];
		//$tot_girls=$tot_girls + $arr[$val]['total_enrollment_girls'];
		//$total = $tot_boys + $tot_girls ;
		//$tot_new_boys = $tot_new_boys + $arr[$val]['total_new_admission_boys'];
		//$tot_new_girls = $tot_new_girls + $arr[$val]['total_new_admissions_girls'];
		//$total_new_admin = $tot_new_boys + $tot_new_girls;
		//$tot_free_stud = $tot_free_stud + $arr[$val]['total_free_admissions_students'];
		}
		}
		?>

        <td>
		<input id ="admissions223" name="Text36" type="text" disabled="disabled" style="width: 72px" value="<?php echo $tot_pp12;  ?>" /></td>
        <td>
		<input id ="admissions224" name="Text37" type="text" style="width: 72px" disabled="disabled" value="<?php echo $totalenrollments12; ?>"/></td>
        </tr>
	  <tr>
		<td colspan=9><input type="button" value="Submit" class="btnbg addform" onclick="javascript:admission_validate2();" /></td>
	  </tr>
    </tbody>
  </table>
  </form>
	</div>
	<?php }?>
</li>
</ul>
</article>
	
</section>
</div>
</body>
</html>