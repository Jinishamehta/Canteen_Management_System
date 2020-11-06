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
		}else{
			redirect(base_url().'Pages');
		}
	}

	public function save_order(){
		
		$type = $_POST['payment_type'];
		if($type=="Wallet"){
			$wallet=$this->cart_model->wallet();
			$total=$this->cart_model->total();
			if($wallet<$total){
				$this->session->set_flashdata('low_credits','Please change payment method due to low credits');
				$this->load->view('template/header');
				$this->load->view('pages/payment');
				$this->load->view('template/footer');
			}else{
				$this->cart_model->deduct();
				$this->cart_model->save_order($type);
				redirect(base_url().'Pages');
			}
		}else{
			$this->cart_model->save_order($type);
			redirect(base_url().'Pages');
		}
	}
}

 ?>