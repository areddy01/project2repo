<?php
Class Forget_model extends CI_Model
{
	function __construct(){
	$this->load->helper('url');	
	}
/* Model for insert and update the data for Infra Form 

Author : Nishant Sharma */

  function general($school){
       $data=array('password'=>md5($school['password']));
       $condition=array('email'=>$school['email']);      
      $this->db->where($condition);
	  $this->db->update('users',$data);
	 return true;
      }
}
?>
