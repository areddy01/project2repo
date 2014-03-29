<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//we need to call PHP's session object to access it through CI

class Financereport	extends CI_Controller 
{
 function __construct(){
	parent::__construct();
	$this->load->model('finance_model','',TRUE);
	$this->load->model('teaching_model','',TRUE);
	$this->load->model('summery_model','',TRUE);
	$this->load->model('profile_model','',TRUE);
	$this->load->model('student_model','',TRUE);
	$this->load->model('parents_model','',TRUE);
	$this->load->model('pedagogy_model','',TRUE);
	$this->load->model('managment_model','',TRUE);

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
 
/* Finance form 
Author : Nishant Sharma*/

  function Financeform(){
	//$getschool = $_REQUEST;
	$data =$this->finance_model->display_form($this->arr);
	exit;
	$data['arr'] = $data ;
	$this->load->view('otherfees',array_merge($data,$this->arr));
	
  }	



/*Summery form */


function  Summeryform(){

//$getschool = $_REQUEST;
	$data =$this->summery_model->display_form($this->arr);
	exit;
	$data['arr'] = $data ;
	$this->load->view('otherfees',array_merge($data,$this->arr));


}


/*Profile form */
	
function  Profileform(){

//$getschool = $_REQUEST;
	$data =$this->profile_model->display_form($this->arr);
	exit;
	$data['arr'] = $data ;
	$this->load->view('otherfees',array_merge($data,$this->arr));


}

/* Student form */

function  Studentform(){

//$getschool = $_REQUEST;
	$data =$this->student_model->display_form($this->arr);
	exit;
	$data['arr'] = $data ;
	$this->load->view('otherfees',array_merge($data,$this->arr));


}

/* Parents form */

function  Parentsform(){

//$getschool = $_REQUEST;
	$data =$this->parents_model->display_form($this->arr);
	exit;
	$data['arr'] = $data ;
	$this->load->view('otherfees',array_merge($data,$this->arr));


}

/* teaching report */

function  teachingform(){

//$getschool = $_REQUEST;
	$data =$this->teaching_model->display_form($this->arr);
	exit;
	$data['arr'] = $data ;
	$this->load->view('otherfees',array_merge($data,$this->arr));


}

/* Pedagogy form */


function  Pedagogyform(){

//$getschool = $_REQUEST;
	$data =$this->pedagogy_model->display_form($this->arr);
	exit;
	$data['arr'] = $data ;
	$this->load->view('otherfees',array_merge($data,$this->arr));


}
/* Managment form */


function  Managmentform(){

//$getschool = $_REQUEST;
	$data =$this->managment_model->display_form($this->arr);
	exit;
	$data['arr'] = $data ;
	$this->load->view('otherfees',array_merge($data,$this->arr));


}
/*  Finance form */
}

?>