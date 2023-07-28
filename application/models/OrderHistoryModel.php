<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OrderHistoryModel extends CI_Model {
	public function get_sms_message(){
		$data = $this->db->select('tbl_order_history.*, tbl_shipping.cus_mobile')
			->join('tbl_order', 'tbl_order.order_id = tbl_order_history.order_id')
			->join('tbl_shipping', 'tbl_shipping.shipping_id = tbl_order.shipping_id')
			->from('tbl_order_history')
			->where('tbl_order_history.order_status', 'shipped')
			->where('is_sent', 0)
			->get()
			->result();
			return $data;
	}

	public function get_all_status_history($id){
		$data = $this->db->select('*')
			->from('tbl_order_history')
			->where('tbl_order_history.order_id', $id)
			->get()
			->result();
			return $data;
	}

	public function update_order_history_model($id){
		$data['is_sent'] = 1;
		$this->db->where('id',$id);
		$this->db->update('tbl_order_history',$data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		return false;
	}

	public function add_order_status_history($status, $id){
		$data['order_id'] = $id;
		$data['order_status'] = $status;
		$data['message'] = "Your order# " . $id . " has been " . $status;
		$data['is_sent'] = 0;

		$this->db->insert('tbl_order_history', $data);	
	}
}