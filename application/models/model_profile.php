<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_profile extends MY_Model
{
	public function get_info($user_id = 1)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('id', $user_id);
		$query = $this->db->get();

		return $this->single_result($query);
	}
}
