<?php

class User_model extends CI_Model {

	public function login_user($username,$password){

		$this->db->where('username',$username);
		$results = $this->db->get('user');
		$db_password = $results->row()->password;
		if($password==$db_password) 
			return $results->row();
	}

	public function create_users(){

		// $encrypted_pass = password_hash($this->input->post('password'),PASSWORD_BCRYPT);
		// console.log($encrypted_pass );
		if($this->session->userdata('user_type')){

		$data = array(

				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'username'   => $this->input->post('username'),
				'password'   => $encrypted_pass,
				);
		}else{

			$data = array(

				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'username'   => $this->input->post('username'),
				'password'   => $this->input->post('password'),
				);

		}

		$insert_data = $this->db->insert('user',$data);
		return $insert_data;
	}
}

 ?>