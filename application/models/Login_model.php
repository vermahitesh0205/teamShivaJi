<?php date_default_timezone_set('Asia/Kolkata');
class Login_model extends CI_model{
//============================Login===========================//

//============================Login===========================//
public function validate_customer(){
	$pass = $this->input->post('login_pass'); $pass=sha1($pass);
	$lgid = $this->input->post('login_id');
	if (!is_numeric($lgid) || strlen($lgid) != 10) return false;
	
	$this->db->select('kh_user_id, kh_user_status');
	$this->db->where('kh_user_contact',$lgid);
	$this->db->where('kh_user_password',$pass);
	// $this->db->where('kh_user_status',1);
	$sql=$this->db->get('master_users');
	//$sql=$this->db->get('master_users')->result();
    //echo "<pre>"; print_r($sql); die();

	
	if($sql->num_rows() == 1){ return $sql->result(); }else{ return false; }
}
		
public function customer_details(){
	$this->db->select('mu.kh_user_fname, mu.kh_user_contact, mu.kh_user_email, mu.kh_user_image, mu.kh_user_status,mu.kh_user_dob,mu.kh_user_address,mu.kh_user_alt_contact');
	$this->db->where('mu.kh_user_id', $this->session->userdata('customer_id'));
	return $this->db->get('master_users mu')->result();
}
//===========================/Login===========================//

//============================SignUp==========================//
public function ckeck_customer_number(){
	$lgid = $this->input->post('user_phone');
	if (!is_numeric($lgid) || strlen($lgid) != 10) return '<div class="col-lg-12" autofocus> <div class="alert alert-danger"> <strong><i class="fa fa-times"></i> &nbsp; Wrong Phone Number !...</strong> Try Another Phone Number . </div> </div>';
	
	$this->db->select('kh_user_id');
	$this->db->where('kh_user_contact', $lgid);
	$sql=$this->db->get('master_users');
	
	if($sql->num_rows() == 1){ return '<div class="col-lg-12" autofocus> <div class="alert alert-info"> <strong><i class="fa fa-times"></i> &nbsp; Already Exists !...</strong> Try Another Phone Number . </div> </div>'; }else{ return false; }
}

public function signup_customer(){ ;
  $user_pass = sha1($this->input->post('user_pass'));
  $insert_data = array(
    "kh_user_fname"   => $this->input->post('username'),
    "kh_user_email"   => $this->input->post('user_email'),
    "kh_user_contact" => $this->input->post('user_phone'),
    "kh_user_password"=> $user_pass,
    "kh_user_city"    => $this->input->post('user_city'),
    "kh_user_otp"     => rand(000000, 999999),
    "kh_user_status"  => '0',
  );

  $this->db->insert('master_users',$insert_data);
  return $insert_data['kh_user_otp'];
}
//===========================/SignUp==========================//

//===========================/Login===========================//
} ?>