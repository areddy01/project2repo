<?php $this->load->view('main_header'); ?>

	<form id="formDetail" method="post" action=""/tenth/input/?info=<?php echo $info; ?>"">
	<h2>Tenth Details</h2>
<div id="tenthDetails">
  
   
  <table class="tableLayout" width="50px">
    <thead>
      <tr>
        <th><strong>Indicators</strong></td>
		<th class='border0'><strong><?php echo "$school_name"; ?><br /></strong></td>
      </tr>
	</thead>
	<tbody>
      <tr>
        <td  class="classNo">Number of students enrolled in the
        class X</td>
     <td  class="auto-style1"><input id="tenth0"  name="tenth[nos_class_ten]" type="text" style="width: 100px" value = "<?php if(isset($nos_class_ten)) echo $nos_class_ten; ?>" onkeyup="Javascript: trimalpha('#tenth0');" /></td>
      </tr>
   <tr>
        <td  class="classNo">No. of students in first divison
        (above 6 GPA)</td>
     <td  class="auto-style1"><input id="tenth1" name="tenth[nos_first_div_6gpa]" type="text"  style="width: 100px" value = "<?php if(isset($nos_first_div_6gpa)) echo $nos_first_div_6gpa ; ?>" onkeyup="Javascript: trimalpha('#tenth1');" /></td>
      </tr>
   <tr>
        <td  class="classNo">No. of students in second division(above 5 GPA)</td>
     <td  class="auto-style1"><input id="tenth2" name="tenth[nos_sec_div_5gpa]" type="text"  style="width: 100px" value = "<?php if(isset($nos_sec_div_5gpa)) echo $nos_sec_div_5gpa ; ?>" onkeyup="Javascript: trimalpha('#tenth2');" /></td>
      </tr>
   <tr>
        <td  class="classNo">No. of students in third division(above 4 GPA)</td>
     <td  class="auto-style1"><input id="tenth3" name="tenth[nos_third_div_4gpa]" type="text"  style="width: 100px" value = "<?php if(isset($nos_third_div_4gpa))
	  echo $nos_third_div_4gpa ; ?>" onkeyup="Javascript: trimalpha('#tenth3');" /></td>
      </tr>
   <tr>
        <td  class="classNo">No. of students whofailed (below 3 GPA)</td>
     <td  class="auto-style1">
	 <input id="tenth4" name="tenth[nos_failed_below_3gpa]"  type="text"  style="width: 100px" value = "<?php if(isset($nos_failed_below_3gpa)) echo $nos_failed_below_3gpa; ?>" onkeyup="Javascript: trimalpha('#tenth4');" /></td>
      </tr>
   <tr>
        <td></td>
      </tr>
   <tr>
        <td align="right" colspan="2">
          
       <div>
            <span style="display:none;color:red;" id="error">Only Numeric Values are
            Allowed</span> <span style="display:none;color:red;" id="errmark">All Red
            mark field is required</span>
          </div>
        </td>
      </tr>
   <tr>
        <td colspan="4"><input type="submit" class="btnbg addform" value="Submit" id=""
        name="" /></td>
      </tr>
    </tbody>
  </table>



</div>
 </article>
	
</section>
</div>
</body>
</html>