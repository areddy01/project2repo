<?php
Class transportfee_model extends CI_Model
{
	function __construct(){
	//$this->load->helper('url');	
	}
/* Model for insert and update the data for Infra Form 

Author : Nishant Sharma */

  function general($school){
  

  echo count($_REQUEST['transport_fees']);
  		
	for($increment= 0 ; $increment < count($_REQUEST['transport_fees']);$increment++){

	echo count($_REQUEST['transport_fees_values'][$increment]);
	//for($incrementnext= 0 ; $incrementnext < count($_REQUEST['transport_fees_values'][$increment]); $incrementnext++){
	 
	 //echo "<pre>";print_r($_REQUEST['transport_fees_values']);
	 //exit;
		foreach($_REQUEST['transport_fees_values'][$increment] as $val=>$key){
           		
		$data = array('assessment_id'=>$school['assessment_id'], 
			'school_code'=>$school['school_code'] , 
			'fee_id' => $_REQUEST['transport_fees'][$val]['fee_id'],
			'class_id' => $_REQUEST['transport_fees'][$increment]['class_id'],
			'fee_amount' =>$_REQUEST['transport_fees_values'][$increment][$val]['fee_amount'], 
			'quantity' =>$_REQUEST['transport_fees_values'][$increment][$val]['quantity'],
			//'tot_amt'=>$_REQUEST['tot_amt'][$increment],
			//'total_income'=>$_REQUEST['tot_income'],
			'transport_fee_category'=>'transport_fee',
			'update_user'=>'admin');
//echo "<pre>";
		//print_r($data);
		
		
		$recsetclear = $this->db->query("SELECT * FROM `transport_fees` a ,`assessment` b  WHERE a.school_code = '".$data['school_code']."' AND a.fee_id =".$data['fee_id']." AND a.class_id =".$data['class_id']." AND b.assessment_id = a.assessment_id  AND b.assessment_status =1");
		$validate =($recsetclear->result_array());
	
		if(count($validate)==0){	
		$this->db->insert('transport_fees',$data);
		}
		else{
		$ID =$validate[0]['transport_fee_id'];
		$condition = array('transport_fee_id' =>$ID);
		
		$this->db->where($condition);
		$this->db->update('transport_fees',$data);
		}
		
	} 		
	}
	return true;
  }
/* display the data from data base 
Author :Nishant Sharma*/
function display_form($school){
	
	$setvalues = $this->db->query("SELECT a.fee_id,a.fee_amount,a.quantity FROM `transport_fees` a ,`assessment` b  WHERE a.school_code = '".$school['school_code']."' AND b.assessment_id = a.assessment_id  AND b.assessment_status =1");
	$formarrayd['getvalue'] =($setvalues->result_array());

	
	$getvalue = $this->db->query("SELECT ref_class_name.class_name, ref_class_name.class_id from `ref_class_name`  ");
	$formarray['class_name'] = ($getvalue->result_array());
	$getvalue1= $this->db->query("SELECT fee_id,fee_name,fee_category from ref_fee where fee_category='transport_fee' ");
	$formarray1['fee_name'] = ($getvalue1->result_array());
	//print_r($formarray1);
	//exit;
	$formarray2 = array_merge($formarray,$formarray1,$formarrayd);
	return $formarray2;
//	$formarray= array_merge($formarray1,$formarray2);

	
}
}
?>
