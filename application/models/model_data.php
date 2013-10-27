<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_data extends MY_Model
{
	public function get_universities()
	{
		$this->db->select('u.id AS university_id, u.name AS university_name');
		$this->db->from('universities AS u');
		$query = $this->db->get();

		return $this->results($query);
	}

	public function get_faculties($university_id = FALSE)
	{
		$this->db->select('f.id AS faculty_id, f.name aS faculty_name, u.id AS university_id, u.name AS university_name');
		$this->db->from('faculties AS f');
		$this->db->join('universities AS u', 'f.uni_id = u.id');

		if($university_id)
		{
			$this->db->where('f.uni_id', $university_id);
		}

		$query = $this->db->get();

		return $this->results($query);
	}
}
