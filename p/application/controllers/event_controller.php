
<?php
class event_controller extends CI_CONTROLLER
{
	function index()
	{
		$this->load->model('event_model');
	
		$q=$this->event_model->load_event();
		$this->load->view('template/header',array("title"=>"RECENT EVENTS"));
			$this->load->view('event_pg_view',array("heading"=>"RECENT EVENTS")); 
		foreach ($q->result()as $row)
		{
			$this->load->view('event_view',$row);
		}
	
	
		$this->load->view('template/footer');
		
		
		
	}
	
	
	function event_detail($id)
	{	
		$this->load->model('event_model');
	
		$q=$this->event_model->load_event_by_id($id);
		$this->load->view('template/header',array("title"=>"RECENT EVENTS"));
			$this->load->view('event_pg_view',array("heading"=>"RECENT EVENTS")); 
		foreach ($q->result()as $row)
		{
			$this->load->view('event_detail',$row);
		}
		$this->load->model('comment_model');
		$p=$this->comment_model->show($id);
		foreach ($p->result()as $row)
		{
			$this->load->view('comment_view',$row);
		}
	
	
		$this->load->view('template/footer');
		
	
	
		
	}
	
}




?>