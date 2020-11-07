<?php

class Inventory extends CI_Controller {

	// public function __construct(){

	// 	parent::__construct();

	// 	if(!$this->session->userdata('logged_in')){

	// 		$this->session->set_flashdata('no_access','Sorry you are not allowed or not logged in');
	// 		redirect(base_url().'Pages');
	// 	}
	// }
	
	public function get_food_items($page) {
		$this->load->view('template/header');
		$data['inventory'] = $this->inventory_model->get_inventory($page);
		$this->load->view('pages/display', $data);
		$this->load->view('template/footer');
	}

	public function get_orders() {
		$this->load->view('template/header');
		$data['order'] = $this->inventory_model->get_all_orders();
		$this->load->view('pages/order', $data);
		$this->load->view('template/footer');
	}

	public function refund($order_id){
		$this->load->view('template/header');
		$temp['x'] = $this->inventory_model->refund($order_id);
	 $data['order'] = $this->inventory_model->get_all_orders();
		 $this->load->view('pages/order', $data);
		$this->load->view('template/footer');
	}
}