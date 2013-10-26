<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_exams extends MY_Model
{	    
    public function get_exams($user_id = 1) 
    {
		$this->db->select('*');
		$this->db->from('wishlist');
		$this->db->where('user_id', $user_id);
		$query = $this->db->get();

		return $this->results($query);
	}
}
