<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Outside_controller extends CI_Controller {

  function __construct(){
    parent::__construct();
	$this->load->model('admindata','',TRUE);
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
 function add_user(){
		
		$this->load->view('adduser_view', $this->session_data);
}

function addschool(){	
	$this->load->view('add_school', $this->session_data);
	}


	function adddatabase (){
	if(isset($_REQUEST['submit'])){
	$result = $this->db->query("SELECT id FROM school ORDER BY id DESC LIMIT 1")->result_array();
	$schoolid = $result[0]['id'];
	$rest =  preg_replace('/\D/', '', $schoolid);
    $rest = $rest +1 ;
	$var =str_pad($rest, 4, '0', STR_PAD_LEFT);
    $value['school_code']  = $_REQUEST['schoolname']['location'].$var;
	$value['school_name'] =  $_REQUEST['schoolname']['school'];
	$value['date']  = date("Y-m-d");
	if($this->admindata->AddSchoolDB($value)){
	$value['message'] = 'School is added in database';
	$value['newschool']  = 'addnewschool';	
	$this->load->view('add_school', array_merge($value,$this->session_data));
	}
	}
	else{
		$this->load->view('add_school',  array_merge($value,$this->session_data));
	}
	}

	function display_school(){
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
	$data ['tab'] = '';
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
	echo "<preg>";
	//print_r($data["results"]);
    $this->load->view("display_school", array_merge($data,$this->session_data));

}

function get_school(){
	if (isset($_REQUEST['school'])){
	$school  = $_REQUEST['school'];
	$config = array();
	$school  = explode(" ", $school);
	$arrlocation = count($school);
	$value['id']  = trim(($school[$arrlocation-1]));
	}
	else{
	$value['id'] = '';
	}
	$data["results"] = $this->db->query("SELECT a.school_code, b.assessment_status, a.school_name FROM school a, assessment b WHERE a.school_code =b.school_code AND  a.school_code ='".$school[3]."' GROUP BY a.school_code ORDER BY a.id")->result_array();
	$data["links"] = $this->pagination->create_links();

	$data ['tab'] = '';
	$data['message'] = 'List Of School';
	$data['newschool']  = 'showschool';
    /*$config["base_url"] = base_url() . "admin/display_school";
    $config["total_rows"] = $this->admindata->record_count();
    $config["per_page"] = 10;
    $config["uri_segment"] = 3;
    $this->pagination->initialize($config);
    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	$data["results"] = $this->admindata->GetSchooDB($config["per_page"],$page, $value);*/
	
	
    $this->load->view("display_school", array_merge($data,$this->session_data));

}

/* New assesment start */
function start_assessment(){
	$data=str_replace(" " ,"" ,$_REQUEST['tag']);
	$data = explode(",", $_REQUEST['tag']);
	$output['school_name'] =$data[0];
	$data = (explode(" ",$data[1]));
	$output['school_code']=($data[2]);
	
	$data= array('school_code' =>$output['school_code'],
		'academic_year' => 	$_REQUEST['academic_year'],
	'assessment_date' =>$_REQUEST['assessment_date'],
	
	'school_assessed_by' =>$_REQUEST['school_assessed_by'],
	
	'school_assessed_again_same_year'=>$_REQUEST['school_assessed_again_same_year'],
	'assessment_type_if_re_assessed'=>$_REQUEST['assessment_type_if_re_assessed'],	
	'assessment_status'=>1);
	$recsetclear = $this->db->query("SELECT * FROM `assessment` WHERE school_code = '".$data['school_code']."' AND assessment_status =1");
	$validate =($recsetclear->result_array());
	if(count($validate)== 0){
	$this->db->insert('assessment',  $data);
	$output['message'] = $output['school_name'] . " Assessment Started";
	}
	else{
	$output['message'] = $output['school_name'] . " Assessment is already Started";
	}
	//$output['username'] = $this->variable['username'];
	$this->load->view('new_assesment',  array_merge($output ,$this->session_data));
}
/*assesment template load */

function assement(){
	 if($this->session->userdata('logged_in'))
    {
      $session_data = $this->session->userdata('logged_in');
      $data['username'] = $session_data['username'];
	  $this->load->view('new_assesment',array_merge($this->session_data, $data));
    }
}

/* Validation for school assesment */

function assesment_school(){
	
    $q = isset($_REQUEST['q']) ? $_REQUEST['q'] : "";
    $limit = isset($_REQUEST['limit']) ? $_REQUEST['limit'] : "";
    $result = $this->db->query("SELECT b.school_code,b.school_name FROM assessment a , school b WHERE school_name LIKE '%$q%' AND a.school_code != b.school_code ORDER BY b.id ASC LIMIT 0,$limit")->result_array();
    $customers = array();
	for($arr=0;$arr<count($result);$arr++){
	$sname = $result[$arr]['school_name'];
	$id = $result[$arr]['school_code'];
	echo "{[suggestion: $sname, ID $id\n";
	}
}

/* search school */

function search_school(){
 	$q = isset($_REQUEST['q']) ? $_REQUEST['q'] : "";
    	$limit = isset($_REQUEST['limit']) ? $_REQUEST['limit'] : "";
    	echo $result = $this->db->query("SELECT school_code,school_name FROM school WHERE school_name LIKE '%$q%' ORDER BY school_name ASC LIMIT 0,$limit")->result_array();
    	$customers = array();
    	
	for($arr=0;$arr<count($result);$arr++){
	$sname = $result[$arr]['school_name'];
	$id = $result[$arr]['school_code'];
	echo "{[suggestion: $sname, ID $id\n";
	}
}


}
?>


