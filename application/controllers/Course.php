<?php defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
class Course extends CI_Controller {
//===========================Course===========================//

//===========================Course===========================//
public function index(){ $data = $this->page_details();
  $data['pagename'] = "All Courses";
  
  $data['all_value']  = $this->Main_model->get_all_courses();

  $this->load->view('course_view_all', $data);
}



public function details(){ $data = $this->page_details();
  $data['pagename'] = "Offer Details";

  $data['course_id']= $this->input->get('cr');
  $this->Main_model->insert_course_view($data['course_id']);
  $data['a_value']  = $this->Main_model->get_a_course_details($data['course_id']);
 
  $is_user_in = $this->session->userdata('is_customer_in');
  if(isset($is_user_in) || $is_user_in == true){ 
    $user_course = $this->User_model->check_is_user_course($data['course_id']);
  } else { $user_course = 0; }

  if ($user_course == 1) {
    $data['action_btn'] = '<a href="'.site_url("Course").$data['a_value'][0]->m_course_id.'"><button class="btn_buy">Already on My Courses List</button></a>';
  
  }else{
    $data['action_btn'] = '<a class="register_course" data-id="'.$data['a_value'][0]->m_course_id.'" ><button class="btn_buy"> Enroll For Free </button></a>';
  }
  // href="'.site_url("Course/course_registration?cr=").$data['a_value'][0]->m_course_id.'"
  $this->load->view('course_details_view', $data);
}


 public function add_to_wishlist(){
    $id = $this->input->post('id');
    $user = $this->session->userdata('customer_id');
    $type = $this->input->post('type');; // wishlist type is course
    if(!empty($user) && $user !=""){
        if($wishlist = $this->User_model->insert_wishlist($id,$user,$type)){
           $output = array(
              "status"=>"success",
              "message"=> "Successfully added to wishlist"
            );
            echo json_encode($output);
        }else{
          $output = array(
              "status"=>"fail",
              "message"=> "Some Problem Occured!! Please Try Again"
            );
            echo json_encode($output);
        }
    }else{
      $output = array(
              "status"=>"fail",
              "message"=> "Please Login to add this item in wishlist"
            );
      echo json_encode($output);
    }
  }
//==========================/Course===========================//

public function course_registration()
{
  $data['cr_id'] = $this->input->post('id');
  
    if($course_registration = $this->User_model->insert_registration($data['cr_id'])){
       $output = array(
          "status"=>"success",
          "message"=> "Course Added Successfully"
        );
        echo json_encode($output);
    }else{
      $output = array(
          "status"=>"fail",
          "message"=> "Some Problem Occured!! Please Try Again"
        );
        echo json_encode($output);
    }

}

//===========================Course===========================//
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

//==========================/Course===========================//
} ?>