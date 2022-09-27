<?php defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
class Checkout extends CI_Controller {
//==========================Checkout==========================//

//==========================Checkout==========================//
public function index(){ $data = $this->page_details2();
  $data['pagename'] = "Checkout";

  $data['cr_id']    = $this->input->get('cr');
  $data['a_value']  = $this->User_model->customer_details();
  $data['a_course'] = $this->Main_model->get_a_course_details($data['cr_id']);
  if (empty($data['a_value']) || empty($data['a_course'])){ redirect('Home');}

  $data['countries_list'] = $this->User_model->get_all_countries();
  $data['states_list'] = $this->User_model->get_country_states($data['a_value'][0]->m_country_id);
  $data['cities_list'] = $this->User_model->get_state_cities($data['a_value'][0]->m_state_id);
  $data['areas_list']  = $this->User_model->get_city_areas($data['a_value'][0]->kh_user_city);

  $this->load->view('buy_now_check_out', $data);
}

public function add_free_course(){ if ($this->ajax_login() === false) { return; }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($info = $this->User_model->insert_free_course($this->input->post('id'))){
    }else{ $info = array( 'status'=>'error',
        'message'=>'Some problem Occurred!! please try again'
      );
    } echo json_encode($info);
  }
}

public function notes(){ $data = $this->page_details2();
  $data['pagename'] = "Checkout";

  $data['cr_id']    = $this->input->get('cr');
  $data['a_value']  = $this->User_model->customer_details();
  $data['a_notes'] = $this->Main_model->get_a_notes_details($data['cr_id']);
  if (empty($data['a_value']) || empty($data['a_notes'])) redirect('Home');

  $data['countries_list'] = $this->User_model->get_all_countries();
  $data['states_list']=$this->User_model->get_country_states($data['a_value'][0]->m_country_id);
  $data['cities_list'] = $this->User_model->get_state_cities($data['a_value'][0]->m_state_id);
  $data['areas_list']  = $this->User_model->get_city_areas($data['a_value'][0]->kh_user_city);

  $this->load->view('buy_now_check_out_notes', $data);
}

public function add_free_notes(){ if ($this->ajax_login() === false) { return; }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($info = $this->User_model->insert_free_notes($this->input->post('id'))){
    }else{ $info = array( 'status'=>'error',
        'message'=>'Some problem Occurred!! please try again'
      );
    } echo json_encode($info);
  }
}

public function test(){ $data = $this->page_details2();
  $data['pagename'] = "Checkout";

  $data['cr_id']    = $this->input->get('cr');
  $data['a_value']  = $this->User_model->customer_details();
  $data['a_test'] = $this->Main_model->get_a_tpackage_details($data['cr_id']);
  if (empty($data['a_value']) || empty($data['a_test'])) redirect('Home');

  $data['countries_list'] = $this->User_model->get_all_countries();
  $data['states_list'] = $this->User_model->get_country_states($data['a_value'][0]->m_country_id);
  $data['cities_list'] = $this->User_model->get_state_cities($data['a_value'][0]->m_state_id);
  $data['areas_list']  = $this->User_model->get_city_areas($data['a_value'][0]->kh_user_city);

  $this->load->view('buy_now_check_out_test', $data);
}


public function add_free_test(){ if ($this->ajax_login() === false) { return; }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($info = $this->User_model->insert_free_test($this->input->post('id'))){
    }else{ $info = array( 'status'=>'error',
        'message'=>'Some problem Occurred!! please try again'
      );
    } echo json_encode($info);
  }
}

public function update_address(){ if ($this->ajax_login() === false) { return; }
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if ($data = $this->User_model->check_loginid($_POST['kh_user_contact'])) {
      if ($data['status'] == 'success') { $_POST['kh_user_contact'] = $data['current_id']; }
    }
    if($data = $this->User_model->update_address()){
      $info = array( 'status'=>'success',
        'message'=>'Your profile has been Updated successfully!'
      );
    }else{ $info = array( 'status'=>'error',
        'message'=>'Some problem Occurred!! please try again'
      );
    } echo json_encode($info);
  }
}
//=========================/Checkout==========================//

//==========================Location==========================//
public function country_states_list(){ 
  if($_SERVER["REQUEST_METHOD"] == "POST"){ $id = $this->input->post('id');
    if($data = $this->User_model->get_country_states($id)){
      $info = array( 'status'=>'success', 'list'=>$data );
    }else{ $info = array( 'status'=>'error',
        'message'=>'Some problem Occurred!! please try again'
      );
    } echo json_encode($info);
  }
}

public function state_cities_list(){ 
  if($_SERVER["REQUEST_METHOD"] == "POST"){ $id = $this->input->post('id');
    if($data = $this->User_model->get_state_cities($id)){
      $info = array( 'status'=>'success', 'list'=>$data );
    }else{ $info = array( 'status'=>'error',
        'message'=>'Some problem Occurred!! please try again'
      );
    } echo json_encode($info);
  }
}

public function city_areas_list(){ 
  if($_SERVER["REQUEST_METHOD"] == "POST"){ $id = $this->input->post('id');
    if($data = $this->User_model->get_city_areas($id)){
      $info = array( 'status'=>'success', 'list'=>$data );
    }else{ $info = array( 'status'=>'error',
        'message'=>'Some problem Occurred!! please try again'
      );
    } echo json_encode($info);
  }
}
//=========================/Location==========================//

//==========================Details===========================//
protected function page_details2(){

  $is_user_in = $this->session->userdata('is_customer_in');
  if(isset($is_user_in) || $is_user_in == true){
    $data['header_view'] = 'header2_view_user';  // After Login
    $data['log_customer']= $this->Login_model->customer_details();
  } else redirect('Login');

  $data['footer_view'] = 'footer_view';
  return $data;
}

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
//=========================/Details===========================//
  
//======================Login Validation======================//
protected function require_login(){
  $is_user_in = $this->session->userdata('is_customer_in');
  if(isset($is_user_in) || $is_user_in == true){ return;
  } else { redirect('SignUp'); }
}

protected function ajax_login(){
  $is_user_in = $this->session->userdata('is_customer_in');
  if(isset($is_user_in) || $is_user_in == true){ return true;
  } else { echo json_encode(array( 'status'=>'error', 'message'=>'You are not Logged in Now!! Please login again.')); return false; 
  }
}
//=====================/Login Validation======================//


public function apply_coupon(){ 
  if($_SERVER["REQUEST_METHOD"] == "POST"){ $coupon = $this->input->post('coupon'); $id = $this->input->post('id');$type = $this->input->post('type');
    if($data = $this->User_model->get_coupon_code($coupon,$id,$type)){
      $info = array( 'status'=>'success','message'=>'Coupon Applied Successfully', 'coupon'=>$data );
    }else{ $info = array( 'status'=>'error',
        'message'=>'Coupon Code Invalid'
      );
    } echo json_encode($info);
  }
}



//=========================/Checkout==========================//
} ?>