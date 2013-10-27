<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_home extends MY_Model
{	
	public function get_result()
	{
            return 1;
	}
    
    public function load_user_info($user_id=1) 
    {
        $this->db->select('*');
        $this->db->from('users');
        $query = $this->db->get();
        return $this->single_result($query);
    }
}

