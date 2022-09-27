<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
class Home extends CI_Controller {
//===========================Home=============================//

//===========================Home=============================//
public function index(){ $data = $this->page_details();
  $data['pagename'] = "Home";
  
  // $data['course_categories'] = $this->Main_model->get_popular_course_categories(8);
  $data['popular_courses'] = $this->Main_model->get_popular_courses(8);
  $data['banner_list'] = $this->Main_model->get_all_banners();
  // $data['reviews'] = $this->Main_model->get_all_u_reviews();
  
  $data['popular_courses'] = $this->Main_model->get_all_popular_courses();
  $data['recomended_courses'] = $this->Main_model->get_all_recomended_courses();

 
  $this->load->view('home_page_user', $data);

}
public function courseDetails(){
  $this->load->view('course_details_view');
}
//==========================/Home=============================//

//===========================Home=============================//
protected function page_details(){

  $is_user_in = $this->session->userdata('is_customer_in');
 
    $data['header_view'] = 'header_view_user';  // After Login
    $data['sidebar_list']= 'sidebar_list_user'; // After Login
    $data['log_customer']= $this->Login_model->customer_details();


  $data['footer_view'] = 'footer_view';
  return $data;
}
//=========================/Details===========================//
  
//======================Login Validation======================//
protected function ajax_login(){
  $is_user_in = $this->session->userdata('is_customer_in');
  if(isset($is_user_in) || $is_user_in == true){ return true;
  } else { echo json_encode(array( 'status'=>'error', 'message'=>'You are not Logged in Now!! Please login again.')); return false; 
  }
}
//=====================/Login Validation======================//

//==========================/Home=============================//
} ?>