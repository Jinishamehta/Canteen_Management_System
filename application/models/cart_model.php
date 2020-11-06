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

}
?>