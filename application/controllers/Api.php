<?php defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
class Api extends CI_Controller {
//===========================Course===========================//

//===========================Course===========================//

public function signup_user(){
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($data = $this->Api_model->signup_user()){
      $info = array( 'response'=>'success',
        'userid'=>$data
      );
    }else{ $info = array( 'response'=>'error',
        'userid'=> '',
      );
    } echo json_encode($info);
  }
}

public function get_all_banners(){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      if($data = $this->Api_model->get_all_banners()){
        $info = array( 'response'=>'success',
          'banners'=>$data
        );
      }else{ $info = array( 'response'=>'error',
          'banners'=> '',
        );
      } echo json_encode($info);
    }
  }

public function get_all_courses(){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      if($data = $this->Api_model->get_all_courses()){
        $info = array( 'response'=>'success',
          'courses'=>$data
        );
      }else{ $info = array( 'response'=>'error',
          'courses'=> '',
        );
      } echo json_encode($info);
    }
  }
public function get_a_course_details(){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      if($data = $this->Api_model->get_a_course_details()){
        $info = array( 'response'=>'success',
          'courses_details'=>$data
        );
      }else{ $info = array( 'response'=>'error',
          'courses_details'=> '',
        );
      } echo json_encode($info);
    }
  }
public function get_all_course_wishlist(){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      if($data = $this->Api_model->get_all_course_wishlist()){
        $info = array( 'response'=>'success',
          'course_wishlist'=>$data
        );
      }else{ $info = array( 'response'=>'error',
          'course_wishlist'=> '',
        );
      } echo json_encode($info);
    }
  }
public function get_customer_all_courses(){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      if($data = $this->Api_model->get_customer_all_courses()){
        $info = array( 'response'=>'success',
          'courseId'=>$data
        );
      }else{ $info = array( 'response'=>'error',
          'courseId'=> '',
        );
      } echo json_encode($info);
    }
  }


public function index(){ $data = $this->page_details();
  $data['pagename'] = "All Courses";
  
  $data['all_value']  = $this->Main_model->get_all_courses();

  $this->load->view('course_view_all', $data);
}

public function offer(){ $data = $this->page_details();
  $data['pagename'] = "Offer Courses";

  $data['offer_id'] = $this->input->get('of');
  $data['offer_dtl']= $this->Main_model->get_a_offer($data['offer_id']);
  if(empty($data['offer_dtl'])) redirect("Explore");
  $data['all_value']= $this->Main_model->get_aoffer_all_courses($data['offer_id']);
  
  $this->load->view('offer_courses_list', $data);
}

public function details(){ $data = $this->page_details();
  $data['pagename'] = "Offer Details";

  $data['course_id']= $this->input->get('cr');
  $this->Main_model->insert_course_view($data['course_id']);
  $data['testimonials'] = $this->Main_model->get_all_testimonials();

  $data['a_value']  = $this->Main_model->get_a_course_details($data['course_id']);
  // if(empty($data['a_value'])) redirect('Home');
  $data['subject_list']=$this->Main_model->get_a_cource_subjects_topics($data['course_id']);

  $is_user_in = $this->session->userdata('is_customer_in');
  if(isset($is_user_in) || $is_user_in == true){ 
    $user_course = $this->User_model->check_is_user_course($data['course_id']);
  } else { $user_course = 0; }

  if ($user_course == 1) {
    $data['action_btn'] = '<a href="'.site_url("My/course_subject?id=").$data['a_value'][0]->m_course_id.'"><button class="btn_buy">Already on My Courses List</button></a>';
  }else if($data['a_value'][0]->m_course_type == 1){
    $data['action_btn'] = '<button data-id='.$data['a_value'][0]->m_course_id.' id="btn-free-course" class="btn_buy">Buy Now For Free</button>';
  }else{
    $data['action_btn'] = '<a href="'.site_url("Checkout?cr=").$data['a_value'][0]->m_course_id.'"><button class="btn_buy">Buy Now at ₹ '.$data['a_value'][0]->m_course_offer_price.'</button></a>';
  }
  
  $this->load->view('course_details_view', $data);
}

public function category(){ $data = $this->page_details();
  $data['pagename'] = "Category Courses";

  $data['cat_id'] = $this->input->get('ct');
  $data['category_dtl']= $this->Main_model->get_a_category_dtl($data['cat_id']);
  $data['all_value']   = $this->Main_model->get_a_category_cources($data['cat_id']);
  
  $this->load->view('category_courses_list', $data);
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
}
