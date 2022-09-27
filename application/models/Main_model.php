<?php date_default_timezone_set('Asia/Kolkata');
class Main_model extends CI_model{
//============================Main============================//


  public function get_all_banners(){

  $this->db->where('m_banner_status', 1);
  return $this->db->get('master_banners_tbl')->result();
}


public function get_all_popular_courses(){
 
  $this->db->where('cr.m_course_popular','1');
  $this->db->where('cr.m_course_status','1');
  return $this->db->get('master_course_tbl cr')->result();
}
public function get_all_recomended_courses(){

  $this->db->where('cr.m_course_recomended','1');
  $this->db->where('cr.m_course_status','1');
  return $this->db->get('master_course_tbl cr')->result();
}


//===========================Course===========================//
public function get_all_courses(){
  $this->db->select('*')->where('m_course_status','1');
  $res = $this->db->get('master_course_tbl')->result();
 
  return $res;
}

public function get_a_course_details($id){
  $this->db->select('mq.m_course_id,mq.m_course_code,mq.m_course_status ,mq.m_course_title, mq.m_course_video_link, mq.m_course_banner, mq.m_course_intro, mq.m_course_view, mq.m_course_description, mq.m_course_type, mq.m_course_price, mq.m_course_offer_price, DATE_FORMAT(mq.m_course_modified, "%d-%m-%Y %h:%i %p") course_modified');
  $this->db->select("(Case when m_course_type='1' Then 'Free' when m_course_type='2' Then 'Paid' else '' end) course_type");
  $this->db->where('m_course_status', 1);
  $this->db->where('m_course_id', $id);
  return $this->db->get('master_course_tbl mq')->result();
}



public function get_popular_courses($limit){
  $this->db->limit($limit);
  $this->db->select('m_course_title, m_course_view');
  $this->db->where('m_course_status', 1);
  return $this->db->get('master_course_tbl')->result();
}


//============================View============================//
public function insert_course_view($id){
  $this->db->set('m_course_view', 'm_course_view+1', FALSE);    
  $this->db->where('m_course_id',$id);
  return $this->db->update('master_course_tbl');
}
//===========================/View============================//

//===========================/Main============================//
} ?>