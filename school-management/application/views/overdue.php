<?php $this->load->view('main_header') ?>
	<article id="formDetail">
<script type="text/javascript">
        $(function() {
            $("#addAll").click(function() {
                var add = 0;
                $(".amt").each(function() {
                    add += Number($(this).val());
                });
                $("#para").text("Sum of all textboxes is : " + add);
            });
        });
 </script>
		
	<h2>Overdue Details - December 2012 <span class="crdate">December 2012</span></h2>
<div id="overdues">

<form method = "post" id ="overduedetails" action = "/admin/addoverdue/?info=<?php echo $info; ?>&page=6" >
<p id="numstuderror<?php echo $row;?>" style="color:red;"></p>
<table class="tableLayout">
	<thead>
		<tr>
			<th>Classes</th>
			<th><strong>No. of  Students</strong></th>
			<th class="border0"><strong>Fees Overdue</strong></th>
		</tr>
		<tr>
		<th class="noborder nobg"></th>
		</tr>
	</thead>
<tbody>
        <input id="overdue" name="" type="hidden" value="<?php echo count($arr);?>"/>
	    <?php $tot_no_of_students=0;$tot_fee_overdue=0; for ($row = 0; $row < count($arr) ;  $row++) {  ?>
	<tr>
		<td class="classNo"><?php echo $arr[$row]['class_name']; ?></td> 
		<!-- <td class="auto-style4" style="height: 26px" ><?php //echo $arr[$row]['class_name'] ; ?> </td> -->
		<td><input class="amt" id ="numstud<?php echo $row;?>" name="overdue[<?php echo $row;?>][1]" value =  "<?php if(isset($arr[$row]['no_of_students']))echo $arr[$row]['no_of_students']; ?>" onkeyup="javascript: trimalpha('#nos<?php echo $row;?>')" type="text"/></td>
		<td><input id ="foverdue<?php echo $row;?>" name="overdue[<?php echo $row;?>][2]"  value =  "<?php if(isset($arr[$row]['fee_overdue']))echo $arr[$row]['fee_overdue']; ?>" onkeyup="javascript: trimalpha('#fo<?php echo $row;?>')" type="text"  /></td>
		<?php if(isset($arr[$row]['fee_overdue'])) $tot_fee_overdue=$tot_fee_overdue + $arr[$row]['fee_overdue']; ?>
		<?php if(isset($arr[$row]['no_of_students'])) $tot_no_of_students = $tot_no_of_students + $arr[$row]['no_of_students']; ?>
		<input id ="overdue3" name="overdue[<?php echo $row;?>][3]" type="hidden"  value= "<?php if(isset($arr[$row]['class_id']))echo $arr[$row]['class_id'] ; ?>" />
	</tr>
		<?php } ?>
	<tr>
		<td class="classNo"><strong>Total Overdue</strong></td>
		<td><input id="totalstudents<?php echo $tot_no_of_students; ?>" name="totalstudents[4]" type="text" readonly="readonly" value="<?php echo $tot_no_of_students; ?>"/></td>
		<td><input id="totalfeeoverdue<?php echo $tot_fee_overdue; ?>" name="totalfeeoverdue[5]" type="text"  readonly="readonly" value="<?php echo $tot_fee_overdue; ?>" /></td>
	</tr>
	<tr>
		<td colspan=4><input id="addAll" name="submit" type="button" value="submit" style="width: 98px" /><p id="para" /></td>
	</tr>
</tbody>
</table>
	</form>

	</div>
	 </article>
		
	</section>
	</div>
</body>
</html>