<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wishlist extends MY_Controller
{	
	public function index()
	{
		$this->_get_dummy_data();
        
        $this->load->model('Model_wishlist');
        $this->data['unis']=array();
        $this->data['faculties']=array();
        $universities=$this->Model_wishlist->get_universities();
        $faculties=$this->Model_wishlist->get_faculties();
        if( !empty($universities) && (!empty($faculties)) )
        {
            foreach ($universities as $single_university)
            {
                $this->data['unis'][$single_university['id']]=$single_university['name'];
            }
            
            foreach ($faculties as $single_faculty)
            {
                $subjectinfo=array($single_faculty);
                if (!isset($this->data['faculties'][$single_faculty['uni_id']]))
				{
					$this->data['faculties'][$single_faculty['uni_id']]=array();
				}
				if (!isset($this->data['faculties'][$single_faculty['uni_id']][$single_faculty['id']]))
				{
					$this->data['faculties'][$single_faculty['uni_id']][$single_faculty['id']]=$single_faculty['name'];
				}
            }
        }
        
        
		$this->data['view'] = 'wishlist/index';
		$this->load_view();
	}

	private function _get_dummy_data()
	{
		// unis that I have already selected during the exam process

//		$this->data['faculties'] = array(
//			// 1 = uni_id
//			1 => array(
//				// faculty id => Faculty name
//				50 => 'Faculty FMI',
//				51 => 'Faculty 2'
//			)
//		);

		$this->data['specialties'] = array(
			// faculty id
			50 => array(
				// specialty id
				100 => array(
					'name' => 'Spec 1',
					'info' => 'Info 1'
				),
				101 => array(
					'name' => 'Spec 2',
					'info' => 'Info 2'
				)
			),
			51 => array(
				102 => array(
					'name' => 'Spec 3',
					'info' => 'Info 3'
				)
			)
		);
	}
}
