<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//we need to call PHP's session object to access it through CI

class Admin extends CI_Controller 
{

function __construct()
  	{
    		parent::__construct();
			$this->load->library("pagination");
    		error_reporting(E_ALL^E_NOTICE);
			if($this->session->userdata('logged_in')){
			$this->variable = $this->session->userdata('logged_in');
			}
			else{
			redirect('login', 'refresh');
		}
     		$this->load->model('admindata','',TRUE);
			$this->load->model('enrollment_model','',TRUE);
			$this->load->model('content_model','',TRUE);
			$this->load->model('schoolfee_model','',TRUE);
			$this->load->model('transportfee_model','',TRUE);
			$this->load->model('observation_model','',TRUE);
			$this->load->model('teacher_model','',TRUE);
			$this->load->model('teachersurvey_model','',TRUE);
			$this->load->model('overdue_model','',TRUE);
			$this->load->model('otherfee_model','',TRUE);
			$this->load->model('parentsurvey_model','',TRUE);
			$this->load->model('addsubject_model','',TRUE);
			$this->load->model('qualification_model','',TRUE);
			$this->load->model('designation_model','',TRUE);
			$this->load->model('addsubject_model','',TRUE);
			$this->load->model('addsubject_model','',TRUE);
			$this->load->model('cost_model','',TRUE);
			$this->load->model('revenue_model','',TRUE);



			//$this->load->model('teachertest_model','',TRUE);
			//$this->load->model('studenttest_model','',TRUE);
			$this->load->library('table');
			
			
			
			$this->load->library("pagination");
			if($this->session->userdata('logged_in')){
			$this->variable = $this->session->userdata('logged_in');
			}
			else{
			redirect('login', 'refresh');
		}
	$this->info =  unserialize(base64_decode($_REQUEST['info']));
	$this->arr['school_code']  = $this->info['school_code'];
	$this->arr['school_name']  = $this->info['school_name'];
	$this->arr['assessment_id']  = $this->info['assessment_id'];
	$this->arr['user_roll'] = $this->variable['user_roll'];
	$this->arr['info'] = $_REQUEST['info'];

  	}
function infra ()
	{
	$value['confirm'] = '';
	$this->load->view('infra',$value);
	}
function schoolfee ()
	{	
		$data =$this->schoolfee_model->display_form($this->arr);
		$data ['arr'] =  $data;
		//echo "<pre>";
		//print_r($data);
		//exit;
		//$ssss=array_merge($this->arr,$data);
		//echo "<pre>";
		//print_r($ssss);
		//exit;
		$this->load->view('schoolfee',array_merge($this->arr,$data));
	}

function otherfee()
	{
	$data =$this->otherfee_model->display_form($this->arr);
		$data ['arr'] =  $data;
		$this->load->view('otherfees',array_merge($this->arr,$data));

	
	
	}
	
function addinfra (){
	if($this->admindata->addinfradb($_REQUEST['infraname'])){
	$value['confirm'] = 'Infra Details has been Inserted';
	$value['infranew']= 'one';
	$this->load->view('infra_input',$value);

	}
	}

function find_school(){
$data  = $_REQUEST['schooltag'];
$data  = explode(" ", $data);
$arrlocation = count($data);
$value['id']  = trim(($data[$arrlocation-1]));
$value['scholllist'] = $this->admindata->SearchSchooDB($value);
$value['message'] = 'List Of School';
$value['newschool']  = 'showschool';
$this->load->view('adminlogin', $value);
}

function active_school($ID){ 
$value = array(
               'active' => 1,
            );
$this->db->where('id', $ID);
$this->db->update('school', $value); 
if (isset($_REQUEST['school'])){
	$data  = $_REQUEST['school'];
	$config = array();
	$data  = explode(" ", $data);
	$arrlocation = count($data);
	$value['id']  = trim(($data[$arrlocation-1]));
	}
	else{
	$value['id'] = '';
	}
	$data['message'] = 'List Of School';
	$data['newschool']  = 'showschool';
    $config["base_url"] = base_url() . "admin/display_school";
    $config["total_rows"] = $this->admindata->record_count();
    $config["per_page"] = 10;
    $config["uri_segment"] = 3;
    $this->pagination->initialize($config);
    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	$data["results"] = $this->admindata->GetSchooDB($config["per_page"],$page, $value);
	$data["links"] = $this->pagination->create_links();
	$data["tab"] =  ""  ;
    $this->load->view("adminlogin", $data);
}

function inactive_school($ID){

$update = array(
               'active' => 0,
            );
$this->db->where('id', $ID);
$this->db->update('school', $update); 
if (isset($_REQUEST['school'])){
	$data  = $_REQUEST['school'];
	$config = array();
	$data  = explode(" ", $data);
	$arrlocation = count($data);
	$value['id']  = trim(($data[$arrlocation-1]));
	}
	else{
	$value['id'] = '';
	}
	$data['message'] = 'List Of School';
	$data['newschool']  = 'showschool';
    $config["base_url"] = base_url() . "admin/display_school";
    $config["total_rows"] = $this->admindata->record_count();
    $config["per_page"] = 10;
    $config["uri_segment"] = 3;
    $this->pagination->initialize($config);
    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	$data["results"] = $this->admindata->GetSchooDB($config["per_page"],$page, $value);
	$data["links"] = $this->pagination->create_links();
	$data["tab"] =  ""  ;
    $this->load->view("adminlogin", $data);
}


function admissions()
	{
		
		$data =$this->enrollment_model->display_form($this->arr);
		$data ['arr'] =  $data;
		$this->load->view('admissions',array_merge($this->arr,$data));
	
	}
	
