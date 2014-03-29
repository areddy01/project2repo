<?php 
Class Teacher_model extends CI_Model
{
	function __construct(){
		
	}

function general($school){
    	
    //print_r($_REQUEST['teacher']);
    
	  $recsetclear = $this->db->query("SELECT teacher_id FROM `teacher`  WHERE school_code = '".$school['school_code']."'");
	  $validate =($recsetclear->result_array());
	  
	  for ($row=0;$row<count($_REQUEST['teacher']);$row++)
	  {
	   //echo $_REQUEST['teacher'][$row][0];
	   
	   $data = array('teacher_name'=>$_REQUEST['teacher'][$row][0], 
			'fulltime_parttime'=>$_REQUEST['teacher'][$row][1],
			'gender'=>$_REQUEST['teacher'][$row][2],
			'age'=>$_REQUEST['teacher'][$row][3],
			'qualification'=>$_REQUEST['teacher'][$row][4],
			'teacher_training'=>$_REQUEST['teacher'][$row][5],
			'teaching_exp_years'=>$_REQUEST['teacher'][$row][6],
			'years_in_current_school'=>$_REQUEST['teacher'][$row][7],
			'class_segment_taught'=>$_REQUEST['teacher'][$row][8],
			'subject_taught'=>$_REQUEST['teacher'][$row][9],
			'specific_subject'=>$_REQUEST['teacher'][$row][10],
			'monthly_salary'=>$_REQUEST['teacher'][$row][11],
			'designation'=>$_REQUEST['teacher'][$row][12],
			'school_code'=>$school['school_code'],
			'assessment_id'=>$school['assessment_id']);
				


		$this->db->insert('teacher', $data); 
	  
		 
	 }
		 
		$recsetclear = $this->db->query("SELECT * FROM teacher  WHERE school_code = '".$school['school_code']."' ");
    	$formarray =($recsetclear->result_array());
	   return $formarray;
  }
/* display the data from data base 
Author :Nishant Sharma*/

function display_form($school){
	//echo "SELECT * FROM tenth a, assessment b WHERE a.school_code ='".$_REQUEST['school_code']."' AND a.assessment_id  = b.assessment_id";
	$setarray['getvalues'] = $this->db->query("Select a.* from teacher a,assessment b where a.school_code='".$school['school_code']."' and b.assessment_id='".$school['assessment_id']."'");
	$formarray2=($setarray['getvalues']->result_array());
	$validate =$this->db->query("SELECT a.* FROM teacher a");
	$formarray1 =($validate->result_array());
	$formarray=array_merge($formarray1,$formarray2);
	return $formarray;
}
 
 
}
?>
