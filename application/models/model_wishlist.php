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

	public function get_applications($user_id = 1)
	{
		// Get all my applications and positions

		$this->db->select('s.name AS s_name, f.name AS f_name, u.name AS u_name, st.bal, (SELECT COUNT(*) FROM standing WHERE specialty_id = st.specialty_id AND bal > st.bal) + 1 AS position, s.entry_number AS total');
		$this->db->from('student_wishlist AS sw');
		$this->db->join('specialties AS s', 'sw.specialty_id = s.id');
		$this->db->join('faculties AS f', 's.faculty_id = f.id');
		$this->db->join('universities AS u', 'f.uni_id = u.id');
		$this->db->join('standing AS st', 'sw.student_id = st.user_id AND sw.specialty_id = st.specialty_id', 'left');
		if($user_id)
		{
			$this->db->where('sw.student_id', $user_id);
		}
		$query = $this->db->get();

		return $this->results($query);
	}
}

