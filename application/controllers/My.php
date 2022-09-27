<?php defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
class My extends CI_Controller {
//==========================Customer==========================//

//==========================Customer==========================//
public function check_loginid(){
  $login_id= $this->input->post('login_id'); 
  if($info = $this->User_model->check_loginid($login_id)){
  }else{ $info = array('status'=>'error', 'message'=>'Some problem occured!! please try again');
  } echo json_encode($info);
}

public function index(){ redirect('My/profile'); }
//=========================/Customer==========================//

//===========================Course===========================//
public function course(){ $data = $this->page_details();
  $data['pagename'] = "My Cources";
  
  $data['all_value']  = $this->User_model->get_customer_all_courses();

  $this->load->view('user_course_view', $data);
}

public function course_subject(){ $data = $this->page_details();
  $data['pagename'] = "My Cource Subjects";
  
  $data['course_id']  = $this->input->get('id');
  $data['all_value']  = $this->User_model->get_customer_course_subjects($data['course_id']);
  $this->load->view('user_course_subjects', $data);
}

public function subject_topics(){ $data = $this->page_details();
  $data['pagename'] = "My Cource Topics";
  
  $data['course_id']  = $this->input->get('cr');
  $data['subject_id'] = $this->input->get('id');
  $data['topicid'] = $this->input->get('tid');
  $data['all_value']=$this->User_model->get_customer_course_sub_topics( $data['subject_id'], $data['course_id']);
  $data['all_subjects']=$this->User_model->get_customer_course_subjects_limit(8, $data['course_id']);
  if($data['topicid']  == '')
  {
    $data['topicid'] =  $data['all_value'][0]->mlecture_id;
  }
  else
  {
     $data['topicid'] = $this->input->get('tid');
  }
  

  $this->load->view((!empty($data['all_value'])?'user_course_subject_topics':'user_course_subject_no_topics'), $data);
}

 public function update_course_status(){ $data = $this->page_details();
     
      $topicid = $this->input->post('topic_id');
      $subject = $this->input->post('subject');
      $customerid = $this->session->userdata('customer_id');

       $this->User_model->insert_course_status($topicid,$subject,$customerid);

       echo json_encode('success');

  }
//==========================/Course===========================//

//============================Notes===========================//
public function notes(){ $data = $this->page_details();
  $data['pagename'] = "My Notes";
  
  $data['all_value']  = $this->User_model->get_customer_notes();

  $this->load->view('user_notes_view', $data);
}

public function subjects(){ $data = $this->page_details();
  $data['pagename'] = "My Notes Subjects";
  
  $data['notes_id']  = $this->input->get('id');
  $data['all_value'] = $this->User_model->get_customer_notes_subjects($data['notes_id']);

  $this->load->view('user_notes_subjects', $data);
}

public function notes_files(){ $data = $this->page_details();
  $data['pagename'] = "My Notes Files";
  
  $data['sub_id']   = $this->input->get('id');
  $data['notes_id'] = $this->input->get('nt');
  $data['all_value']= $this->User_model->get_customer_nsub_notes_files($data['sub_id'], $data['notes_id']);

  $this->load->view('user_notes_subject_files', $data);
}
//===========================/Notes===========================//

//===========================Test=============================//
public function test_package(){ $data = $this->page_details();
  $data['pagename'] = "My Test Series";
  
  $data['all_value'] = $this->User_model->get_customer_tpackages();

  $this->load->view('user_test_package_view', $data);
}

public function test(){ $data = $this->page_details();
  $data['pagename'] = "My Test List";
  
  $data['pkg_id']    = $this->input->get('id');
  $data['all_value'] = $this->User_model->get_customer_package_tests($data['pkg_id']);

  $this->load->view('user_test_view', $data);
}

public function test_quiz(){ $data = $this->page_details();
  $data['pagename'] = "My Test Quiz";
  
  $data['pkg_id']   = $this->input->get('pk');
  $data['test_id']  = $this->input->get('id');
  $data['test_dtl'] = $this->User_model->get_customer_package_a_test($data['pkg_id'], $data['test_id']);
  if(empty($data['test_dtl'])) redirect('My/test_package');
  $data['all_value'] = $this->User_model->get_customer_test_questions($data['test_id'], $data['pkg_id']);

  $this->load->view('user_test_quiz_view', $data);
}

public function insert_quiz_ans(){ if ($this->ajax_login() === false) { return; }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($this->User_model->insert_customer_test_ques_ans()){
      $info = array( 'status'=>'success',
        'message'=>'Answers has been Submitted successfully!'
      );
    }else{ $info = array( 'status'=>'error',
        'message'=>'Some problem Occurred!! please try again'
      );
    } echo json_encode($info);
  }
}
//===========================Test=============================//

//=========================Wishlist===========================//
public function course_wish(){ $data = $this->page_details();
  $data['pagename'] = "Courses Wish";
  
  $data['all_value']  = $this->User_model->get_all_course_wishlist();

  $this->load->view('user_course_wish', $data);
}

public function test_wish(){ $data = $this->page_details();
  $data['pagename'] = "Test Series Wish";
  
  $data['all_value']  = $this->User_model->get_all_test_wishlist();

  $this->load->view('user_test_wish', $data);
}

public function notes_wish(){ $data = $this->page_details();
  $data['pagename'] = "Notes Wish";
  
  $data['all_value']  = $this->User_model->get_all_notes_wishlist();

  $this->load->view('user_notes_wish', $data);
}
//=========================Wishlist===========================//

//==========================Customer==========================//
public function setting(){ $data = $this->page_details();
  $data['pagename'] = "Setting";

  $data['a_value']  = $this->User_model->customer_details();
  if (empty($data['a_value'])) redirect('Home');

  $data['countries_list'] = $this->User_model->get_all_countries();
  $data['states_list']=$this->User_model->get_country_states($data['a_value'][0]->m_country_id);
  $data['cities_list']=$this->User_model->get_state_cities($data['a_value'][0]->m_state_id);
  $data['areas_list'] =$this->User_model->get_city_areas($data['a_value'][0]->kh_user_city);

  $this->load->view('user_setting_view', $data);
}

public function profile(){ $data = $this->page_details();
  $data['pagename'] = "Profile";

  $this->load->view('user_profile_view', $data);
}
//=========================/Customer==========================//

//===========================Details==========================//
protected function page_details(){

  $is_user_in = $this->session->userdata('is_customer_in');
  if(isset($is_user_in) || $is_user_in == true){
    $data['header_view'] = 'header_view_user';  // After Login
    $data['sidebar_list']= 'sidebar_list_user'; // After Login
    $data['log_customer']= $this->Login_model->customer_details();
  } else { redirect('Home'); }

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

public function zoom_live(){ $data = $this->page_details();
  $data['pagename'] = "Zoom Live Classes";

  $this->load->view('zoom_live', $data);
}

//=========================/Customer==========================//
} ?>