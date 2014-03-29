<?php
Class Parentsurvey_model extends CI_Model
{
	function __construct(){
	//$this->load->helper('url');	
	}
/* Model for insert and update the data for Infra Form 

Author : Nishant Sharma */


  function general($school){
	for($increment= 0 ; $increment < count($_REQUEST['survey_sub_cat_id']);$increment++){
		$data = array('assessment_id'=>$school['assessment_id'], 
			'survey_cat_id '=>$_REQUEST['survey_cat_id'][$increment],
			'school_code'=>$school['school_code'] ,
			'response'=>$_REQUEST['response'][0] , 
			'survey_type'=>'parents',
			'survey_sub_cat_id' =>$_REQUEST['survey_sub_cat_id'][$increment], 
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

	$setvalues = $this->db->query("SELECT ref_survey_sub_category.survey_sub_cat_id,ref_survey_category.survey_cat_type, ref_survey_category.survey_cat_id, ref_survey_sub_category.survey_sub_cat_name,ref_survey_sub_category.survey_sub_cat_type, ref_survey_sub_category.survey_sub_cat_value FROM `ref_survey_category` INNER JOIN `ref_survey_sub_category` ON ref_survey_category.survey_cat_id = ref_survey_sub_category.survey_cat_id and ref_survey_category.survey_cat_name='Parents' ORDER BY ref_survey_sub_category.survey_cat_id ");
	$formarray1['setvalues'] =($setvalues->result_array());
	if (isset($_REQUEST['response'][0])){
	if (($_REQUEST['response'][0] != null )){	
	$getvalue = $this->db->query("SELECT * FROM `parent_survey` a ,`assessment` b  WHERE a.school_code = '".$school['school_code']."' AND b.assessment_id = a.assessment_id  AND b.assessment_status =1 AND response ='".$_REQUEST['response'][0]."'");
	}
	}
	else
	{
	$getvalue = $this->db->query("SELECT * FROM `parent_survey` a ,`assessment` b  WHERE a.school_code = '".$school['school_code']."' AND b.assessment_id = a.assessment_id  AND b.assessment_status =1");
	}
	$formarray2['getvalue'] =($getvalue->result_array());
	
	$formarray= array_merge($formarray1,$formarray2);
	
	return $formarray;
}
}
?>
