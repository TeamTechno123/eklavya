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
	public function policy(){
	  $this->load->view('Website/policy');
	}
	public function about(){
		$this->load->view('Include/header');
	  $this->load->view('Website/about');
		$this->load->view('Include/footer');
	}
	public function vision(){
		$this->load->view('Include/header');
	  $this->load->view('Website/vision');
		$this->load->view('Include/footer');
	}
	public function chairman_desk(){
		$this->load->view('Include/header');
	  $this->load->view('Website/chairman_desk');
		$this->load->view('Include/footer');
	}
	public function administrative(){
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
	public function teaching(){
		$this->load->view('Include/header');
	  $this->load->view('Website/teaching');
		$this->load->view('Include/footer');
	}
	public function principal(){
		$this->load->view('Include/header');
	  $this->load->view('Website/principal');
		$this->load->view('Include/footer');
	}
	public function non_teaching(){
		$this->load->view('Include/header');
	  $this->load->view('Website/non_teaching');
		$this->load->view('Include/footer');
	}
	public function secretery(){
		$this->load->view('Include/header');
	  $this->load->view('Website/secretary');
		$this->load->view('Include/footer');
	}
	public function school_achivement(){
		$data['achievement_list'] = $this->Admin_Model->get_achivement_list('School');
		$data['title'] = 'School';

		$this->load->view('Include/header',$data);
	  $this->load->view('Website/achievement',$data);
		$this->load->view('Include/footer',$data);
	}
	public function teacher_achivement(){
		$data['achievement_list'] = $this->Admin_Model->get_achivement_list('Teacher');
		$data['title'] = 'Teacher';

		$this->load->view('Include/header',$data);
	  $this->load->view('Website/achievement',$data);
		$this->load->view('Include/footer',$data);
	}
	public function student_achivement(){
		$data['achievement_list'] = $this->Admin_Model->get_achivement_list('Student');
		$data['title'] = 'Student';

		$this->load->view('Include/header',$data);
	  $this->load->view('Website/achievement',$data);
		$this->load->view('Include/footer',$data);
	}
	public function chairman_achivement(){
		$this->load->view('Include/header');
	  $this->load->view('Website/chairman_achievements');
		$this->load->view('Include/footer');
	}

	public function teaching_staff(){
		$data['staff_list'] = $this->Admin_Model->get_teaching_staff_list('Teaching Staff');
		$data['title'] = 'Teaching Staff';

		$this->load->view('Include/header', $data);
	  $this->load->view('Website/teaching_staff', $data);
		$this->load->view('Include/footer', $data);
	}
	public function nonteaching_staff(){
		$data['staff_list'] = $this->Admin_Model->get_nonteaching_staff_list('Teaching Staff');
		$data['title'] = 'Non Teaching Staff';

		$this->load->view('Include/header',$data);
		$this->load->view('Website/nonteaching_staff',$data);
		$this->load->view('Include/footer',$data);
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

	public function annual_calender(){
		$this->load->view('Include/header');
		$this->load->view('Website/annual_calender');
		$this->load->view('Include/footer');
	}
	public function registration_form(){
		$this->load->view('Include/header');
		$this->load->view('Website/registration_form');
		$this->load->view('Include/footer');
	}
	public function fee_details(){
		$this->load->view('Include/header');
		$this->load->view('Website/fee_details');
		$this->load->view('Include/footer');
	}
	public function documents(){
		$this->load->view('Include/header');
		$this->load->view('Website/documents');
		$this->load->view('Include/footer');
	}
	public function announcement(){
		$data['announcement_list'] = $this->Admin_Model->get_list_by_id('announcement_status',1,'announcement_id','ASC','announcement');
		$this->load->view('Include/header',$data);
		$this->load->view('Website/announcement',$data);
		$this->load->view('Include/footer',$data);
	}
	public function compitition(){
		$this->load->view('Include/header');
		$this->load->view('Website/compitition');
		$this->load->view('Include/footer');
	}
	public function contact(){
		$this->load->view('Include/header');
	  $this->load->view('Website/contact');
		$this->load->view('Include/footer');
	}

	public function send_mail(){
		date_default_timezone_set("Asia/Kolkata");
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
			$save_data['date'] = date('d-m-Y h:i:sA');
			$this->Admin_Model->save_data('contact_mail', $save_data);

			$SMS = 'Enquiry mail sent successfully to Eklavya Public School';
			$param['uname'] = 'wbcare';
			$param['password'] = '123123';
			$param['sender'] = 'AKCENT';
			$param['receiver'] = $mobile_num.','.$customer_mob1;
			$param['route'] = 'TA';
			$param['msgtype'] = 1;
			$param['sms'] = $SMS;
			$parameters = http_build_query($param);
			$url="http://msgblast.in/index.php/smsapi/httpapi";
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch,CURLOPT_HEADER, false);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
			curl_setopt($ch, CURLOPT_POSTFIELDS,$parameters);
			$result = curl_exec($ch);

		}
		else{
			$this->session->set_flashdata('send_email','error');
		}
		header('Location:'.base_url('Website/contact'));


	}

}
