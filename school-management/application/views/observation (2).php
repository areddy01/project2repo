<?php $this->load->view('main_header');?>
<script type="text/javascript">
  
function multiplication(validateval1,validateval2,validateval3){
$('#errmark').hide();
$('#error').hide(); 

  var data1=$(validateval1).val();
  var data2=$(validateval2).val();
  var data3 = $(validateval3).val();
  var adding =  parseInt(data1) * parseInt(data2) ;
	

	var len=data2.length;
    var c=0;
    var age=0;
    var flag=0;
    for(var i=0;i<len;i++)
    {
 
      c = data1.charAt(i).charCodeAt(0);
	  d = data2.charAt(i).charCodeAt(0);
			if((c <48 || c >57) && (d <48 || d >57) ) 
		    {
        	$('#error').show();
			
	        $(validateval2).addClass("focuson");
        	return false;
      		}
     		 else
      		{
			
       		$(validateval2).removeClass("focuson");
			$('#error').hide();
            
      		}
    		}

	$(validateval3).val(adding);
		
	if ($(validateval3).val() == 'NaN') 
	{
	$(validateval1).addClass("focuson");
	$("#error").show();
	return false;
	}
	 else
  	{
 		$(validateval1).removeClass("focuson");
		$('#error').hide();
	}	 	
	return true;
    }
  
  </script>
  
	<article id="formDetail">
		
		
	   
 <h2>Observation<span class="crdate">December 2012</span></h2>
<div id="observation">
         <form method="get" action="/admin/observations/?info=<?php echo $info;?>" enctype="multipart/form-data">
   
		<div class="selection">
          <div>
            <strong>Class Taught</strong>
			<input type="text" name="" id="" />
          </div>
       
          <div>
            <strong>Subject Taught</strong>
			<input type="text" name="" id="" />
          </div>
       
          <div>
            <strong>Indicators </strong>
			<input type="text" name="" id="" value='T1' disabled="disabled" />
          </div>
		  <div>
            <strong>Number of Class Observed</strong>
			<input type="text" name="" id="" />
          </div>
       </div>
       
       

  <table class="tableLayout">
     <thead>
      <tr>
        <!-- Row 1 -->

        <th colspan="3" class="border0">Teacher-Student Interaction</th><!-- Col 1 -->
      </tr>
</thead>
	<tbody>
      <tr>
        <!-- Row 1 -->

        <td class="sno">1</td>

        <td>Maintains discipline in the class</td>

        <td><select  name="" id="">
          <option selected="selected" value="Yes">
            Yes
          </option>

          <option value="No">
            No
          </option>

          <option value="NA">
            NA
          </option>

          <option value="Ineffective">
            Ineffective
          </option>
        </select></td><!-- Col 1 -->
      </tr>

      <tr>
        <!-- Row 1 -->

        <td class="sno">2</td>

        <td>Friendly/patient yet firm with students with positive gestures</td>

        <td><select  name="" id="">
          <option selected="selected" value="Yes">
            Yes
          </option>

          <option value="No">
            No
          </option>

          <option value="NA">
            NA
          </option>

          <option value="Ineffective">
            Ineffective
          </option>
        </select></td><!-- Col 1 -->
      </tr>

      <tr>
        <!-- Row 1 -->

        <td class="sno">3</td>

        <td>Maintains eye contact with the class</td>

        <td><select  name="" id="">
          <option selected="selected" value="Yes">
            Yes
          </option>

          <option value="No">
            No
          </option>

          <option value="NA">
            NA
          </option>

          <option value="Ineffective">
            Ineffective
          </option>
        </select></td><!-- Col 1 -->
      </tr>

      <tr>
        <!-- Row 1 -->

        <td class="sno">4</td>

        <td>Responds to questions raised by students</td>

        <td><select  name="" id="">
          <option selected="selected" value="Yes">
            Yes
          </option>

          <option value="No">
            No
          </option>

          <option value="NA">
            NA
          </option>

          <option value="Ineffective">
            Ineffective
          </option>
        </select></td><!-- Col 1 -->
      </tr>

      <tr>
        <!-- Row 1 -->

        <td class="sno">5</td>

        <td>Walks around the classroom</td>

        <td><select  name="" id="">
          <option selected="selected" value="Yes">
            Yes
          </option>

          <option value="No">
            No
          </option>

          <option value="NA">
            NA
          </option>

          <option value="Ineffective">
            Ineffective
          </option>
        </select></td><!-- Col 1 -->
      </tr>

      <tr>
        <!-- Row 1 -->

        <td class="sno">6</td>

        <td>Maintains eye contact with the class</td>

        <td><select  name="" id="">
          <option selected="selected" value="Yes">
            Yes
          </option>

          <option value="No">
            No
          </option>

          <option value="NA">
            NA
          </option>

          <option value="Ineffective">
            Ineffective
          </option>
        </select></td><!-- Col 1 -->
      </tr>

      <tr>
        <!-- Row 1 -->

        <td class="sno">7</td>

        <td>students are attentive</td>

        <td><select  name="" id="">
          <option selected="selected" value="Yes">
            Yes
          </option>

          <option value="No">
            No
          </option>

          <option value="NA">
            NA
          </option>

          <option value="Ineffective">
            Ineffective
          </option>
        </select></td><!-- Col 1 -->
      </tr>

      <tr>
        <!-- Row 1 -->

        <td class="sno">8</td>

        <td>Maintains eye contact with the class</td>

        <td><select  name="" id="">
          <option selected="selected" value="Yes">
            Yes
          </option>

          <option value="No">
            No
          </option>

          <option value="NA">
            NA
          </option>

          <option value="Ineffective">
            Ineffective
          </option>
        </select></td><!-- Col 1 -->
      </tr>

      <tr>
        <!-- Row 1 -->

        <td class="sno">9</td>

        <td>Maintains eye contact with the class</td>

        <td><select  name="" id="">
          <option selected="selected" value="Yes">
            Yes
          </option>

          <option value="No">
            No
          </option>

          <option value="NA">
            NA
          </option>

          <option value="Ineffective">
            Ineffective
          </option>
        </select></td><!-- Col 1 -->
      </tr>

      <tr>
        <!-- Row 1 -->

        <td class="sno">10</td>

        <td>Addresses students by name</td>

        <td><select  name="" id="">
          <option selected="selected" value="Yes">
            Yes
          </option>

          <option value="No">
            No
          </option>

          <option value="NA">
            NA
          </option>

          <option value="Ineffective">
            Ineffective
          </option>
        </select></td><!-- Col 1 -->
      </tr>

      </tbody>
		<thead>
      <tr>
        <!-- Row 1 -->

        <th colspan="3" class="border0">Teacher-Learning Methodology</th><!-- Col 1 -->
      </tr>
