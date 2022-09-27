<?php defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
class Career extends CI_Controller {
//===========================Career===========================//

//===========================Career===========================//
public function index(){ $data = $this->page_details();
  $data['pagename'] = "Careers";

  $this->load->view('career_view', $data);
}
//==========================/Career===========================//
  
//===========================Career===========================//
protected function page_details(){

  $is_user_in = $this->session->userdata('is_customer_in');
 
    $data['header_view'] = 'header_view_user';  // After Login
    $data['sidebar_list']= 'sidebar_list_user'; // After Login
    $data['log_customer']= $this->Login_model->customer_details();
 
  $data['footer_view'] = 'footer_view';
  return $data;
}
//==========================/Career===========================//
  
//======================Login Validation======================//
protected function require_login(){
  $is_user_in = $this->session->userdata('is_customer_in');
  if(isset($is_user_in) || $is_user_in == true){ return;
  } else { redirect('Home'); }
}

protected function ajax_login(){
  $is_user_in = $this->session->userdata('is_customer_in');
  if(isset($is_user_in) || $is_user_in == true){ return true;
  } else { echo json_encode(array( 'status'=>'error', 'message'=>'You are not Logged in Now!! Please login again.')); return false; 
  }
}
//=====================/Login Validation======================//

//==========================/Career===========================//
} ?>