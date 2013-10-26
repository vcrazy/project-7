<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Apply extends MY_Controller
{	
	public function index()
	{
		$this->load->model('Model_apply');
		$universities_subjects=$this->Model_apply->get_universities_subject();

		$this->data['unis'] = array();
		$this->data['exams']=array();
		if (!empty($universities_subjects)) 
		{
			foreach ($universities_subjects as $single_line) 
			{
				$this->data['unis'][$single_line['uni_id']]=$single_line['uni_name'];
				$subjectinfo=array('name'=>$single_line['subject_name'],'info'=>'alabla data '.$single_line['dateof']);
				if (!isset($this->data['exams'][$single_line['uni_id']]))
				{
					$this->data['exams'][$single_line['uni_id']]=array();
				}
				if (!isset($this->data['exams'][$single_line['uni_id']][$single_line['subject_id']]))
				{
					$this->data['exams'][$single_line['uni_id']][$single_line['subject_id']]=array();
				}

				$this->data['exams'][$single_line['uni_id']][$single_line['subject_id']]=$subjectinfo;
			}
		}
		$this->data['view'] = 'apply/index';
		$this->load_view();
	}
}
