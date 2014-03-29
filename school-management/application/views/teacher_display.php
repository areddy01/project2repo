 <?php    $this->load->view('main_header'); ?>


<article id="formDetail">
<h2>Teacher Details</h2>
<ul class="tabs">
	<li class="btnbg"><label>New Teacher</label></li>
	<li><label>Edit Existing</label></li>
</ul>
<ul id="tabsContents">
<li class="selection content">
<!--	<div class="mainWrapper"  style="display:none">
<div class="wrapper">
<div class="stdtest leftrow">
<label>No. of rows(Max 10)</label>
<div class="bg">
<select value="IIS" id="c_name" name="c_name" class="input" type="text">
<option>1</option>
</select>
</div>
</div>	
</div>
<div class="wrapper">
<div class="leftrow">
<a class="button" id="submitform" href="javascript:void(0)">Submit</a>
</div>
</div>
</div> -->
<div class="mainWrapper">
<!--<div class="wrapper"style="display:none" >
<div class="leftrow">
<label>No. of Rows :</label>
<div class="nonInput">2 </div>
</div>												
</div>	-->
<div id='teacherDetails' style=" margin-left: -1px; overflow: auto;">
 					<table class="tableLayout"style="width:auto;">
						<tr>
						<th ><strong></strong></th>
						<th ><strong>Current Year</strong></th>
						<th ><strong>Previous Year</strong></th>
						</tr>
						<tr>
						<th ><strong>Total Teachers</strong></th>
						<th ><input id="teacher0" name="Text244" readonly="readonly"  type="text" value="<?php echo count($current) ;?>" /></th>
						<th ><input id="teacher1" name="Text245" readonly="readonly" type="text" value="<?php echo count($previous);  ?>" /></th>
						</tr>
						<tr>
						<th ><strong>New Joinees</strong></th>
						<th ><input id="teacher2" name="Text246" readonly="readonly"  type="text" value="<?php echo  count($currentnew);?>" /></th>
						<th ><input id="teacher3" name="Text247" readonly="readonly" type="text" value="<?php echo  count($previousnew);?>" /></th>
						</tr>
					</table>


		<div id = "addnewteach" > 

				<form method="post" >
					<table style="margin-left:5px;">
						<tr>
						<td colspan="2">
						<td >Select no Teachers </td>
						<td colspan="2">
						<td colspan="2">
						<select name="noofteachers">
						<option value="1" <?php if($_REQUEST['noofteachers']==1) {?> selected="selected" <?php } ?>>1</option>
						<option value="2" <?php if($_REQUEST['noofteachers']==2) {?> selected="selected" <?php }  ?>>2</option>
						<option value="3" <?php if($_REQUEST['noofteachers']==3) {?> selected="selected" <?php } ?>>3</option>
						<option value="4" <?php if($_REQUEST['noofteachers']==4) {?> selected="selected" <?php } ?>>4</option>
						<option value="5" <?php if($_REQUEST['noofteachers']==5) {?> selected="selected" <?php } ?>>5</option>
						<option value="6" <?php if($_REQUEST['noofteachers']==6) {?> selected="selected" <?php }?>>6</option>
						<option value="7" <?php if($_REQUEST['noofteachers']==7) {?> selected="selected" <?php }?>>7</option>
						<option value="8" <?php if($_REQUEST['noofteachers']==8) {?> selected="selected" <?php } ?>>8</option>
						<option value="9" <?php if($_REQUEST['noofteachers']==9) {?> selected="selected" <?php } ?>>9</option>
						<option value="10"<?php if($_REQUEST['noofteachers']==10) {?> selected="selected" <?php } ?>>10</option>
						</select>
						<input type="hidden" name="nots" value="<?php //echo $_REQUEST['noofteachers'];?>"; style="width: 126px" /> 
						<input name="Submit2" type="submit" value="submit" />
						</td>
						</tr>
					</table>
				</form>

		</div>
		<br/>										
			<form method = "post" id ="" action = "/admin/addteacher/?info=<?php echo $info ; ?>&page=10"  style="width:24%" >

			<?php //echo $_REQUEST['noofteachers']; ?>														
				<table style="width: 20px;  overflow: auto;" class="tableLayout">
				<?php if (isset($_REQUEST['noofteachers'])) {?>
					<tr>
						<th><strong>Name</strong></th>
						<th><strong>Designation</strong></th>
						<th><strong>Full/Part time</strong></th>
						<th><strong>Gender</strong></th>
						<th><strong>Age</strong></th>
						<th><strong>Qualifications</strong></th>
						<th><strong>Teacher Training
						(B.Ed,M.Ed,TTC)</strong></th>
						<th><strong>Years of Exp.</strong></th>
						<th><strong>Years in Current School</strong></th>
						<th><strong>Class Sections Taught(PP,P,S)</strong></th>
						<th><strong>Subject(s) taught</strong></th>
						<th><strong>Subject Specific(Y/N)</strong></th>
						<th><strong>Monthly Salary(Rs.)</strong></th>
                        <th><strong>Year</strong></th>						
					</tr>
					<?php  $sele=$_REQUEST['noofteachers']; for($row=0; $row < $sele; $row++) { ?>
					<tr>
						<th><input name="teacher[<?php echo $row; ?>][0]" value=""type="text"  maxlength="50" style="width:70px;" /></th>
						<th><input id="teacher5" name="teacher[<?php echo $row; ?>][12]" type="text"  maxlength="50" style="width:70px;"/></th>
						<th><select id="teacher<?php echo $row; ?>[1]" name="teacher[<?php echo $row; ?>][1]" style="width:80px;" >
						<option>Select</option>
						<option>Full time</option>
						<option>Part time</option>
						</select>
						</th>
						<th>
						<select id="teacher2" name="teacher[<?php echo $row; ?>][2]"  class="auto-style7" style="width:80px;">
						<option>Select</option>
						<option>Male</option>
						<option>Female</option>
						</select>
						</th>
						<th><input id="teacher6" name="teacher[<?php echo $row; ?>][3]" value="" type="text"  maxlength="2" onBlur="return validate_numeric('#teacher6')" style="width:70px;"  /></th>
						<th>
						<select id="teacher4" name="teacher[<?php echo $row; ?>][4]" style="width:80px;" >
						<option>Select</option>
						<option>Graduate</option>
						<option>HSC</option>
						<option>SSC</option>
						<option>PG</option>
						</select>
						</th>
						<th>
						<select id="teacher5" name="teacher[<?php echo $row; ?>][5]" style="width:80px;" >
						<option>Select</option>
						<option>B.Ed</option>
						<option>M.Ed</option>
						<option>TTC</option>
						<option>Others</option>
						<option>None</option>
						</select>
						</th>
						<th ><input id="teacher7" name="teacher[<?php echo $row; ?>][6]" value="" type="text"  onBlur="return validate_numeric('#teacher7');" maxlength="2" style="width:70px;"/></th>
						<th>
						<input id="teacher8" name="teacher[<?php echo $row; ?>][7]" value="" type="text" onBlur="return validate_numeric('#teacher8');" style="width:70px;" />
						</th>

						<th style="width: 102px" >
						<select id="teacher9" name="teacher[<?php echo $row; ?>][8]"style="width:80px;" >
						<option>Select</option>
						<option>PP</option>
						<option>P</option>
						<option>S</option>
						</select>
						</th>
						<th><input id="teacher10" name="teacher[<?php echo $row; ?>][9]" type="text" maxlength="2" style="width:70px;" /></th>
						<th >
						<select id="teacher11" name="teacher[<?php echo $row; ?>][10]" style="width:70px;" >
						<option>Select</option>
						<option>YES</option>
						<option>NO</option>
						</select>
						</th>
						<th >
						<input id="teacher12" name="teacher[<?php echo $row; ?>][11]" value="" type="text"  maxlength="6" onBlur="return validate_numeric('#teacher12');" style="width:70px;"/>
						</th>
						<th >
                        <select id="teacher14" name="teacher[<?php echo $row; ?>][13]" style="width:70px;" >
						<option>Select</option>
						<?php for($i=1980;$i<=date("Y");$i++){ ?>
						<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
						<?php }?>
						</select>
						</th>
						</tr>			
						</td>
						<?php } ?>
						<tr>
						<td colspan="13" align="right"><input class="btnbg addform" id = "teacher" name="Submit1" type="submit" value="submit" style="width:70px;"  /> </td>
						<span id="error" style = "display:none;color:red;" > Only Numeric Values are Allowed </span> 
						<span id ="errmark" style = "display:none;color:red;" > All Red mark field is required </span>
						</tr> 
						<?php } ?>
						</table>
						</td>
					</tr>

					<td  style="width: 137%" align="center">
					<div><span id="error" style = "display:none;color:red;" > Only Numeric Values are Allowed </span> <span id ="errmark" style = "display:none;color:red;" > All Red mark field is required </span></div>
					</td>

					</tr>
				</table>				 
