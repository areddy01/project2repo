<?php
Class Infra_model extends CI_Model
{
	function __construct(){
	//$this->load->helper('url');	
	}
/* Model for insert and update the data for Infra Form 

Author : Nishant Sharma */

  function general($school){
	  $recsetclear = $this->db->query("SELECT profile_id FROM `school_profile`  WHERE school_code = '".$school['school_code']."'");
	  $validate =($recsetclear->result_array());
	   $j = 0;	
		for($i=1; $i<=count($_REQUEST['school_facility']);$i++){ 
		$school_facility = array('facility_sub_cat_value'=>$_REQUEST['school_facility'][$j],
							'update_user' =>'',
							'update_date'=>'');
		if(count($validate) != 0){
		$datavalidate = $this->db->query("SELECT facility_sub_cat_value FROM school_facility WHERE facility_sub_cat_id = '".$_REQUEST['school_sub_cat_id'][$j]."' AND school_code ='".$school['school_code']."'");
		$data =($datavalidate->result_array());
		
		if (count($data) != 0){
		$condition = array('facility_sub_cat_id' => $_REQUEST['school_sub_cat_id'][$j], 'a.school_code' => $school['school_code']);
		$this->db->where($condition);
		$this->db->update('school_facility as a', $school_facility); 
		}
		else{
			$school_facility_insert = array('school_code'=>$school['school_code'],
		'facility_cat_id'=>$_REQUEST['school_cat_id'][$j],
		'facility_sub_cat_id'=>$_REQUEST['school_sub_cat_id'][$j],
		'facility_sub_cat_value'=>$_REQUEST['school_facility'][$j],		
		'update_user' =>'',
		'update_date'=>'');
		$this->db->insert('school_facility', $school_facility_insert); 
	  }
		}
	 $j++;

	   }
	   $assesment_field =array('school_code' => $school['school_code'],
		    'academic_year'=>'',
			'assessment_date'=>$_REQUEST['assessment']['assessment_date'], 
			'assessment_term_type'=>'',
			'school_assessed_by'=> $_REQUEST['assessment']['school_assessed_by'],
			'no_of_section' =>	'',
			'school_assessed_again_same_year' =>$_REQUEST['assessment']['school_assessed_again_same_year'],
			'assessment_type_if_re_assessed'=> $_REQUEST['assessment']['assessment_type_if_re_assessed'],
			'aps_Average'=>	'',
			'update_user'=> '',	
			'update_date'=> $_REQUEST['assessment']['assessment_date']);

	  if(count($validate) != 0){
		$condition = array('school_code' => $school['school_code']);
	    $this->db->where($condition);
		$this->db->update('assessment ', $assesment_field);
		$condition = array('school_code' => $school['school_code']);
	    $this->db->where($condition);
		$this->db->update('school_profile' , $_REQUEST['school_profile']);
	  }
		else{
		$condition = array('school_code' => $school['school_code']);
		$this->db->insert('assessment', $assesment_field);
		$this->db->insert('school_profile' , $_REQUEST['school_profile']);
		
		}


	  /*else{
		
	  }*/
	 	//$setvalues = $this->db->query("SELECT facility_sub_cat_value FROM `school_facility` WHERE school_code = '".$school['school_code']."'");
			//$formarray =($setvalues->result_array()); 
			
			$setvalues = $this->db->query("SELECT ref_facility_category.facility_cat_name,ref_facility_sub_category.facility_sub_cat_type_field,ref_facility_sub_category.facility_sub_cat_name,school_facility.facility_sub_cat_value,ref_facility_sub_category.facility_cat_id,ref_facility_sub_category.facility_sub_cat_id,facility_sub_cat_type FROM ref_facility_sub_category  LEFT JOIN school_facility ON school_facility.facility_sub_cat_id= ref_facility_sub_category.facility_sub_cat_id AND school_facility.school_code ='".$school['school_code']."'
LEFT JOIN ref_facility_category ON ref_facility_sub_category.facility_cat_id = ref_facility_category.facility_cat_id ORDER BY ref_facility_category.facility_cat_id	");
			$formarray =($setvalues->result_array());
			return $formarray;

  }
/* display the data from data base 
Author :Nishant Sharma*/
function display_form($school){
	$validate =$this->db->query("SELECT * FROM school_facility WHERE school_code ='".$school['school_code']."'");
	//$getdata['assessment'] = $this->db->query("select * from assessment where school_code = '".$school['school_code']."'");
	$validate =($validate->result_array());
	$setvalues = $this->db->query("SELECT facility_sub_cat_value, facility_cat_id, facility_sub_cat_id FROM `school_facility` WHERE school_code = '".$school['school_code']."'");

			$setvalues = $this->db->query("SELECT ref_facility_category.facility_cat_name,ref_facility_sub_category.facility_sub_cat_type_field,ref_facility_sub_category.facility_sub_cat_name,school_facility.facility_sub_cat_value,ref_facility_sub_category.facility_cat_id,ref_facility_sub_category.facility_sub_cat_id,facility_sub_cat_type FROM ref_facility_sub_category  LEFT JOIN school_facility ON school_facility.facility_sub_cat_id= ref_facility_sub_category.facility_sub_cat_id AND school_facility.school_code ='".$school['school_code']."'
LEFT JOIN ref_facility_category ON ref_facility_sub_category.facility_cat_id = ref_facility_category.facility_cat_id ORDER BY ref_facility_category.facility_cat_id");
			$formarray =($setvalues->result_array());
			//$formarray2 = array_merge($formarray,$getdata);
			return $formarray;
}
 
 
}
?>
