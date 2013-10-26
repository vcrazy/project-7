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
    
    public function check_student_wishlist($user_id=0,$specialty=0)
    {
        $query = $this->db->get_where('student_wishlist', array('student_id' => $user_id,'specialty_id'=>$specialty));
        return $query->num_rows();
    }
    
    public function save_student_wishlist ($insert_student_wishlist=array())
    {
        $this->db->insert_batch('student_wishlist', $insert_student_wishlist);
    }
}

