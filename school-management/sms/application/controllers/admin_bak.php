<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//we need to call PHP's session object to access it through CI

class Admin extends CI_Controller 
{

function __construct()
  	{
    		parent::__construct();
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
	$this->arr['info'] = $_REQUEST['info'] ;

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
	$this->load->view('infra',$value);

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
		$this->otherfee_model->general($this->arr);
		$data =$this->otherfee_model->display_form($this->arr);
		$data ['arr'] =  $data;
		$this->load->view('otherfees',array_merge($this->arr,$data));
	}
	
	function addadmissions(){
		$this->enrollment_model->general($this->arr);
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
		 	
		 	}
			$data =$this->transportfee_model->display_form($this->arr);
			$data ['arr'] =  $data;
			$this->load->view('transportfees',array_merge($this->arr,$data));	
		 
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
	 
	 	$this->overdue_model->general($this->arr);
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
		 	
			$this->cost_model->general($this->arr);
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
	$value['observationnew']='12';
	$value['confirm'] = '';
	$data['arr'] = $this->observation_model->display_form($this->arr);
	if(isset($_REQUEST['response'][0])){
	$this->load->view('observation_result',array_merge($data,$value,$this->arr));
	}
	else{
	$this->load->view('observation',array_merge($data,$value,$this->arr));
	}
	}
	
	function displayobservation(){
	$value['observationnew']='12';
	$value['confirm'] = '';
	$data['arr'] = $this->observation_model->display_form($this->arr);
	$this->load->view('observation_result',array_merge($data,$this->arr));
	}

	function addobservation ()
	 {
		$this->observation_model->general($this->arr);
		$value['confirm'] = 'Observation Details has been Inserted';
		$value['observationnew']= '12';
		$data['arr'] = $this->observation_model->display_form($this->arr);
		$this->load->view('observation',array_merge($data,$value,$this->arr));
 	 }
 	 
 	 function editobservation ()
	 {
		$this->observation_model->general($this->arr);
		$value['confirm'] = 'Observation Details has been Inserted';
		$value['observationnew']= '12';
		$data['arr'] = $this->observation_model->display_form($this->arr);
		$this->load->view('observation_result',array_merge($data,$this->arr));
 	 }

 	 
 	 function teacher()
	{
	
		//$data =$this->teacher_model->display_form($this->arr);
	 	//$data ['arr'] =  $data;
		$this->load->view('teacher',array_merge($this->arr));

	}
	
	function addteacher ()
	 {
	 
	 	$this->teacher_model->general($this->arr);
		$data = $this->teacher_model->display_form($this->arr);
		$data ['arr'] =  $data;
		$this->load->view('teacher',array_merge($this->arr,$data));
 
 	 } 
 	 
 	 function edit_teacher($value){
		if($value == 'edit')
		$this->teacher_model->update_teacher();
		$config['base_url'] = base_url() . "admin/edit_teacher/$value/?info=".$this->arr['info'];
		$config['total_rows'] = $this->db->get('teacher')->num_rows();
		$config['per_page'] = 4;
		$config['num_links'] = 20;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		$this->pagination->initialize($config);
		$data['arr'] = $this->db->get('teacher', $config['per_page'], $this->uri->segment(3))->result_array();
		$this->load->view('teacher_display' , array_merge($this->arr,$data));

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
	 if($this->admindata->addattendancedb($_REQUEST['attendance'])){
	 $value['confirm'] = 'AttendanceDetails has been Inserted';
	 $value['attendancenew']= '14';
	 $this->load->view('attendance',$value);
	
	 }
	 
 	 }
	 function content_display(){
		if($this->arr['school_code']){
			$this->load->view('content_display',$this->arr);

		}
	 }
	 function getform_data(){
       
	
		 if ($_REQUEST['formname'] == 'infra'){
		$output = $this->content_model->load_form($this->arr);
        $value['arr'] = $output;
		$result['category']= $this->db->query("SELECT B.facility_cat_name,B.facility_cat_id FROM `school_facility` AS A ,`ref_facility_category` AS B WHERE A.facility_cat_id = B.facility_cat_id AND A.school_code = '".$this->arr['school_code']."' GROUP BY facility_cat_name")->result_array();
		$this->load->view('infra_lookup', array_merge($value,$this->arr, $result));
		 }
		else if ($_REQUEST['formname'] == 'enrollment'){ 
		$output = $this->enrollment_model->display_lookup($this->arr);
		$output['arr']  = $output ;
		$this->load->view('enrollment_lookup', array_merge($this->arr,$output));
		}
		 else if ($_REQUEST['formname'] == 'addsubject'){
		
		$output = $this->addsubject_model->display_lookup($this->arr);
		$output['arr']  = $output ;
		$this->load->view('addsubject_lookup', array_merge($this->arr,$output));
		 }
		 
		else if ($_REQUEST['formname'] == 'observation'){
		$output = $this->content_model->load_observ_form($this->arr);
		$value['arr'] = $output;
		$result['category']= $this->db->query("SELECT B.observ_cat_name,B.observ_cat_id FROM `ref_observ_category` AS B")->result_array();
		$this->load->view('observation_lookup', array_merge($value,$this->arr, $result));

		}

		else if ($_REQUEST['formname'] == 'fee'){
		$output = $this->content_model->load_fee_form($this->arr);
		$output['arr']  = $output ;
		$this->load->view('fee_lookup', array_merge($this->arr,$output));
		}
		
		else if ($_REQUEST['formname'] == 'qualification'){
		$output = $this->qualification_model->display_lookup($this->arr);
		$output['arr']  = $output ;
		$this->load->view('addqualification_lookup', array_merge($this->arr,$output));

		}
		
		else if ($_REQUEST['formname'] == 'designation'){
		$output = $this->designation_model->display_lookup($this->arr);
		$output['arr']  = $output ;
		$this->load->view('designation_lookup', array_merge($this->arr,$output));
	
		}
		
		else if ($_REQUEST['formname'] == 'survey'){
		$output = $this->content_model->load_survey_form($this->arr);
		$value['arr'] = $output;
		$result['category']= $this->db->query("SELECT B.survey_cat_name,B.survey_cat_id FROM `ref_survey_category` AS B GROUP BY survey_cat_name")->result_array();
		$this->load->view('survey_lookup', array_merge($value,$this->arr, $result));

		}
		
		else if ($_REQUEST['formname'] == 'expense'){
		$output = $this->content_model->load_expense_form($this->arr);
		$value['arr'] = $output;
		$result['category']= $this->db->query("SELECT B.expense_cat_name,B.expense_cat_id FROM `ref_expense_category` AS B")->result_array();
		$this->load->view('expense_lookup', array_merge($value,$this->arr, $result));

		}

		
	 }
	 function submitform_data(){
	 
	  	if ($_REQUEST['formname'] == 'infraaddcat'){
		if($this->content_model->submit_infracat($_REQUEST)){
		$this->arr['message'] = 'Category is added'; 
		}
		$result['category']= $this->db->query("SELECT B.facility_cat_name,B.facility_cat_id FROM `school_facility` AS A ,`ref_facility_category` AS B WHERE A.facility_cat_id = B.facility_cat_id AND A.school_code = '".$this->arr['school_code']."' GROUP BY facility_cat_name")->result_array();
		$this->load->view('infra_lookup', array_merge($this->arr,$result));
		 }
	 
	 
	 	if ($_REQUEST['formname'] == 'suraddcat'){
		if($this->content_model->submit_surveycat($_REQUEST)){
		$this->arr['message'] = 'Survey Category is added'; 
		}
		$result['category']= $this->db->query("SELECT B.survey_cat_name,B.survey_cat_id FROM `ref_survey_category` AS B GROUP BY survey_cat_name")->result_array();
		$this->load->view('survey_lookup', array_merge($this->arr,$result));
		 }

		if ($_REQUEST['formname'] == 'obsrvaddcat'){
		if($this->content_model->submit_obsrvcat($_REQUEST)){
		$this->arr['message'] = 'Observation Category is added'; 
		}
		$result['category']= $this->db->query("SELECT B.observ_cat_name,B.observ_cat_id FROM `ref_observ_category` AS B GROUP BY observ_cat_name")->result_array();
		$this->load->view('observation_lookup', array_merge($this->arr,$result));
		 }

	 	if ($_REQUEST['formname'] == 'expenseaddcat'){
		if($this->content_model->submit_expensecat($_REQUEST)){
		$this->arr['message'] = 'Expense Category is added'; 
		}
		$result['category']= $this->db->query("SELECT B.expense_cat_name,B.expense_cat_id FROM `ref_expense_category` AS B GROUP BY expense_cat_name")->result_array();
		$this->load->view('expense_lookup', array_merge($this->arr,$result));
		 }


		
		if ($_REQUEST['formname'] == 'infra'){
		if($this->content_model->submit_content($_REQUEST)){
		$this->arr['message'] = 'Infra details are added'; 
		}
		$result['category']= $this->db->query("SELECT B.facility_cat_name,B.facility_cat_id FROM `school_facility` AS A ,`ref_facility_category` AS B WHERE A.facility_cat_id = B.facility_cat_id AND A.school_code = '".$this->arr['school_code']."' GROUP BY facility_cat_name")->result_array();
		$this->load->view('infra_lookup', array_merge($this->arr,$result));
		 }
		 else if ($_REQUEST['formname'] == 'enrollment'){ 
			 $data =array('class_name'=>$_REQUEST['ref_class_name']['class_name'],
				 'class_segment'=>$_REQUEST['ref_class_name']['class_segment'],
				 'update_user'=>'admin');
				if($this->db->insert('ref_class_name',  $data)){
				$this->arr['message'] = 'Enrollment details are added';
				}
				$output = $this->enrollment_model->display_lookup($this->arr);
				$output['arr']  = $output ;
			    $this->load->view('enrollment_lookup', array_merge($this->arr,$output));
			
		 }
			else if ($_REQUEST['formname'] == 'addsubject'){
			 $data =array('subject_name'=>$_REQUEST['ref_subject']['subject_name'],
				 'subject_category'=>$_REQUEST['ref_subject']['subject_category'],
				 'update_user'=>'admin');
				if($this->db->insert('ref_subject',  $data)){
				$this->arr['message'] = 'Add Subject details are added';
				}
				$output = $this->addsubject_model->display_lookup($this->arr);
				$output['arr']  = $output ;
			    $this->load->view('addsubject_lookup', array_merge($this->arr,$output));
			 }
			 
		else if ($_REQUEST['formname'] == 'observation'){
		if($this->content_model->submit_observation($_REQUEST))
		{$this->arr['message'] = 'Observation details are added';
		}
		$result['category']= $this->db->query("SELECT B.observ_cat_name,B.observ_cat_id FROM `ref_observ_category` AS B GROUP BY observ_cat_name")->result_array();
		$this->load->view('observation_lookup', array_merge($this->arr,$result));
		}	
		
		
		else if ($_REQUEST['formname'] == 'survey'){
		if ($this->content_model->submit_survey($_REQUEST)){
		$this->arr['message'] = 'Survey Category is added'; 
		}
		$result['category']= $this->db->query("SELECT B.survey_cat_name,B.survey_cat_id FROM `ref_survey_category` AS B GROUP BY survey_cat_name")->result_array();
		$this->load->view('survey_lookup', array_merge($this->arr,$result));

		}
		
		else if ($_REQUEST['formname'] == 'expense'){
		if($this->content_model->submit_expense($_REQUEST)){
		$this->arr['message'] = 'Expense Category is added'; 
		}
		$result['category']= $this->db->query("SELECT B.expense_cat_name,B.expense_cat_id FROM `ref_expense_category` AS B GROUP BY expense_cat_name")->result_array();
		$this->load->view('expense_lookup', array_merge($this->arr,$result));

		
		}

		else if ($_REQUEST['formname'] == 'fee'){
			 $data =array('fee_name'=>$_REQUEST['ref_fee']['fee_name'],
				 'fee_category'=>$_REQUEST['ref_fee']['fee_category'],
				 'update_user'=>'admin');
				if($this->db->insert('ref_fee',$data)){
				$this->arr['message'] = 'Fee details are added';
				}
				$output = $this->content_model->display_fee_lookup($this->arr);
				$output['arr']  = $output ;
			    $this->load->view('fee_lookup', array_merge($this->arr,$output));

		}
		
		else if ($_REQUEST['formname'] == 'qualification'){
		 $data =array('qualification_name'=>$_REQUEST['ref_qualification']['qualification_name'],
				 	 'update_user'=>'admin');
				if($this->db->insert('ref_qualification',$data))
				{
				$this->arr['message'] = 'Qualification details are added';
				}
				$output = $this->qualification_model->display_lookup($this->arr);
				$output['arr']  = $output ;
			    $this->load->view('addqualification_lookup', array_merge($this->arr,$output));

		}
		
		else if ($_REQUEST['formname'] == 'designation'){
			$data =array('designation_name'=>$_REQUEST['ref_designation']['designation_name'],'update_user'=>'admin');
			if($this->db->insert('ref_designation',  $data)){
			$this->arr['message'] = 'Designation details are added';}

				$output = $this->designation_model->display_lookup($this->arr);
				$output['arr']  = $output ;
			    $this->load->view('designation_lookup', array_merge($this->arr,$output));
	
		
		}
		
	 }

   function get_subcat(){
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
