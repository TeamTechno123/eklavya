<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {
	// public function __construct(){
  //   parent::__construct();
  //   $this->load->model('User_Model');
  // }

	public function index(){
	  $this->load->view('Website/index');
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
			// $subject = $this->input->post('subject');
			$mobile = $this->input->post('mobile');
			$message = $this->input->post('message');
			$message1 = $message.' mobile No.'.$mobile;
			$from_email = $email;
			$recipient = "demo@gmail.com";
			$subject = "Enquiry Mail";
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= 'From: '.$from_email."\r\n".
			'Reply-To: '.$from_email."\r\n" .
			'X-Mailer: PHP/' . phpversion();

				$send = mail($recipient, $subject, $message1, $headers);
				if($send){
					$this->session->set_flashdata('send_email','success');
				}
				else{
					$this->session->set_flashdata('send_email','error');
				}
				header('Location:'.base_url('Website/contact'));
				}
}
