<?php
Class Otherfee_model extends CI_Model
{
	function __construct(){
	//$this->load->helper('url');	
	}
/* Model for insert and update the data for Infra Form 

Author : Nishant Sharma */

  function general($school){
 
  		
	for($increment= 0 ; $increment < count($_REQUEST['other_fees']);$increment++){

	//count($_REQUEST['other_fees_values']);
	//exit;
	//for($incrementnext = 0 ; $incrementnext < count($_REQUEST['other_fees_values'][$increment]); $incrementnext++){
	foreach($_REQUEST['other_fees_values'][$increment] as $val=>$key){
		$data = array('assessment_id'=>$school['assessment_id'], 
			'school_code'=>$school['school_code'] , 
			'fee_id' => $_REQUEST['other_fees'][$val]['fee_id'],
			'class_id' => $_REQUEST['other_fees'][$increment]['class_id'],
			'fee_amount' =>$_REQUEST['other_fees_values'][$increment][$val]['fee_amount'], 
			'quantity' =>$_REQUEST['other_fees_values'][$increment][$val]['quantity'],
			'margin_books'=>$_REQUEST['margin_books'],
			'margin_etc'=>$_REQUEST['margin_etc'],
			'other_fee_category'=>'other_fee');
	
			$recsetclear = $this->db->query("SELECT * FROM `other_fees` a ,`assessment` b  WHERE a.school_code = '".$data['school_code']."' AND a.class_id =".$data['class_id']." and a.fee_id=".$data['fee_id']." AND b.assessment_id = a.assessment_id  AND b.assessment_status =1");
		
		
		
		$validate =($recsetclear->result_array());
		
		
		if(count($validate)==0){	
		$this->db->insert('other_fees',  $data);
		}
		else{
		$ID =$validate[0]['other_fee_id'];
		$condition = array('other_fee_id' =>$ID);
		
		$this->db->where($condition);
		$this->db->update('other_fees',  $data);
		}
	} 		
	}
	return true;
  }
/* display the data from data base 
Author :Nishant Sharma*/
function display_form($school){
	
	
	$setvalues = $this->db->query("SELECT a.fee_id,a.fee_amount,a.quantity,a.margin_books,a.margin_etc FROM `other_fees` a ,`assessment` b  WHERE a.school_code = '".$school['school_code']."' AND b.assessment_id = a.assessment_id  AND b.assessment_status =1");
	$formarrayd['getvalue'] =($setvalues->result_array());
	//echo "<pre>";
	//print_r($formarrayd);
	$getvalue = $this->db->query("SELECT ref_class_name.class_name, ref_class_name.class_id from `ref_class_name`  ");
	$formarray['class_name'] = ($getvalue->result_array());
	$getvalue1= $this->db->query("SELECT fee_id,fee_name,fee_category from ref_fee where fee_category='other_fee' ");
	$formarray1['fee_name'] = ($getvalue1->result_array());
	$formarray2 = array_merge($formarray,$formarray1,$formarrayd);
	return $formarray2;
//	$formarray= array_merge($formarray1,$formarray2);

	
}
}
?>
