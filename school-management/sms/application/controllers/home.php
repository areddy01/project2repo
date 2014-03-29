<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {

  function __construct(){
    parent::__construct();
  }

  function index(){
    if($this->session->userdata('logged_in')){
      $session_data = $this->session->userdata('logged_in');
     $this->load->view('home_view', $session_data);
    }
    else
    {
      //If no session, redirect to login page
      redirect('login', 'refresh');
	}
  }
  /* logout funtion */

  function logout(){
    $this->session->unset_userdata('logged_in');
    session_destroy();
    $this->load->view('login_view');
  }
	
}
?>
