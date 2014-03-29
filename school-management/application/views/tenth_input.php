<?php $this->load->view('main_header'); ?>


	
	<h2>Tenth Details</h2>
<div id="tenthDetails">
  <form id="formTenth" method="post" action="/tenth/input/?info=<?php echo $info;?>">
   
  <table class="tableLayout" width="750px">
    <thead>
      <tr>
        <th><strong>Indicators</strong></td>
		<th class='border0'><strong><?php echo $school_name; ?><br /></strong></td>
      </tr>
	</thead>
	<tbody>
      <tr>
        <td  class="classNo">Number of students enrolled in the class X</td>
     <td  class="auto-style1">
	 <input id="NoStuEnrInClassX"  name="tenth[nos_class_ten]" type="text" style="width: 100px" value ="<?php if(isset($nos_class_ten)) echo $nos_class_ten; ?>" />
	 <td id="Nullerror" style="color:red;"></td>
	 <!--<td id="errorNum" style="color:red;"></td>-->
	 <td id="Calerror" style="color:#00CC00; font-size:14px"></td>
	 </td>
      </tr>
   <tr>
        <td  class="classNo">No. of students in first divison(above 6 GPA)</td>
     <td  class="auto-style1">
	 <input id="NoStuInFirDiv" name="tenth[nos_first_div_6gpa]" type="text"  style="width: 100px" value = "<?php if(isset($nos_first_div_6gpa)) echo $nos_first_div_6gpa ; ?>" />
	 <td id="firdiverror" style="color:red;"></td>
	 <td id="firdivcalerror" style="color:#00CC00; font-size:12px"></td>
	 </td>
      </tr>
   <tr>
        <td  class="classNo">No. of students in second division(above 5 GPA)</td>
     <td  class="auto-style1">
	 <input id="NoStuInSecDiv" name="tenth[nos_sec_div_5gpa]" type="text"  style="width: 100px" value = "<?php if(isset($nos_sec_div_5gpa)) echo $nos_sec_div_5gpa ; ?>" />
	 <td id="secdiverror" style="color:red;"></td>
	 <td id="secdivcalerror" style="color:#00CC00; font-size:12px"></td>
	 </td>
      </tr>
   <tr>
        <td  class="classNo">No. of students in third division(above 4 GPA)</td>
     <td  class="auto-style1">
	 <input id="NoStuInThiDiv" name="tenth[nos_third_div_4gpa]" type="text"  style="width: 100px" value = "<?php if(isset($nos_third_div_4gpa))echo $nos_third_div_4gpa ; ?>" />
	  <td id="Thidiverror" style="color:red;"></td>
	  <td id="Thidivcalerror" style="color:#00CC00; font-size:12px"></td>
	  </td>
      </tr>
   <tr>
        <td  class="classNo">No. of students whofailed (below 3 GPA)</td>
     <td  class="auto-style1">
<input id="NoStuFailed" name="tenth[nos_failed_below_3gpa]"  type="text"  style="width: 100px"  value = "<?php if(isset($nos_failed_below_3gpa)) echo $nos_failed_below_3gpa; ?>"/>
	 <td id="Stufailerror" style="color:red;"></td>
	 <td id="Stufailcalerror" style="color:#00CC00; font-size:12px"></td>
	 </td>
      </tr>
   <tr>
        <td></td>
      </tr>
   <tr>
        <td align="right" colspan="2">
          
       <div>
            <span style="display:none;color:red;" id="error">Only Numeric Values are Allowed</span> <span style="display:none;color:red;" id="errmark">
			All Red mark field is required</span>
          </div>
        </td>
      </tr>
   <tr>
        <td colspan="4"><input type="button" class="btnbg addform" value="Submit" id="" name="button" onclick="javascript: validate_tenth();" /></td>
      </tr>
    </tbody>
  </table>



</div>
 </form>
	
</section>
</div>
</body>
</html>

