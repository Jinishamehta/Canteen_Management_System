<?php

class Inventory extends CI_Controller {

	// public function __construct(){

	// 	parent::__construct();

	// 	if(!$this->session->userdata('logged_in')){

	// 		$this->session->set_flashdata('no_access','Sorry you are not allowed or not logged in');
	// 		redirect('home/index');
	// 	}
	// }
	//Get all Food Items
	public function get_food_items($page) {
		$this->load->view('template/header');
		$data['inventory'] = $this->inventory_model->get_inventory($page);
		$this->load->view('pages/display', $data);
		$this->load->view('template/footer');
	}

	//Add new food Item
	public function add_product(){

		$this->form_validation->set_rules('product_name', 'Product Name', 'required');
		$this->form_validation->set_rules('weight', 'Weight', 'required' );
		$this->form_validation->set_rules('pcs', 'Pcs', 'required' );
		$this->form_validation->set_rules('price', 'Price', 'required' );
		$this->form_validation->set_rules('quantity', 'Quantity', 'required' );

		if($this->form_validation->run() == FALSE){

			$data['main_view'] = 'inventory/create_product';
			$this->load->view('layouts/main',$data);
		
		}else{

			$data = array(
					'product_name' => $this->input->post('product_name'),
					'weight'=> $this->input->post('weight'),
					'pcs'=> $this->input->post('pcs'),
					'price' => $this->input->post('price'),
					'quantity' => $this->input->post('quantity')
					);

			if($this->inventory_model->add_product($data)) {

				redirect("inventory");

			}
		}
	}
}