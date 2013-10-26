<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_apply extends MY_Model
{	
	public function get_universities()
	{
            $this->db->select('id,name');
            $this->db->from('universities');
            $query = $this->db->get();
            return $this->to_hash_results($query,'id');
	}
        
        public function get_universities_subject() {
            $this->db->select('university_subject.id,university_subject.uni_id,universities.name as uni_name,university_subject.subject_id,subjects.name as subject_name,university_subject.dateof');
            $this->db->from('university_subject');
            $this->db->join('subjects', 'university_subject.subject_id=subjects.id');
            $this->db->join('universities', 'universities.id = university_subject.uni_id', 'left');
            $query = $this->db->get();
            return $this->results($query);
        }
//        public function get($sp_id)
//	{
//		$this->db->select('*');
//		$this->db->from('specialties');
//		$this->db->where('specialty_id', $sp_id);
//		$this->db->limit(1);
//		$query = $this->db->get();
//
//		return $this->results($query);
//	}
}