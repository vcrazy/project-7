<?php

class Model_home extends MY_Model
{	
	public function get_result()
	{
            return 1;
	}
    
    public function load_user_info($user_id=1) 
    {
        $this->db->select('id,egn,name,father_name,surname,mob_number,ocenka_diploma,ocenka_matura');
        $this->db->from('users');
        $query = $this->db->get();
        return $this->single_result($query);
    }
}

