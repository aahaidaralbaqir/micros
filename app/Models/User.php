<?php 

class User extends Model
{
	public function index ()
	{
		return $this->db->from('t_user')
							->limit(5);
	}
}