<?php defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
class Press extends CI_Controller {
//============================Press===========================//

//============================Press===========================//
public function index(){ $data = $this->page_details();
  $data['pagename'] = "Press";

  $this->load->view('press_view', $data);
}
//===========================/Press===========================//
  
//============================Press===========================//
protected function page_details(){

  $is_user_in = $this->session->userdata('is_customer_in');
  if(isset($is_user_in) || $is_user_in == true){
    $data['header_view'] = 'header_view_user';  // After Login
    $data['sidebar_list']= 'sidebar_list_user'; // After Login
    $data['log_customer']= $this->Login_model->customer_details();
  } else {
    $data['header_view'] = 'header_view';   // Before Login
    $data['sidebar_list']= 'sidebar_list';  // Before Login
  }

  $data['footer_view'] = 'footer_view';
  return $data;
}
//===========================/Press===========================//
  
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

//===========================/Press===========================//
} ?>