<?php 

class User
{
	private $db;
	public function __construct()
	{
		$this->db = Database::getInstance();
	}

	public function index ()
	{
		return $this->db->from('t_user')
							->limit(5);
	}
}