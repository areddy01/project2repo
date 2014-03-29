<?php
Class addsubject_model extends CI_Model
{
	function __construct(){
	//$this->load->helper('url');	
	}
/* Model for insert and update the data for Infra Form 

Author : Nishant Sharma */

 
/* display the data from data base for lookup table 
Author :Nishant Sharma*/
function display_lookup(){
$setvalues = $this->db->query("SELECT * FROM `ref_subject`");
$formarray =($setvalues->result_array());
return $formarray;
}
}
?>
