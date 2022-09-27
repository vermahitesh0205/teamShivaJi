<?php defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
class SignUp extends CI_Controller {
//===========================SignUp===========================//

//===========================SignUp===========================//
public function index(){
  $data['pagename'] = "Sign-Up";
  $data['cities_list'] = $this->User_model->get_all_cities();

    if($_SERVER["REQUEST_METHOD"] == "POST"){

  		$rules = array(
  			array(
  				'field'   => 'user_city',
  				'label'   => 'Select City',
  				'rules'   => 'trim|required'
  			),
  			array(
  				'field'   => 'username',
  				'label'   => 'Your Name',
  				'rules'   => 'trim|required'
  			),
  			array(
  				'field'   => 'user_phone',
  				'label'   => 'Phone Number',
  				'rules'   => 'trim|required'
  			),   
  			array(
  				'field'   => 'user_email',
  				'label'   => 'Email Address',
  				'rules'   => 'trim|required'
  			),   
  			array(
  				'field'   => 'user_pass',
  				'label'   => 'Password',
  				'rules'   => 'trim|required'
  			)
  		);

  		$this->form_validation->set_rules($rules); //pass the rules array here
  		    //by default initial load condition
  		if ($this->form_validation->run() == FALSE) {  }else{
  		   
  			if($data = $this->Login_model->ckeck_customer_number()){
  				$this->session->set_flashdata('status', $data); 
  				 
  			}else if($otp = $this->Login_model->signup_customer()){
  				$this->session->set_flashdata('status','<div class="col-lg-12"> <div class="alert alert-success"> <strong><i class="fa fa-check"></i> &nbsp; Successfully Sign-Up !...</strong> You Can Login </div> </div>'); 
  				redirect('Login');
  			} else{ 
  			    $this->session->set_flashdata('status','<div class="col-lg-12"> <div class="alert alert-danger"> <strong><i class="fa fa-warning"></i> &nbsp; Some Problem Occurred !...</strong> Please Try Again. </div> </div>'); 
  			    
  			}

  		}


      }

  $this->load->view('signup_page', $data);
}
//==========================/SignUp===========================//

//==========================/SignUp===========================//
} ?>