</thead>
	<tbody>
      <tr>
        <!-- Row 1 -->

        <td class="sno">11</td>

        <td>Teacher built in time for students to discuss concepts</td>

        <td><select  name="" id="">
          <option selected="selected" value="Yes">
            Yes
          </option>

          <option value="No">
            No
          </option>

          <option value="NA">
            NA
          </option>

          <option value="Ineffective">
            Ineffective
          </option>
        </select></td><!-- Col 1 -->
      </tr>

      <tr>
        <!-- Row 1 -->

        <td class="sno">12</td>

        <td>uses Visual aids</td>

        <td><select  name="" id="">
          <option selected="selected" value="Yes">
            Yes
          </option>

          <option value="No">
            No
          </option>

          <option value="NA">
            NA
          </option>

          <option value="Ineffective">
            Ineffective
          </option>
        </select></td><!-- Col 1 -->
      </tr>

      <tr>
        <!-- Row 1 -->

        <td class="sno">13</td>

        <td>Students ask relevant content related questions</td>

        <td><select  name="" id="">
          <option selected="selected" value="Yes">
            Yes
          </option>

          <option value="No">
            No
          </option>

          <option value="NA">
            NA
          </option>

          <option value="Ineffective">
            Ineffective
          </option>
        </select></td><!-- Col 1 -->
      </tr>

      <tr>
        <!-- Row 1 -->

        <td class="sno">14</td>

        <td>Focuses on student understanding</td>

        <td><select  name="" id="">
          <option selected="selected" value="Yes">
            Yes
          </option>

          <option value="No">
            No
          </option>

          <option value="NA">
            NA
          </option>

          <option value="Ineffective">
            Ineffective
          </option>
        </select></td><!-- Col 1 -->
      </tr>

      <tr>
        <!-- Row 1 -->

        <td class="sno">15</td>

        <td>Presents a relaxed stance after asking the question</td>

        <td><select  name="" id="">
          <option selected="selected" value="Yes">
            Yes
          </option>

          <option value="No">
            No
          </option>

          <option value="NA">
            NA
          </option>

          <option value="Ineffective">
            Ineffective
          </option>
        </select></td><!-- Col 1 -->
      </tr>

      <tr>
        <!-- Row 1 -->

        <td class="sno">16</td>

        <td>Connects the lesson to students environment</td>

        <td><select  name="" id="">
          <option selected="selected" value="Yes">
            Yes
          </option>

          <option value="No">
            No
          </option>

          <option value="NA">
            NA
          </option>

          <option value="Ineffective">
            Ineffective
          </option>
        </select></td><!-- Col 1 -->
      </tr>

      <tr>
        <!-- Row 1 -->

        <td class="sno">17</td>

        <td>Gave instructions in simple steps</td>

        <td><select  name="" id="">
          <option selected="selected" value="Yes">
            Yes
          </option>

          <option value="No">
            No
          </option>

          <option value="NA">
            NA
          </option>

          <option value="Ineffective">
            Ineffective
          </option>
        </select></td><!-- Col 1 -->
      </tr>

      <tr>
        <!-- Row 1 -->

        <td class="sno">18</td>

        <td>Uses blackboard interactively</td>

        <td><select  name="" id="">
          <option selected="selected" value="Yes">
            Yes
          </option>

          <option value="No">
            No
          </option>

          <option value="NA">
            NA
          </option>

          <option value="Ineffective">
            Ineffective
          </option>
        </select></td><!-- Col 1 -->
      </tr>

      <tr>
        <!-- Row 1 -->

        <td class="sno">19</td>

        <td>Encourages interaction among students to accomplish the task</td>

        <td><select  name="" id="">
          <option selected="selected" value="Yes">
            Yes
          </option>

          <option value="No">
            No
          </option>

          <option value="NA">
            NA
          </option>

          <option value="Ineffective">
            Ineffective
          </option>
        </select></td><!-- Col 1 -->
      </tr>

      <tr>
        <!-- Row 1 -->

        <td class="sno">20</td>

        <td>Periodically clears doubts of the students</td>

        <td><select  name="" id="">
          <option selected="selected" value="Yes">
            Yes
          </option>

          <option value="No">
            No
          </option>

          <option value="NA">
            NA
          </option>

          <option value="Ineffective">
            Ineffective
          </option>
        </select></td><!-- Col 1 -->
      </tr>

      <tr>
        <!-- Row 1 -->

        <td class="sno">21</td>

        <td>Students easily understood the instructions/tasks provided</td>

        <td><select  name="" id="">
          <option selected="selected" value="Yes">
            Yes
          </option>

          <option value="No">
            No
          </option>

          <option value="NA">
            NA
          </option>

          <option value="Ineffective">
            Ineffective
          </option>
        </select></td><!-- Col 1 -->
      </tr>

      <tr>
        <!-- Row 1 -->

        <td class="sno">22</td>

        <td>Presents factually correct content</td>

        <td><select  name="" id="">
          <option selected="selected" value="Yes">
            Yes
          </option>

          <option value="No">
            No
          </option>

          <option value="NA">
            NA
          </option>

          <option value="Ineffective">
            Ineffective
          </option>
        </select></td><!-- Col 1 -->
      </tr>

      <tr>
        <!-- Row 1 -->

        <td class="sno">23</td>

        <td>Uses blackboard in an organized fashion</td>

        <td><select  name="" id="">
          <option selected="selected" value="Yes">
            Yes
          </option>

          <option value="No">
            No
          </option>

          <option value="NA">
            NA
          </option>

          <option value="Ineffective">
            Ineffective
          </option>
        </select></td><!-- Col 1 -->
      </tr>

      </tbody>
		<thead>
      <tr>
        <!-- Row 1 -->

        <th colspan="3" class="border0">Assessment Technique</th><!-- Col 1 -->
      </tr>
	</thead>
	<tbody>
      <tr>
        <!-- Row 1 -->

        <td class="sno">24</td>

        <td>Accepts all student responses including the 'wrong ones' with encouraging feedback</td>

        <td><select  name="" id="">
          <option selected="selected" value="Yes">
            Yes
          </option>

          <option value="No">
            No
          </option>

          <option value="NA">
            NA
          </option>

          <option value="Ineffective">
            Ineffective
          </option>
        </select></td><!-- Col 1 -->
      </tr>

      <tr>
        <!-- Row 1 -->

        <td class="sno">25</td>

        <td>Revises the main points of the lesson</td>

        <td><select  name="" id="">
          <option selected="selected" value="Yes">
            Yes
          </option>

          <option value="No">
            No
          </option>

          <option value="NA">
            NA
          </option>

          <option value="Ineffective">
            Ineffective
          </option>
        </select></td><!-- Col 1 -->
      </tr>

      <tr>
        <!-- Row 1 -->

        <td class="sno">26</td>

        <td>Addresses questions to individual students as well as the group at large</td>

        <td><select  name="" id="">
          <option>
            Yes
          </option>

          <option>
            No
          </option>

          <option>
            NA
          </option>

          <option>
            Ineffective
          </option>
        </select></td><!-- Col 1 -->
      </tr>

      <tr>
        <!-- Row 1 -->

        <td class="sno">27</td>

        <td>Uses questioning as a tool to improve student understanding</td>

        <td><select  name="" id="">
          <option>
            Yes
          </option>

          <option>
            No
          </option>

          <option>
            NA
          </option>

          <option>
            Ineffective
          </option>
        </select></td><!-- Col 1 -->
      </tr>

      <tr>
        <!-- Row 1 -->

        <td class="sno">28</td>

        <td>Students participate actively when asked questions</td>

        <td><select  name="" id="">
          <option>
            Yes
          </option>

          <option>
            No
          </option>

          <option>
            NA
          </option>

          <option>
            Ineffective
          </option>
        </select></td><!-- Col 1 -->
      </tr>


   
      <tr>
        <td colspan="4" align="center"> <input type="submit" class="btnbg addform" value="Submit" /> </td>
      </tr>
    </tbody>
  </table>
 </form>
</div>
 </article>