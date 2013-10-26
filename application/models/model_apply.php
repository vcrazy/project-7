<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_apply extends MY_Model
{	    
    public function get_university_subject_id($single_data_array=array()) 
    {
        $this->db->select('id,uni_id,subject_id');
        $this->db->from('university_subject');
        $this->db->where('uni_id', $single_data_array['uni_id']);
        $this->db->where('subject_id',$single_data_array['exam_id']);
        $query = $this->db->get();
        return $this->single_result($query);
    }
    
    public function check_student_exam($student_id=0,$uni_subject_id=0)
    {
        $query = $this->db->get_where('students_exams', array('student_id' => $student_id,'uni_subject_id'=>$uni_subject_id));
        return $query->num_rows();
    }

    
    public function save_student_exams ($insert_student_exams=array())
    {
        $this->db->insert_batch('students_exams', $insert_student_exams);
    }
        
    public function get_universities_subject() 
    {
        $this->db->select('university_subject.id,university_subject.uni_id,universities.name as uni_name,university_subject.subject_id,subjects.name as subject_name,university_subject.dateof');
        $this->db->from('university_subject');
        $this->db->join('subjects', 'university_subject.subject_id=subjects.id');
        $this->db->join('universities', 'universities.id = university_subject.uni_id', 'left');
        $query = $this->db->get();
        return $this->results($query);
    }

	public function get_exam_list($user_id = 1)
	{
		$this->db->select('u.name AS u_name, s.name AS s_name, us.dateof, se.grade');
		$this->db->from('students_exams AS se');
		$this->db->join('university_subject AS us', 'se.uni_subject_id = us.id');
		$this->db->join('universities AS u', 'u.id = us.uni_id');
		$this->db->join('subjects AS s', 's.id = us.subject_id');
		$this->db->where('se.student_id', $user_id);
		$query = $this->db->get();

		return $this->results($query);
	}
}