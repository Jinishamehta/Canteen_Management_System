<?php

class Cart extends CI_Controller {
	
	public function index() {

		$this->load->view('template/header');
		$data['data'] = $this->cart_model->get_cart();
		$this->load->view('pages/cart',$data);
		$this->load->view('template/footer');
	}

	public function carting() {
		$data = $_POST['cart'];
		$status = $this->cart_model->check($data);
		return $status;	
	}

	public function place_order(){
		if($this->session->userdata("logged_in")){
			$this->load->view('template/header');
			$this->load->view('pages/payment');
			$this->load->view('template/footer');
		}
	}

	public function save_order(){
		$type = $_POST['payment_type'];
		echo $type;
	}
}

 ?>