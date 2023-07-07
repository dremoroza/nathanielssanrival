<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {
	public function index(){
		parent::__construct();
		$data = array();
		$this->load->model("OrderHistoryModel");
	}

    public function show_sms(){
		$data['sms'] = $this->OrderHistoryModel->get_sms_message();
        header('Content-Type: application/json');
        echo json_encode($data['sms']);
	}

	public function update_sms($order_id){
        $is_updated = $this->OrderHistoryModel->update_order_history_model($order_id);
        header('Content-Type: application/json');
        if($is_updated){
            echo json_encode([
                'is_updated' => true
            ]);
            return false;
        }

        echo json_encode([
            'is_updated' => false
        ]);

	}
}
