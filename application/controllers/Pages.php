<?php

class Pages extends CI_Controller
{
	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('pages/home');
		$this->load->view('template/footer');
		 
	}

	public function about(){

		$this->load->view('template/header');
		$this->load->view('pages/about');
		$this->load->view('template/footer');	
	}

	public function menu(){

		$this->load->view('template/header');
		$this->load->view('pages/menu');
		$this->load->view('template/footer');	
	}

}
?>
