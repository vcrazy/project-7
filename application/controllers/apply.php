<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Apply extends MY_Controller
{	
	public function index()
	{
        if(!$this->session->userdata('is_logged'))
        {
//            header("Location:/home");
//            exit();
        }
        
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
        
        if (!empty($_POST)) 
        {
            if ( !empty($_POST['data']) )
            {
                $data_array=json_decode($_POST['data'],true);
                if (!empty($data_array))
                {
                    $insert_student_exams=array();
                    foreach($data_array as $single_data_array)
                    {
                        $uni_subject_id=$this->Model_apply->get_university_subject_id($single_data_array);
                        if ( $uni_subject_id['id']>0 )
                        {
                            $user_id=$this->session->userdata('id');
                            if (empty($user_id))
                            {
                                $user_id=1;
                            }
                            if ($this->Model_apply->check_student_exam($user_id,$uni_subject_id['id']) ==0)
                            {
                                var_dump($uni_subject_id['id']);
                                $insert_student_exams[]=array('student_id'=>1,'uni_subject_id'=>$uni_subject_id['id']);
                            }
                        }
                    }

                    if (!empty($insert_student_exams))
                    {
                        $this->Model_apply->save_student_exams($insert_student_exams);
                    }
                }
            }
        }
        
		$this->data['view'] = 'apply/index';
		$this->load_view();
	}
}
