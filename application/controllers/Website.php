<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {
	public function __construct(){
    parent::__construct();
    $this->load->model('Admin_Model');
  }

	public function index(){
		$data['slider_list'] = $this->Admin_Model->get_list_by_id('slider_status',1,'slider_id','ASC','slider');
		$data['announcement_list'] = $this->Admin_Model->get_list_by_id('announcement_status',1,'announcement_id','ASC','announcement');

		$this->load->view('Include/header',$data);
	  $this->load->view('Website/index',$data);
		$this->load->view('Include/footer',$data);
	}
	public function policy()
	{
	  $this->load->view('Website/policy');
	}
	public function about()
	{
		 $this->load->view('Include/header');
	  $this->load->view('Website/about');
		 $this->load->view('Include/footer');
	}

	public function vision()
	{
		 $this->load->view('Include/header');
	  $this->load->view('Website/vision');
		 $this->load->view('Include/footer');
	}
	public function chairman_desk()
	{
		 $this->load->view('Include/header');
	  $this->load->view('Website/chairman_desk');
		 $this->load->view('Include/footer');
	}
	public function administrative()
	{
		 $this->load->view('Include/header');
	  $this->load->view('Website/administrative');
		 $this->load->view('Include/footer');
	}
	public function gallery(){

		$gallery_list = $this->Admin_Model->get_list_by_id('gallery_status',1,'gallery_id','DESC','gallery');
		foreach ($gallery_list as $gallery_list1) {
			$gallery_id = $gallery_list1->gallery_id;
			$gallery_photo = $this->Admin_Model->get_list_by_id('gallery_id',$gallery_id,'gallery_photo_id','DESC','gallery_photo');
			foreach ($gallery_photo as $gallery_photo1) { }
			$gallery_list1->title_img = $gallery_photo1->gallery_photo_name;
			$data[] = $gallery_list1;
		}

		$data['gallery_list'] = $data;
		$this->load->view('Include/header',$data);
	  $this->load->view('Website/gallery',$data);
		$this->load->view('Include/footer',$data);
	}

	public function gallery_images(){
		$gallery_id = $this->uri->segment(2);
		$gallery_photo = $this->Admin_Model->get_list_by_id('gallery_id',$gallery_id,'gallery_photo_id','DESC','gallery_photo');
		$data['gallery_photo_list'] = $gallery_photo;
		// print_r($gallery_id);
		$this->load->view('Include/header',$data);
	  $this->load->view('Website/gallery',$data);
		$this->load->view('Include/footer',$data);
	}
	public function teaching()
	{
		 $this->load->view('Include/header');
	  $this->load->view('Website/teaching');
		 $this->load->view('Include/footer');
	}
	public function principal()
	{
		 $this->load->view('Include/header');
	  $this->load->view('Website/principal');
		 $this->load->view('Include/footer');
	}
	public function non_teaching()
	{
		 $this->load->view('Include/header');
	  $this->load->view('Website/non_teaching');
		 $this->load->view('Include/footer');
	}
	public function secretery()
	{
		 $this->load->view('Include/header');
	  $this->load->view('Website/secretary');
		 $this->load->view('Include/footer');
	}
	public function school_achivement()
	{
		 $this->load->view('Include/header');
	  $this->load->view('Website/school_achivements');
		 $this->load->view('Include/footer');
	}
	public function teacher_achivement()
	{
		 $this->load->view('Include/header');
	  $this->load->view('Website/teacher_achievements');
		 $this->load->view('Include/footer');
	}
	public function student_achivement()
	{
		 $this->load->view('Include/header');
	  $this->load->view('Website/student_achievements');
		 $this->load->view('Include/footer');
	}
	public function chairman_achivement()
	{
		 $this->load->view('Include/header');
	  $this->load->view('Website/chairman_achievements');
		 $this->load->view('Include/footer');
	}
	public function teaching_staff()
	{
		 $this->load->view('Include/header');
	  $this->load->view('Website/teaching_staff');
		 $this->load->view('Include/footer');
	}
	public function nonteaching_staff()
	{
		 $this->load->view('Include/header');
		$this->load->view('Website/nonteaching_staff');
		 $this->load->view('Include/footer');
	}
	public function cbsc_circulars(){
		$data['cbsc_notification_list'] = $this->Admin_Model->get_cbsc_notification('Circulars');
		$data['title'] = 'Circulars';
		$this->load->view('Include/header',$data);
		$this->load->view('Website/cbsc_notification',$data);
		// $this->load->view('Website/cbsc_circulars',$data);
		$this->load->view('Include/footer',$data);
	}

	public function cbsc_notification(){
		$data['cbsc_notification_list'] = $this->Admin_Model->get_cbsc_notification('Notification');
		$data['title'] = 'Notification';
		// $this->load->helper('download');
		// force_download('/assets/images/gallery/gallery_photo_5_1_1580992942.jpg', NULL);

		$this->load->view('Include/header',$data);
		$this->load->view('Website/cbsc_notification',$data);
		$this->load->view('Include/footer',$data);
	}

	public function annual_calender()
	{
		 $this->load->view('Include/header');
		$this->load->view('Website/annual_calender');
		 $this->load->view('Include/footer');
	}
	public function registration_form()
	{
		 $this->load->view('Include/header');
		$this->load->view('Website/registration_form');
		 $this->load->view('Include/footer');
	}
	public function fee_details()
	{
		 $this->load->view('Include/header');
		$this->load->view('Website/fee_details');
		 $this->load->view('Include/footer');
	}

	public function documents()
	{
		 $this->load->view('Include/header');
		$this->load->view('Website/documents');
		 $this->load->view('Include/footer');
	}
	public function announcement()
	{
		 $this->load->view('Include/header');
		$this->load->view('Website/announcement');
		 $this->load->view('Include/footer');
	}
	public function compitition()
	{
		 $this->load->view('Include/header');
		$this->load->view('Website/compitition');
		 $this->load->view('Include/footer');
	}

	public function contact()
	{
		 $this->load->view('Include/header');
	  $this->load->view('Website/contact');
		 $this->load->view('Include/footer');
	}
	public function send_mail(){
		$this->load->library('email');
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$subject2 = $this->input->post('subject');
		$mobile = $this->input->post('mobile');
		$message = $this->input->post('message');
		$message1 = $message.' mobile No.'.$mobile;
		$from_email = $email;
		$recipient = "demo@gmail.com";
		$subject = "Mail From Website - ".$subject2;
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From: '.$from_email."\r\n".
		'Reply-To: '.$from_email."\r\n" .
		'X-Mailer: PHP/' . phpversion();

		$send = mail($recipient, $subject, $message1, $headers);
		if($send){
			$this->session->set_flashdata('send_email','success');
			$save_data['name'] = $name;
			$save_data['email'] = $email;
			$save_data['mobile'] = $mobile;
			$save_data['subject'] = $subject2;
			$save_data['message'] = $message;
			$this->Admin_Model->save_data('contact_mail', $save_data);
		}
		else{
			$this->session->set_flashdata('send_email','error');
		}
		header('Location:'.base_url('Website/contact'));
		}

}
