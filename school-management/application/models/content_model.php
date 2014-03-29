<?php
Class Content_model extends CI_Model
{
	function __construct(){

	}
	function load_form(){	
	$recsetclear = $this->db->query("SELECT a.facility_cat_id , a.facility_sub_cat_id, b.facility_cat_name, c.facility_sub_cat_name,a.facility_sub_cat_value,c.facility_sub_cat_type,c.facility_sub_cat_type_field FROM `school_facility` a ,`ref_facility_category` b ,`ref_facility_sub_category` c WHERE b.facility_cat_id = c.facility_cat_id and a.facility_sub_cat_id = c.facility_sub_cat_id GROUP BY a.facility_sub_cat_id ORDER BY facility_cat_id");
	$formarray =($recsetclear->result_array());
	return $formarray;
	}
	
	function load_observ_form(){
	$recsetclear = $this->db->query("SELECT b.observ_cat_id , c.observ_sub_cat_id, b.observ_cat_name, c.observ_sub_cat_name FROM `ref_observ_category` b ,`ref_observ_sub_category` c WHERE  b.observ_cat_id = c.observ_cat_id GROUP BY c.observ_sub_cat_id ORDER BY b.observ_cat_id");
	$formarray =($recsetclear->result_array());
	return $formarray;

	}
	
	function load_survey_form(){
	$recsetclear = $this->db->query("select b.survey_cat_id,c.survey_sub_cat_id,b.survey_cat_name,c.survey_sub_cat_name from ref_survey_category b,ref_survey_sub_category c where b.survey_cat_id =c.survey_cat_id GROUP BY c.survey_sub_cat_id ORDER BY survey_cat_id");
	$formarray = ($recsetclear->result_array());
	return $formarray;
	}
	
	function load_expense_form(){
	$recsetclear = $this->db->query("select b.expense_cat_id,c.expense_sub_cat_id,b.expense_cat_name,c.expense_sub_cat_name from ref_expense_category b,ref_expense_sub_category c where b.expense_cat_id =c.expense_cat_id GROUP BY c.expense_sub_cat_id ORDER BY expense_cat_id");
	$formarray = ($recsetclear->result_array());
	return $formarray;
	}

	
	
	function load_fee_form(){
	$setvalues = $this->db->query("SELECT * FROM `ref_fee`");
	$formarray =($setvalues->result_array());
	return $formarray;

	}


   function submit_content(){
   
  // print_r($_REQUEST['formname1']);
	
	$this->db->insert('ref_facility_sub_category',  $_REQUEST['formname1']);
	return true;
   }
   
   
    function submit_infracat()
    { //print_r($_REQUEST['formname1']);
	$this->db->insert('ref_facility_category',  $_REQUEST['formname1']);
	return true;
   }
   
    function submit_expensecat()
    {
	$this->db->insert('ref_expense_category',  $_REQUEST['formname1']);
	return true;
   	}
	
	function submit_obsrvcat()
    {
	$this->db->insert('ref_observ_category',  $_REQUEST['formname1']);
	return true;
   	}
	

	
	function submit_surveycat()
    {
	$this->db->insert('ref_survey_category',  $_REQUEST['formname1']);
	return true;
   	}


   function submit_observation()
   {
      $this->db->insert('ref_observ_sub_category', $_REQUEST['formname1']);
      return true;
   }
   
   
   function submit_survey()
   {
   $this->db->insert('ref_survey_sub_category', $_REQUEST['formname1']);
		return true;
   }
      
   function submit_expense()
   {
   $this->db->insert('ref_expense_sub_category', $_REQUEST['formname1']);
	return true;
   }

   
   function display_fee_lookup(){
	$setvalues = $this->db->query("SELECT * FROM `ref_fee`");
	$formarray =($setvalues->result_array());
	return $formarray;
}


}
?>
