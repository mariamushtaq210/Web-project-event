<?php
class birthday_event_controller extends CI_CONTROLLER
{
	function index()
	{
		$this->load->view('template/header',array("title"=>"Birthday Event"));
		$this->load->view('birthday_event_view');
		$this->load->view('template/footer');
		
	}
	
}


?>
