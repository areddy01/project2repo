<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//we need to call PHP's session object to access it through CI

class Email_control	extends CI_Controller 
{
 function __construct(){
	parent::__construct();
	$this->load->library('email');
	if (!isset($_POST))
		redirect('forget_password', 'refresh');
  }
 
function resetpassword(){

$this->load->view('Reset_password');
}


/* Forget Password 
Author : Nishant Sharma*/

  function forget_password(){

	$this->load->view('forget_password');	
  }

  function send_email(){

$getuser =  $this->db->query("SELECT * FROM users WHERE  email = '".$_POST['email']."'")->result_array();
if (count($getuser) >0){
$length = 8 ;
 $chars = "234567890abcdefghijkmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$i = 0;
	$password = "";
	while ($i <= $length) {
		$password .= $chars{mt_rand(0,strlen($chars))};
		$i++;
	}

$url = $_SERVER['HTTP_HOST'];
$this->email->from('sharma.nishant2@gmail.com', 'GMC');
$this->email->to($_POST['email']);
$this->email->subject('Password Recovery');
$this->email->message("Please use password to login:'".$password."'");
$data['messages'] = "Please login to email id to get new password !!"; 
$this->load->view('forget_password', $data );

}
else{
$data['messages'] = "Email id is not register in our database";
$this->load->view('forget_password', $data );
}

  }



}
?>