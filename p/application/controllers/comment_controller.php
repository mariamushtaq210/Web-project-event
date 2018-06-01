<?php
class comment_controller extends CI_CONTROLLER
{
	function index()
	{
		$this->load->model('comment_model');
		$this->comment_model->insert();
		redirect($this->config->item('base_url')."index.php/event_controller/event_detail/".$this->input->post('e_id'));
	}
	function show_comments($e_id)
	{
		$this->load->view('template/header',array("title"=>"Recent Events"));
		$this->load->model('comment_model');
		$p=$this->comment_model->show($e_id);
		$data['asd']=$p;
		$this->load->view("event_detail",$data);
		$this->load->view('template/footer');
		
	}
}




?>