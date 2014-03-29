<?php
Class Overdue_model extends CI_Model
{
	function __construct(){
	//$this->load->helper('url');	
	}
/* Model for insert and update the data for Overdue Form 

Author : Prasanth  */

  function general($school){

	for($increment= 0 ; $increment < count($school['overdue']);$increment++){ 
		$data =array("assessment_id" => $school['assessment_id'],
		"school_code"=> $school['school_code'],
		"no_of_students"=> $_REQUEST['overdue'][$increment][1],	 	
		"fee_overdue"=> $_REQUEST['overdue'][$increment][2],
		"class_id"=> $_REQUEST['overdue'][$increment][3]);		
		//print_r($data);
 	$recsetclear = $this->db->query("SELECT * FROM `overdue` WHERE school_code = '".$data['school_code']."' AND class_id ='".$data['class_id']."'");
 	
	$validate =($recsetclear->result_array());
	//print_r($validate);
		if(count($validate)==0){
		$this->db->insert('overdue',  $data);
		}
		else{
		$condition = array('school_code' => $data['school_code'],
		'class_id' => $data['class_id']);
		$this->db->where($condition);
		$this->db->update('overdue',  $data);
		}
		
	}

  }
/* display the data from data base 
Author : Prasanth*/
function display_form($school){
	 // print_r($_REQUEST);
	$recsetclear = $this->db->query("SELECT a.class_name, b.assessment_id,b.school_code,b.class_id ,b.no_of_students,b.fee_overdue FROM `ref_class_name` a, `overdue` b ,assessment c 
	WHERE b.school_code = '".$school['school_code']."' AND b.class_id = a.class_id and c.assessment_status =1 and b.assessment_id=c.assessment_id");
	$formarray =($recsetclear->result_array());
	if (count($formarray) == 0)
	{
	$setvalues = $this->db->query("SELECT class_name,class_id FROM `ref_class_name`");
	$formarray =($setvalues->result_array());
	}
	return $formarray;
}

/* display the data from data base for lookup table 
Author : Prasanth*/
function display_lookup(){
$setvalues = $this->db->query("SELECT * FROM `ref_class_name`");
$formarray =($setvalues->result_array());
return $formarray;
}
}
?>