<?php// echo $this->pagination->create_links(); ?>
			</form>										  

		</div>

	</div> <!--#mainWrapper-->


</li>
<li class="content" style="display:none">
	<div id="teacherDetails" style="margin-left: -1px; overflow: auto;" >
	<table style="width: 20px; height: 193px;">
	<tr>
	<td >

	<!--<div id = "addnewteach" style = "display:none;"> 
	<form method="post" action = "/admin/teacher/?info=<?php echo $info ; ?>">
	<table>
	<tr>
	<td >No of&nbsp; Teachers </td>
	<td colspan="2">
	<select name="note">
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>

	</select>
	<input name="Submit2" type="submit" value="submit" />
	</td>
	</tr>

	</table>
	</form>-->
	</div>
		<table style="width: 100%" class="tableLayout">

		<tr>
			<th><strong>Name</strong></th>
			<th><strong>Designation</strong></th>
			<th><strong>Full time /Part time</strong></th>
			<th><strong>Gender</strong></th>
			<th><strong>Age</strong></th>
			<th><strong>Qualifications</strong></th>
			<th><strong>Teacher Training
			(B.Ed,M.Ed,TTC)</strong></th>
			<th><strong>Years of Teaching Exp.</strong></th>
			<th><strong>Years in Cuurent School</strong></th>
			<th><strong>Class Sections 
			Taught(PP,P,S)</strong></th>
			<th><strong>Subject(s) taught</strong></th>
			<th><strong>Subject Specific(Y/N)</strong></th>
			<th><strong>Monthly Salary(Rs.)</strong></th>
			<th><strong>Year</strong></th>
			<th><strong>Action</strong></th>
		</tr>
		<?php if (isset($arr)) {
		//echo "<pre>";
		//echo count($arr['getvalues']);
		//print_r($arr);
		for($row=0;$row<count($arr);$row++){ 
		?>

		<form name = "" method ="POST" action ="/admin/edit_teacher/edit/?info=<?php echo $info ;?>">
		<tr>
			<th><input type = "text" value ="<?php echo $arr[$row]['teacher_name']; ?>" name = "teacher[teacher_name]" style="width:70px;"></th>
			<th><input type = "text" value= "<?php echo $arr[$row]['designation'] ; ?>" name = "teacher[designation]" style="width:70px;"></th>
			<th>
			<select  name="teacher[fulltime_parttime]" style="width:70px;">
			<option value = "Select" <?php if($arr[$row]['fulltime_parttime'] == "Select") echo "selected"; ?> >Select</option>
			<option value = "Full time" <?php if($arr[$row]['fulltime_parttime'] == "Full time") echo "selected"; ?>>Full time</option>
			<option value = "Part time"<?php if($arr[$row]['fulltime_parttime'] == "Part time") echo "selected"; ?> >Part time</option>
			</select>
			</th>
			<th>
			<select name = "teacher[gender]"  style="width:80px;" >
			<option value = "Select" <?php if($arr[$row]['gender'] == "Select") echo "selected"; ?> >Select</option>
			<option value = "Male" <?php if($arr[$row]['gender'] == "Male") echo "selected"; ?> >Male</option>
			<option value = "Female" <?php if($arr[$row]['gender'] == "Female") echo "selected"; ?> >Female</option>
			</select> 
			</th>
			<th><input type = "text" value= "<?php echo $arr[$row]['age'] ; ?>" name = "teacher[age]" style="width:70px;"></th>
			<th>
			<select name = "teacher[qualification]" style="width:80px;">
			<option value = "Select" <?php if($arr[$row]['qualification'] == "Select") echo "selected"; ?> >Select</option>
			<option value = "Graduate" <?php if($arr[$row]['qualification'] == "Graduate") echo "selected"; ?> >Graduate</option>
			<option value = "HSC" <?php if($arr[$row]['qualification'] == "HSC") echo "selected"; ?> >HSC</option>
			<option value = "SSC" <?php if($arr[$row]['qualification'] == "SSC") echo "selected"; ?> >SSC</option>
			<option value = "PG" <?php if($arr[$row]['qualification'] == "PG") echo "selected"; ?> >PG</option>
			</select>
			</th>
			<th>
			<select name = "teacher[teacher_training]" style="width:80px;">
			<option value = "Select" <?php if($arr[$row]['teacher_training'] == "Select") echo "selected"; ?> >Select</option>
			<option value = "B.Ed" <?php if($arr[$row]['teacher_training'] == "B.Ed") echo "selected"; ?> >B.Ed</option>
			<option value = "M.Ed" <?php if($arr[$row]['teacher_training'] == "M.Ed") echo "selected"; ?> >M.Ed</option>
			<option value = "TTC" <?php if($arr[$row]['teacher_training'] == "TTC") echo "selected"; ?> >TTC</option>
			</select>
			</th>
			<th><input id="teacher<?php echo $row; ?>" type = "text" value= "<?php echo $arr[$row]['teaching_exp_years']; ?>" name = "teacher[teaching_exp_year]" onblur="return validat_numeric('#teacher<?php echo $row; ?>');" style="width:70px;" ></th>
			<th><input type = "text" value= "<?php echo $arr[$row]['years_in_current_school'] ; ?>" name = "teacher[years_in_current_school]" style="width:70px;"></th>
			<th>
			<select name = "teacher[class_segment_taught]" style="width:80px;">
			<option value = "Select" <?php if($arr[$row]['class_segment_taught'] == "Select") echo "selected"; ?> >Select</option>
			<option value = "PP" <?php if($arr[$row]['class_segment_taught'] == "PP") echo "selected"; ?> >PP</option>
			<option value = "PP" <?php if($arr[$row]['class_segment_taught'] == "P") echo "selected"; ?> >P</option>
			<option value = "S" <?php if($arr[$row]['class_segment_taught'] == "S") echo "selected"; ?> >S</option>
			</select>
			</th>
			<th><input type = "text" value= "<?php echo $arr[$row]['subject_taught']; ?>" name = "teacher[subject_taught]" style="width:70px;"></th>
			<th>
			<select name = "teacher[specific_subject]" style="width:80px;">
			<option value = "Select" <?php if($arr[$row]['specific_subject'] == "Select") echo "selected"; ?> >Select</option>
			<option value = "YES" <?php if($arr[$row]['specific_subject'] == "YES") echo "selected"; ?> >YES</option>
			<option value = "NO" <?php if($arr[$row]['specific_subject'] == "NO") echo "selected"; ?> >NO</option>
			</select>
			</th>
			<th><input type = "text" value= "<?php echo $arr[$row]['monthly_salary'];  ?>" name = "teacher[monthly_salary]" style="width:70px;"></th>
			<th >
                        <select  name="teacher[year]" style="width:70px;" >
						<option value="Select"<?php if($arr[$row]['year']=='Select') echo "Selected"; ?>>Select</option>
						<?php for($i=1980;$i<=date("Y");$i++){ ?>
						<option value="<?php echo $i; ?>"<?php if($arr[$row]['year']== "$i" ) echo "Selected"; ?>><?php echo $i; ?></option>
						<?php }?>
						</select>
						</th>
			<th>
			<input type = "hidden" value= "<?php echo $arr[$row]['teacher_id'] ; ?>" name = "teacher[teacher_id]" style="width:70px;">
			<input type = "submit" value ="Save" class="btnbg addform" />
			</th>
		</tr>
		</form>
		<?php }
		}?>
		</table>
	<?php //echo $this->pagination->create_links(); ?>
	</td>

	</tr>

	<!--<td  style="width: 118%" align="center">

	<!--input id = "teacher" name="Submit1" type="submit" value="submit" style="width: 92px" /

	<div><span id="error" style = "display:none;color:red;" > Only Numeric Values are Allowed </span> <span id ="errmark" style = "display:none;color:red;" > All Red mark field is required </span></div>
	</td>-->
	</tr>
	</table>
	</div>				 

</li>
</ul>
<!--<div style="float: right; margin-right: -20px;display:none" id="addnew" class="wrapper">
<div class="leftrow">
<a class="addbtn" href="javascript:void(0)">Add New Student</a>
</div>
</div>-->
</article>
</section>
</div>
</body>
</html>