<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
 <?php    $this->load->view('header'); ?>
  </head>
 
<div id="shell">
	
	<!-- Header -->
	<div id="header">
		<h1><a href="#">School Management System</a></h1>
		<div class="right">
			<p>Welcome <a href="#"><strong><?php echo $username ; ?></strong></a></p>
			<p class="small-nav"><a href="#">Help</a> / <a href="">Profile Settings</a> / <a href="home/logout">Log Out</a></p>
		</div>
	</div>
	<!-- End Header -->
	
	<!-- Navigation -->
	 <?php    $this->load->view('menu', $id, $username); ?>	
     
	<!-- End Navigation -->
	
	<!-- Content -->
	<div class="auto-style1" align="center">
			<label><b><span class="auto-style5">Revenue Details</span> <br />
					<br />
					</b></label>
				</div>
	<div id="content">
	<form name = "myform" action= "<?php echo base_url(); ?>school_control/enter_school" method = "POST" >
		<table style="width: 100%" border="1">
			
			<tr>
			    <td><strong></strong></td>
				<td>Tuition Fees</td>
				<td>Term Fees</td>
				<td>Admission Fees</td>
				<td>Exam Fees</td>
				<td style="width: 83px">Other School Fees</td>
				<td style="width: 77px">Transport Fees</td>
				<td>Books etc</td>
				<td>Uniform etc</td>
				<td style="width: 88px">Non-School Fees</td>
				<td>School Fees for Free Students</td>
				<td>Overdues</td>
				
			</tr>
			
			
			
			
			<?php
			     
			      for($i=0;$i<13;$i++){$total_trans_amount=0;$total_trans_amount=$total_trans_amount+($arr['transport_fees'][$i]['fee_amount']*$arr['transport_fees'][$i]['quantity']*12);}
			      for($i=0;$i<13;$i++){$overdue_amount=0;$overdue_amount=$overdue_amount+$arr['overdue'][$i]['fee_overdue'];}	
			      for($i=0;$i<13;$i++){$otherfee_books=0;$otherfee_books=$otherfee_books+($arr['otherfeebooks'][$i]['fee_amount']*$arr['otherfeebooks'][$i]['quantity']);}
			      for($i=0;$i<13;$i++){$otherfee_etc=0;$otherfee_etc=$otherfee_etc+($arr['otherfeeetc'][$i]['fee_amount']*$arr['otherfeeetc'][$i]['quantity']);}
	
			      
			      for($i=0;$i<3;$i++){$pre=0;$pre = $pre+$arr['enrollment'][$i]['total_enrollment_boys']+$arr['enrollment'][$i]['total_enrollment_girls'];}
			      for($i=3;$i<8;$i++){$prime=0;$prime = $prime+$arr['enrollment'][$i]['total_enrollment_boys']+$arr['enrollment'][$i]['total_enrollment_girls'];}
			      for($i=8;$i<13;$i++){$second=0;$second = $second+$arr['enrollment'][$i]['total_enrollment_boys']+$arr['enrollment'][$i]['total_enrollment_girls'];}
			      $total=$pre+$prime+$second;
			     

			for($i=0; $i<count($arr['class_name']); $i++ ){ ?>
			
             <tr>
			    <td><strong><?php  echo $arr['class_name'][$i]['class_name']; ?></strong></td>
				<?php if($i>0){$j=6+$j;}else{$j=0;} 
				 $ddd = ($arr['school_fees'][1+$j]['fee_amount']+$arr['school_fees'][2+$j]['fee_amount']+$arr['school_fees'][3+$j]['fee_amount']+$arr['school_fees'][4+$j]['fee_amount'])*12*($arr['enrollment'][$i]['total_enrollment_boys']+$arr['enrollment'][$i]['total_enrollment_girls']);
                     
                  if(($arr['enrollment'][$i]['total_enrollment_boys']+$arr['enrollment'][$i]['total_enrollment_girls'])==0){$aaaa=0;}else{$aaaa = ($arr['enrollment'][$i]['total_free_admissions_students']/($arr['enrollment'][$i]['total_enrollment_boys']+$arr['enrollment'][$i]['total_enrollment_girls']));}				
?>
				
				<td><?php if($arr['school_fees'][1+$j]['fee_amount']==0 ||($arr['enrollment'][$i]['total_enrollment_boys']+$arr['enrollment'][$i]['total_enrollment_girls'])==0 )
				{echo 0;}else{ echo ($arr['enrollment'][$i]['total_enrollment_boys']+$arr['enrollment'][$i]['total_enrollment_girls'])*$arr['school_fees'][1+$j]['fee_amount']*12; } ?></td>
				
				<td><?php  if($arr['school_fees'][2+$j]['fee_amount']==0 ||($arr['enrollment'][$i]['total_enrollment_boys']+$arr['enrollment'][$i]['total_enrollment_girls'])==0 )
				{echo 0;}else{ echo ($arr['enrollment'][$i]['total_enrollment_boys']+$arr['enrollment'][$i]['total_enrollment_girls'])*$arr['school_fees'][2+$j]['fee_amount']*12; }?></td>
				
				<td><?php if($arr['school_fees'][0+$j]['fee_amount']==0 ||($arr['enrollment'][$i]['total_enrollment_boys']+$arr['enrollment'][$i]['total_enrollment_girls'])==0 )
				{echo 0;}else{ echo ($arr['enrollment'][$i]['total_enrollment_boys']+$arr['enrollment'][$i]['total_enrollment_girls'])*$arr['school_fees'][0+$j]['fee_amount']*12; } ?></td>
				
				<td><?php  if($arr['school_fees'][3+$j]['fee_amount']==0 ||($arr['enrollment'][$i]['total_enrollment_boys']+$arr['enrollment'][$i]['total_enrollment_girls'])==0 )
				{echo 0;}else{ echo ($arr['enrollment'][$i]['total_enrollment_boys']+$arr['enrollment'][$i]['total_enrollment_girls'])*$arr['school_fees'][3+$j]['fee_amount']*12; }?></td>
				
				<td style="width: 83px"><?php  if(($arr['school_fees'][4+$j]['fee_amount']+$arr['school_fees'][5+$j]['fee_amount'])==0 ||($arr['enrollment'][$i]['total_enrollment_boys']+$arr['enrollment'][$i]['total_enrollment_girls'])==0 )
				{echo 0;}else{ echo ($arr['enrollment'][$i]['total_enrollment_boys']+$arr['enrollment'][$i]['total_enrollment_girls'])*($arr['school_fees'][4+$j]['fee_amount']+$arr['school_fees'][5+$j]['fee_amount'])*12;}?></td>
				
				
				<td style="width: 77px"><?php if($total_trans_amount>0){echo $arr['transport_fees'][$i]['fee_amount']*$arr['transport_fees'][$i]['quantity']*12; }
				elseif(($arr['transport_fees'][$i]['fee_amount']*$arr['transport_fees'][$i]['quantity']*12)>0)
				{echo ($arr['transport_fees'][$i]['fee_amount']*$arr['transport_fees'][$i]['quantity']*12)*(($arr['enrollment'][$i]['total_enrollment_boys']+$arr['enrollment'][$i]['total_enrollment_girls'])/$total); }else{echo 0;}?></td>
				
				
				<td><?php if(($otherfee_books*$arr['otherfeebooks'][$i]['margin_books'])>0){echo $arr['otherfeebooks'][$i]['quantity']*$arr['otherfeebooks'][$i]['fee_amount']*$arr['otherfeebooks'][$i]['margin_books'];}elseif
				($otherfee_books*$arr['otherfeebooks'][$i]['margin_books']>0){ echo $otherfee_books*$arr['otherfeebooks'][$i]['margin_books']*($arr['enrollment'][$i]['total_enrollment_boys']+$arr['enrollment'][$i]['total_enrollment_girls'])/$total;}else{echo 0;} ?></td>
				
				<td><?php if(($otherfee_etc*$arr['otherfeeetc'][$i]['margin_etc'])>0){echo $arr['otherfeeetc'][$i]['quantity']*$arr['otherfeeetc'][$i]['fee_amount']*$arr['otherfeeetc'][$i]['margin_etc'];}elseif
				($otherfee_etc*$arr['otherfeeetc'][$i]['margin_etc']>0){ echo $otherfee_etc*$arr['otherfeeetc'][$i]['margin_etc']*($arr['enrollment'][$i]['total_enrollment_boys']+$arr['enrollment'][$i]['total_enrollment_girls'])/$total;}else{echo 0;} ?></td>

				<td style="width: 88px"><?php echo "NA"; ?></td>
				
				<td><?php if($arr['enrollment'][$i]['total_free_admissions_students']==0){echo 0;}else{ echo $ddd * $aaaa ;}?></td>
				
	         	<td><?php if($overdue_amount>0){echo $arr['overdue'][$i]['fee_overdue'];}elseif($overdue_amount>0){ echo  $overdue_amount*($arr['enrollment'][$i]['total_enrollment_boys']+$arr['enrollment'][$i]['total_enrollment_girls'])/$total;}else{echo 0;}?></td>
				
			</tr>
			
			
			<?php }?>
		</table>
				
	
	</form>	
	</div>
	<!-- End Content -->
</div>
<!-- End Shell -->
<?php    $this->load->view('header'); ?>

