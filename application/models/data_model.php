<?php
class data_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function islogin($data)
	{
		$query = $this->db->get_where('users', array('username' => $data['username'], 'password' => $data['password']));
		return $query->num_rows();
	}
	public function view_where($table, $data)
	{
		$this->db->where($data);
		return $this->db->get($table);
	}
}
