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
        
        if (!empty($_POST))
        {
            if ( !empty($_POST['data']) )
            {
                $data_array=json_decode($_POST['data'],true);
                if (!empty($data_array))
                {
                    $insert_student_wishlist=array();
                    foreach($data_array as $single_data_array)
                    {
                        $user_id=$this->session->userdata('id');
                        if (empty($user_id))
                        {
                            $user_id=1;
                        }
                        if ($this->Model_wishlist->check_student_wishlist($user_id,$single_data_array['specialty_id'])==0)
                        {
                            $insert_student_wishlist[]=array('student_id'=>$user_id,'specialty_id'=>$single_data_array['specialty_id']);
                        }
                    }

                    if (!empty($insert_student_wishlist))
                    {
                        $this->Model_wishlist->save_student_wishlist($insert_student_wishlist);
                    }
                    
                    header("Location: /wishlist/all");
                    exit();
                }
            }
        }
        
		$this->data['view'] = 'wishlist/index';
		$this->load_view();
	}

	public function all()
	{
		$this->load->model('Model_wishlist');
		$applications = $this->Model_wishlist->get_applications();
        

		$this->data['applications'] = $applications;
        $this->data['suggestions']=array();
        $this->data['suggestions'][]=array('s_name'=>'Софтуерно инженерство',
            'u_name'=>'Софийски университет "Св. Климент Охридски"',
            'f_name'=>'Факултет математика и информатика','total'=>50);
        
        $this->data['suggestions'][]=array('s_name'=>'Информатика',
            'u_name'=>'Софийски университет "Св. Климент Охридски"',
            'f_name'=>'Факултет математика и информатика','total'=>50);

		$this->data['view'] = 'wishlist/all';
		$this->load_view();
	}
}
