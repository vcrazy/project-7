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
		$personal_info = $this->Model_profile->get_info();
//		$exams_info = $this->Model_exams->get_exams();

		var_dump($personal_info);
	}
}
