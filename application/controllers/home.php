<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller
{
        protected $data;

        public function __construct()
        {
                parent::__construct();

                $this->load->model('Model_home');//???
        }
        
        public function index() 
        {
            $this->data['content_title'] = 'Начална страница';
            $this->data['view'] = 'home/index';
            $this->getIndexData();
            $this->load_view();
        }
        
        public function getIndexData(){
            if (!empty($_POST)) 
            {
                $user_data=$this->Model_home->load_user_info($user_id=1);
                if(!empty($user_data))
                {
                    $user_data['is_logged']=1;
                    $this->session->set_userdata($user_data);
                    var_dump($user_data);
                }
                //redirect to profile.....
                header("Location:/apply");
                exit();
            }
	}
}