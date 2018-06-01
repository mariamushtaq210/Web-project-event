
<?php
class admin_event_controller extends CI_CONTROLLER
{
	function admin_event_menu()
	{
		$data['title']="ADMIN_EVENTS_MENU";
		$this->load->view('template/header',$data);
		$this->load->view("event_pg_view",array("heading"=>"ADMIN EVENTS MENU"));
		$this->load->view('admin_event_menu_view');
		
		$this->load->view('template/footer');
	
	}
	function accepted_event_list()
	{
		$this->load->model('admin_event_model');
	
		$q=$this->admin_event_model->load_accepted_event();
		$data['title']="ACCEPTED EVENTS";
		$this->load->view('template/header',$data);
		$this->load->view("event_pg_view",array("heading"=>"ACCEPTED EVENTS"));
			//$this->load->view('event_pg_view'); 
		foreach ($q->result()as $row)
		{
			
			$data['type']="accepted";
			$data['row']=$row;
			$this->load->view('admin_event_view',$data);
		}
	
	
		$this->load->view('template/footer');
	
		
		
	}
	
	function pending_event_list()
	{
		$this->load->model('admin_event_model');
	
		$q=$this->admin_event_model->load_pending_event();
		$data['title']="PENDING EVENTS";
		$this->load->view('template/header',$data);
		$this->load->view("event_pg_view",array("heading"=>"PENDING EVENTS"));
			//$this->load->view('event_pg_view'); 
		foreach ($q->result()as $row)
		{
			
			$data['type']="pending";
			$data['row']=$row;
			$this->load->view('admin_event_view',$data);
		}
	
	
		$this->load->view('template/footer');
	
		
		
	}
	
	function rejected_event_list()
	{
		$this->load->model('admin_event_model');
	
		$q=$this->admin_event_model->load_rejected_event();
		$data['title']="REJECTED EVENTS";
		$this->load->view('template/header',$data);
		$this->load->view("event_pg_view",array("heading"=>"REJECTED EVENTS"));
			//$this->load->view('event_pg_view'); 
		foreach ($q->result()as $row)
		{
			
			$data['type']="rejected";
			$data['row']=$row;
			$this->load->view('admin_event_view',$data);
		}
	
	
		$this->load->view('template/footer');
	
		
		
	}
	function admin_menu()
	{
		$this->load->view('template/header',array("title"=>"ADMIN MENU"));
		$this->load->view('admin_menu_view');
		$this->load->view('template/footer');
	}
	
}




?>