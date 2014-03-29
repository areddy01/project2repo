<?php
Class Content_model extends CI_Model
{
	function __construct(){

	}
	function load_form($school){	
	
	$recsetclear = $this->db->query("SELECT a.facility_cat_id , a.facility_sub_cat_id, b.facility_cat_name, c.facility_sub_cat_name,a.facility_sub_cat_value,c.facility_sub_cat_type,c.facility_sub_cat_type_field FROM `school_facility` a ,`ref_facility_category` b ,`ref_facility_sub_category` c WHERE school_code = '".$school['school_code']."' and b.facility_cat_id = c.facility_cat_id and a.facility_sub_cat_id = c.facility_sub_cat_id GROUP BY a.facility_sub_cat_id ORDER BY facility_cat_id");
	$formarray =($recsetclear->result_array());
	return $formarray;


	}

   function submit_content(){
 	$this->db->insert('ref_facility_sub_category',  $_REQUEST['formname1']);

   }

}
?>
