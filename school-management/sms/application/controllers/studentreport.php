<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//we need to call PHP's session object to access it through CI

class Studentreport	extends CI_Controller 
{
 function __construct(){
	parent::__construct();
	$this->load->model('studentreport_model','',TRUE);
	if($this->session->userdata('logged_in')){
			$this->variable = $this->session->userdata('logged_in');
			}
			else{
			redirect('login', 'refresh');
		}
	$this->load->model('otherfee_model');
	$this->info =  unserialize(base64_decode($_REQUEST['info']));
	$this->arr['school_code']  = $this->info['school_code'];
	$this->arr['school_name']  = $this->info['school_name'];
	$this->arr['assessment_id']  = $this->info['assessment_id'];
	$this->arr['user_roll'] = $this->variable['user_roll'];
	$this->arr['info'] = $_REQUEST['info'] ;
  }
 
/* Dispaly form 
Author : Nishant Sharma*/

  function form(){
	//$getschool = $_REQUEST;
	$data =$this->studentreport_model->display_form($this->arr);
	exit;
	$data['arr'] = $data ;
	$this->load->view('otherfees',array_merge($data,$this->arr));
	
  }	

}
?>