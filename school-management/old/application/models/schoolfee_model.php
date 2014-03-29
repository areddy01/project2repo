<?php
Class Schoolfee_model extends CI_Model
{
	function __construct(){
	//$this->load->helper('url');	
	}
/* Model for insert and update the data for Infra Form 

Author : Nishant Sharma */

  function general($school){
  error_reporting(E_ALL^E_NOTICE);

	for($increment= 0 ; $increment < count($_REQUEST['school_fees']);$increment++){
		
	for($incrementnext= 0 ; $incrementnext < count($_REQUEST['school_fees_value'][$increment]); $incrementnext++){
		if ($_REQUEST['school_fees'][$incrementnext]['fee_term_type'] !='Select'){
		$data = array('assessment_id'=>$school['assessment_id'], 
			'fee_id'=>$_REQUEST['school_fees'][$incrementnext]['fee_id'] ,
			'class_id'=>$_REQUEST['school_fees'][$increment]['class_id'],
			'school_code'=>$school['school_code'] , 
			'fee_term_type'=>$_REQUEST['school_fees'][$incrementnext]['fee_term_type'],
			'fee_amount' =>$_REQUEST['school_fees_value'][$increment][$incrementnext], 
			'quantity' =>'',
			'total_amount'=>'',
			'school_fee_category'=>'school_fee',
			'update_user'=>'admin');
		
		$recsetclear = $this->db->query("SELECT * FROM `school_fees` a ,`assessment` b  WHERE a.school_code = '".$data['school_code']."' AND a.fee_id =".$data['fee_id']." AND a.class_id =".$data['class_id']." AND b.assessment_id = a.assessment_id  AND b.assessment_status =1");
		$validate =($recsetclear->result_array());
	
		if(count($validate)==0){	
		$this->db->insert('school_fees',  $data);
		
		}
		else{
		$ID =$validate[0]['school_fee_id'];
		$condition = array('school_fee_id' =>$ID);
		
		$this->db->where($condition);
		$this->db->update('school_fees',  $data);
		
		}
	} 	
	}
	}
	return true;
  }
/* display the data from data base 
Author :Nishant Sharma*/
function display_form($school){

	$setvalues = $this->db->query("SELECT ref_class_name.class_name, ref_class_name.class_id, ref_fee.fee_id, ref_fee.fee_name, ref_fee.fee_category FROM `ref_fee` RIGHT JOIN `ref_class_name` ON ref_fee.fee_id = ref_class_name.class_id AND fee_category = 'school_fee' ");
	$formarray1 =($setvalues->result_array());
	$getvalue = $this->db->query("SELECT a.fee_amount, a.fee_term_type,a.fee_id,a.class_id FROM school_fees a, assessment b WHERE a.school_fee_category = 'school_fee' AND a.school_code = '".$school['school_code']."' AND a.assessment_id = b.assessment_id AND b.assessment_status= 1");
	$formarray2['getvalue'] =($getvalue->result_array());
	$formarray= array_merge($formarray1,$formarray2);

	return $formarray;
}
}
?>
