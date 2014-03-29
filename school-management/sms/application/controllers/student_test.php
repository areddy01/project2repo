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

  function input($value){
	$this->arr['action'] = $value;
	 if($value = "insert"){
	$this->studenttest_model->general($this->arr);
	$this->arr['message'] = 'Data has been added in data base';
	$data['arr'] =$this->studenttest_model->display_form($this->arr);
	$data1['setvalues'] =$this->studenttest_model->drop_down($this->arr);
	$this->load->view('stsheet',array_merge($this->arr , $data,$data1));	
	 }
	
  }

function update()
	{

	$this->studenttest_model->update_query($this->arr);
	$this->arr['message'] = 'Data has been updated in data base';
	$data['arr'] =$this->studenttest_model->display_form($this->arr);
	$data1['setvalues'] =$this->studenttest_model->drop_down($this->arr);
	$this->load->view('stsheet',array_merge($this->arr , $data,$data1));	

	}
/* Dispaly form 
Author : Nishant Sharma*/

  function form($action){

	$this->arr['action'] = $action;
	$data['arr'] =$this->studenttest_model->display_form($this->arr);
	$data1['setvalues'] =$this->studenttest_model->drop_down($this->arr);
	$this->arr['numofrow'] = $_REQUEST['numbofrow'];
	$this->arr['requesttest'] = $_REQUEST['requesttest'];
    $this->load->view('stsheet',array_merge($this->arr , $data,$data1));

}

function getdata($action){
$data['arr'] =$this->studenttest_model->display_form($this->arr);
$data1['setvalues'] =$this->studenttest_model->drop_down($this->arr);
$this->load->view('stsheet_result',array_merge($this->arr , $data,$data1));
}


function show_option(){

$data1['setvalues'] =$this->studenttest_model->drop_down($this->arr);
$this->load->view('stsheet',array_merge($this->arr , $data1));

}
}
?>