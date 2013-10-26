<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Apply extends MY_Controller
{	
	public function index()
	{
//          array {
//            'unis'->array('id'=>'SU','5'=>'..'),
//            'exams'->array(
//                          'id_unis'=>array(
//                                              'izpit_id'=>array(
//                                                                 'name'=>'name','info'=>'...') ))
//            }
//            apply
//            
//              
		$this->_set_dummy_data();

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

	private function _set_dummy_data()
	{
		// dummy data
//		$this->data['unis'] = array(
//			1 => 'Sofia University',
//			2 => 'Other University',
//			10 => 'Another University'
//		);

//		$this->data['exams'] = array(
//			uni_id => array(
//				subject_id => array(
//					'name' => 'Math 1',
//					'info' => 'Info 1',
//				),
//				51 => array(
//					'name' => 'Math 2',
//					'info' => 'Info 2'
//				),
//				101 => array(
//					'name' => 'Bg lang',
//					'info' => 'Bg info'
//				)
//			),
//			2 => array(
//				52 => array(
//					'name' => 'Math 3',
//					'info' => 'Info 3'
//				),
//				53 => array(
//					'name' => 'Math 4',
//					'info' => 'Info 4'
//				)
//			),
//			10 => array(
//				54 => array(
//					'name' => 'Math 3',
//					'info' => 'Info 3'
//				)
//			)
//		);
		// end of dummy data
	}
}
