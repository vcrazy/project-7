<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wishlist extends MY_Controller
{	
	public function index()
	{
		$this->_get_dummy_data();

		$this->data['view'] = 'wishlist/index';
		$this->load_view();
	}

	private function _get_dummy_data()
	{
		// unis that I have already selected during the exam process
		$this->data['unis'] = array(
			1 => 'Sofia Uni'
		);

		$this->data['faculties'] = array(
			// 1 = uni_id
			1 => array(
				// faculty id => Faculty name
				50 => 'Faculty FMI',
				51 => 'Faculty 2'
			)
		);

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
