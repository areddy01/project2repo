<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//we need to call PHP's session object to access it through CI

class Tenth	extends CI_Controller 
{
 function __construct(){
 error_reporting(E_ALL^E_NOTICE);
	parent::__construct();
	if($this->session->userdata('logged_in')){
			$this->variable = $this->session->userdata('logged_in');
			}
			else{
			redirect('login', 'refresh');
		}
	$this->load->model('tenth_model'); 
	$this->info=unserialize(base64_decode($_REQUEST['info']));           
    $this->arr['school_code']  = $this->info['school_code'];
	$this->arr['school_name']  = $this->info['school_name'];
	$this->arr['assessment_id']  = $this->info['assessment_id'];
	$this->arr['user_roll'] = $this->variable['user_roll'];
	$this->arr['info'] = $_REQUEST['info'] ;
	

  }
 
 function add_tenth(){
 	
    $schooltenth =$this->tenth_model->add_tenth_model($this->arr['school_code']);
	$this->load->view('tenth_input',$schooltenth);	
  }	
/* Saving values in DB 
Author : Nishant Sharma*/

 function input(){
  
	$this->load->helper('form');
	$data =$this->tenth_model->general($this->arr);
	$value['confirm']='Tenth Details has been inserted';
	$data = $data[0];
	$this->load->view('tenth_input',array_merge((array)$data,$value,$this->arr));	
  }

/* Dispaly form 
Author : Nishant Sharma*/

  function form(){
	$getschool = $_REQUEST;
	$data =$this->tenth_model->display_form($this->arr);
	$this->load->view('tenth_input',array_merge($this->arr,(array)$data));
	  }	

}
?>