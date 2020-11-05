<?php 

class User extends CI_Controller
{
	public function login(){

		
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
		

		if($this->form_validation->run() == FALSE) {
			$this->load->view('template/header');
			$this->load->view('user/login');
			$this->load->view('template/footer');	
			$data = array(

				'errors' => validation_errors()
				);

			$this->session->set_flashdata($data);
		
		}else{

			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$user_id = $this->user_model->login_user($username,$password);

			if($user_id){

				$user_data = array(

					'user_id' => $user_id->id,
					'user_type' => $user_id->user_type,
					'username' => $username,
					'logged_in' => true
				);

				// console.log($user_id->user_type);

			$this->session->set_userdata($user_data);
			$this->session->set_flashdata('login_success','U r now logged in');
			redirect('home/index');
			}else{
				$this->session->set_flashdata('login_failed','Not logged in');
				redirect('home/index');
			}
		}
		
	}

	public function register(){
		
		$this->load->view('template/header');
		$this->load->view('user/register');
		$this->load->view('template/footer');	
	}


}
