<?php defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
class Login extends CI_Controller {
//===========================Login============================//

//===========================Login============================//
public function index(){
  $data['pagename'] = "Log-in";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

      $rules = array(
        array('field'=>'login_id', 'label'=>'Phone Number', 'rules'=>'trim|required'), 
        array('field'=>'login_pass', 'label'=>'Login Password','rules' => 'trim|required')
      );

      $this->form_validation->set_rules($rules); //pass the rules array here
       //by default initial load condition
      if ($this->form_validation->run() == FALSE) { }else{

        if($data = $this->Login_model->validate_customer()){
          $usrdata=array(
            'is_customer_in' => true,
            'customer_id'    => $data[0]->kh_user_id,
            'customer_status'=> $data[0]->kh_user_status
          );
          $this->session->set_userdata($usrdata);
          /* $this->User_model->manage_daily_activiy(); */
          redirect('Home');
        }else{ 
          $this->session->set_flashdata('status','<div class="col-lg-12"> <div class="alert alert-danger"> <strong><i class="fa fa-warning"></i> &nbsp; Some Problem Occurred !...</strong> Please Try Again. </div> </div>');
        }

      }

    }

  $this->load->view('login_page', $data);
}
//===========================Login============================//

//===========================Login============================//
} ?>