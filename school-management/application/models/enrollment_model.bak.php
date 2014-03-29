<?php
Class Enrollment_model extends CI_Model
{
	function __construct(){
	//$this->load->helper('url');	
	}
/* Model for insert and update the data for Infra Form 

Author : Nishant Sharma */

  function general($school){
	for($increment= 0 ; $increment < count($_REQUEST['enrollment']);$increment++){ 
	 $data =array("assessment_id" => $school['assessment_id'],
		"school_code"=> $school['school_code'],
		"no_of_sections"=>$_REQUEST['enrollment'][$increment][1],	 	
		"total_enrollment_boys" =>$_REQUEST['enrollment'][$increment][2],		
		"total_enrollment_girls" =>	$_REQUEST['enrollment'][$increment][3],
		"total_new_admission_boys" =>$_REQUEST['enrollment'][$increment][4],
		"total_new_admissions_girls"=>$_REQUEST['enrollment'][$increment][5],
		"total_free_admissions_students"=>$_REQUEST['enrollment'][$increment][6],
		"class_id"=>$_REQUEST['enrollment'][$increment][7],
		"no_of_secsprevious"=>$_REQUEST['enrollment'][increment][8],
		"total_enrollment_boysprevious"=>$_REQUEST['enrollment'][increment][9],
		"total_enrollment_girlsprevious"=>$_REQUEST['enrollment'][increment][10],
		"no_of_sectionsprevious2"=>$_REQUEST['enrollemnt'][increment][11]);

		$recsetclear = $this->db->query("SELECT * FROM `enrollment` a,`assessment` b WHERE a.school_code = '".$data['school_code']."' AND a.class_id ='".$data['class_id']."' AND a.assessment_id=b.assessment_id");
		$validate =($recsetclear->result_array());
		if(count($validate)==0){
		$this->db->insert('enrollment',  $data);
		}
		else{
		$condition = array('school_code' => $data['school_code'],
		'class_id' => $data['class_id']);
		$this->db->where($condition);
		$this->db->update('enrollment',  $data);
		}
		
	}

  }
/* display the data from data base 
Author :Nishant Sharma*/
function display_form($school){
	

	$recsetclear = $this->db->query("SELECT a.class_name, b.assessment_id,
				b.school_code,
				b.academic_year,
				b.class_id ,
				b.no_of_sections,
				b.total_enrollment_boys, 
				b.total_enrollment_girls, 	
				b.total_new_admission_boys, 
				b.total_new_admissions_girls, 
				b.total_free_admissions_students FROM `ref_class_name` a, `enrollment` b, assessment c WHERE b.school_code = '".$school['school_code']."' AND b.class_id = a.class_id  AND c.assessment_status =1 AND b.assessment_id = c.assessment_id GROUP BY a.class_id " );
	$formarray =($recsetclear->result_array());
	if (count($formarray) == 0)
	{
	$setvalues = $this->db->query("SELECT class_name,class_id FROM `ref_class_name`");
	$formarray =($setvalues->result_array());
	}
	return $formarray;
}

/* display the data from data base for lookup table 
Author :Nishant Sharma*/
function display_lookup($school){
$setvalues = $this->db->query("SELECT * FROM `ref_class_name`");
$formarray =($setvalues->result_array());
return $formarray;
}
}
?>