	function addschoolfee ()
	{
		if($this->schoolfee_model->general($this->info)){
		$this->arr['message'] = 'School Fee details added Successfully';
		}
		$data =$this->schoolfee_model->display_form($this->info);
		$data ['arr'] =  $data;
		$this->load->view('schoolfee',array_merge($this->arr,$data));
	}

	function addotherfees ()
	{
		if($this->otherfee_model->general($this->info)){
		$this->arr['message'] = 'Other Fee details added Successfully';
		}
		$data =$this->otherfee_model->display_form($this->info);
		$data ['arr'] =  $data;
		$this->load->view('otherfees',array_merge($this->arr,$data));
	}
	
	function addadmissions(){
		if($this->enrollment_model->general($this->arr))
		{$this->arr['message'] = 'Admission details added Successfully';
		}
		$data =$this->enrollment_model->display_form($this->arr);
		$data ['arr'] =  $data;
		$this->load->view('admissions',array_merge($this->arr,$data));

		}
	
	function transport ()
		 {
		 	$data =$this->transportfee_model->display_form($this->arr);
			$data ['arr'] =  $data;
			$this->load->view('transportfees',array_merge($this->arr,$data));
		 //$this->load->view('transport',$this->arr);
		 }
	
	 function addtransportfees ()
		 {
		 	if($this->transportfee_model->general($this->arr)){
		 	$this->arr['message'] = 'Transport Fee details added Successfully';
		 	}
			$data =$this->transportfee_model->display_form($this->arr);
			$data ['arr'] =  $data;
			$this->load->view('transportfees',array_merge($this->arr,$data));	
		 
		 }
		 
	function revenue()
	{
	$data=$this->revenue_model->display_form($this->arr);	 
	$data ['arr'] =  $data;	 
	$this->load->view('revenue_view',array_merge($this->arr,$data));	 
	 
	 }
	function financial ()
	 {
	
	 $this->load->view('financials',$this->arr);
	 }
	 
	 function addfinancial ()
	 {
	 if($this->admindata->addfinancialdb($_REQUEST['financial'])){
	 $value['confirm'] = 'Financial Details has been Inserted';
	 $value['financialnew']= 'five';
	 $this->load->view('financials',$value);
	
	 }
 	 }
	
	function overdue()
	{
		$data =$this->overdue_model->display_form($this->arr);
	 	$data ['arr'] =  $data;
		$this->load->view('overdue',array_merge($this->arr,$data));
	}
	
	function addoverdue ()
	 {
	 
	 	if($this->overdue_model->general($this->arr)){
	 	$this->arr['message'] = 'Overdue details added Successfully';
	 	}
		$data =$this->overdue_model->display_form($this->arr);
		$data ['arr'] =  $data;
		$this->load->view('overdue',array_merge($this->arr,$data));
	
	 }
	 
	 function cost()
		{
			
			$data['arr'] = $this->cost_model->display_form($this->arr);
			$this->load->view('cost',array_merge($data,$this->arr));
		}
 
 	function addcost()
		 {
		 	
			if($this->cost_model->general($this->arr)){
			$this->arr['message'] = 'Cost details added Successfully';
			}
			$data['arr'] = $this->cost_model->display_form($this->arr);
			$this->load->view('cost',array_merge($data,$this->arr));
	 	 }

 	 
 	 
 	function teacherfeedback()
	{
	
	$this->load->view('teacherfeedback',$this->arr);
	}
	
	function addteacherfeedback ()
	 {
	 if($this->admindata->addteacherfeedbackdb($_REQUEST['teacherfeedback'])){
	 $value['confirm'] = 'Teacher Feedback Details has been Inserted';
	 $value['teacherfeedbacknew']= 'eight';
	 $this->load->view('teacherfeedback',$value);
	
	 }
 	 }
  
  
  	

 	 
 	 
