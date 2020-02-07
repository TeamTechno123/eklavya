<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model('Admin_Model');
  }

  public function index(){
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');
    if ($this->form_validation->run() == FALSE) {
    	$this->load->view('Admin/login');
    }
    else{
      $email = $this->input->post('email');
      $password = $this->input->post('password');

      $login = $this->Admin_Model->check_login($email, $password);
      if($login == null){
        $this->session->set_flashdata('msg','login_error');
        header('location:'.base_url().'Admin');
      }
      else{
        foreach ($login as $login){
          $this->session->set_userdata('ek_admin_id', $login['admin_id']);
        }
        header('location:'.base_url().'Admin/dashboard');
      }
    }
  }

  public function logout(){
    $this->session->sess_destroy();
    header('location:'.base_url().'Admin');
  }


  public function dashboard(){
    $ek_admin_id = $this->session->userdata('ek_admin_id');
    if($ek_admin_id){
      $this->load->view('Admin/head');
      $this->load->view('Admin/navbar');
      $this->load->view('Admin/sidebar');
      $this->load->view('Admin/dashboard');
      $this->load->view('Admin/script');
      $this->load->view('Admin/footer');
    } else{
      header('location:'.base_url().'Admin');
    }
  }

  public function company_information(){
    $ek_admin_id = $this->session->userdata('ek_admin_id');
    if($ek_admin_id){
      $this->load->view('Admin/company_information');
    } else{
      header('location:'.base_url().'Admin');
    }
  }

  // Company List...
  public function company_information_list(){
    $ek_admin_id = $this->session->userdata('ek_admin_id');
    if($ek_admin_id){
      $data['company_list'] = $this->Admin_Model->get_company_list();
      // echo print_r($data['company_list']);
      $this->load->view('Admin/company_information_list',$data);
    } else{
      header('location:'.base_url().'Admin');
    }
  }

  // Save company Data...
    public function save_company(){
      $ek_admin_id = $this->session->userdata('ek_admin_id');
      if($ek_admin_id){
        $data = array(
          'c_name' => $this->input->post('c_name'),
          'company_imei' => $this->input->post('company_imei'),
          'company_name' => $this->input->post('company_name'),
          'company_address' => $this->input->post('company_address'),
          'company_city' => $this->input->post('company_city'),
          'company_state' => $this->input->post('company_state'),
          'company_district' => $this->input->post('company_district'),
          'company_statecode' => $this->input->post('company_statecode'),
          'company_mob1' => $this->input->post('company_mob1'),
          'company_mob2' => $this->input->post('company_mob2'),
          'company_email' => $this->input->post('company_email'),
          'company_gpay_no' => $this->input->post('company_gpay_no'),
          'company_website' => $this->input->post('company_website'),
          'company_pan_no' => $this->input->post('company_pan_no'),
          'company_gst_no' => $this->input->post('company_gst_no'),
          'company_lic1' => $this->input->post('company_lic1'),
          'company_lic2' => $this->input->post('company_lic2'),
          'company_start_date' => $this->input->post('company_start_date'),
          'company_end_date' => $this->input->post('company_end_date'),
          'company_status' => $this->input->post('company_status'),
          'company_reg_date' => date('d-m-Y'),
          // 'admin_email' => $this->input->post('admin_email'),
          // 'admin_password' => $this->input->post('admin_password'),
        );
        // echo print_r($data);
        $company_id = $this->Admin_Model->save_data('company', $data);
        $data2 = array(
          'company_id'=>$company_id,
          'user_email'=>$this->input->post('admin_email'),
          'user_password'=>$this->input->post('admin_password'),
          'user_name'=>'Admin',
          'user_city'=>$this->input->post('company_city'),
          'user_mobile'=>$this->input->post('company_mob1'),
          'user_addedby'=>'Admin',
          'is_admin'=>1,
        );
        $this->Admin_Model->save_data('user', $data2);
        header('location:'.base_url().'Admin/company_information_list');
      } else{
        header('location:'.base_url().'Admin');
      }
    }

    public function edit_company($company_id){
      $ek_admin_id = $this->session->userdata('ek_admin_id');
      if($ek_admin_id){
        $company_info = $this->Admin_Model->get_info('company_id', $company_id, 'company');
        if($company_info){
          foreach($company_info as $info){
            $data['update'] = 'update';
            $data['c_name'] = $info->c_name;
            $data['company_imei'] = $info->company_imei;
            $data['company_id'] = $info->company_id;
            $data['company_name'] = $info->company_name;
            $data['company_address'] = $info->company_address;
            $data['company_city'] = $info->company_city;
            $data['company_state'] = $info->company_state;
            $data['company_district'] = $info->company_district;
            $data['company_statecode'] = $info->company_statecode;
            $data['company_mob1'] = $info->company_mob1;
            $data['company_mob2'] = $info->company_mob2;
            $data['company_email'] = $info->company_email;
            $data['company_gpay_no'] = $info->company_gpay_no;
            $data['company_website'] = $info->company_website;
            $data['company_pan_no'] = $info->company_pan_no;
            $data['company_gst_no'] = $info->company_gst_no;
            $data['company_lic1'] = $info->company_lic1;
            $data['company_lic2'] = $info->company_lic2;
            $data['company_start_date'] = $info->company_start_date;
            $data['company_end_date'] = $info->company_end_date;
            $data['company_status'] = $info->company_status;
          }
          $this->load->view('Admin/company_information',$data);
        }
      } else{
        header('location:'.base_url().'Admin');
      }
    }

    public function update_company(){
      $ek_admin_id = $this->session->userdata('ek_admin_id');
      if($ek_admin_id){
        $company_id = $this->input->post('company_id');
        $data = array(

          'c_name' => $this->input->post('c_name'),
          'company_imei' => $this->input->post('company_imei'),
          'company_name' => $this->input->post('company_name'),
          'company_address' => $this->input->post('company_address'),
          'company_city' => $this->input->post('company_city'),
          'company_state' => $this->input->post('company_state'),
          'company_district' => $this->input->post('company_district'),
          'company_statecode' => $this->input->post('company_statecode'),
          'company_mob1' => $this->input->post('company_mob1'),
          'company_mob2' => $this->input->post('company_mob2'),
          'company_email' => $this->input->post('company_email'),
          'company_gpay_no' => $this->input->post('company_gpay_no'),
          'company_website' => $this->input->post('company_website'),
          'company_pan_no' => $this->input->post('company_pan_no'),
          'company_gst_no' => $this->input->post('company_gst_no'),
          'company_lic1' => $this->input->post('company_lic1'),
          'company_lic2' => $this->input->post('company_lic2'),
          'company_start_date' => $this->input->post('company_start_date'),
          'company_end_date' => $this->input->post('company_end_date'),
          'company_status' => $this->input->post('company_status'),
        );
        $this->Admin_Model->update_info('company_id', $company_id, 'company', $data);
        header('location:'.base_url().'Admin/company_information_list');
      } else{
        header('location:'.base_url().'Admin');
      }
    }

    public function delete_company($company_id){
      $ek_admin_id = $this->session->userdata('ek_admin_id');
      if($ek_admin_id){
        // $company_id = $this->input->post('company_id');
        $this->Admin_Model->delete_info('company_id', $company_id, 'company');
        header('location:'.base_url().'Admin/company_information_list');
      } else{
        header('location:'.base_url().'Admin');
      }
    }

    // public function announcement_list(){
    //   $ek_admin_id = $this->session->userdata('ek_admin_id');
    //   if($ek_admin_id==''){   header('location:'.base_url().'Admin'); }
    //   $this->load->view('Admin/head');
    //   $this->load->view('Admin/navbar');
    //   $this->load->view('Admin/sidebar');
    //   $this->load->view('Admin/announcement_list');
    //   $this->load->view('Admin/script');
    //   $this->load->view('Admin/footer');
    // }
    //
    // public function announcement(){
    //   $ek_admin_id = $this->session->userdata('ek_admin_id');
    //   if($ek_admin_id==''){   header('location:'.base_url().'Admin'); }
    //   $this->load->view('Admin/head');
    //   $this->load->view('Admin/navbar');
    //   $this->load->view('Admin/sidebar');
    //   $this->load->view('Admin/announcement');
    //   $this->load->view('Admin/script');
    //   $this->load->view('Admin/footer');
    // }

    public function announcement_list(){
      $ek_admin_id = $this->session->userdata('ek_admin_id');
      if($ek_admin_id==''){   header('location:'.base_url().'Admin'); }
      $data['announcement_list'] = $this->Admin_Model->get_list1('announcement_id','ASC','announcement');
      $this->load->view('Admin/head',$data);
      $this->load->view('Admin/navbar',$data);
      $this->load->view('Admin/sidebar',$data);
      $this->load->view('Admin/announcement_list',$data);
      $this->load->view('Admin/script',$data);
      $this->load->view('Admin/footer',$data);
    }

    public function announcement(){
      $ek_admin_id = $this->session->userdata('ek_admin_id');
      if($ek_admin_id==''){   header('location:'.base_url().'Admin'); }
      $this->form_validation->set_rules('announcement_title', 'Slider Title', 'trim|required');
      if ($this->form_validation->run() != FALSE) {
        $priority=$this->input->post('priority');
    if(!isset($priority)){ $priority = '0'; }
        $announcement_status=$this->input->post('announcement_status');
    if(!isset($announcement_status)){ $announcement_status = '1'; }
    $save_data = array(
      'announcement_no' => $this->input->post('announcement_no'),
      'announcement_date' => $this->input->post('announcement_date'),
      'announcement_title' => $this->input->post('announcement_title'),
      'announcement_status' => $announcement_status,
      'priority' => $priority,
    );
    $announcement_id=$this->Admin_Model->save_data('announcement', $save_data);
    if(isset($_FILES['announcement_image']['name'])){
       $time = time();
       $image_name = 'announcement_'.$announcement_id.'_'.$time;
       $config['upload_path'] = 'assets/images/announcement/';
       $config['allowed_types'] = 'png|jpg';
       $config['file_name'] = $image_name;
       $filename = $_FILES['announcement_image']['name'];
       $ext = pathinfo($filename, PATHINFO_EXTENSION);
       // $this->load->library('upload', $config);
       $this->upload->initialize($config);
       if ($this->upload->do_upload('announcement_image')){
         $up_image = array(
           'announcement_image' => $image_name.'.'.$ext,
         );
         $this->Admin_Model->update_info('announcement_id', $announcement_id, 'announcement', $up_image);
       }
       else{
      echo   $error = $this->upload->display_errors();
         $this->session->set_flashdata('status',$this->upload->display_errors());
       }
     }
    $this->session->set_flashdata('save_success','success');
    header('location:'.base_url().'Admin/announcement_list');
  }
      $this->load->view('Admin/head');
      $this->load->view('Admin/navbar');
      $this->load->view('Admin/sidebar');
      $this->load->view('Admin/announcement');
      $this->load->view('Admin/script');
      $this->load->view('Admin/footer');
    }


    public function edit_announcement($announcement_id){
      $ek_admin_id = $this->session->userdata('ek_admin_id');
      if($ek_admin_id==''){   header('location:'.base_url().'Admin'); }
      $this->form_validation->set_rules('announcement_title', 'Slider Title', 'trim|required');
      $data['announcement_list'] = $this->Admin_Model->get_list1('announcement_id','ASC','announcement');
      if ($this->form_validation->run() != FALSE) {

        $announcement_status=$this->input->post('announcement_status');
          if(!isset($announcement_status)){ $announcement_status = '1'; }
          $priority=$this->input->post('priority');
            if(!isset($priority)){ $priority = '0'; }
            $update_data = array(
                'announcement_no' => $this->input->post('announcement_no'),
                'announcement_date' => $this->input->post('announcement_date'),
                'announcement_title' => $this->input->post('announcement_title'),
                'announcement_status' => $announcement_status,
                'priority' => $priority,
              );
        $this->Admin_Model->update_info('announcement_id', $announcement_id, 'announcement', $update_data);

        if(isset($_FILES['announcement_image']['name'])){
           $time = time();
           $image_name = 'announcement_'.$announcement_id.'_'.$time;
           $config['upload_path'] = 'assets/images/announcement/';
           $config['allowed_types'] = 'png|jpg';
           $config['file_name'] = $image_name;
           $filename = $_FILES['announcement_image']['name'];
           $ext = pathinfo($filename, PATHINFO_EXTENSION);
           // $this->load->library('upload', $config);
           $this->upload->initialize($config);
           if ($this->upload->do_upload('announcement_image')){
             $up_image = array(
               'announcement_image' => $image_name.'.'.$ext,
             );
             $this->Admin_Model->update_info('announcement_id', $announcement_id, 'announcement', $up_image);
             $img_old = $this->input->post('img_old');
             unlink("assets/images/announcement/".$img_old);
           }
           else{
          echo   $error = $this->upload->display_errors();
             $this->session->set_flashdata('status',$this->upload->display_errors());
           }
         }

          $this->session->set_flashdata('update_success','success');
          header('location:'.base_url().'Admin/announcement_list');
        }

            $announcement_info = $this->Admin_Model->get_info('announcement_id', $announcement_id, 'announcement');
            if($announcement_info == ''){ header('location:'.base_url().'Admin/announcement_list'); }
            foreach($announcement_info as $info_b){
              $data['update'] = 'update';
              $data['announcement_no'] = $info_b->announcement_no;
              $data['announcement_date'] = $info_b->announcement_date;
              $data['announcement_title'] = $info_b->announcement_title;
              $data['announcement_status'] = $info_b->announcement_status;
              $data['priority'] = $info_b->priority;
              $data['announcement_image'] = $info_b->announcement_image;
            }
            $this->load->view('Admin/head',$data);
            $this->load->view('Admin/navbar',$data);
            $this->load->view('Admin/sidebar',$data);
            $this->load->view('Admin/announcement',$data);
            $this->load->view('Admin/script',$data);
            $this->load->view('Admin/footer',$data);
}

    public function delete_announcement($announcement_id){
      $ek_admin_id = $this->session->userdata('ek_admin_id');
      if($ek_admin_id==''){   header('location:'.base_url().'Admin'); }

      $this->Admin_Model->delete_info('announcement_id', $announcement_id, 'announcement');
      $this->session->set_flashdata('delete_success','success');
      header('location:'.base_url().'Admin/announcement_list');
    }

    public function gallery_list(){
      $ek_admin_id = $this->session->userdata('ek_admin_id');
      if($ek_admin_id==''){   header('location:'.base_url().'Admin'); }
      $data['gallery_list'] = $this->Admin_Model->get_list1('gallery_id','ASC','gallery');
      $this->load->view('Admin/head',$data);
      $this->load->view('Admin/navbar',$data);
      $this->load->view('Admin/sidebar',$data);
      $this->load->view('Admin/gallery_list',$data);
      $this->load->view('Admin/script',$data);
      $this->load->view('Admin/footer',$data);
    }

    public function gallery(){
      $ek_admin_id = $this->session->userdata('ek_admin_id');
      if($ek_admin_id==''){   header('location:'.base_url().'Admin'); }
      $this->form_validation->set_rules('gallery_title', 'Slider Title', 'trim|required');
      if ($this->form_validation->run() != FALSE) {
        $gallery_status=$this->input->post('gallery_status');
        if(!isset($gallery_status)){ $gallery_status = '1'; }
        $save_data = array(
          'gallery_no' => $this->input->post('gallery_no'),
          'gallery_date' => $this->input->post('gallery_date'),
          'gallery_title' => $this->input->post('gallery_title'),
          'gallery_status' => $gallery_status,
        );
        $gallery_id=$this->Admin_Model->save_data('gallery', $save_data);

        if(isset($_FILES['gallery_photo_name']['name'])){
          $files = $_FILES;
          $cpt = count($_FILES['gallery_photo_name']['name']);
          for ($i=0; $i < $cpt; $i++) {
            $j = $i+1;
            $time = time();
            $image_name = 'gallery_photo_'.$gallery_id.'_'.$j.'_'.$time;
            $_FILES['gallery_photo_name']['name']= $files['gallery_photo_name']['name'][$i];
            $_FILES['gallery_photo_name']['type']= $files['gallery_photo_name']['type'][$i];
            $_FILES['gallery_photo_name']['tmp_name']= $files['gallery_photo_name']['tmp_name'][$i];
            $_FILES['gallery_photo_name']['error']= $files['gallery_photo_name']['error'][$i];
            $_FILES['gallery_photo_name']['size']= $files['gallery_photo_name']['size'][$i];
            $config2['upload_path'] = 'assets/images/gallery/';
            $config2['allowed_types'] = 'jpg|png';
            $config2['file_name'] = $image_name;
            $config2['overwrite']     = FALSE;
            $filename = $files['gallery_photo_name']['name'][$i];
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            $this->upload->initialize($config2);
            if($this->upload->do_upload('gallery_photo_name')){
              $file_data['gallery_id'] = $gallery_id;
              $file_data['gallery_photo_name'] = $image_name.'.'.$ext;
              $this->Admin_Model->save_data('gallery_photo', $file_data);
            }
            else{
              $error = $this->upload->display_errors();
              $this->session->set_flashdata('status',$this->upload->display_errors());
            }
          }
        }
        $this->session->set_flashdata('save_success','success');
        header('location:'.base_url().'Admin/gallery_list');
      }
      $this->load->view('Admin/head');
      $this->load->view('Admin/navbar');
      $this->load->view('Admin/sidebar');
      $this->load->view('Admin/gallery');
      $this->load->view('Admin/script');
      $this->load->view('Admin/footer');
    }

    // Edit Gallery...
    public function edit_gallery($gallery_id){
      $ek_admin_id = $this->session->userdata('ek_admin_id');
      if($ek_admin_id==''){   header('location:'.base_url().'Admin'); }
      $this->form_validation->set_rules('gallery_title', 'Slider Title', 'trim|required');
      $data['gallery_list'] = $this->Admin_Model->get_list1('gallery_id','ASC','gallery');
      if ($this->form_validation->run() != FALSE) {

        $gallery_status=$this->input->post('gallery_status');
        if(!isset($gallery_status)){ $gallery_status = '1'; }
        $update_data = array(
          'gallery_no' => $this->input->post('gallery_no'),
          'gallery_date' => $this->input->post('gallery_date'),
          'gallery_title' => $this->input->post('gallery_title'),
          'gallery_status' => $gallery_status,
        );
        $this->Admin_Model->update_info('gallery_id', $gallery_id, 'gallery', $update_data);

        if(isset($_FILES['gallery_photo_name']['name'])){
          $files = $_FILES;
          $cpt = count($_FILES['gallery_photo_name']['name']);
          for ($i=0; $i < $cpt; $i++) {
            $j = $i+1;
            $time = time();
            $image_name = 'gallery_photo_'.$gallery_id.'_'.$j.'_'.$time;
            $_FILES['gallery_photo_name']['name']= $files['gallery_photo_name']['name'][$i];
            $_FILES['gallery_photo_name']['type']= $files['gallery_photo_name']['type'][$i];
            $_FILES['gallery_photo_name']['tmp_name']= $files['gallery_photo_name']['tmp_name'][$i];
            $_FILES['gallery_photo_name']['error']= $files['gallery_photo_name']['error'][$i];
            $_FILES['gallery_photo_name']['size']= $files['gallery_photo_name']['size'][$i];
            $config2['upload_path'] = 'assets/images/gallery/';
            $config2['allowed_types'] = 'jpg|png';
            $config2['file_name'] = $image_name;
            $config2['overwrite']     = FALSE;
            $filename = $files['gallery_photo_name']['name'][$i];
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            $this->upload->initialize($config2);
            if($this->upload->do_upload('gallery_photo_name')){
              $file_data['gallery_id'] = $gallery_id;
              $file_data['gallery_photo_name'] = $image_name.'.'.$ext;
              $this->Admin_Model->save_data('gallery_photo', $file_data);
            }
            else{
              $error = $this->upload->display_errors();
              $this->session->set_flashdata('status',$this->upload->display_errors());
            }
          }
        }

        $this->session->set_flashdata('update_success','success');
        header('location:'.base_url().'Admin/gallery_list');
      }

      $gallery_info = $this->Admin_Model->get_info('gallery_id', $gallery_id, 'gallery');
      if($gallery_info == ''){ header('location:'.base_url().'Admin/gallery_list'); }
      foreach($gallery_info as $info_b){
        $data['update'] = 'update';
        $data['gallery_no'] = $info_b->gallery_no;
        $data['gallery_date'] = $info_b->gallery_date;
        $data['gallery_title'] = $info_b->gallery_title;
        $data['gallery_status'] = $info_b->gallery_status;
      }

      $data['gallery_photo_list'] = $this->Admin_Model->get_list_by_id('gallery_id',$gallery_id,'','','gallery_photo');
      $this->load->view('Admin/head',$data);
      $this->load->view('Admin/navbar',$data);
      $this->load->view('Admin/sidebar',$data);
      $this->load->view('Admin/gallery',$data);
      $this->load->view('Admin/script',$data);
      $this->load->view('Admin/footer',$data);
    }

    public function delete_gallery_photo(){
      $gallery_photo_name = $this->input->post('gallery_photo_name');
      $gallery_photo_id = $this->input->post('gallery_photo_id');

      unlink("assets/images/gallery/".$gallery_photo_name);
      $this->Admin_Model->delete_info('gallery_photo_id', $gallery_photo_id, 'gallery_photo');
    }

    public function delete_gallery($gallery_id){
      $ek_admin_id = $this->session->userdata('ek_admin_id');
      if($ek_admin_id==''){   header('location:'.base_url().'Admin'); }
      $this->Admin_Model->delete_info('gallery_id', $gallery_id, 'gallery');
      $this->session->set_flashdata('delete_success','success');
      header('location:'.base_url().'Admin/gallery_list');
      }

    public function slider_list(){
      $ek_admin_id = $this->session->userdata('ek_admin_id');
      if($ek_admin_id==''){ header('location:'.base_url().'Admin'); }
      $data['slider_list'] = $this->Admin_Model->get_list1('slider_id','ASC','slider');
      $this->load->view('Admin/head',$data);
      $this->load->view('Admin/navbar',$data);
      $this->load->view('Admin/sidebar',$data);
      $this->load->view('Admin/slider_list',$data);
      $this->load->view('Admin/script',$data);
      $this->load->view('Admin/footer',$data);
    }

    public function slider(){
      $ek_admin_id = $this->session->userdata('ek_admin_id');
      if($ek_admin_id==''){   header('location:'.base_url().'Admin'); }
      $this->form_validation->set_rules('slider_title', 'Slider Title', 'trim|required');
      if ($this->form_validation->run() != FALSE) {
        $slider_status=$this->input->post('slider_status');
    if(!isset($slider_status)){ $slider_status = '1'; }
    $save_data = array(
      'slider_title' => $this->input->post('slider_title'),
      'slider_status' => $slider_status,
    );
    $slider_id=$this->Admin_Model->save_data('slider', $save_data);
    if(isset($_FILES['slider_img']['name'])){
       $time = time();
       $image_name = 'slider_'.$slider_id.'_'.$time;
       $config['upload_path'] = 'assets/images/slider/';
       $config['allowed_types'] = 'png|jpg';
       $config['file_name'] = $image_name;
       $filename = $_FILES['slider_img']['name'];
       $ext = pathinfo($filename, PATHINFO_EXTENSION);
       // $this->load->library('upload', $config);
       $this->upload->initialize($config);
       if ($this->upload->do_upload('slider_img')){
         $up_image = array(
           'slider_img' => $image_name.'.'.$ext,
         );
         $this->Admin_Model->update_info('slider_id', $slider_id, 'slider', $up_image);
       }
       else{
      echo   $error = $this->upload->display_errors();
         $this->session->set_flashdata('status',$this->upload->display_errors());
       }
     }
    $this->session->set_flashdata('save_success','success');
    header('location:'.base_url().'Admin/slider_list');
  }
      $this->load->view('Admin/head');
      $this->load->view('Admin/navbar');
      $this->load->view('Admin/sidebar');
      $this->load->view('Admin/slider');
      $this->load->view('Admin/script');
      $this->load->view('Admin/footer');
    }


    public function edit_slider($slider_id){
      $ek_admin_id = $this->session->userdata('ek_admin_id');
      if($ek_admin_id==''){   header('location:'.base_url().'Admin'); }
      $this->form_validation->set_rules('slider_title', 'Slider Title', 'trim|required');
      $data['slider_list'] = $this->Admin_Model->get_list1('slider_id','ASC','slider');
      if ($this->form_validation->run() != FALSE) {

        $slider_status=$this->input->post('slider_status');
          if(!isset($slider_status)){ $slider_status = '1'; }
            $update_data = array(
                'slider_title' => $this->input->post('slider_title'),
                'slider_status' => $slider_status,
              );
        $this->Admin_Model->update_info('slider_id', $slider_id, 'slider', $update_data);

        if(isset($_FILES['slider_img']['name'])){
           $time = time();
           $image_name = 'slider_'.$slider_id.'_'.$time;
           $config['upload_path'] = 'assets/images/slider/';
           $config['allowed_types'] = 'png|jpg';
           $config['file_name'] = $image_name;
           $filename = $_FILES['slider_img']['name'];
           $ext = pathinfo($filename, PATHINFO_EXTENSION);
           // $this->load->library('upload', $config);
           $this->upload->initialize($config);
           if ($this->upload->do_upload('slider_img')){
             $up_image = array(
               'slider_img' => $image_name.'.'.$ext,
             );
             $this->Admin_Model->update_info('slider_id', $slider_id, 'slider', $up_image);
             $img_old = $this->input->post('img_old');
             unlink("assets/images/slider/".$img_old);
           }
           else{
          echo   $error = $this->upload->display_errors();
             $this->session->set_flashdata('status',$this->upload->display_errors());
           }
         }

          $this->session->set_flashdata('update_success','success');
          header('location:'.base_url().'Admin/slider_list');
        }

            $slider_info = $this->Admin_Model->get_info('slider_id', $slider_id, 'slider');
            if($slider_info == ''){ header('location:'.base_url().'Admin/slider_list'); }
            foreach($slider_info as $info_b){
              $data['update'] = 'update';
              $data['slider_title'] = $info_b->slider_title;
              $data['slider_status'] = $info_b->slider_status;
              $data['slider_img'] = $info_b->slider_img;
            }
            $this->load->view('Admin/head',$data);
            $this->load->view('Admin/navbar',$data);
            $this->load->view('Admin/sidebar',$data);
            $this->load->view('Admin/slider',$data);
            $this->load->view('Admin/script',$data);
            $this->load->view('Admin/footer',$data);
}

    public function delete_slider($slider_id){
      $ek_admin_id = $this->session->userdata('ek_admin_id');
      if($ek_admin_id==''){   header('location:'.base_url().'Admin'); }
      $this->Admin_Model->delete_info('slider_id', $slider_id, 'slider');
      $this->session->set_flashdata('delete_success','success');
      header('location:'.base_url().'Admin/slider_list');
      }


}
?>
