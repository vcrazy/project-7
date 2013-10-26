<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Apply extends MY_Controller
{	
	public function index()
	{
//          array {
//            'unis'->array('id'=>'SU','5'=>'..'),
//            'exams'->array('id_unis'=>array('izpit_id'=>array('name'=>'name','info'=>'...') ))
//            }
//            apply
//            
//              
                $this->load->model('Model_apply');
                $this->Model_apply->get_universities();
		$this->data['view'] = 'home/index';
		$this->load_view();
	}
}