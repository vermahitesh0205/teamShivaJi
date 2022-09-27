<?php defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
class Pages extends CI_Controller {
//============================About===========================//

//============================About===========================//
public function About(){ $data = $this->page_details();
  $data['pagename'] = "About Us";
  //  $data['teams_list'] = $this->Main_model->get_all_teams();
  // $data['partners_list'] = $this->Main_model->get_all_partners();
  $this->load->view('about_us_view', $data);
}

public function Contact(){ $data = $this->page_details();
  $data['pagename'] = "Contact Us";

  $this->load->view('contact_us_view', $data);
}
public function Term(){ $data = $this->page_details();
  $data['pagename'] = "Terms of Use";

  $this->load->view('terms_of_use_view', $data);
}

public function Privacy(){ 
  $data = $this->page_details();
  $data['pagename'] = "Privacy Policy";

  $this->load->view('privacy_policy_view', $data);
}
//===========================/About===========================//

//============================About===========================//
protected function page_details(){

  $is_user_in = $this->session->userdata('is_customer_in');
  
    $data['header_view'] = 'header_view_user';  // After Login
    $data['sidebar_list']= 'sidebar_list_user'; // After Login
    $data['log_customer']= $this->Login_model->customer_details();
 
  $data['footer_view'] = 'footer_view';
  return $data;
}


//===========================/About===========================//
  
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

//===========================/About===========================//
} ?>