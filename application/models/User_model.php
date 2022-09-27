<?php date_default_timezone_set('Asia/Kolkata');
class User_model extends CI_model{
//============================User============================//

//=========================Customer===========================//
public function check_loginid($login_id){

  $this->db->select("kh_user_contact");
  $this->db->where('kh_user_id !=',$this->session->userdata('customer_id'));
  $this->db->where('kh_user_contact',$login_id);
  $sql=$this->db->get('master_users');

  if ($sql->num_rows() > 0) {

    $this->db->select("kh_user_contact");
    $this->db->where('kh_user_id',$this->session->userdata('customer_id'));
    $res=$this->db->get('master_users')->result();

    return array('status'=>'success', 'current_id'=> $res[0]->kh_user_contact, 'message'=>'Contact Number ( '.$login_id.' ) Already Exists.'); 
  }else{ return array('status'=>'fail', 'message'=>'Contact Number Not Exists.'); }
}
//========================/Customer===========================//

//=========================Customer===========================//
public function get_customer_all_courses(){
  $this->db->select('mc.m_course_id, mc.m_course_view, mc.m_course_title, mc.m_course_video_link, mc.m_course_banner, mc.m_course_intro, mc.m_course_description, mc.m_course_type, mc.m_course_price, mc.m_course_offer_price, DATE_FORMAT(mc.m_course_modified, "%d-%m-%Y %h:%i %p") course_modified');
  $this->db->select("(Case when m_course_type='1' Then 'Free' when m_course_type='2' Then 'Paid' else ' ' end) course_type");
  $this->db->join('master_course_tbl mc', 'mc.m_course_id = uc.t_reg_course');

  $this->db->where('mc.m_course_status', 1);
  
  $this->db->where('uc.t_reg_status', 1);
  $this->db->where('uc.t_reg_user', $this->session->userdata('customer_id'));
  return $this->db->get('user_courses_tbl uc')->result();
}


//=========================Wishlist===========================//

public function insert_wishlist($id, $user,$type){
   
       $insert_type = "t_wishlist_course";
       $checkexist = $this->db->query("select t_wishlist_user from user_wishlist_tbl where t_wishlist_user='$user' and t_wishlist_course='$id'")->result();
  
    if(empty($checkexist))
    {
  
     $data = array(
      "t_wishlist_type"=>$type,
      "t_wishlist_user" => $user,
      "".$insert_type."" => $id,
    );
     $this->db->insert('user_wishlist_tbl', $data);
     return true;

    }
    else
    {

        $output = array(
              "status"=>"fail",
              "message"=> "Already Added Into Wishlist"
            );
            echo json_encode($output);
            die();
    }

   }

public function get_all_course_wishlist(){
  $this->db->select('uc.t_wishlist_id, uc.t_wishlist_course, cr.m_course_id, cr.m_course_view, cr.m_course_title, cr.m_course_code, cr.m_course_banner, cr.m_course_price, cr.m_course_offer_price, DATE_FORMAT(uc.t_wishlist_added_on, "%d-%m-%Y %h:%i %p") added_on');
  $this->db->join('master_course_tbl cr', 'cr.m_course_id = uc.t_wishlist_course','left');
 
  $this->db->where('uc.t_wishlist_user', $this->session->userdata('customer_id'));
  $this->db->where('uc.t_wishlist_type', 1);
  return $this->db->get('user_wishlist_tbl uc')->result();
}

//============================User============================//
public function customer_details(){
  $this->db->select('au.kh_user_fname, au.kh_user_contact, au.kh_user_alt_contact, au.kh_user_email, au.kh_user_address, au.kh_user_city, au.kh_user_area_id, au.kh_user_image, au.kh_user_status, au.kh_user_gender, au.kh_user_dob, au.khu_adhar_no, au.khu_pan_no,au.kh_user_id');
  $this->db->select('ml.m_location_city, ma.area_name, ms.m_state_id, ms.m_state_name, mc.m_country_id, mc.m_country_name');
  $this->db->join('master_area ma', 'ma.area_id = au.kh_user_area_id','left');
  $this->db->join('master_locations_tbl ml','ml.m_location_id=au.kh_user_city','left');
  $this->db->join('master_state_tbl ms', 'ms.m_state_id = ml.m_location_state','left');
  $this->db->join('master_country_tbl mc', 'mc.m_country_id = ml.m_location_country','left');
  $this->db->where('au.kh_user_id', $this->session->userdata('customer_id'));
  return $this->db->get('master_users au')->result();
}

public function registration_detail($regid){
 
  $this->db->join('master_course_tbl cr', 'cr.m_course_id = uc.t_reg_course','left');
  $this->db->where('uc.t_reg_id', $regid);
  return $this->db->get('user_courses_tbl uc')->result();
}
//===========================/User============================//

//==========================Location==========================//
public function update_address(){

  $update_data = array(
    "kh_user_fname"      => $this->input->post('kh_user_fname'),
    "kh_user_contact"    => $this->input->post('kh_user_contact'),
    "kh_user_alt_contact"=> $this->input->post('kh_user_alt_contact'),
    "kh_user_city"       => $this->input->post('kh_user_city'),
    "kh_user_area_id"    => $this->input->post('kh_user_area_id'),
    "kh_user_email"      => $this->input->post('kh_user_email'),
    "kh_user_address"    => $this->input->post('kh_user_address'),
    "kh_user_gender"     => $this->input->post('kh_user_gender'),
    "kh_user_dob"        => $this->input->post('kh_user_dob'),
    "khu_adhar_no"       => $this->input->post('khu_adhar_no'),
    "khu_pan_no"         => $this->input->post('khu_pan_no'),
    // "kh_modified_by"  => $this->session->userdata('customer_id'),
    // "kh_modified_on"  => date("Y-m-d H:i:s")
  );
  $this->db->where('kh_user_id',$this->session->userdata('customer_id'));
  return $this->db->update('master_users',$update_data);
}
//===========================/User============================//

//============================User============================//
public function check_is_user_course($course_id){
  $this->db->select('t_reg_status');
//  $this->db->where('t_reg_status', 1);
  $this->db->where('t_reg_course', $course_id);

  $this->db->where('t_reg_user', $this->session->userdata('customer_id'));
  $sql = $this->db->get('user_courses_tbl');
  return ($sql->num_rows() > 0) ? 1 : 0;
}


public function insert_registration($course_id){

  $update_data = array(
    "t_reg_user"     => $this->session->userdata('customer_id'),
    "t_reg_course"   => $course_id,
    "t_reg_date"     => date('Y-m-d'),
   "t_reg_status" => 1,
    "t_reg_register_from"=>2,
  );
   $this->db->insert('user_courses_tbl',$update_data);
   return $this->db->insert_id();
}

