<?php
Class Teachersurvey_model extends CI_Model
{
	function __construct(){
	//$this->load->helper('url');	
	}
/* Model for insert and update the data for Infra Form 

Author : Nishant Sharma */


  function general($school){
	 // echo "<pre>";
	//print_r($_REQUEST['teacher_response']); //exit;
	  if (isset($_REQUEST['editvalue']))
	$cond = count($_REQUEST['teacher_response']);
	else
	$cond = count($_REQUEST['teacher_response'][0]);

	for($increment= 0 ; $increment < $cond;$increment++){
		if (isset($_REQUEST['editvalue'])){
		
		$data = array('assessment_id'=>$school['assessment_id'], 
			'survey_cat_id '=>$_REQUEST['survey_cat_id'][$increment],
			'school_code'=>$school['school_code'] ,
			'teacher_code_name'=>$_REQUEST['response'][0] , 
			'survey_type'=>'teacher',
			'survey_sub_cat_id' =>$_REQUEST['survey_sub_cat_id'][$increment], 
			'teacher_response'=>$_REQUEST['teacher_response'][$increment]
			);
		
	}
	else
		  {
			$data = array('assessment_id'=>$school['assessment_id'], 
			'survey_cat_id '=>$_REQUEST['survey_cat_id'][$increment],
			'school_code'=>$school['school_code'] ,
			'teacher_code_name'=>$_REQUEST['response'][0] , 
			'survey_type'=>'teacher',
			'survey_sub_cat_id' =>$_REQUEST['survey_sub_cat_id'][$increment], 
			'sl_response'=>$_REQUEST['teacher_response'][0][$increment],
			'teacher_response'=>$_REQUEST['teacher_response'][1][$increment]
			);

			//print_r($data);

		  }
		 
		$recsetclear = $this->db->query("SELECT teacher_survey_id FROM `teacher_survey` a ,`assessment` b  WHERE a.school_code = '".$data['school_code']."' AND b.assessment_id = a.assessment_id  AND b.assessment_status =1 AND survey_sub_cat_id  = '".$data['survey_sub_cat_id']."' AND teacher_code_name = '".$data['teacher_code_name']."'");
		$validate =($recsetclear->result_array());
		if(count($validate)==0){	
		$this->db->insert('teacher_survey',  $data);
		}
		else{
			
		$ID =$validate[0]['teacher_survey_id'];
		$condition = array('teacher_survey_id ' =>$ID);
		$this->db->where($condition);
		$this->db->update('teacher_survey',  $data);
		}
			
	}
  }
/* display the data from data base 
Author :Nishant Sharma*/
function display_form($school){
	$setvalues = $this->db->query("SELECT b.* , a.survey_cat_type FROM `ref_survey_sub_category` b, `ref_survey_category` a WHERE a.survey_cat_id = b.survey_cat_id AND a.survey_cat_name = 'teacher'");
	$formarray1['setvalues'] =($setvalues->result_array());

	if (isset($_REQUEST['getresponse'])){	
	$getvalue = $this->db->query("SELECT * FROM `teacher_survey` a ,`assessment` b  WHERE a.school_code = '".$school['school_code']."' AND b.assessment_id = a.assessment_id  AND b.assessment_status =1 AND teacher_code_name ='".$_REQUEST['response'][0]."'");
	}
	else
	{
	$getvalue = $this->db->query("SELECT teacher_code_name FROM `teacher_survey` a ,`assessment` b  WHERE a.school_code = '".$school['school_code']."' AND b.assessment_id = a.assessment_id  AND b.assessment_status =1 GROUP BY teacher_code_name ");
	}
	$formarray2['getvalue'] =($getvalue->result_array());
	
	$formarray= array_merge($formarray1,$formarray2);
	
	return $formarray;
}
function show_response(){



}
}
?>
