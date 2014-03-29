<?php 
Class Teacher_model extends CI_Model
{
	function __construct(){
		if($this->session->userdata('logged_in')){
			$this->variable = $this->session->userdata('logged_in');
			}
		
	}

function general(){
   
	  $recsetclear = $this->db->query("SELECT teacher_id FROM `teacher`  WHERE school_code = '".$_REQUEST['school_code']."'");
	  $validate =($recsetclear->result_array());
	  
	  for ($row=0;$row<count($_REQUEST['teacher']);$row++)
	  { 
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
			'school_code'=>$_REQUEST['school_code'],
			'assessment_id'=>$_REQUEST['assessment_id']);
				
		$this->db->insert('teacher', $data); 
	  
		 
	 }
		 
		$recsetclear = $this->db->query("SELECT * FROM teacher  WHERE school_code = '".$_REQUEST['school_code']."' ");
    	$formarray =($recsetclear->result_array());
	   return $formarray;
  }

function update_teacher(){
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
		'update_user' =>$this->variable['username']);
		$condition = array('teacher_id' =>$_REQUEST['teacher']['teacher_id']);
		$this->db->where($condition);
		$this->db->update('teacher',  $fieldata);
}
 
}
?>
