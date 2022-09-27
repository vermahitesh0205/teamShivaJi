<?php date_default_timezone_set('Asia/Kolkata');
class Api_model extends CI_model{
//============================Main============================//

public function signup_user(){ ;
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


  public function get_all_banners(){

  $this->db->where('m_banner_status', 1);
  return $this->db->get('master_banners_tbl')->result();
}
public function get_all_teams(){
  
  return $this->db->get('our_tems_master')->result();
}
public function get_all_partners(){
  return $this->db->get('partners_master')->result();
}
public function get_all_u_reviews(){
  return $this->db->get('master_user_reviews')->result();
}
 ?>