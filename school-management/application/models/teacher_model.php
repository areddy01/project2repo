<?php 
Class Teacher_model extends CI_Model
{
	function __construct(){
		if($this->session->userdata('logged_in')){
			$this->variable = $this->session->userdata('logged_in');
			}
		
	}

function general($school){
   
	  $recsetclear = $this->db->query("SELECT teacher_id FROM `teacher`  WHERE school_code = '".$school['school_code']."'");
	  $validate =($recsetclear->result_array());
	  
	  for ($row=0;$row<count($_REQUEST['teacher']);$row++)
	  { 
	  //echo $_REQUEST['teacher'][$row][13];
	  //echo "rerere22";
	  //echo $_REQUEST['teacher'][$row][2];
	 // echo "rerere";
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
			'year'=>$_REQUEST['teacher'][$row][13],
		    'update_user'=>$this->variable['username'],	
			'school_code'=>$school['school_code'],
			'assessment_id'=>$school['assessment_id']);
				
		$this->db->insert('teacher', $data); 
	  
		 
	 }
		 
		$recsetclear = $this->db->query("SELECT * FROM teacher  WHERE school_code = '".$school['school_code']."' ");
    	$formarray =($recsetclear->result_array());
	   return $formarray;
  }

function update_teacher(){
        echo $_REQUEST['teacher']['gender'];
		$fieldata = array('teacher_name' => $_REQUEST['teacher']['teacher_name'],
		'fulltime_parttime' => $_REQUEST['teacher']['fulltime_parttime'], 
		'gender' =>$_REQUEST['teacher']['gender'],
		'age' => $_REQUEST['teacher']['age'], 
		'qualification' => $_REQUEST['teacher']['qualification'], 
		'teacher_training' => $_REQUEST['teacher']['teacher_training'],
		'teaching_exp_years' => $_REQUEST['teacher']['teaching_exp_year'],
		'years_in_current_school' => $_REQUEST['teacher']['years_in_current_school'], 
		'class_segment_taught' => $_REQUEST['teacher']['class_segment_taught'],
		'subject_taught' => $_REQUEST['teacher']['subject_taught'],
		'specific_subject' => $_REQUEST['teacher']['specific_subject'], 
		'monthly_salary' => $_REQUEST['teacher']['monthly_salary'] ,
		'designation' => $_REQUEST['teacher']['designation'] ,
		'year' => $_REQUEST['teacher']['year'],
		'update_user' =>$this->variable['username']);
		$condition = array('teacher_id' => $_REQUEST['teacher']['teacher_id']);
		$this->db->where($condition);
		$this->db->update('teacher',$fieldata);
}
 

/*function display_form($school){
	echo "SELECT * FROM tenth a, assessment b WHERE a.school_code ='".$_REQUEST['school_code']."' AND a.assessment_id  = b.assessment_id";
	$setarray = $this->db->query("Select a.* from teacher a,assessment b where a.school_code='".$school['school_code']."' and b.assessment_id='".$school['assessment_id']."'");
	$formarray2['getvalues']=$setarray->result_array();
	$validate =$this->db->query("SELECT a.* FROM teacher a");
	$formarray1 =($validate->result_array());
   
   $currentdate = date("Y");
    $previousdate = date("Y")-1;

	$current=$this->db->query("select year from teacher");
	$formarray3['current']=$current->result_array();
	$currentnew=$this->db->query("select year from teacher where year='$currentdate'");
	$formarray3['currentnew']=$currentnew->result_array();
	$previous=$this->db->query("select year from teacher where year<='$previousdate'");
	$formarray3['previous']=$previous->result_array();
	$previousnew=$this->db->query("select year from teacher where year='$previousdate'");
	$formarray3['previousnew']=$previousnew->result_array(); 
	
	$formarray=array_merge($formarray2,$formarray3);

	return $formarray2;
}*/
 
function display_form($school){
	//echo "SELECT * FROM tenth a, assessment b WHERE a.school_code ='".$school['school_code']."' AND a.assessment_id  ='".$school['assessment_id']."'";
	$setarray['getvalues'] = $this->db->query("Select a.* from teacher a,assessment b where a.school_code='".$school['school_code']."' and b.assessment_id='".$school['assessment_id']."'");

	$formarray2=($setarray['getvalues']->result_array());
	//$validate =$this->db->query("SELECT a.* FROM teacher a");
	//$formarray1 =($validate->result_array());
	//$formarray=array_merge($formarray2);
	//echo "<pre>";
	//print_r($formarray2);
	return $formarray2;
}
 
}
?>
