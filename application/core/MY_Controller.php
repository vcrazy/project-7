<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load_data();
	}

	protected function load_data()
	{
		$this->data['controller'] = strtolower($this->router->fetch_class());
	}

	protected function load_view($view_name = 'default_view')
	{
		$this->load->view($view_name, $this->data);
	}
}
