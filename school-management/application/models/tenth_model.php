	<?php
Class Tenth_model extends CI_Model
{
	function __construct(){
	//$this->load->helper('url');	
	}
/* Model for insert and update the data for Infra Form 

Author : Nishant Sharma */

   function general($school){
  //print_r($school);
   	  $recsetclear = $this->db->query("SELECT id FROM `tenth`  WHERE school_code = '".$school['school_code']."'");
	  $validate =($recsetclear->result_array());
		//print_r($validate); print_r($_REQUEST['tenth_cat_id']);
		
		for($increment= 0 ; $increment <= count($validate);$increment++){              
       
        $data = array(
		'school_code'=>$school['school_code'],
		'assessment_id'=>$school['assessment_id'],
		'nos_class_ten'=>$_REQUEST['tenth']['nos_class_ten'], 
			'nos_first_div_6gpa'=>$_REQUEST['tenth']['nos_first_div_6gpa'],
			'nos_sec_div_5gpa'=>$_REQUEST['tenth']['nos_sec_div_5gpa'],
			'nos_third_div_4gpa'=>$_REQUEST['tenth']['nos_third_div_4gpa'],
			'nos_failed_below_3gpa'=>$_REQUEST['tenth']['nos_failed_below_3gpa']);
		
			//print_r($data); exit;
	  if(count($validate) != 0){
		$condition = array('school_code' => $school['school_code']);
	   $this->db->where($condition);
	   $this->db->update('tenth', $data); 
	   }
	  else{ 
		$this->db->insert('tenth', $data); 
	  }		
		$recsetclear = $this->db->query("SELECT * FROM tenth  WHERE school_code = '".$school['school_code']."' ");
    	$formarray =($recsetclear->result_array());
	   return $formarray;
  }
  }
/* display the data from data base 
Author :Nishant Sharma*/

function display_form($school){

	$validate =$this->db->query("SELECT * FROM tenth a, assessment b WHERE a.school_code ='".$school['school_code']."' AND a.assessment_id  = b.assessment_id");
	
	$formarray =($validate->result_array());
	if(count($formarray) != 0 ){
	$formarray = $formarray[0] ;
	}
	return $formarray;
}
}
?>