  public function insert_course_status($topicid,$subject,$customerid){

   $check = $this->db->query("select u_course_statusid from user_course_status where u_course_subject='$subject' and u_course_topic='$topicid' and u_course_userid='$customerid'")->result();

   if(empty($check))
   {

      $update_data = array(
        "u_course_subject"     => $subject,
        "u_course_topic"     => $topicid,
        "u_course_userid"   => $customerid,
      );
       $this->db->insert('user_course_status',$update_data);
       return $this->db->insert_id();

     }
}

//===========================/User============================//

//==========================Location==========================//
public function get_all_countries(){
  $this->db->select('m_country_id, m_country_name');
  return $this->db->get('master_country_tbl')->result();
}

public function get_country_states($id){
  $this->db->select('m_state_id, m_state_name');
  $this->db->where('m_state_country', $id);
  return $this->db->get('master_state_tbl')->result();
}

public function get_state_cities($id){
  $this->db->select('m_location_id, m_location_city');
  $this->db->where('m_location_state', $id);
  $this->db->where('m_location_status', 1);
  return $this->db->get('master_locations_tbl')->result();
}

public function get_all_cities(){
  $this->db->select('m_location_id, m_location_city');
  $this->db->where('m_location_status', 1);
  return $this->db->get('master_locations_tbl')->result();
}

public function get_city_areas($id){
  $this->db->select('area_id, area_name');
  $this->db->where('area_location', $id);
  // $this->db->where('area_status', 1);
  $this->db->where('area_status', 0);
  return $this->db->get('master_area')->result();
}
//=========================/Location==========================//

//========================Wish List Add=======================//
public function insert_user_wishlist($id){
  
  $insert_data = array(
    "t_wishlist_type"   => $this->input->post('type'),
    "t_wishlist_user"   => $this->session->userdata('customer_id'),
    "t_wishlist_course" => 0,
    "t_wishlist_package"=> 0,
    "t_wishlist_notes"  => 0,
  );

   if($insert_data['t_wishlist_type'] == 1){
     $insert_data['t_wishlist_course']  = $this->input->post('wish');
   }else if($insert_data['t_wishlist_type'] == 2){
     $insert_data['t_wishlist_package'] = $this->input->post('wish');
   }else if($insert_data['t_wishlist_type'] == 3){
     $insert_data['t_wishlist_notes']   = $this->input->post('wish');
   }else{ return false; }
}
//=======================/Wish List Add=======================//


//=====================Get Coupon===========================//
  public function get_coupon_code($coupon,$id,$type){

   if($type == 1) 
   {
    $this->db->where('m_coupon_course', $id);
   }

    if($type == 2) 
   {
      $this->db->where('m_coupon_test', $id);
   }
    if($type == 3) 
   {
      $this->db->where('m_coupon_notes', $id);
   }
  
  $this->db->where('coupon_code', $coupon);
  $this->db->where('coupon_start <=', date('Y-m-d'));
  $this->db->where('coupon_end >=', date('Y-m-d'));
  return $this->db->get('master_coupon_tbl')->result();
}

//=====================//==================//==============//

//===========================/User============================//
} ?>