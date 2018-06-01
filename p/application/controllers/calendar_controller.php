<?php
class calendar_controller extends CI_CONTROLLER
{
	function index()
	{
		$this->load->library('calendar');
		echo $this->calendar->generate();
	}
	
}




?>