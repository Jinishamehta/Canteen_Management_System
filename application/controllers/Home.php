<?php

class Home extends CI_Controller {
	
	public function index() {

		//  if ($this->session->userdata('logged_in'))
		// 	$data['main_view'] = "home_view";
		// else
		// 	$data['main_view'] = "users/login_view";

		$this->load->view('template/header');
	}
}

 ?>