 	 function tenth()
	{
	$value['tenthnew']='ten';
	$value['confirm'] = '';
	$this->load->view('tenth',$value);
	}
	
	function addtenth ()
	 {
	 if($this->admindata->addttsheetdb($_REQUEST['tenth'])){
	 $this->load->view('tenth',$this->arr);
	
	 }
 	 }

 	 
  	function parentsurvey(){
	$value['parentsurveynew']='11';
	$value['confirm'] = '';
	$data['arr'] = $this->parentsurvey_model->display_form($this->arr);
	if(isset($_REQUEST['response'][0])){
	$this->load->view('parentsurvey_result',array_merge($data, $value,$this->arr));
	}
	else{
	$this->load->view('parentsurvey',array_merge($data, $value,$this->arr));
	}
	}

	function displayparentsurvey(){
	$value['parentsurveynew']='11';
	$value['confirm'] = '';
	$data['arr'] = $this->parentsurvey_model->display_form($this->arr);
	$this->load->view('parentsurvey_result',array_merge($data, $this->arr));
	}
	
	function addparentsurvey ()
	 {
	
		$this->parentsurvey_model->general($this->arr);
		$value['confirm'] = 'Parent Survey Details has been Inserted';
		$value['parentsurveynew']= '11';
		$data['arr'] = $this->parentsurvey_model->display_form($this->arr);
		$this->load->view('parentsurvey',array_merge($data, $value, $this->arr));
 	 }

	 function editparentsurvey ()
	 {

		$this->parentsurvey_model->general($this->arr);
		$value['confirm'] = 'Parent Survey Details has been Inserted';
		$value['parentsurveynew']= '11';
		$data['arr'] = $this->parentsurvey_model->display_form($this->arr);
		$this->load->view('parentsurvey_result',array_merge($data, $this->arr));
 	 }

	function teachersurvey(){
	$value['teachersurveynew']='six';
	$value['confirm'] = '';
	$data['arr'] = $this->teachersurvey_model->display_form($this->arr);
	if(isset($_REQUEST['response'][0])){
	$this->load->view('teachersurvey_result',array_merge($data, $value,$this->arr));
	}
	else{
	$this->load->view('teachersurvey',array_merge($data,$this->arr));
	}
	}

	
	function displayteachersurvey(){
	$value['teachersurveynew']='six';
	$value['confirm'] = '';
	$data['arr'] = $this->teachersurvey_model->display_form($this->arr);
	$this->load->view('teachersurvey_result',array_merge($data,$this->arr));
	}
	
	function addteachersurvey ()
	 {
		$this->teachersurvey_model->general($this->arr);
		$value['confirm'] = 'Teacher Survey Details has been Inserted';
		$value['teachersurveynew']= 'six';
		$data['arr'] = $this->teachersurvey_model->display_form($this->arr);
		$this->load->view('teachersurvey',array_merge($data, $value,$this->arr));
 	 }

	 function editteachersurvey ()
	 {
		$this->teachersurvey_model->general($this->arr);
		$value['confirm'] = 'Teacher Survey Details has been Inserted';
		$value['teachersurveynew']= 'six';
		$data['arr'] = $this->teachersurvey_model->display_form($this->arr);
		$this->load->view('teachersurvey_result',array_merge($data,$this->arr));
 	 }
 	 
 	 
	function observations()
	{
	$value['observationnew']='14';
	$value['confirm'] = '';
	
	$data['arr'] = $this->observation_model->display_form($this->arr);
	
	if(!isset($_REQUEST['response'][0])){
	$this->load->view('observation_result',array_merge($data,$value,$this->arr));
	}
	else{
	$this->load->view('observation',array_merge($data,$value,$this->arr));

	}
	}
	
	function displayobservation()
	{
		$value['observationnew']='14';
		$value['confirm'] = '';
		$data['arr'] = $this->observation_model->display_form($this->arr);
		$this->load->view('observation_result',array_merge($data,$this->arr));
	}

	function addobservation ()
	 {
	    $this->observation_model->general($this->arr);
		$value['confirm'] = 'Observation Details has been Inserted';
		$value['observationnew']= '14';
		$data['arr'] = $this->observation_model->display_form($this->arr);
       	$this->load->view('observation',array_merge($data,$value,$this->arr));
 	 }
 	 
