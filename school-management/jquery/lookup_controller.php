<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Lookup_controller extends CI_Controller {
  function __construct(){
    parent::__construct();
	$this->load->model('admindata','',TRUE);
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
			$this->load->model('enrollment_model','',TRUE);
			$this->load->library("pagination");
	 if($this->session->userdata('logged_in'))
    {
      $this->session_data = $this->session->userdata('logged_in');
    }
    else
    {
      //If no session, redirect to login page
      redirect('login', 'refresh');
	}
  }
function content_display(){
			$this->load->view('content_display',$this->session_data);
	 }
function getform_data(){
   
		 if ($_REQUEST['formname'] == 'infra'){
		$output = $this->content_model->load_form();
        $value['arr'] = $output;
		$result['category']= $this->db->query("SELECT B.facility_cat_name,B.facility_cat_id FROM `school_facility` AS A ,`ref_facility_category` AS B WHERE A.facility_cat_id = B.facility_cat_id  GROUP BY facility_cat_name")->result_array();
		$this->load->view('infra_lookup', array_merge($this->session_data, $value, $result));
		 }
		else if ($_REQUEST['formname'] == 'enrollment'){ 
		$output = $this->enrollment_model->display_lookup();
		$output['arr']  = $output ;
		$this->load->view('enrollment_lookup', array_merge($this->session_data, $output));
		}
		 else if ($_REQUEST['formname'] == 'addsubject'){
		
		$output = $this->addsubject_model->display_lookup();
		$output['arr']  = $output ;
		$this->load->view('addsubject_lookup', array_merge($this->session_data, $output));
		 }
		 
		else if ($_REQUEST['formname'] == 'observation'){
		$output = $this->content_model->load_observ_form();
		$value['arr'] = $output;
		$result['category']= $this->db->query("SELECT B.observ_cat_name,B.observ_cat_id FROM `ref_observ_category` AS B")->result_array();
		$this->load->view('observation_lookup', array_merge($value,$this->session_data, $result));

		}

		else if ($_REQUEST['formname'] == 'fee'){
		$output = $this->content_model->load_fee_form();
		$output['arr']  = $output ;
		$this->load->view('fee_lookup', array_merge($this->session_data, $output));
		}
		
		else if ($_REQUEST['formname'] == 'qualification'){
		$output = $this->qualification_model->display_lookup();
		$output['arr']  = $output ;
		$this->load->view('addqualification_lookup', array_merge($this->session_data, $output));

		}
		
		else if ($_REQUEST['formname'] == 'designation'){
		$output = $this->designation_model->display_lookup();
		$output['arr']  = $output ;
		$this->load->view('designation_lookup', array_merge($this->session_data ,$output));
	
		}
		
		else if ($_REQUEST['formname'] == 'survey'){
		$output = $this->content_model->load_survey_form();
		$value['arr'] = $output;
		$result['category']= $this->db->query("SELECT B.survey_cat_name,B.survey_cat_id FROM `ref_survey_category` AS B GROUP BY survey_cat_name	")->result_array();
		$this->load->view('survey_lookup', array_merge($value,$this->session_data, $result));

		}
		
		else if ($_REQUEST['formname'] == 'expense'){
		$output = $this->content_model->load_expense_form();
		$value['arr'] = $output;
		$result['category']= $this->db->query("SELECT B.expense_cat_name,B.expense_cat_id FROM `ref_expense_category` AS B")->result_array();
		$this->load->view('expense_lookup', array_merge($value,$this->session_data, $result));

		}

		
	 }

 function submitform_data(){
	 
	  	if ($_REQUEST['formname'] == 'infraaddcat'){
		if($this->content_model->submit_infracat($_REQUEST)){
		$this->arr['message'] = 'Category is added'; 
		}
		$result['category']= $this->db->query("SELECT B.facility_cat_name,B.facility_cat_id FROM `school_facility` AS A ,`ref_facility_category` AS B WHERE A.facility_cat_id = B.facility_cat_id GROUP BY facility_cat_name")->result_array();//AND A.school_code = '".$this->arr['school_code']."'
		$this->load->view('infra_lookup', array_merge($this->session_data,$result));
		 }
	 
	 
	 	if ($_REQUEST['formname'] == 'suraddcat'){
		if($this->content_model->submit_surveycat($_REQUEST)){
		$this->arr['message'] = 'Survey Category is added'; 
		}
		$result['category']= $this->db->query("SELECT B.survey_cat_name,B.survey_cat_id FROM `ref_survey_category` AS B GROUP BY survey_cat_name")->result_array();
		$this->load->view('survey_lookup', array_merge($this->session_data,$result));
		 }

		if ($_REQUEST['formname'] == 'obsrvaddcat'){
		if($this->content_model->submit_obsrvcat($_REQUEST)){
		$this->arr['message'] = 'Observation Category is added'; 
		}
		$result['category']= $this->db->query("SELECT B.observ_cat_name,B.observ_cat_id FROM `ref_observ_category` AS B GROUP BY observ_cat_name")->result_array();
		$this->load->view('observation_lookup', array_merge($this->session_data,$result));
		 }

	 	if ($_REQUEST['formname'] == 'expenseaddcat'){
		if($this->content_model->submit_expensecat($_REQUEST)){
		$this->arr['message'] = 'Expense Category is added'; 
		}
		$result['category']= $this->db->query("SELECT B.expense_cat_name,B.expense_cat_id FROM `ref_expense_category` AS B GROUP BY expense_cat_name")->result_array();
		$this->load->view('expense_lookup', array_merge($this->session_data,$result));
		 }


		
		if ($_REQUEST['formname'] == 'infra'){
		if($this->content_model->submit_content($_REQUEST)){
		$this->arr['message'] = 'Infra details are added'; 
		}
		
		$result['category']= $this->db->query("SELECT B.facility_cat_name,B.facility_cat_id FROM `school_facility` AS A ,`ref_facility_category` AS B WHERE A.facility_cat_id = B.facility_cat_id GROUP BY facility_cat_name")->result_array();//AND A.school_code = '".$this->arr['school_code']."'
		$this->load->view('infra_lookup', array_merge($this->arr,$result));
		 }
		 else if ($_REQUEST['formname'] == 'enrollment'){ 
			 $data =array('class_name'=>$_REQUEST['ref_class_name']['class_name'],
				 'class_segment'=>$_REQUEST['ref_class_name']['class_segment'],
				 'update_user'=>'admin');
				if($this->db->insert('ref_class_name',  $data)){
				$this->arr['message'] = 'Enrollment details are added';
				}
				$output = $this->enrollment_model->display_lookup();
				$output['arr']  = $output ;
			    $this->load->view('enrollment_lookup', array_merge($output,$this->arr,$this->session_data));
			
		 }
			else if ($_REQUEST['formname'] == 'addsubject'){
			 $data =array('subject_name'=>$_REQUEST['ref_subject']['subject_name'],
				 'subject_category'=>$_REQUEST['ref_subject']['subject_category'],
				 'update_user'=>'admin');
				if($this->db->insert('ref_subject',  $data)){
				$this->arr['message'] = 'Add Subject details are added';
				}
				$output = $this->addsubject_model->display_lookup();
				$output['arr']  = $output ;
			    $this->load->view('addsubject_lookup', array_merge($output,$this->arr,$this->session_data));
			 }
			 
		else if ($_REQUEST['formname'] == 'observation'){
		if($this->content_model->submit_observation($_REQUEST))
		{$this->arr['message'] = 'Observation details are added';
		}
		$result['category']= $this->db->query("SELECT B.observ_cat_name,B.observ_cat_id FROM `ref_observ_category` AS B GROUP BY observ_cat_name")->result_array();
		$this->load->view('observation_lookup', array_merge($result,$this->arr,$this->session_data));
		}	
		
		
		else if ($_REQUEST['formname'] == 'survey'){
		if ($this->content_model->submit_survey($_REQUEST)){
		$this->arr['message'] = 'Survey Category is added'; 
		}
		$result['category']= $this->db->query("SELECT B.survey_cat_name,B.survey_cat_id FROM `ref_survey_category` AS B GROUP BY survey_cat_name")->result_array();
		$this->load->view('survey_lookup', array_merge($result,$this->arr,$this->session_data));

		}
		
		else if ($_REQUEST['formname'] == 'expense'){
		if($this->content_model->submit_expense($_REQUEST)){
		$this->arr['message'] = 'Expense Category is added'; 
		}
		$result['category']= $this->db->query("SELECT B.expense_cat_name,B.expense_cat_id FROM `ref_expense_category` AS B GROUP BY expense_cat_name")->result_array();
		$this->load->view('expense_lookup', array_merge($result,$this->arr,$this->session_data));

		
		}

		else if ($_REQUEST['formname'] == 'fee'){
			 $data =array('fee_name'=>$_REQUEST['ref_fee']['fee_name'],
				 'fee_category'=>$_REQUEST['ref_fee']['fee_category'],
				 'update_user'=>'admin');
				if($this->db->insert('ref_fee',$data)){
				$this->arr['message'] = 'Fee details are added';
				}
				$output = $this->content_model->display_fee_lookup();
				$output['arr']  = $output ;
			    $this->load->view('fee_lookup', array_merge($output,$this->arr,$this->session_data));

		}
		
		else if ($_REQUEST['formname'] == 'qualification'){
		 $data =array('qualification_name'=>$_REQUEST['ref_qualification']['qualification_name'],
				 	 'update_user'=>'admin');
				if($this->db->insert('ref_qualification',$data))
				{
				$this->arr['message'] = 'Qualification details are added';
				}
				$output = $this->qualification_model->display_lookup();
				$output['arr']  = $output ;
			    $this->load->view('addqualification_lookup', array_merge($output,$this->arr,$this->session_data));

		}
		
		else if ($_REQUEST['formname'] == 'designation'){
			$data =array('designation_name'=>$_REQUEST['ref_designation']['designation_name'],'update_user'=>'admin');
			if($this->db->insert('ref_designation',  $data)){
			$this->arr['message'] = 'Designation details are added';}

				$output = $this->designation_model->display_lookup();
				$output['arr']  = $output ;
			    $this->load->view('designation_lookup', array_merge($output,$this->arr,$this->session_data));
	
		
		}
		
	 }





}
?>


