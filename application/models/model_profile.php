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

	public function get_standing($user_id = 1)
	{
		$this->db->select('specialty_id');
		$this->db->from('student_wishlist');
		$this->db->where('student_id', $user_id);
		$query = $this->db->get();
		$wish = $this->single_result($query);
		$specialty_id = $wish['specialty_id'];

		$this->db->select('s.name AS s_name, f.name AS f_name, st.bal, (SELECT COUNT(*) FROM standing WHERE specialty_id=st.specialty_id AND bal > st.bal) + 1 AS position');
		$this->db->from('standing AS st');
		$this->db->join('specialties AS s', 'st.specialty_id=s.id');
		$this->db->join('faculties AS f', 's.faculty_id=f.id');
		$this->db->where('user_id', $user_id);
		$this->db->where('st.specialty_id', $specialty_id);
		$query = $this->db->get();

		return $this->results($query);
	}
}
