<?php
Class User extends CI_Model
{
	function login($username, $password)
	{
		$this->db->select('id,username,password,user_roll,email,first_name,last_name,date_of_birth');
		$this->db->from('users');
		$this->db->where('username = ' . "'" . $username . "'"); 
		$this->db->where('password = ' . "'" . MD5($password) . "'"); 
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

	}

	function adddb_user($value){
		
		$this->db->insert('users', $value);
		return true ; 
	}
}
?>