 	 function editobservation ()
	 {
	 

		$this->observation_model->general($this->arr);
		$value['confirm'] = 'Observation Details has been Inserted';
		$value['observationnew']= '14';
		$data['arr'] = $this->observation_model->display_form($this->arr);
		
		$this->load->view('observation_result',array_merge($data,$this->arr));
 	 }

 	 
 	 function teacher()
	{
	
		$data['arr'] =$this->teacher_model->display_form($this->arr);
			$currentdate = date("Y");
			$previousdate = date("Y")-1;
			$current=$this->db->query("select year from teacher");
			$teacher['current']=$current->result_array();
			$currentnew=$this->db->query("select year from teacher where year='$currentdate'");
			$teacher['currentnew']=$currentnew->result_array();
			$previous=$this->db->query("select year from teacher where year<='$previousdate'");
			$teacher['previous']=$previous->result_array();
			$previousnew=$this->db->query("select year from teacher where year='$previousdate'");
			$teacher['previousnew']=$previousnew->result_array(); 
			//echo "<pre>";
			//print_r($teacher);
			
		$this->load->view('teacher_display',array_merge($this->arr,$data,$teacher));

	}
	
	function addteacher ()
	 {
	  	$this->teacher_model->general($this->arr);
		$data = $this->teacher_model->display_form($this->arr);
		$data ['arr'] =  $data;
		    
			$currentdate = date("Y");
			$previousdate = date("Y")-1;
			$current=$this->db->query("select year from teacher");
			$teacher['current']=$current->result_array();
			$currentnew=$this->db->query("select year from teacher where year='$currentdate'");
			$teacher['currentnew']=$currentnew->result_array();
			$previous=$this->db->query("select year from teacher where year<='$previousdate'");
			$teacher['previous']=$previous->result_array();
			$previousnew=$this->db->query("select year from teacher where year='$previousdate'");
			$teacher['previousnew']=$previousnew->result_array(); 
		
		$this->load->view('teacher_display',array_merge($this->arr,$data,$teacher));
 
 	 } 
 	 
 	 function edit_teacher($value){
		if($value == 'edit')
		$data=$this->teacher_model->update_teacher();
		$config['base_url'] = base_url()."admin/edit_teacher/$value/?info=".$this->arr['info'];
		$config['total_rows'] = $this->db->get('teacher')->num_rows();
		$config['per_page'] = 10;
		$config['num_links'] = 3;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		$this->pagination->initialize($config);
		$condition = array('school_code' =>$this->arr['school_code']);
		$this->db->where($condition);
		$data['arr'] = $this->db->get('teacher',$config['per_page'], $this->uri->segment(3))->result_array();
		$currentdate = date("Y");
			$previousdate = date("Y")-1;
			$current=$this->db->query("select year from teacher");
			$teacher['current']=$current->result_array();
			$currentnew=$this->db->query("select year from teacher where year='$currentdate'");
			$teacher['currentnew']=$currentnew->result_array();
			$previous=$this->db->query("select year from teacher where year<='$previousdate'");
			$teacher['previous']=$previous->result_array();
			$previousnew=$this->db->query("select year from teacher where year='$previousdate'");
			$teacher['previousnew']=$previousnew->result_array(); 
	
		$this->load->view('teacher_display',array_merge($this->arr,$data,$teacher));
	}
 	 function attendance ()
	{
	 $value['school_code']  = $_REQUEST['school_code'];
	$value['school_name']  = $_REQUEST['school_name'];
	$value['assessment_id']  = $_REQUEST['assessment_id'];
	$value['attendancenew']='14';
	$value['confirm'] = '';
	$this->load->view('attendance',$value);
	}
	
	function addattendance ()
	 {
		 if($this->admindata->addattendancedb($_REQUEST['attendance']))
		 {
			 $value['confirm'] = 'Attendance Details has been Inserted';
			 $value['attendancenew']= '14';
			 $this->load->view('attendance',$value);
		
		 }
	 
 	 }

   function get_subcat()
   {
	  // $state['school_code'] = $_REQUEST['school_code'] ;
	   $state['get_cat'] = $_REQUEST['getcat'];
		//$state['assessment_id']  = $state['assessment_id'];
	   $result= $this->db->query("SELECT C.facility_sub_cat_name FROM `school_facility` AS A ,`ref_facility_category` AS B, ref_facility_sub_category AS C  WHERE C.facility_cat_id = '".$state['get_cat']."' AND A.school_code = '".$this->info['school_code']."'GROUP BY facility_sub_cat_name")->result_array();
	    $output_string = null; 
		for($row =0; $row < count($result); $row++)
		 {
			$output_string .= "<option value='".$result[$row]['facility_sub_cat_name']."'>".$result[$row]['facility_sub_cat_name']."</option>";
		}
				echo $output_string;
		}

	

}

?>
