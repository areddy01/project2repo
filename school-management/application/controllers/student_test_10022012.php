<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//we need to call PHP's session object to access it through CI

class Student_test extends CI_Controller 
{
 function __construct(){
	parent::__construct();
	if($this->session->userdata('logged_in')){
			$this->variable = $this->session->userdata('logged_in');
			}
			else{
			redirect('login', 'refresh');
		}
	$this->load->model('studenttest_model');
	$this->info =  unserialize(base64_decode($_REQUEST['info']));
	$this->arr['school_code']  = $this->info['school_code'];
	$this->arr['school_name']  = $this->info['school_name'];
	$this->arr['assessment_id']  = $this->info['assessment_id'];
	$this->arr['info'] = $_REQUEST['info'] ;
  }
 
 function add_tenth(){
    $schooltenth =$this->studenttest_model->add_tenth_model($this->arr['school_code']);
	$this->load->view('tenth_input',$schooltenth);	
  }	
/* Saving values in DB 
Author : Nishant Sharma*/

  function input(){
	$this->load->helper('form');
	$data =$this->studenttest_model->general($this->arr);
	$data = $data[0];
	$this->load->view('tenth_input', array_merge($this->arr,$data));	
  }

/* Dispaly form 
Author : Nishant Sharma*/

  function form($action){
	$this->arr['action'] = $action;
	if($this->arr['action'] == 'action')
	$this->arr['numofrow'] = $_REQUEST['numbofrow'];
	$data['arr'] =$this->teachertest_model->display_form($this->arr);
	$this->load->view('ttsheet',array_merge($this->arr , $data));
	
  }	

}
?>