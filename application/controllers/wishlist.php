<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wishlist extends MY_Controller
{	
	public function index()
	{   
        $this->load->model('Model_wishlist');
        $this->data['unis']=array();
        $this->data['faculties']=array();
        $universities=$this->Model_wishlist->get_universities();
        $faculties=$this->Model_wishlist->get_faculties();
        $specialties=$this->Model_wishlist->get_specialties();
        if( !empty($universities) && (!empty($faculties) && (!empty($specialties))) )
        {
            foreach ($universities as $single_university)
            {
                $this->data['unis'][$single_university['id']]=$single_university['name'];
            }
            
            foreach ($faculties as $single_faculty)
            {
                if (!isset($this->data['faculties'][$single_faculty['uni_id']]))
				{
					$this->data['faculties'][$single_faculty['uni_id']]=array();
				}
				if (!isset($this->data['faculties'][$single_faculty['uni_id']][$single_faculty['id']]))
				{
					$this->data['faculties'][$single_faculty['uni_id']][$single_faculty['id']]=$single_faculty['name'];
				}
            }
            
            foreach ($specialties as $single_specialty)
            {
                $specialty=array('name'=>$single_specialty['name'],'info'=>$single_specialty['info']);
                if (!isset($this->data['specialties'][$single_specialty['faculty_id']]))
				{
					$this->data['specialties'][$single_specialty['faculty_id']]=array();
				}
                
                $this->data['specialties'][$single_specialty['faculty_id']][$single_specialty['id']]=$specialty;
            }
        }
        
        
		$this->data['view'] = 'wishlist/index';
		$this->load_view();
	}
}
