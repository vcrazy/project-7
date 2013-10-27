<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_exams extends MY_Model
{	    
    public function get_exams($user_id = 1) 
    {
		$this->db->select('*');
		$this->db->from('students_exams');
		$this->db->join('users', 'users.id=students_exams.student_id');
		$this->db->join('university_subject', 'university_subject.subject_id=students_exams.uni_subject_id');
		$this->db->join('subjects', 'subjects.id=university_subject.subject_id');
		$this->db->where('student_id', $user_id);
		$query = $this->db->get();

		return $this->results($query);
	}
}
