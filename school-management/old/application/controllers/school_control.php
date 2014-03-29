<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//we need to call PHP's session object to access it through CI

class School_control extends CI_Controller 
{
 function __construct(){
	parent::__construct();
	if($this->session->userdata('logged_in')){
			$this->variable = $this->session->userdata('logged_in');
			}
			else{
			redirect('login', 'refresh');
		} 

  }
/* Select school 
Author : Nishant Sharma*/
function select_school(){
    $q = isset($_REQUEST['q']) ? $_REQUEST['q'] : "";
    $limit = isset($_REQUEST['limit']) ? $_REQUEST['limit'] : "";
   $result = $this->db->query("SELECT a.school_code,b.school_name FROM assessment a , school b WHERE school_name LIKE '%$q%' AND a.school_code = b.school_code AND a.assessment_status = 1 ORDER BY b.id ASC LIMIT 0 ,$limit")->result_array();
    $customers = array();
	for($arr=0;$arr<count($result);$arr++){
	$sname = $result[$arr]['school_name'];
	$id = $result[$arr]['school_code'];
	echo "{[suggestion: $sname, ID $id\n";
	}
}

/* Enter school 
Author : Nishant Sharma*/

function enter_school(){
error_reporting(E_ALL^E_NOTICE);
$data=str_replace(" " ,"" ,$_REQUEST['tag']);
$data = explode(",", $_REQUEST['tag']);
$output['school_name'] =($data[0]);
$data=str_replace(" " ,"," ,$data[1]);
$data = (explode("," ,$data));
$validate =count($data);
$output['school_code']=($data[2]);
$result = $this->db->query("SELECT a.assessment_id, b.school_name, b.school_code FROM assessment a , school b WHERE a.school_code ='".$output['school_code']."' AND a.assessment_status = 1 AND a.school_code = b.school_code AND b.school_name = '".trim($output['school_name'])."'")->result_array();
if(count($result)==0 ||$validate >3){
$schoolinfo['message'] = 'School is not present in database';
$this->load->view('home_view', array_merge($this->variable , $schoolinfo));
}
else
{
$formarray['school_code']=$result[0]['school_code'];
$formarray['school_name']=$result[0]['school_name'];
$formarray['assessment_id'] = $result[0]['assessment_id'];
$schoolinfo['info'] = base64_encode(serialize($formarray));
$schoolinfo['user_roll'] = $this->variable['user_roll'];

$this->load->view('admin_view', array_merge($schoolinfo,$formarray));
}
}


}
?>