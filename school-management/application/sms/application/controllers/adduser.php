<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adduser extends CI_Controller {

  function __construct()
  {
    parent::__construct();
	$this->load->model('user','',TRUE);
  }
/* loading view after page login page */

  function add_user()
  {
	
	$value['first_name']=$_REQUEST['fname'];
	$value['last_name']=$_REQUEST['lname'];
	$value['date_of_birth']=$_REQUEST['dob'];
	$value['username'] = $_REQUEST['username'];
	$value['password'] = md5($_REQUEST['password']);
	$value['user_roll'] = $_REQUEST['usertype'];
	$value['email'] = $_REQUEST['email'];
	
    $this->user->adddb_user($value);
	$data['message'] = 'user is added in database';
	$this->load->view('adduser_view', $data);
  }

}

?>
