<?php
Class Enrollment_model extends CI_Model
{
	function __construct(){
	//$this->load->helper('url');	
	}
/* Model for insert and update the data for Infra Form 

Author : Nishant Sharma */

  function general($school){
  /*error_reporting(E_ALL ^ E_NOTICE);*/

	for($increment= 0 ; $increment < count($_REQUEST['enrollment']);$increment++){ 
	 $date=$_REQUEST['date'];
	 
	 if($date==date("Y")){
	 $data =array("assessment_id" => $school['assessment_id'],
		"school_code"=> $school['school_code'],
		"no_of_sections"=>$_REQUEST['enrollment'][$increment][1],
		"class_id"=>$_REQUEST['enrollment'][$increment]['class_id'],	 	
		"total_enrollment_boys" =>$_REQUEST['enrollment'][$increment][2],		
		"total_enrollment_girls" =>	$_REQUEST['enrollment'][$increment][3],
		"total_new_admission_boys" =>$_REQUEST['enrollment'][$increment][4],
		"total_new_admissions_girls"=>$_REQUEST['enrollment'][$increment][5],
		"total_free_admissions_students"=>$_REQUEST['enrollment'][$increment][6],
		"total_enrolments_students"=>$_REQUEST['enrollment22'][$increment],
		"insert_current_date"=>date("Y"),
		"update_current_date"=>date("Y"),
		"updated_by"=>$school['user_roll']
		);
		}
	if($date==date("Y")-1){
	    $data=array("assessment_id" => $school['assessment_id'],
		"school_code"=> $school['school_code'],
	    "class_id"=>$_REQUEST['enrollment'][$increment]['class_id'],
		"no_of_sectionsprevious"=>$_REQUEST['enrollment'][$increment][7],
		"total_enrollment_boysprevious"=>$_REQUEST['enrollment'][$increment][8],
		"total_enrollment_girlsprevious"=>$_REQUEST['enrollment'][$increment][9],
		"insert_prev_date"=>date("Y")-1,
		"updated_by"=>$school['user_roll']
		);		
		
	}
    
   if($date==date("Y")-2){
       $data=array("assessment_id" => $school['assessment_id'],
		"school_code"=> $school['school_code'],
	   "class_id"=>$_REQUEST['enrollment'][$increment]['class_id'],
		"no_of_sectionsprevious2"=>$_REQUEST['enrollment'][$increment][10],
		"total_enrollments"=>$_REQUEST['enrollment'][$increment][11],
		"insert_last_prev_date"=>date("Y")-2,
		"updated_by"=>$school['user_roll']
		);
		}   
    
		$recsetclear = $this->db->query("SELECT * FROM `enrollment` a,`assessment` b WHERE a.school_code = '".$data['school_code']."' AND a.class_id ='".$data['class_id']."' AND a.assessment_id=b.assessment_id");
		$validate =($recsetclear->result_array());
		if(count($validate)==0){
		$this->db->insert('enrollment',  $data);
		}
		else{
		$condition = array('school_code' => $data['school_code'],'class_id' => $data['class_id']);
		$this->db->where($condition);
		$this->db->update('enrollment',  $data);
		}
		
	}
return true;
}
 
/* display the data from data base 
Author :Nishant Sharma*/
function display_form($school){
	$date=date("Y");
	$prev_date=date("Y")-1;
	$last_prev_date=date("Y")-2;

	$recsetclear1 = $this->db->query("SELECT a.class_name, b.assessment_id,
				b.school_code,
				b.academic_year,
				b.class_id ,
				b.no_of_sections,
				b.total_enrollment_boys, 
				b.total_enrollment_girls, 	
				b.total_new_admission_boys, 
				b.total_new_admissions_girls, 
				b.total_free_admissions_students,
				b.insert_current_date,
				b.update_current_date,
				b.updated_by
				FROM `ref_class_name` a, `enrollment` b, assessment c WHERE b.school_code = '".$school['school_code']."' AND b.insert_current_date='.$date.' AND b.class_id = a.class_id  AND c.assessment_status =1 AND b.assessment_id = c.assessment_id GROUP BY a.class_id " );
	$formarray1['current'] =($recsetclear1->result_array());
	
	
	
	$recsetclear21 = $this->db->query("SELECT a.class_name, b.assessment_id,
				b.school_code,
				b.academic_year,
				b.class_id,
				b.no_of_sectionsprevious,
				b.total_enrollment_boysprevious,
				b.total_enrollment_girlsprevious,
				b.insert_prev_date,
				b.updated_by
				FROM `ref_class_name` a, `enrollment` b, assessment c WHERE b.school_code = '".$school['school_code']."' AND b.insert_prev_date = '.$prev_date.' AND b.class_id = a.class_id  AND c.assessment_status =1 AND b.assessment_id = c.assessment_id GROUP BY a.class_id" );
	
	$formarray2['prev'] =($recsetclear21->result_array());
	
	
	
	if(count($formarray2['prev'])==0)
	{
	$recsetclear22 = $this->db->query("SELECT a.class_name, b.assessment_id,
				b.school_code,
				b.academic_year,
				b.class_id,
				b.no_of_sections,
				b.total_enrollment_boys, 
				b.total_enrollment_girls, 	
				b.total_new_admission_boys, 
				b.total_new_admissions_girls, 
				b.total_free_admissions_students,
				b.insert_current_date,
				b.update_current_date,
				b.updated_by
				FROM `ref_class_name` a, `enrollment` b, assessment c WHERE b.school_code = '".$school['school_code']."' AND b.insert_current_date='$prev_date' AND b.class_id = a.class_id  AND c.assessment_status =1 AND b.assessment_id = c.assessment_id GROUP BY a.class_id " );
	$formarray2['prev'] =($recsetclear22->result_array());
	}
	
	
	$recsetclear31 = $this->db->query("SELECT a.class_name, b.assessment_id,
				b.school_code,
				b.academic_year,
				b.class_id ,
				b.no_of_sectionsprevious2,
				b.total_enrollments,
				b.insert_last_prev_date,
				b.updated_by
				FROM `ref_class_name` a, `enrollment` b, assessment c WHERE b.school_code = '".$school['school_code']."'AND b.insert_last_prev_date='$last_prev_date' AND b.class_id = a.class_id  AND c.assessment_status =1 AND b.assessment_id = c.assessment_id GROUP BY a.class_id " );
	$formarray3['last_prev'] =($recsetclear31->result_array());
	
    if(count($formarray3['last_prev'])==0)
	{
	
	
	$recsetclear32 = $this->db->query("SELECT a.class_name, b.assessment_id,
				b.school_code,
				b.academic_year,
				b.class_id,
				b.no_of_sectionsprevious,
				b.total_enrollment_boysprevious,
				b.total_enrollment_girlsprevious,
				b.insert_prev_date,
				b.updated_by
				FROM `ref_class_name` a, `enrollment` b, assessment c WHERE b.school_code = '".$school['school_code']."' AND b.insert_prev_date='$last_prev_date' AND b.class_id = a.class_id  AND c.assessment_status =1 AND b.assessment_id = c.assessment_id GROUP BY a.class_id " );
	
	$formarray3['last_prev'] =($recsetclear32->result_array());
	}
	
	
	$setvalues = $this->db->query("SELECT class_name,class_id FROM `ref_class_name`");
	$formarray4['classname'] =($setvalues->result_array());
	$schooldate	= $this->db->query("SELECT * FROM school WHERE school_code ='".$school['school_code']."'");
	$formarray5 =($schooldate->result_array());
	$formarray= array_merge($formarray1,$formarray2,$formarray3,$formarray4,$formarray5);
	

	if (count($formarray) == 0)
	{
	$setvalues = $this->db->query("SELECT class_name,class_id FROM `ref_class_name`");
	$formarray =($setvalues->result_array());
	}

	return $formarray;
}

/* display the data from data base for lookup table 
Author :Nishant Sharma*/
function display_lookup(){
$setvalues = $this->db->query("SELECT * FROM `ref_class_name`");
$formarray =($setvalues->result_array());
return $formarray;
}
}
?>
