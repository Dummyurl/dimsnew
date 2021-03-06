<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Quiz extends Admin_Controller 
{
	function __construct()
	{	
        $this->load->model('quiz_model');
	}
	public function index()
    {
    	$this->data=array();
    	$this->template->set_layout('frontend/default');
    	$lang=$this->session->get_userdata('Language');
        if($lang['Language']=='en') {
            $emerg_lang='en';
        }else{
            $emerg_lang='nep'; 
        }
        $this->data['category'] = $this->general->get_tbl_data_result('*','quiz_category');
        //echo "<pre>"; print_r($this->data['category']);die;
		$this->template
			->enable_parser(FALSE)
			->build('frontend/quiz_list', $this->data);
    }
    public function play_quiz($slug)
    {
        $this->data=array();
        $this->template->set_layout('frontend/default');
        $lang=$this->session->get_userdata('Language');
        if($lang['Language']=='en') {
            $emerg_lang='en';
        }else{
            $emerg_lang='nep'; 
        }
        $this->data['cat'] = $this->general->get_tbl_data_result('id','quiz_category',array('slug'=>$slug));
        $this->data['category'] = $this->general->get_tbl_data_result('*','quiz',array('cat_id'=>$this->data['cat'][0]['id']));
        //echo "<pre>"; print_r($this->data['category']);die;
        $this->template
            ->enable_parser(FALSE)
            ->build('frontend/quiz', $this->data);
    }
    public function check_status()
    {
        if($this->input->server('REQUEST_METHOD')=='POST')
        {
            $questionid = $this->input->post('nqnid');
            $optionsid = $this->input->post('curn');
            $questions = $this->general->get_tbl_data_result('*','quiz_options', array('id'=>$optionsid,"category_id"=>$questionid));
            $quiz = $this->general->get_tbl_data_result('*','quiz', array("id"=>$questionid));
            //print_r($questions[0]['right_answer']);die;
            if($questions[0]['right_answer'] == "1" || $questions[0]['right_answer'] == "on")
            {
                $template = $quiz[0]['answer'];
                $color = "alert-info";
                print_r(json_encode(array('status'=>'success','result'=>'<div class="alert '.$color.' alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><strong><i class="la la-check-circle la-2x"> </i> </strong> '.$template.'  </div>','message'=>'Record Selected Successfully')));
            exit;
            }else{
                $template = $quiz[0]['wrong_answer'];
                $color = "alert-danger";
                print_r(json_encode(array('status'=>'success','result'=>'<div class="alert '.$color.' alert-dismissible"> <i class="la la-times-circle la-2x"></i>   <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><strong></strong> '.$template.'  </div>','message'=>'Record Selected Successfully')));
            exit;
            }
            
        }else{
            print_r(json_encode(array('status'=>'error','message'=>'Cannot Perform this Operation')));
            exit;
        }
    }
}

