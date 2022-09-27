<?php defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
class ResetPassword extends CI_Controller {
//========================ResetPassword=======================//

//========================ResetPassword=======================//
public function index(){
  $data['pagename'] = "Reset Password";

  $this->load->view('forgot_password', $data);
}
//========================ResetPassword=======================//

//========================ResetPassword=======================//
} ?>