<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
Class Outputview extends CI_Controller {

  function __construct(){
    parent::__construct();
	$this->load->model('admindata','',TRUE);
	$this->load->library("pagination");
	 if($this->session->userdata('logged_in'))
    {
      $this->session_data = $this->session->userdata('logged_in');
	  $this->variable = $this->session->userdata('logged_in');
	  
    }
    else
    {
      //If no session, redirect to login page
      redirect('login', 'refresh');
	}
  }

function select_school(){
    $this->load->view("getschool", $this->session_data);

}

function assessment_id(){

$data=str_replace(" " ,"" ,$_REQUEST['data']);
$data = explode(",", $_REQUEST['data']);
$output['school_name'] =$data[0];
$data=str_replace(" " ,"," ,$data[1]);
$data = (explode("," ,$data));
$validate =count($data);
$output['school_code']=($data[2]);

$result = $this->db->query("SELECT assessment_id , school_name FROM assessment a , school b WHERE a.school_code ='".$output['school_code']."' AND a.school_code = b.school_code AND b.school_name = '".trim($output['school_name'])."'")->result_array();
if(count($result)==0 ||$validate >3){
$schoolinfo['message'] = 'School is not present in database';
echo json_encode($schoolinfo['message']);
}
else
{
$output['assessment_id'] = $result[0]['assessment_id'];
$schoolinfo['info'] = base64_encode(serialize($output));
$select = "<select id='tagid' width ='20'>";
for($arr=0;$arr<count($result);$arr++){
$select .="<option value ='".$result[$arr]['assessment_id']."'>".$result[$arr]['assessment_id']."</option>";
}
$select .="</select>";
echo json_encode($select) ;
}

}

function get_school(){
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

function schoolreports(){
$data=str_replace(" " ,"" ,$_REQUEST['tag']);
$data = explode(",", $_REQUEST['tag']);
$output['school_name'] =$data[0];
$data=str_replace(" " ,"," ,$data[1]);
$data = (explode("," ,$data));
$validate =count($data);
$output['school_code']=($data[2]); 
$assesed = $_REQUEST['assmentid'];
$result = $this->db->query("SELECT a.assessment_id, b.school_name, b.school_code FROM assessment a , school b WHERE a.school_code ='".$output['school_code']."' AND a.assessment_id = ".$assesed." AND a.school_code = b.school_code AND b.school_name = '".trim($output['school_name'])."'")->result_array();
if(count($result)==0 ||$validate >3){
$schoolinfo['message'] = 'School is not present in database';
$this->load->view('select_school', array_merge($this->variable , $schoolinfo));
}
else
{
$formarray['school_code']=$result[0]['school_code'];
$formarray['school_name']=$result[0]['school_name'];
$formarray['assessment_id'] = $result[0]['assessment_id'];

$schoolinfo['info'] = base64_encode(serialize($formarray));
$schoolinfo['user_roll'] = $this->variable['user_roll'];
$this->load->view('reports', array_merge($schoolinfo,$formarray,$this->variable));
}
}
function studentreport(){
	$schoolinfo['info'] = $_REQUEST['info'];
	$schoolinfo['user_roll'] = $this->variable['user_roll'];
  //$this->load->view("studentreport", array_merge($this->session_data, $schoolinfo));

}
}
?>

