<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_wishlist extends MY_Model
{	
    public function get_universities()
    {
        $this->db->select('id,name');
        $this->db->from('universities');
        $query = $this->db->get();
        return $this->results($query);
    }
    
    public function get_faculties()
    {
        $this->db->select('id,uni_id,name');
        $this->db->from('faculties');
        $query = $this->db->get();
        return $this->results($query);
    }
    
    public function get_specialties() 
    {
        $this->db->select('id,faculty_id,name,info');
        $this->db->from('specialties');
        $query = $this->db->get();
        return $this->results($query);
    }
}

