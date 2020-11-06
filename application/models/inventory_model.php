<?php

class Inventory_model extends CI_Model {

	public function get_inventory($type) {
		$this->db->where('type',$type);
		$query = $this->db->get('food');
		return $query->result();
	}

	public function add_product($data){
		$query = $this->db->insert('food',$data);
		return $query;
	}

	public function get_all_orders(){
		$this->db->where('user_id',$this->session->userdata('user_id'));
		$query = $this->db->get('order');
		return $query->result();
	}
}
?>