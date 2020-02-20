<?php
class Admin_Model extends CI_Model{

  function check_login($email, $password){
    $query = $this->db->select('*')
        ->where('admin_email', $email)
        ->where('admin_password', $password)
        ->from('admin')
        ->get();
    $result = $query->result_array();
    return $result;
  }

  public function get_company_list(){
    $query = $this->db->select('*')
    ->from('company')
    ->get();
    $result = $query->result();
    return $result;
  }

  public function save_data($tbl_name, $data){
    $this->db->insert($tbl_name, $data);
    $insert_id = $this->db->insert_id();
    return  $insert_id;
  }

  public function get_info($id_type, $id, $tbl_name){
    $query = $this->db->select('*')
            ->where($id_type, $id)
            ->from($tbl_name)
            ->get();
    $result = $query->result();
    return $result;
  }

  public function update_info($id_type, $id, $tbl_name, $data){
    $this->db->where($id_type, $id)
    ->update($tbl_name, $data);
  }

  public function delete_info($id_type, $id, $tbl_name){
    $this->db->where($id_type, $id)
    ->delete($tbl_name);
  }
  public function get_list1($id,$order,$tbl_name){
    $query = $this->db->select('*')
            ->order_by($id, $order)
            ->from($tbl_name)
            ->get();
    $result = $query->result();
    return $result;
  }

  public function get_list_by_id($col_name,$col_val,$order_col,$order,$tbl_name){
    $this->db->select('*');
    if($col_name != ''){
      $this->db->where($col_name,$col_val);
    }
    if($order_col != ''){
      $this->db->order_by($order_col, $order);
    }
    $this->db->from($tbl_name);
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }

  public function get_count($id_type,$company_id,$added_by,$mat_user_id,$status_col,$status_key,$tbl_name){
    $this->db->select($id_type);
    if($company_id != ''){
      $this->db->where('company_id', $company_id);
    }
    if($added_by != ''){
      $this->db->where($added_by, $mat_user_id);
    }
    if($status_col != ''){
      $this->db->where($status_col, $status_key);
    }

    $this->db->from($tbl_name);
      $query =  $this->db->get();
    $result = $query->num_rows();
    return $result;
  }


/**********************************************************************************************/
/*********************************           Website         **********************************/
/**********************************************************************************************/

  // public function get_slider_list(){
  //   $this->db->select('*');
  //   $this->db->order_by($order_col, $order);
  // }

  public function get_cbsc_notification($type){
    $this->db->select('*');
    $this->db->where('notification_type',$type);
    $this->db->where('notification_status',1);
    $this->db->order_by('notification_id', 'DESC');
    $this->db->from('notification');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }

  public function get_achivement_list($type){
    $this->db->select('*');
    $this->db->where('achievement_type',$type);
    $this->db->where('achievement_status',1);
    $this->db->order_by('achievement_id', 'DESC');
    $this->db->from('achievement');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }

  public function get_teaching_staff_list($type){
    $this->db->select('*');
    $this->db->where('staff_type',$type);
    $this->db->order_by('staff_id', 'ASC');
    $this->db->from('staff');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }

  public function get_nonteaching_staff_list($type){
    $this->db->select('*');
    $this->db->where('staff_type !=',$type);
    $this->db->order_by('staff_id', 'ASC');
    $this->db->from('staff');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }


}
?>
