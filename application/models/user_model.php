<?php

class User_model extends CI_Model {

	public function login_user($username,$password){

		$this->db->where('username',$username);
		$results = $this->db->get('z_users');
		$db_password = $results->row(6)->password;

		if(password_verify($password, $db_password)) 
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

		$option = ['cost'=> 12];

		$encrypted_pass = password_hash($this->input->post('password'),PASSWORD_BCRYPT,$option);

		if($this->session->userdata('user_type')){

		$data = array(

				'first_name' => $this->input->post('first_name'),
				'last_name'  => $this->input->post('last_name'),
				'email' 	 => $this->input->post('email'),
				'username'   => $this->input->post('username'),
				'password'   => $encrypted_pass,
				'user_type'  => '1'

				);
		}else{

			$data = array(

				'first_name' => $this->input->post('first_name'),
				'last_name'  => $this->input->post('last_name'),
				'email' 	 => $this->input->post('email'),
				'username'   => $this->input->post('username'),
				'password'   => $encrypted_pass

				);

		}

		$insert_data = $this->db->insert('z_users',$data);
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