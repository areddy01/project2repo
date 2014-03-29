	<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//we need to call PHP's session object to access it through CI

class Email_control	extends CI_Controller 
{
 function __construct(){
	parent::__construct();
	error_reporting(0);	
	$this->load->library('email');
	
		 if($this->session->userdata('logged_in'))
    {
      $this->session_data = $this->session->userdata('logged_in');
    }
    else
    {
      //If no session, redirect to login page
     //redirect('login', 'refresh');
	}

	if (!isset($_POST))
	redirect('forget_password', 'refresh');
}
 
function resetpassword(){
$this->load->view('Reset_password',$this->session_data);
}


/* Forget Password 
Author : Nishant Sharma*/

  function forget_password(){

	$this->load->view('forget_password');	
  }

/* Changed Password 
Author : Nishant Sharma*/
function changepassword(){

error_reporting(E_ALL ^ E_NOTICE);
 $getuser =  $this->db->query("SELECT * FROM users WHERE  id = '".$this->session_data['id']."'")->result_array();

//echo 
$coparepass = MD5($_POST['password']);
//echo "<br />";
// echo $getuser[0]['password'];
if(MD5($_POST['password'])!= $getuser[0]['password']){
//echo "shiva khali";

$arr['messege'] =  'entered current password is wrong';
}
elseif($_POST['newpassword']!=$_POST['newpassword1'])
{
$arr['messege'] = 'entered passwords are not same';
}else{
//echo "boss enterd else";

$data = array('password'=> MD5($_POST['newpassword']));
$condition = array('id' => $this->session_data['id'],);
$this->db->where($condition);
$this->db->update('users',  $data);
$arr['messege'] =  'Password has been changed';
}
$this->load->view('Reset_password', $arr);
}

/* Send Email 
Author : Nishant Sharma*/
  function send_email(){

$getuser =  $this->db->query("SELECT * FROM users WHERE  email = '".$_POST['email']."'")->result_array();
if (count($getuser) >0){
   $length = 8 ;
   $chars = "1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
   $i = 0;
   $password = "";
	    while ($i <= $length) {
	       $password .= $chars{mt_rand(0,strlen($chars))};
	       $i++;
	        }
$data['password']=$password;
$data['email']=$_POST['email'];
$this->load->model('forget_model','',TRUE);
$this->forget_model->general($data);
$url = $_SERVER['HTTP_HOST'];
$this->email->from('sharma.nishant2@gmail.com', 'GMC');
$this->email->to($_POST['email']);
$this->email->subject('Password Recovery');
$this->email->message("Please use password to login:'".$password."'");
$data['messages'] = "Please login to email id to get new password !!"; 
$this->load->view('forget_password', $data );
}
else{
$data['messages'] = "Email ID is Invalid";
$this->load->view('forget_password', $data );
}

  }



}
?>
