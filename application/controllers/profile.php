<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends MY_Controller
{	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('Model_profile');
		$this->load->model('Model_exams');
	}

	public function index()
	{
		$this->data['profile'] = $this->Model_profile->get_info();
		$this->data['exams'] = $this->Model_exams->get_exams();
		$this->data['standing'] = $this->Model_profile->get_standing();

		$this->data['view'] = 'profile/index';
		$this->load_view();
	}
}
