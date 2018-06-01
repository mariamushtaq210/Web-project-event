<?php
class user_list_controller extends CI_CONTROLLER
{
	
	public function blocked_user_list()
	{
		$this->load->model('user_list_model');
	
		$q=$this->user_list_model->load_blocked_user();
		$data['title']="Blocked Users";
		$this->load->view('template/header',$data);
		$this->load->view("event_pg_view",array("heading"=>"Blocked Users"));
			//$this->load->view('event_pg_view'); 
		foreach ($q->result()as $row)
		{
			
			$data['type']="blocked";
			$data['row']=$row;
			$this->load->view('user_list_view',$data);
		}
	
	
		$this->load->view('template/footer');
	}
	public function unblocked_user_list()
	{
		$this->load->model('user_list_model');
	
		$q=$this->user_list_model->load_unblocked_user();
		$data['title']="Un Blocked Users";
		$this->load->view('template/header',$data);
		$this->load->view("event_pg_view",array("heading"=>"All Users"));
			//$this->load->view('event_pg_view'); 
		foreach ($q->result()as $row)
		{
			
			$data['type']="unblocked";
			$data['row']=$row;
			$this->load->view('user_list_view',$data);
		}
	
	
		$this->load->view('template/footer');
	}
}
?>