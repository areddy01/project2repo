<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//we need to call PHP's session object to access it through CI

class Attendance extends CI_Controller 
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
	$this->load->model('attendance_model');
	$this->info =  unserialize(base64_decode($_REQUEST['info']));
	$this->arr['school_code']  = $this->info['school_code'];
	$this->arr['school_name']  = $this->info['school_name'];
	$this->arr['assessment_id']  = $this->info['assessment_id'];
	$this->arr['user_roll'] = $this->variable['user_roll'];
	$this->arr['info'] = $_REQUEST['info'] ;
  }
 
	function add_attendance(){
    $schoolattendance =$this->attendance_model->attendance_model($_REQUEST['school_code']);
	$this->load->view('attendance',$schoolattendance);	
  }	
/* Saving values in DB 
Author : Nishant Sharma*/

  function input(){
	$this->attendance_model->general($this->arr);
	$value['confirm']='Attendance details has been inserted';
	$data =$this->attendance_model->display_form($this->arr);
	$data['arr'] = $data;
	$this->load->view('attendance', array_merge($value,$this->arr,$data));	
	return true;
  }

/* Dispaly form 
Author : Nishant Sharma*/

  function form(){
	//$getschool = $_REQUEST;
	$data =$this->attendance_model->display_form($this->arr);
	$data['arr'] = $data;
	$this->load->view('attendance',array_merge($data , $this->arr));
	
  }	

}
?>