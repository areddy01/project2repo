<?php
Class Expenses_model extends CI_Model
{
	function __construct(){
	//$this->load->helper('url');	
	}
/* Model for insert and update the data for Infra Form 

Author : Nishant Sharma */

  /* display the data from data base 
Author :Nishant Sharma*/
function display_form($school){
// $class5=$this->db->query("SELECT COUNT(expense_sub_cat_name) FROM ref_expense_sub_category where school_code='".$school['school_code']."'");
 
//$formarray1['class_name']=($class5->result_array());
//print_r($formarray1);
//exit;


 $class2=$this->db->query("SELECT expense_sub_cat_name FROM ref_expense_sub_category");
$formarray2['class_name']=($class2->result_array());
//echo count($formarray2['class_name']);
//exit;
 
    $class=$this->db->query("SELECT total FROM cost WHERE school_code='".$school['school_code']."'");
    $formarray3['cost']=($class->result_array());
 
 $class1=$this->db->query("SELECT total_enrollment_boys,total_enrollment_girls FROM enrollment WHERE school_code='".$school['school_code']."'");
 $formarray4['enrollment']=($class1->result_array());

  //print_r($formarray3);
  
	$formarray= array_merge($formarray3,$formarray4,$formarray2);
	//print_r($formarray);
	//echo "<br>";
	return $formarray;
}



}
?>
