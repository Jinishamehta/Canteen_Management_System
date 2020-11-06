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

	 public function refund($order_id){
		$this->db->where('id',$order_id);
		$query = $this->db->get('order');
		if($query->row()->payment_type=="Wallet"){
			$amt = $query->row()->amt;

			 $this->db->where('user_id',$this->session->userdata('user_id'));
			 $query1 = $this->db->get('credits');
			 if($query1->num_rows()>0){
			 	$amt = $amt + $query1->row()->credits;
			 	$this->db->set('credits', $amt);
			 	$this->db->where('user_id',$this->session->userdata('user_id'));
			 	$this->db->update('credits');
		 	 }else{
			 	$details=array(
			 		'user_id'=>$this->session->userdata('user_id'),
			 		'credits'=>$amt,
			 	);
			 	 $this->db->insert('credits',$details);
			 }
			}
		 $this->db->set('status', 'Order Cancelled');
		 $this->db->where('id',$order_id);
		 $this->db->update('order');
	 	 	 }
}
?>