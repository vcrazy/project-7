<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends MY_Controller
{
	private $key = 'hackfmi';

	public function __construct()
	{
		parent::__construct();

		if(!$this->_check_key())
		{
			exit;
		}
	}

	public function wishlist($user_id = FALSE)
	{
		$this->load->model('Model_wishlist');

		$data = $this->Model_wishlist->get_applications($user_id);

		$this->_export($data);
	}

	public function universities()
	{
		$this->load->model('Model_data');

		$data = $this->Model_data->get_universities();

		$this->_export($data);
	}

	public function faculties($university_id = FALSE)
	{
		$this->load->model('Model_data');

		$data = $this->Model_data->get_faculties($university_id);

		$this->_export($data);
	}

	private function _check_key()
	{
		return isset($_GET['key']) && $_GET['key'] === $this->key;
	}

	private function _export($data)
	{
		echo json_encode($data);
	}
}
