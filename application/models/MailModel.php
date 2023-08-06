<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MailModel extends CI_Model {
	public function mail_send($data,$template_name){
		// Load PHPMailer library
		$this->load->library('phpmailer_lib');

		// PHPMailer object
		$mail = $this->phpmailer_lib->load();

		// SMTP configuration
		$mail->isSMTP();
		$mail->Host     = 'nathanielsansrival.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'noreply@nathanielsansrival.com';
		$mail->Password = '[%^R@i5}b6AR';
		$mail->SMTPSecure = 'ssl';
		$mail->Port     = 465;

		$mail->setFrom($data['from'],$data['admin_full_name']);

		// Add a recipient
		$mail->addAddress($data['to']);

		// Email subject
		$mail->Subject = $data['subject'];

		// Set email format to HTML
		$mail->isHTML(true);

		$message_body = $this->load->view("mailscripts/".$template_name,$data,true);

		$mail->Body = $message_body;
		// Send email
		$mail->send();
		
	}
	public function Order_success_mail_send($data,$template_name){
	
			// Load PHPMailer library
			$this->load->library('phpmailer_lib');

			// PHPMailer object
			$mail = $this->phpmailer_lib->load();
	
			// SMTP configuration
			$mail->isSMTP();
			$mail->Host     = 'nathanielsansrival.com';
			$mail->SMTPAuth = true;
			$mail->Username = 'noreply@nathanielsansrival.com';
			$mail->Password = '[%^R@i5}b6AR';
			$mail->SMTPSecure = 'ssl';
			$mail->Port     = 465;
	
			$mail->setFrom($data['from'],$data['admin_full_name']);
	
			// Add a recipient
			$mail->addAddress($data['to']);
	
			// Email subject
			$mail->Subject = $data['subject'];
	
			// Set email format to HTML
			$mail->isHTML(true);
	
			$message_body = $this->load->view("mailscripts/".$template_name,$data,true);
	
			$mail->Body = $message_body;
			// Send email
			$mail->send();
	}
}