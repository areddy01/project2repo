<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//we need to call PHP's session object to access it through CI

class Infra extends CI_Controller 
{
 function __construct(){
	parent::__construct();
	if($this->session->userdata('logged_in')){
			$this->variable = $this->session->userdata('logged_in');
			}
			else{
			redirect('login', 'refresh');
		}
	$this->load->model('infra_model');
	$this->info =  unserialize(base64_decode($_REQUEST['info']));
	$this->arr['school_code']  = $this->info['school_code'];
	$this->arr['school_name']  = $this->info['school_name'];
	$this->arr['assessment_id']  = $this->info['assessment_id'];
	$this->arr['user_roll'] = $this->variable['user_roll'];
	$this->arr['info'] = $_REQUEST['info'] ;
	  }
		
  function main(){
	$data = $this->infra_model->general();	
	//$this->load->view('books_main',$data);
  }
   function add_ifra(){
    $schoolinfra =$this->infra_model->add_ifra_model($_REQUEST['school_profile']);
	$this->load->view('infra_input',$schoolinfra);	
  }	
/* Saving values in DB 
Author : Nishant Sharma*/

  function input(){
	$getschool = $_REQUEST;
	$this->infra_model->general($this->arr);
	$data =$this->infra_model->display_form($this->arr);
	$value['arr'] = $data;
	$this->db->select(array('*'));
	$this->db->where(array('a.school_code'=>$this->arr['school_code'],'b.school_code'=>$this->arr['school_code']));
	$recsetclear = $this->db->get(array("school_profile AS a","assessment AS b"));	
	$profile = $recsetclear->result_array();
	$profile = $profile[0];
	$this->load->view('infra_input', array_merge($getschool, $value,$profile,$this->arr));	
  }

/* Display form 
Author : Nishant Sharma*/
  function form(){
	$getschool = $_REQUEST;
	$data =$this->infra_model->display_form($this->arr);
	$value['arr'] = $data;
	$this->db->select(array('*'));
	$this->db->where(array('a.school_code'=>$this->arr['school_code'],'b.school_code'=>$this->arr['school_code']));
	$recsetclear = $this->db->get(array("school_profile AS a","assessment AS b"));	
	$profile = $recsetclear->result_array();
	if($profile)
	$profile = $profile[0];
	else 
	$profile = array();
	$this->load->view('infra_input',array_merge($getschool, $value,$profile,$this->arr));
	
  }

}
?>