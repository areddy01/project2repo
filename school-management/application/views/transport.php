<?php $this->load->view('main_header'); ?>
	
	<article>
		<ul id="homeAccordion">
				<li><a class="heading"href="#">
				<span class="ui-icon"></span>Infra</a></li>
				<li><a href="/admin/admissions/?info=<?php echo $info ;?>" >Admission</a></li>
				<li><a href="/attendance/form/?info=<?php echo $info ;?>">Attendance</a></li>
				<li><a href="/admin/schoolfee/?info=<?php echo $info ;?>">Fee</a></li>
				<li><a href="transport.html" class='active'>Transport</a></li>
				<li><a href="/admin/overdue/?info=<?php echo $info ;?>">Overdue</a></li>
				<li><a href="cost_detail.html">Cost</a></li>
				<li><a href="tenthDetails.html">Tenth</a></li>
				<li><a href="javascript:void(0)">Teacher</a></li>
				<li><a href="observation.html">Observations</a></li>
				<li><a href="teacher_survey.html">Survey</a></li>
				<li><a href="student_test.html">Test</a></li>
		</ul>
	</article>
	<article id="formDetail">
		
		
	<h2>Transport<span class="crdate">December 2012</span></h2>
<div id="transport">
  
   
  <table class="tableLayout">
    <thead>
      <tr>
        <th class="border0">&nbsp;</th>
     <th><strong>Transport fee</strong><br />(INR)</th>
     <th><strong>No. of students availing transport facility</strong></th>
     <th class="border0"><strong>Total Amount</strong><br />(INR)</th>
      </tr>
	  <tr><th class="noborder nobg"></th></tr>
    </thead>
 <tbody>
      <tr>
        <td class="classNo"><strong>Nursery</strong></td>
     <td><input type="text" value="0" name="" id="" /></td>
     <td><input type="text" value="0" name="" id="" /></td>
     <td><input type="text" value="0" name="" disabled="disabled" id="" /></td>
      </tr>
   <tr>
        <td class="classNo"><strong>LKG</strong></td>
     <td><input type="text" value="0" name="" id="" /></td>
     <td><input type="text" value="0" name="" id="" /></td>
     <td><input type="text" value="0" name="" disabled="disabled" id="" /></td>
      </tr>
   <tr>
        <td class="classNo"><strong>UKG</strong></td>
     <td><input type="text" value="0" name="" id="" /></td>
     <td><input type="text" value="0" name="" id="" /></td>
     <td><input type="text" value="0" name="" disabled="disabled" id="" /></td>
      </tr>
   <tr>
        <td class="classNo"><strong>Class 1</strong></td>
     <td><input type="text" value="0" name="" id="" /></td>
     <td><input type="text" value="0" name="" id="" /></td>
     <td><input type="text" value="0" name="" disabled="disabled" id="" /></td>
      </tr>
   <tr>
        <td class="classNo"><strong>Class 2</strong></td>
     <td><input type="text" value="0" name="" id="" /></td>
     <td><input type="text" value="0" name="" id="" /></td>
     <td><input type="text" value="0" name="" disabled="disabled" id="" /></td>
      </tr>
   <tr>
        <td class="classNo"><strong>Class 3</strong></td>
     <td><input type="text" value="0" name="" id="" /></td>
     <td><input type="text" value="0" name="" id="" /></td>
     <td><input type="text" value="0" name="" disabled="disabled" id="" /></td>
      </tr>
   <tr>
        <td class="classNo"><strong>Class 4</strong></td>
     <td><input type="text" value="0" name="" id="" /></td>
     <td><input type="text" value="0" name="" id="" /></td>
     <td><input type="text" value="0" name="" disabled="disabled" id="" /></td>
      </tr>
   <tr>
        <td class="classNo"><strong>Class 5</strong></td>
     <td><input type="text" value="0" name="" id="" /></td>
     <td><input type="text" value="0" name="" id="" /></td>
     <td><input type="text" value="0" name="" disabled="disabled" id="" /></td>
      </tr>
   <tr>
        <td class="classNo"><strong>Class 6</strong></td>
     <td><input type="text" value="0" name="" id="" /></td>
     <td><input type="text" value="0" name="" id="" /></td>
     <td><input type="text" value="0" name="" disabled="disabled" id="" /></td>
      </tr>
   <tr>
        <td class="classNo"><strong>Class 7</strong></td>
     <td><input type="text" value="2" name="" id="" /></td>
     <td><input type="text" value="0" name="" id="" /></td>
     <td><input type="text" value="0" name="" disabled="disabled" id="" /></td>
      </tr>
   <tr>
        <td class="classNo"><strong>Class 8</strong></td>
     <td><input type="text" value="0" name="" id="" /></td>
     <td><input type="text" value="0" name="" id="" /></td>
     <td><input type="text" value="0" name="" disabled="disabled" id="" /></td>
      </tr>
   <tr>
        <td class="classNo"><strong>Class 9</strong></td>
     <td><input type="text" value="0" name="" id="" /></td>
     <td><input type="text" value="0" name="" id="" /></td>
     <td><input type="text" value="0" name="" disabled="disabled" id="" /></td>
      </tr>
   <tr>
        <td class="classNo"><strong>Class 10</strong></td>
     <td><input type="text" value="1" name="" id="" /></td>
     <td><input type="text" value="1" name="" id="" /></td>
     <td><input type="text" value="12" name="" disabled="disabled" id="" /></td>
      </tr>
   <tr>
        <td colspan=2>&nbsp;</td>
     
     <td ><strong>Total Income</strong></td>
     <td><input type="text" value="12" disabled="disabled" id="" name="" /></td>
      </tr>
	  <tr><td colspan=4><p><strong>Note:</strong> Leave blank if the school doesnt have transport facility. In case school provides transport, but it doesnt have breakup of students using transport facility by classes.</p></td></tr>
	  <tr><td colspan=4><input type="submit" value="Submit" class="btnbg addform" /></td></tr>
    </tbody>
  </table>


</div>
 </article>
	
</section>
</div>
</body>
</html>