<?php 

class User extends CI_Controller
{
	public function login_view(){
		$this->load->view('template/header');
		$this->load->view('user/login');
		$this->load->view('template/footer');
	}

	public function login(){
		echo '<script>alert("Welcome to Geeks for Geeks")</script>';
		
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
		
		if($this->form_validation->run() == FALSE) {
			$data = array(
				'errors' => validation_errors()
				);
			$this->session->set_flashdata($data);				
		}else{
			echo '<script>alert("Welcome ")</script>';
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

			$this->session->set_userdata($user_data);
			$this->session->set_flashdata('login_success','U r now logged in');
			redirect(base_url().'Pages');
			}else{
				echo '<script>alert("failed")</script>';
				$this->session->set_flashdata('login_failed','Not logged in');
				redirect(base_url().'Pages/menu');
			}
		}
		
	}

	public function register(){

		$this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');

		if($this->form_validation->run() == FALSE){

			$this->load->view('template/header');
			$this->load->view('user/register');
			$this->load->view('template/footer');

		}else{

			if($this->user_model->create_users()) {

				$this->session->Set_flashdata('user_registration','User has been registered');
				redirect(base_url().'Pages');
			}else{
				echo "User not created";
				redirect(base_url().'Pages');
			}

		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'Pages');

	}
}
