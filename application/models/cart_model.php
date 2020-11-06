<?php

class Cart_model extends CI_Model {

	public function check($data){
		if(is_null($data)){
    		return false;
    	}
		else{
			foreach ($data as $key => $value) {
				$details = array(
					'name'=> $value[0],
					'price'=>$value[1],
					'quantity'=>$value[2],
					'total' =>$value[1]*$value[2],
					);
				$insert_query = $this->db->insert('cart',$details);
			}
			return true;
    	}
	}

	public function get_cart() {
		$query = $this->db->get('cart');
		return $query->result();
	}

	public function save_order($data){
		if(is_null($data)){
    		return false;
    	}
		else{

			$total=0;
 			$cart = $this->db->get('cart');
 			$num= $cart->num_rows();
 			for($i = 0;$i<$num;$i++){
 				$total = $total + $cart->row($i)->total;
 			}

 			$details = array(
					'user_id'=> $this->session->userdata('user_id'),
					'status'=>'Order placed',
					'payment_type'=>$data,
					'amt' =>$total,
					);

 			$this->db->insert('order',$details);
 			$order = $this->db->insert_id();

			for ($i = 0;$i<$num;$i++) {
				$detail = array(
					'id'=>$order,
					'name'=>  $cart->row($i)->name,
					'price'=> $cart->row($i)->price,
					'quantity'=> $cart->row($i)->quantity,
					
					);
				$insert_query = $this->db->insert('order_details',$detail);
			}
			$this->db->empty_table('cart');
			return true;
    	}
	}

}
?>