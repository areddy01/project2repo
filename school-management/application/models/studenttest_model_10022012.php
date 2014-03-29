<?php
Class Teachertest_model extends CI_Model
{
	function __construct(){
	//$this->load->helper('url');	
	}
/* Model for insert and update the data for Infra Form 

Author : Nishant Sharma */


  function general($school){
	for($increment= 0 ; $increment < count($_REQUEST['test_sub_cat_id']);$increment++){
		$data = array('assessment_id'=>$school['assessment_id'], 
			'test_cat_id '=>$_REQUEST['test_cat_id'][$increment],
			'school_code'=>$school['school_code'] ,
			'response'=>$_REQUEST['response'][0] , 
			'survey_type'=>'parents',
			'test_sub_cat_id' =>$_REQUEST['test_sub_cat_id'][$increment], 
			'parent_response'=>$_REQUEST['parent_response'][$increment]
			);
	
		$recsetclear = $this->db->query("SELECT parent_survey_id FROM `parent_survey` a ,`assessment` b  WHERE a.school_code = '".$data['school_code']."' AND b.assessment_id = a.assessment_id  AND b.assessment_status =1 AND survey_sub_cat_id  = '".$data['survey_sub_cat_id']."' AND response = '".$data['response']."'");
		$validate =($recsetclear->result_array());
		if(count($validate)==0){	
		$this->db->insert('parent_survey',  $data);
		}
		else{
		$ID =$validate[0]['parent_survey_id'];
		$condition = array('parent_survey_id ' =>$ID);
		$this->db->where($condition);
		$this->db->update('parent_survey',  $data);
		}
	//} 		
	}
  }
/* display the data from data base 
Author :Nishant Sharma*/
function display_form($school){
	$dropdownvalue = $this->db->query("SELECT * FROM `ref_test_category` where test_cat_type='student'");
	$formarray1['setvalues']['dropdown'] =($dropdownvalue->result_array());
	if($school['action']== "action"){
	$setvalues = $this->db->query("SELECT  ref_test_sub_category.test_sub_cat_id, ref_test_sub_category.test_sub_cat_name, ref_test_sub_category.test_sub_cat_type, ref_test_sub_category.test_sub_cat_value FROM `ref_test_sub_category` INNER JOIN `ref_test_category` ON ref_test_sub_category.test_cat_id = ref_test_category.test_id and ref_test_category.test_cat_name ='".$_REQUEST['requesttest']."'");
	$formarray2 =($setvalues->result_array());
	$formarray1 =  array_merge($formarray1,$formarray2);
	return $formarray1;
	}
	else
	{
	return $formarray1;
	}
}
}
?>
