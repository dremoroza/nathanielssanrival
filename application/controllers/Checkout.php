<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("CheckoutModel");
		$this->load->model("MailModel");
	}
	public function checkout(){
		$data['main_content'] = $this->load->view('front/checkout','',true);
		$this->load->view('front/index',$data);
	}
	public function customer_registration(){
		
	 $this->form_validation->set_rules('cus_name', 'Firstname', 'trim|required');
	 $this->form_validation->set_rules('cus_lname', 'Lastname', 'trim|required');
	// $this->form_validation->set_rules('cus_email', 'Email', 'trim|required|valid_email');
	 $this->form_validation->set_rules('cus_email', 'Email', 'required|valid_email|is_unique[tbl_customer.cus_email]');
	 $this->form_validation->set_rules('cus_mobile', 'Mobile Number', 'trim|required|min_length[11]');
	 $this->form_validation->set_rules('cus_address', 'Address', 'trim|required|min_length[5]');
	 $this->form_validation->set_rules('cus_city', 'City', 'trim|required');
	 $this->form_validation->set_rules('cus_zip', 'Zip', 'trim|required|min_length[4]');
	 $this->form_validation->set_rules('cus_password', 'Password', 'trim|required|min_length[8]|regex_match[/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/]');
	 $this->form_validation->set_rules('con_pass', 'Password Confirmation', 'trim|required|matches[cus_password]');

	 
 	if($this->form_validation->run()){
		$customer_id = $this->CheckoutModel->save_customer_info();
		$sdata = array();
		$sdata['cus_id'] = $customer_id;
		$sdata['cus_name'] = $this->input->post('cus_name');
		$sdata['cus_email'] = $this->input->post('cus_email');
		$sdata['cus_id'] = $this->session->set_userdata($sdata);

		//insert initital shipping data
		$this->CheckoutModel->insert_shipping_registration($customer_id, $this->input->post('cus_name'), $this->input->post('cus_lname'), $this->input->post('cus_email'));

		// start registration Successfull mail 
		$mdata = array();
		$mdata['name'] = $this->input->post('cus_name') ." ". $this->input->post('cus_lname');
		$mdata['from'] = "noreply@nathanielsansrival.com";
		$mdata['admin_full_name'] = "Nathaniels Sans Rival";
		$mdata['to'] = $this->input->post('cus_email');
		$mdata['subject'] = "Registration Successfull......";
		$mdata['password'] = $this->input->post('cus_password');
		$this->MailModel->mail_send($mdata,'registration_successfull');

		// end registration successfull  mail 
		redirect("customer-account");
	}else{
			$this->checkout();//checkout means login page
		}
	}


	public function customer_account(){
		$data= array();

		$customer_id = $this->session->userdata('cus_id');
		$customer_shipping_id = $this->session->userdata('shipping_id');
		if($customer_id==NUll){
			redirect("checkout");
		}else{
			$data['cus_info'] = $this->CheckoutModel->select_customer_info_by_id($customer_id);
			$data['sh_cus_info'] = $this->CheckoutModel->select_customer_shipping_info_by_id($customer_shipping_id);
			$data['all_order'] = $this->InvoiceModel->get_all_order_by_cus_id($customer_id);
			$data['main_content'] = $this->load->view('front/account',$data,true);
			$this->load->view('front/index',$data);
		}

	}

	public function customer_login(){
		$cus_email = $this->input->post('cus_email',true);
		$cus_pass = md5($this->input->post('cus_password',true));
		$user_details = $this->CheckoutModel->get_user_login_by_email($cus_email);
		$shipping_details = $this->CheckoutModel->select_customer_shipping_info_by_cust_id($user_details->cus_id);
		if($cus_pass==$user_details->cus_password){
			$sdata['cus_id'] = $user_details->cus_id;
			$sdata['cus_name'] =$user_details->cus_name;
			$sdata['cus_email'] =$user_details->cus_email;
			$sdata['shipping_id'] =$shipping_details->shipping_id;
			$sdata['cus_id'] = $this->session->set_userdata($sdata);
			redirect("customer-account");
		}else{
			$this->session->set_flashdata('flash_msg','Incorrect Email Or Password...!');
			redirect("Checkout/checkout");
		}
	}
	public function billing(){
		if($this->cart->total_items() == NULL) {
			return redirect("show-cart");
		}

		$data= array();
		$customer_id= $this->session->userdata("cus_id");
		$customer_shipping_id = $this->session->userdata('shipping_id');
		$data['cus_info'] = $this->CheckoutModel->select_customer_info_by_id($customer_id);
		$data['sh_cus_info'] = $this->CheckoutModel->select_customer_shipping_info_by_id($customer_shipping_id);
		$data['main_content'] = $this->load->view('front/billing',$data,true);
		$this->load->view('front/index',$data);
	}
	public function shipping(){
		 
			$data['main_content'] = $this->load->view('front/shipping','',true);
			$this->load->view('front/index',$data);

	}
	public function update_billing(){
		$this->form_validation->set_rules('cus_name', 'Billing Address Name', 'trim|required|min_length[5]');
		 $this->form_validation->set_rules('cus_mobile', 'Billing Address Mobile Number', 'trim|required');
		 $this->form_validation->set_rules('cus_address', 'Billing Address Address', 'trim|required|min_length[5]');
		 $this->form_validation->set_rules('cus_city', 'Billing Address City', 'trim|required');
		 $this->form_validation->set_rules('cus_zip', 'Billing Address Zip', 'trim|required|min_length[4]');

		 $this->form_validation->set_rules('sh_cus_name', 'Shipping Address Name', 'trim|required|min_length[5]');
		 $this->form_validation->set_rules('sh_cus_mobile', 'Shipping Address Mobile Number', 'trim|required|min_length[11]');
		 $this->form_validation->set_rules('sh_cus_address', 'Shipping Address Address', 'trim|required|min_length[5]');
		 $this->form_validation->set_rules('sh_cus_city', 'Shipping Address City', 'trim|required');
		 $this->form_validation->set_rules('sh_cus_zip', 'Shipping Address Zip', 'trim|required|min_length[4]');
		if($this->form_validation->run()){
			$this->CheckoutModel->upate_billing_by_id();
			$this->CheckoutModel->upate_shipping_by_id();		
		}
			
		$this->customer_account();
		
	}
	public function payment(){
	$customer_id = $this->session->userdata('cus_id');
	if($customer_id==NUll){
		redirect("checkout");
	}else{
		$data['main_content'] = $this->load->view('front/payment','',true);
		$this->load->view('front/index',$data);
		}
	}
	public function customer_logout(){
		$this->session->sess_destroy();
		redirect("Home");
	}
	public function insert_shipping(){
		$this->form_validation->set_rules('cus_mobile', 'Mobile Number', 'trim|required');
		 $this->form_validation->set_rules('cus_address', 'Address', 'trim|required|min_length[5]');
		 $this->form_validation->set_rules('cus_city', 'City', 'trim|required');
		 $this->form_validation->set_rules('cus_zip', 'Zip', 'trim|required|min_length[4]');
		 $this->form_validation->set_rules('cus_email', 'Email', 'trim|required|valid_email');
		 $this->form_validation->set_rules('cus_name', 'Email', 'trim|required');
			if($this->form_validation->run()){
			$this->CheckoutModel->insert_shipping();
			redirect("payment");
		}else{
			$this->shipping();
		}
	}
	public function place_order(){
		$this->form_validation->set_rules('cus_name', 'Billing Address Firstname', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('cus_lname', 'Billing Address Lastname', 'trim|required|min_length[5]');
		 $this->form_validation->set_rules('cus_mobile', 'Billing Address Mobile Number', 'trim|required');
		 $this->form_validation->set_rules('cus_address', 'Billing Address Address', 'trim|required|min_length[5]');
		 $this->form_validation->set_rules('cus_city', 'Billing Address City', 'trim|required');
		 $this->form_validation->set_rules('cus_zip', 'Billing Address Zip', 'trim|required|min_length[4]');

		 $this->form_validation->set_rules('sh_cus_name', 'Shipping Address Firstname', 'trim|required|min_length[5]');
		 $this->form_validation->set_rules('sh_cus_lname', 'Shipping Address Lastname', 'trim|required|min_length[5]');
		 $this->form_validation->set_rules('sh_cus_mobile', 'Shipping Address Mobile Number', 'trim|required|min_length[11]');
		 $this->form_validation->set_rules('sh_cus_address', 'Shipping Address Address', 'trim|required|min_length[5]');
		 $this->form_validation->set_rules('sh_cus_city', 'Shipping Address City', 'trim|required');
		 $this->form_validation->set_rules('sh_cus_zip', 'Shipping Address Zip', 'trim|required|min_length[4]');
		 $this->form_validation->set_rules('payment_gateway', 'Payment Method', 'trim|required');
		if($this->form_validation->run()){

			$session_data['b_name'] 	= $this->input->post('cus_name');
			$session_data['b_lastname']	= $this->input->post('cus_lname');
			$this->session->set_userdata($session_data);

			$this->CheckoutModel->upate_billing_by_id();
			$this->CheckoutModel->upate_shipping_by_id();	
			$this->CheckoutModel->save_payment_info();
			$this->CheckoutModel->save_order_info();

			$mdata = array();
			$mdata['cus_full_name'] = $this->session->userdata("cus_name");
			$mdata['to'] = $this->session->userdata("cus_email");
			$mdata['from'] = "noreply@nathanielsansrival.com";
			$mdata['admin_full_name'] = "Nathaniels Sans Rival";
			$mdata['subject'] = "Order Successfully Complete......";
	
			$mdata['g_total'] = $this->session->userdata("g_total");
			
			if($this->input->post('payment_gateway') == 'paypal'){
				redirect('order-paypal');
			}

			$this->MailModel->Order_success_mail_send($mdata,'order_successfull');
			$this->cart->destroy();
			redirect('order-success');
		}else{
			$this->billing();
		}

	}
	public function order_success(){
		$data =array();
		$data['slider'] = $this->load->view('front/slider','',true);
		$data['recommended'] = $this->load->view('front/recommended','',true);
		$data['main_content'] = $this->load->view('front/order_success','',true);
		$data['category_brand'] = $this->load->view('front/category','',true);
		$this->load->view('front/index',$data);
	}

	public function order_paypal(){
		$this->load->view('front/paypal');
	}

	public function order_paypal_success(){

		$mdata = array();
		$mdata['cus_full_name'] = $this->session->userdata("cus_name");
		$mdata['to'] = $this->session->userdata("cus_email");
		$mdata['from'] = "noreply@nathanielsansrival.com";
		$mdata['admin_full_name'] = "Nathaniels Sans Rival";
		$mdata['subject'] = "Order Successfully Complete......";

		$mdata['g_total'] = $this->session->userdata("g_total");

		$this->MailModel->Order_success_mail_send($mdata,'order_successfull');

		$data =array();
		$data['slider'] = $this->load->view('front/slider','',true);
		$data['recommended'] = $this->load->view('front/recommended','',true);
		$data['main_content'] = $this->load->view('front/order_success','',true);
		$data['category_brand'] = $this->load->view('front/category','',true);
		
		$this->load->view('front/index',$data);

		$this->cart->destroy();
	}
	
}
