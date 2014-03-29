<?php
Class Observation_model extends CI_Model
{
	function __construct(){
	//$this->load->helper('url');	
	}
/* Model for insert and update the data for Infra Form 

Author : Nishant Sharma */


  function general($school){
  
  
	for($increment= 0 ; $increment < count($_REQUEST['observ_sub_cat_id']);$increment++){
		$data = array('assessment_id'=>$school['assessment_id'], 
			'observ_cat_id '=>$_REQUEST['observ_cat_id'][$increment],
			'school_code'=>$school['school_code'] ,
			'response'=>$_REQUEST['response'][0] , 
			'observ_sub_cat_id' =>$_REQUEST['observ_sub_cat_id'][$increment], 
			'teacher_response'=>$_REQUEST['teacher_response0'][$increment],
			'Name'=>$_REQUEST['Name'],
	        'class_taught'=>$_REQUEST['class_taught'],
			'subject_taught'=>$_REQUEST['subject_taught']);
	
		
		$recsetclear = $this->db->query("SELECT observation_id FROM `observation` a ,`assessment` b  WHERE a.school_code = '".$data['school_code']."' AND b.assessment_id = a.assessment_id  AND b.assessment_status =1 AND observ_sub_cat_id  = '".$data['observ_sub_cat_id']."' AND response = '".$data['response']."'");
		$validate =($recsetclear->result_array());
		if(count($validate)==0){	
		$this->db->insert('observation',  $data);
		}
		else{
		$ID =$validate[0]['observation_id'];
		$condition = array('observation_id ' =>$ID);
		$this->db->where($condition);
		$this->db->update('observation',  $data);
		}
	 		
	}
	return true;
  }
/* display the data from data base 
Author :Nishant Sharma*/
function display_form($school){
	$setvalues = $this->db->query("SELECT ref_observ_sub_category.observ_sub_cat_id,ref_observ_category.observ_cat_name, ref_observ_category.observ_cat_id, ref_observ_sub_category.observ_sub_cat_name  FROM `ref_observ_category` INNER JOIN `ref_observ_sub_category` ON ref_observ_category.observ_cat_id = ref_observ_sub_category.observ_cat_id ORDER BY ref_observ_sub_category.observ_sub_cat_id ");
	$formarray1['setvalues'] =($setvalues->result_array());
	//$formarray2['getvalues'] =($getvalues->result_array());
	if (isset($_REQUEST['response'][0])){
	if (($_REQUEST['response'][0] != null )){	
	$getvalue = $this->db->query("SELECT * FROM `observation` a ,`assessment` b  WHERE a.school_code = '".$school['school_code']."' AND b.assessment_id = a.assessment_id  AND b.assessment_status =1 AND response ='".$_REQUEST['response'][0]."'");
	}
	
	else
	{
	$getvalue = $this->db->query("SELECT * FROM `observation` a ,`assessment` b  WHERE a.school_code = '".$school['school_code']."' AND b.assessment_id = a.assessment_id  AND b.assessment_status =1");
	}
	$formarray2['getvalue'] =($getvalue->result_array());
	
	$formarray= array_merge($formarray1,$formarray2);
	return $formarray;
}
}
}
?>
