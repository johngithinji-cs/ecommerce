<?php
class Usermodel extends CI_Model
{
	public function insert_user($data)
	{
		$this->db->insert('user', $data);
		return true;
	}
}
