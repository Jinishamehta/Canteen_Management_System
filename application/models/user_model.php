<?php

class User_model extends CI_Model {

	public function login_user($username,$password){

		$this->db->where('username',$username);
		$results = $this->db->get('user');
		$db_password = $results->row()->password;
		if($password==$db_password) 
			return $results->row();
	}

	public function get_users($user_id,$username) {
		
		$this->db->where([

			'id' => $user_id,
			'username' => $username

			]);

		$query = $this->db->get('z_users');

		return $query->result();
	
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

	public function update_users($data,$id) {

		$this->db->where(['id' => $id]);
		$this->db->update('z_users',$data);
	}

	public function delete_users($id) {

		$this->db->where(['id' => $id]);
		$this->db->delete('z_users');
	}

}

 ?>