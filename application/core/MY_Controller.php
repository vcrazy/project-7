<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load_data();

		if($this->data['controller'] != 'home' && !$this->session->userdata('is_logged'))
		{
			header("Location: /home");
			exit;
		}
		else if($this->data['controller'] == 'home' && $this->data['action'] == 'index' && $this->session->userdata('is_logged'))
		{
			header("Location: /home/choose");
			exit;
		}

		$this->data['logged'] = $this->session->userdata('is_logged');

		if($this->session->userdata('is_logged'))
		{
			$email = "vcrazy@abv.bg";
			$default = "http://www.progressoutofpoverty.org/sites/all/themes/orbit_theme/images/no_user.gif";
			$size = 68;
			$avatar = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;

			$this->data['user_names'] = $this->session->userdata('name') . ' ' . $this->session->userdata('surname');
			$this->data['avatar'] = $avatar;
		}
	}

	protected function load_data()
	{
		$this->data['controller'] = strtolower($this->router->fetch_class());
		$this->data['action'] = strtolower($this->router->fetch_method());
	}

	protected function load_view($view_name = 'default_view')
	{
		$this->load->view($view_name, $this->data);
	}
}
