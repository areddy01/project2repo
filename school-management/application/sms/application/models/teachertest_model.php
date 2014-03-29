<?php
Class Teachertest_model extends CI_Model
{
	function __construct(){
	//$this->load->helper('url');	
	}
/* Model for insert and update the data for Infra Form 

Author : Nishant Sharma */


  function general($school){
  error_reporting(E_ALL ^ E_NOTICE);
	$value =1; 
    for($row= 0 ; $row < count($_REQUEST['Teachertest']);$row++){
	for($increment= 0 ; $increment < count($_REQUEST['questionid']);$increment++){
		$data = array('assessment_id'=>$school['assessment_id'], 
			'school_code'=>$school['school_code'] ,
			'question_id'=>$_REQUEST['questionid'][$increment] , 
			'teacher_name'=>$_REQUEST['teachername'][$row],
			'class_category' =>$_REQUEST['teacher'][$row], 
			'qualification'=>$_REQUEST['teacher1'][$row],
			'roll_no'=>$value,
			'response'=>$_REQUEST['Teachertest'][$value][$increment],
			'test_cat_name'=>$_REQUEST['requesttest']
			);

	
		$this->db->insert('teacher_test',  $data);
	}
	$value++;
	}
  }

 function update_query($school){
  $idvalue =0;
  $value =1;
	for($row= 0 ; $row < count($_REQUEST['Teachertest']);$row++){
	for($increment= 0 ; $increment < count($_REQUEST['questionid']);$increment++){
	$data = array('assessment_id'=>$school['assessment_id'], 
			'school_code'=>$school['school_code'] ,
			'question_id'=>$_REQUEST['questionid'][$increment] , 
			'teacher_name'=>$_REQUEST['teachername'][$row],
			'class_category' =>$_REQUEST['teacher'][$row], 
			'qualification'=>$_REQUEST['teacher1'][$row],
			'roll_no'=>$value,
			'response'=>$_REQUEST['Teachertest'][$value][$increment],
			'test_cat_name'=>$_REQUEST['requesttest']
			);

		$condition = array('teacher_test_id' => $_REQUEST['teacher_test_id'][$idvalue]);
		$this->db->where($condition);
		$this->db->update('teacher_test',  $data);
	$idvalue++;
	
	}
$value++;	
	}

 }

/* display the data from data base 
Author :Nishant Sharma*/
function display_form($school){
	$setvalues = $this->db->query("SELECT  ref_test_sub_category.test_sub_cat_id, ref_test_sub_category.test_sub_cat_name, ref_test_sub_category.test_sub_cat_type, ref_test_sub_category.test_sub_cat_value FROM `ref_test_sub_category` INNER JOIN `ref_test_category` ON ref_test_sub_category.test_cat_id = ref_test_category.test_id and ref_test_category.test_cat_name ='".$_REQUEST['requesttest']."'");
	$formarray1['setvalue'] =($setvalues->result_array());
	$formarray= $formarray1;
	$updatevalue = $this->db->query("SELECT  * FROM `teacher_test` WHERE test_cat_name 	 ='".$_REQUEST['requesttest']."' AND school_code = '".$school['school_code']."'");
	$formarray2['getvalue'] =($updatevalue->result_array());
	if(count($formarray2['getvalue'] != 0)){
	$formarray =  array_merge($formarray1,$formarray2);
	}
	
	return $formarray;
}

function drop_down()
	{
		$data = $this->db->query("SELECT * FROM `ref_test_category` WHERE test_cat_type = 'teacher'");
		$formarray = ($data->result_array());
		return $formarray;
	}

}
?>
